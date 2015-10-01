<?php
/*
* Template Name: Galleri
* Description: A Page Template showing an image galleri
*/

get_header();

?>

<div class="row pageheader">
	<div class="large-12 columns pageheadercontent">
	</div>
</div>

<div class="moveup">

	<div class="row">
		<div class="large-12 columns">
			<div class="socialsharebar">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">
			<div class="pagetitle">
				<h1>Galleri</h1>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="large-12 columns wrap">

			<div id="masonrygrid" height="auto">

			</div>
			<!-- Root element of PhotoSwipe. Must have class pswp. -->
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

			    <!-- Background of PhotoSwipe.
			         It's a separate element, as animating opacity is faster than rgba(). -->
			    <div class="pswp__bg"></div>

			    <!-- Slides wrapper with overflow:hidden. -->
			    <div class="pswp__scroll-wrap">

			        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			        <div class="pswp__container">
			            <!-- don't modify these 3 pswp__item elements, data is added later on -->
			            <div class="pswp__item"></div>
			            <div class="pswp__item"></div>
			            <div class="pswp__item"></div>
			        </div>

			        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			        <div class="pswp__ui pswp__ui--hidden">

			            <div class="pswp__top-bar">

			                <!--  Controls are self-explanatory. Order can be changed. -->

			                <div class="pswp__counter"></div>

			                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

			                <button class="pswp__button pswp__button--share" title="Share"></button>

			                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

			                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

			                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
			                <!-- element will get class pswp__preloader--active when preloader is running -->
			                <div class="pswp__preloader">
			                    <div class="pswp__preloader__icn">
			                      <div class="pswp__preloader__cut">
			                        <div class="pswp__preloader__donut"></div>
			                      </div>
			                    </div>
			                </div>
			            </div>

			            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
			                <div class="pswp__share-tooltip"></div>
			            </div>

			            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			            </button>

			            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			            </button>

			            <div class="pswp__caption">
			                <div class="pswp__caption__center"></div>
			            </div>

			          </div>

			        </div>

			</div>
		</div>
	</div>

</div><!-- end moveup -->

<svg id="stamp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
	<path d="M0 0 Q 2.5 40 5 0
	Q 7.5 40 10 0
	Q 12.5 40 15 0
	Q 17.5 40 20 0
	Q 22.5 40 25 0
	Q 27.5 40 30 0
	Q 32.5 40 35 0
	Q 37.5 40 40 0
	Q 42.5 40 45 0
	Q 47.5 40 50 0
	Q 52.5 40 55 0
	Q 57.5 40 60 0
	Q 62.5 40 65 0
	Q 67.5 40 70 0
	Q 72.5 40 75 0
	Q 77.5 40 80 0
	Q 82.5 40 85 0
	Q 87.5 40 90 0
	Q 92.5 40 95 0
	Q 97.5 40 100 0 Z">
</path>
</svg>

<script>

var galleryItems = 0;
var items = [];

// triggers when user clicks on thumbnail
var onThumbnailsClick = function(e) {
	e = e || window.event;
	e.preventDefault ? e.preventDefault() : e.returnValue = false;

	var eTarget = e.target || e.srcElement;

	var index = parseInt(jQuery(eTarget).data('index'));

		if(index >= 0) {
				// open PhotoSwipe if valid index found
				openPhotoSwipe( index -1 );
		}
		return false;
};

// parse picture index and gallery index from URL (#&pid=1&gid=2)
var photoswipeParseHash = function() {
		var hash = window.location.hash.substring(1),
		params = {};

		if(hash.length < 5) {
				return params;
		}

		var vars = hash.split('&');
		for (var i = 0; i < vars.length; i++) {
				if(!vars[i]) {
						continue;
				}
				var pair = vars[i].split('=');
				if(pair.length < 2) {
						continue;
				}
				params[pair[0]] = pair[1];
		}

		return params;
};

var openPhotoSwipe = function(index, disableAnimation, fromURL) {
		var pswpElement = document.querySelectorAll('.pswp')[0],
				gallery,
				options={};

		// PhotoSwipe opened from URL
		if(fromURL) {
				if(options.galleryPIDs) {
						// parse real index when custom PIDs are used
						// http://photoswipe.com/documentation/faq.html#custom-pid-in-url
						for(var j = 0; j < items.length; j++) {
								if(items[j].pid == index) {
										options.index = j;
										break;
								}
						}
				} else {
						// in URL indexes start from 1
						options.index = parseInt(index, 10) - 1;
				}
		} else {
				options.index = parseInt(index, 10);
		}

		// exit if index not found
		if( isNaN(options.index) ) {
				return;
		}

		if(disableAnimation) {
				options.showAnimationDuration = 0;
		}

		// Pass data to PhotoSwipe and initialize it
		gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
		gallery.init();
};

function areWeDoneYet(){
	if(items.length == galleryItems)
	{
		// Parse URL and open gallery if it contains #&pid=3&gid=1
		var hashData = photoswipeParseHash();
		if(hashData.pid) {
				openPhotoSwipe( hashData.pid , true, true );
		}

		jQuery('.galleryImage').click(onThumbnailsClick);
		jQuery("#masonrygrid").masonry({
			itemSelector: '.galleryImage'
		});
	}
}

jQuery.getJSON('https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&photoset_id=72157659242474256&user_id=134802113%40N04&format=json&nojsoncallback=1&api_key=' + window.flickrApi, function(data){
	galleryItems = data.photoset.photo.length;
	jQuery.each(data.photoset.photo, function(index, item){
		jQuery.getJSON('https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&photo_id='+item.id+'&format=json&nojsoncallback=1&api_key=' + window.flickrApi, function(dataPicture){
			if(dataPicture.stat="ok")
			{
				var originalSize = dataPicture.sizes.size.filter(function(obj){
					return obj.label == "Original";
				})[0];

				items.push({
					src: originalSize.source,
					title: item.title,
					w:originalSize.width,
					h:originalSize.height
				});

				var mediumSize = dataPicture.sizes.size.filter(function(obj){
					return obj.label == "Small";
				})[0];

				jQuery('#masonrygrid').append('<div class="galleryImage"><img title="'+item.title+'" data-index="'+items.length+'" src="'+mediumSize.source+'"></div>');

			}else{
				items.push({});
			}
			areWeDoneYet(items);
		});
	});

});



</script>

<?php get_footer(); ?>
