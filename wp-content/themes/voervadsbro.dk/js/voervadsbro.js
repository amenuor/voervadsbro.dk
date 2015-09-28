//Init foundation
jQuery(document).foundation();

//Init vegas
jQuery.getJSON('https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&photoset_id=72157656886908494&user_id=134802113%40N04&format=json&nojsoncallback=1&api_key=' + window.flickrApi, function(data){
  var slidesFromFLickr = [];
  jQuery.each(data.photoset.photo, function(index, item){
    var photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_b.jpg'
    slidesFromFLickr.push({src:photoURL});
  });
  var pageheader = jQuery('.pageheader');
  if (pageheader.length ) {
    pageheader.vegas({
      slides:slidesFromFLickr
    });
  }
});
//Main BG: http://tympanus.net/codrops/2014/05/22/inspiration-for-article-intro-effects/
(function() {

  // detect if IE : from http://stackoverflow.com/a/16657946
  var ie = (function(){
    var undef,rv = -1; // Return value assumes failure.
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    var trident = ua.indexOf('Trident/');

    if (msie > 0) {
      // IE 10 or older => return version number
      rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    } else if (trident > 0) {
      // IE 11 (or newer) => return version number
      var rvNum = ua.indexOf('rv:');
      rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
    }

    return ((rv > -1) ? rv : undef);
  }());


  // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
  // left: 37, up: 38, right: 39, down: 40,
  // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
  var keys = [32, 37, 38, 39, 40], wheelIter = 0;

  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
    e.preventDefault();
    e.returnValue = false;
  }

  function keydown(e) {
    for (var i = keys.length; i--;) {
      if (e.keyCode === keys[i]) {
        preventDefault(e);
        return;
      }
    }
  }

  function touchmove(e) {
    preventDefault(e);
  }

  function wheel(e) {
    // for IE
    //if( ie ) {
      //preventDefault(e);
    //}
  }

  function disable_scroll() {
    window.onmousewheel = document.onmousewheel = wheel;
    document.onkeydown = keydown;
    document.body.ontouchmove = touchmove;
  }

  function enable_scroll() {
    window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
  }

  var docElem = window.document.documentElement,
    scrollVal,
    isRevealed,
    noscroll,
    isAnimating,
    container = document.getElementById( 'container' ),
    topnav = document.getElementById( 'top_nav' ),
    trigger = container.querySelector( 'div.trigger' );

  function scrollY() {
    return window.pageYOffset || docElem.scrollTop;
  }

  function scrollPage() {
    scrollVal = scrollY();

    if( classie.has( container, 'notrans' ) ) {
      classie.remove( container, 'notrans' );
      return false;
    }

    if( isAnimating ) {
      return false;
    }

    if( scrollVal <= 0 && isRevealed ) {
      toggle(0);
    }
    else if( scrollVal > 0 && !isRevealed ){
      toggle(1);
    }
  }

  function toggle( reveal ) {
    isAnimating = true;

    if( reveal ) {
      classie.add( container, 'modify' );
      classie.remove( topnav, 'hide' );
    }
    else {
      noscroll = true;
      disable_scroll();
      classie.remove( container, 'modify' );
      if(trigger)
        classie.add( topnav, 'hide' );
    }

    // simulating the end of the transition:
    setTimeout( function() {
      isRevealed = !isRevealed;
      isAnimating = false;
      if( reveal ) {
        noscroll = false;
        enable_scroll();
      }
    }, 600 );
  }

  // refreshing the page...
  var pageScroll = scrollY();
  noscroll = pageScroll === 0;

  disable_scroll();

  if( pageScroll ) {
    isRevealed = true;
    classie.add( container, 'notrans' );
    classie.add( container, 'modify' );
  }

  window.addEventListener( 'scroll', scrollPage );
  if(trigger)
    trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
  else
    classie.remove( topnav, 'hide' );

    //Menu

    var bodyEl = document.body,
  		content = document.querySelector( '.container' ),
  		openbtn = document.getElementById( 'open-button' ),
  		closebtn = document.getElementById( 'close-button' ),
  		isOpen = false;

  	function init() {
  		initEvents();
  	}

  	function initEvents() {
  		openbtn.addEventListener( 'click', toggleMenu );
  		if( closebtn ) {
  			closebtn.addEventListener( 'click', toggleMenu );
  		}

  		// close the menu element if the target it´s not the menu element or one of its descendants..
  		content.addEventListener( 'click', function(ev) {
  			var target = ev.target;
  			if( isOpen && target !== openbtn ) {
  				toggleMenu();
  			}
  		} );
  	}

  	function toggleMenu() {
  		if( isOpen ) {
  			classie.remove( bodyEl, 'show-menu' );
  		}
  		else {
  			classie.add( bodyEl, 'show-menu' );
  		}
  		isOpen = !isOpen;
  	}

  	init();
})();
