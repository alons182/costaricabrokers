;(function($){

  var btnMenu = $('#btn-menu'),
      menu = $('.header__menu');
     
      // CUSTOM FORM ELEMENTS
     // $('input[type=radio], input[type=checkbox],input[type=number], select').uniform();
    
      new WOW().init();
      
       btnMenu.on('click', function(){
            menu.toggle();
           
        });
      
      $('#menu-item-520 a').magnificPopup({ // contact us
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
      $('.call__btn').magnificPopup({ // contact us
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
  /*$('.btn-renta-car').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });
  $('.budget-logo').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
            beforeOpen: function() {

                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-open');
            },
            beforeClose: function() {

               
                $('body').removeClass('mfp-open');
            }

        }

       
    });*/
   $('.gallery a').magnificPopup({

          type:'image',
          gallery:{
            enabled:true
          },
          mainClass: 'mfp-with-zoom', // this class is for CSS animation below

          zoom: {
              enabled: true, // By default it's false, so don't forget to enable it

              duration: 300, // duration of the effect, in milliseconds
              easing: 'ease-in-out', // CSS transition easing function

              // The "opener" function should return the element from which popup will be zoomed in
              // and to which popup will be scaled down
              // By defailt it looks for an image tag:
              opener: function(openerElement) {
                  // openerElement is the element on which popup was initialized, in this case its <a> tag
                  // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                  return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
          }
      });
      $( '.gallery' ).cycle({
        speed: 600,
        slides: '.gallery-item',
        pager: '.cycle-pager',
        next: '.cycle-next',
        prev: '.cycle-prev'
      });
      menu.find(".menu-item-has-children").hoverIntent({
          over: function() {

                $(this).find(">.sub-menu").slideDown(200 );
                
              },
          out:  function() {
                
                $(this).find(">.sub-menu").slideUp(200);
               
              },
          timeout: 200

           });
      /*menuContainer.hoverIntent({
        over: function() {
              menu.slideDown(200);
            },
        out:  function() {
              menu.slideUp(200);
            }
       // timeout: 50

      });*/

    // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function(e) {
        var href = $.attr(this, 'href');
        if (typeof($(href)) != 'undefined' && $(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }

            if (anchor.length > 0) {
                console.log($(anchor).offset().top);
                console.log(anchor);
                $root.animate({
                    scrollTop: $(anchor).offset().top-80
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }
    });
      
      
      

    //$(".chosen-select").chosen();
    
    //SCROLL WINDOW FUNCTIONALITY

    $(window).scroll(function () {
          if ($(this).scrollTop() > 84) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });

    /*

    $(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        if(getWindowWidth() > 1023){
          $(".main__featured").mCustomScrollbar();
        }
        console.log($(".main__featured__top img").height()-68)
        if($(".main__featured__top img").height()-68 < 400) 
            $('.main__featured__top').height( $(".main__featured__top img").height()-68  ) ;
        else
            $('.main__featured__top').height(400);
          
        if($(".main__banner img").height() < $(".main__banner").height())
        {

          $('.main__banner').height($(".main__banner img").height());
          $('.main__featured').height($(".main__banner img").height());
        }
        else
        {
          $('.main__banner').height(getWindowHeight());
        
          $('.main__featured').height(getWindowHeight());
        } 
          
      

     }*/






})(jQuery);


function getScrollerWidth() {
  var scr = null;
  var inn = null;
  var wNoScroll = 0;
  var wScroll = 0;

  // Outer scrolling div
  scr = document.createElement('div');
  scr.style.position = 'absolute';
  scr.style.top = '-1000px';
  scr.style.left = '-1000px';
  scr.style.width = '100px';
  scr.style.height = '50px';
  // Start with no scrollbar
  scr.style.overflow = 'hidden';

  // Inner content div
  inn = document.createElement('div');
  inn.style.width = '100%';
  inn.style.height = '200px';

  // Put the inner div in the scrolling div
  scr.appendChild(inn);
  // Append the scrolling div to the doc
  document.body.appendChild(scr);

  // Width of the inner div sans scrollbar
  wNoScroll = inn.offsetWidth;
  // Add the scrollbar
  scr.style.overflow = 'auto';
  // Width of the inner div width scrollbar
  wScroll = inn.offsetWidth;

  // Remove the scrolling div from the doc
  document.body.removeChild(
    document.body.lastChild);

  // Pixel width of the scroller
  return (wNoScroll - wScroll);
}

function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}

