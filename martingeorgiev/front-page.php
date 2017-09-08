<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Martin Georgiev</title>
  <meta name="description" content="Martin Georgiev Blog" />
  <meta name="keywords" content="martin, georgiev, blog, creative, inspiration, technology, science" />
  <meta name="author" content="Martin Georgiev" />

  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/demo.css" />


  <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'>
  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
  <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <header style="text-align:center;">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo4.png" id="logo">
  </header>
<div class="container demo-1">

       <div class="morph-button morph-button-overlay morph-button-fixed morph-button2" id="blog">
            <a id="blog-button" href="#blog-section">Blog</a>
      </div><!-- morph-button -->
      <div class="morph-button morph-button-overlay morph-button-fixed morph-button1" id="about">
              <button type="button">About</button>
              <div class="morph-content">
                  <div>
                      <div class="content-style-overlay">
                          <span class="icon icon-close">Close the overlay</span>
                          <h2>About Me</h2>
                          <p>Hi</p>
                          <p>My name is <span style="font-weight: 500;">Martin</span> and this is my little corner of the web!</p>
                          <p>I am a Computer Science student passionate about business, technology, reading and running.
                             I love learning new things, sharing my thoughts and discussing big ideas. I try to get involved
                             with interesting projects that would benefit our world.</p>
                          <p>A big chunk of this blog was developed more than two years ago but life got in my way
                            and I was lacking the time (or the courage) to publish it and get involved. Article ideas I have in mind include
                            technology and startup innovations, my own project developments, book reviews and self improvement tips.
                            </p>
                          <p> Hope you have a great time reading some of my thoughts and if you want to get in touch just
                            drop me a message at <span class="rmsol">em.gnitram@em</span></p>

                          <p>If you want to know more about me you can check out my <a target="_blank" style="font-weight:500; color:#333" href="<?php echo get_template_directory_uri(); ?>/files/resume.pdf">Resume</a></p>
                          <p>
                            Martin
                          </p>

                      </div>
                  </div>
              </div>
      </div><!-- morph-button -->
      <div id="morphsearch" class="morphsearch">

          <form class="morphsearch-form">
              <input class="morphsearch-input" type="search" placeholder="Search..."/>
              <button class="morphsearch-submit" type="submit">Search</button>
          </form>
          <div class="morphsearch-content">
            <h1> UNDER CONSTRUCTION </h1>
          </div><!-- /morphsearch-content -->
          <span class="morphsearch-close"></span>
      </div><!-- /morphsearch -->

      <div class="overlay"></div>


<div class="content">
          <div id="large-header" class="large-header">
              <canvas id="demo-canvas"></canvas>
              <h1 class="main-title">MARTIN <span class="thin">GEORGIEV</span></h1>
          </div>

      </div>
      <!-- Related demos -->
      <section style="padding-bottom:0;" id="blog-section">

      <h1  style="font-size: 3em; color: #383a3c;margin-top: 0.84em;"> BLOG</h1>
        <div class="grid">
          <?php
            if(have_posts()):
              while(have_posts()): the_post();
           ?>
                <figure class="effect-oscar">
                  <?php if ( has_post_thumbnail() ) {
                      	the_post_thumbnail(null, array('id' => 'thumbnail-size' ));
                      }else{
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/9.jpg" alt="img09"/>"
                    <?php
                      }
                  ?>
                  <figcaption>
                      <!-- <h2>Warm <span>Oscar</span></h2> -->
                      <h2><span><?php echo the_title(); ?></span></h2>
                      <p><?php echo excerpt(40); ?></p>
                      <a href="<?php the_permalink(); ?>">View more</a>
                  </figcaption>
                </figure>
            <?php endwhile;
            endif; ?>
          </div>
              <div class="progress-button" style="clear:both;margin-top:30px;">
                <!--  <button><span>See all</span></button> -->
                  <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                  <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
                  <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>
              </div><!-- /progress-button -->
      </section>

        <section class="grid" style="clear: both; padding:0;border-top: 1px solid #bdc3c7; margin-top:40px;">

            <div style="height:100px; line-height:100px; text-align:center; ">Proudly produced by Martn Georgiev. All Rights Reserved.</div>
        </section>
</div><!-- /container -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/demo-2.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/uiMorphingButton_fixed.js"></script>
  <script>
  var isScrolled = false;
      (function() {
          var docElem = window.document.documentElement, didScroll, scrollPosition;

          // trick to prevent scrolling when opening/closing button
          function noScrollFn() {
              window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
          }

          function noScroll() {
              window.removeEventListener( 'scroll', scrollHandler );
              window.addEventListener( 'scroll', noScrollFn );
          }

          function scrollFn() {
              window.addEventListener( 'scroll', scrollHandler );
          }

          function canScroll() {
              window.removeEventListener( 'scroll', noScrollFn );
              scrollFn();
          }

          function scrollHandler() {
              if( !didScroll ) {
                  didScroll = true;
                  setTimeout( function() { scrollPage(); }, 60 );
              }
          };

          function scrollPage() {
              scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
              didScroll = false;
          };

          scrollFn();

          var el = document.querySelector( '.morph-button' );

          new UIMorphingButton( el, {
              closeEl : '.icon-close',
              onBeforeOpen : function() {
                  // don't allow to scroll
                  noScroll();
              },
              onAfterOpen : function() {
                  // can scroll again
                  canScroll();
                  // add class "noscroll" to body
                  classie.addClass( document.body, 'noscroll' );
                  // add scroll class to main el
                  classie.addClass( el, 'scroll' );
              },
              onBeforeClose : function() {
                  // remove class "noscroll" to body
                  classie.removeClass( document.body, 'noscroll' );
                  // remove scroll class from main el
                  classie.removeClass( el, 'scroll' );
                  // don't allow to scroll
                  noScroll();
              },
              onAfterClose : function() {
                  // can scroll again
                  canScroll();
              }
          } );
      })();
  </script>
  <script>
      (function() {
          var docElem = window.document.documentElement, didScroll, scrollPosition;

          // trick to prevent scrolling when opening/closing button
          function noScrollFn() {
              window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
          }

          function noScroll() {
              window.removeEventListener( 'scroll', scrollHandler );
              window.addEventListener( 'scroll', noScrollFn );
          }

          function scrollFn() {
              window.addEventListener( 'scroll', scrollHandler );
          }

          function canScroll() {
              window.removeEventListener( 'scroll', noScrollFn );
              scrollFn();
          }

          function scrollHandler() {
              if( !didScroll ) {
                  didScroll = true;
                  setTimeout( function() { scrollPage(); }, 60 );
              }
          };

          function scrollPage() {
              scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
              didScroll = false;
          };

          scrollFn();

          var el = document.querySelector( '.morph-button1' );

          new UIMorphingButton( el, {
              closeEl : '.icon-close',
              onBeforeOpen : function() {
                  // don't allow to scroll
                  noScroll();
              },
              onAfterOpen : function() {
                  // can scroll again
                  canScroll();
                  // add class "noscroll" to body
                  classie.addClass( document.body, 'noscroll' );
                  // add scroll class to main el
                  classie.addClass( el, 'scroll' );
              },
              onBeforeClose : function() {
                  // remove class "noscroll" to body
                  classie.removeClass( document.body, 'noscroll' );
                  // remove scroll class from main el
                  classie.removeClass( el, 'scroll' );
                  // don't allow to scroll
                  noScroll();
              },
              onAfterClose : function() {
                  // can scroll again
                  canScroll();
              }
          } );
      })();
  </script>
  <script>
      (function() {
          var morphSearch = document.getElementById( 'morphsearch' ),
              input = morphSearch.querySelector( 'input.morphsearch-input' ),
              ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
              isOpen = isAnimating = false,
              // show/hide search area
              toggleSearch = function(evt) {
                  // return if open and the input gets focused
                  if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

                  var offsets = morphsearch.getBoundingClientRect();
                  if( isOpen ) {

                      classie.remove( morphSearch, 'open' );

                      // trick to hide input text once the search overlay closes
                      // todo: hardcoded times, should be done after transition ends
                      if( input.value !== '' ) {
                          setTimeout(function() {
                             classie.addClass( document.body, 'noscroll' );
                              setTimeout(function() {
                                  classie.remove( morphSearch, 'hideInput' );
                                  input.value = '';
                              }, 300 );
                          }, 500);
                      }

                      input.blur();
$('#morphsearch').removeClass('noscroll-search');
                      $(document.body).removeClass('noscroll');

                  }
                  else {
                      classie.add( morphSearch, 'open' );
                      $(document.body).addClass('noscroll');
                      setTimeout(
                        function()
                        {
                           $('#morphsearch').addClass('noscroll-search');
                        }, 500);




                  }
                  isOpen = !isOpen;
              };

          // events
          input.addEventListener( 'focus', toggleSearch );
          ctrlClose.addEventListener( 'click', toggleSearch );
          // esc key closes search overlay
          // keyboard navigation events
          document.addEventListener( 'keydown', function( ev ) {
              var keyCode = ev.keyCode || ev.which;
              if( keyCode === 27 && isOpen ) {
                  toggleSearch(ev);
              }
          } );


          /***** for demo purposes only: don't allow to submit the form *****/
          morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
      })();
  </script>
  <script type="text/javascript">
      $('#morphsearch').addClass('morph-trans');
      $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
          isScrolled = true;
         $('header').addClass("sticky");
         $('#morphsearch').addClass("morph-down");
         $('button').addClass("button-down");
         $('#blog-button').addClass("button-down");
        $('.morph-button').addClass("morph-button-down");
      }
      else{
          isScrolled = false;
         $('header').removeClass("sticky");
          $('#morphsearch').removeClass("morph-down");
          $('button').removeClass("button-down");
          $('#blog-button').removeClass("button-down");
           $('.morph-button').removeClass("morph-button-down");

           $('#morphsearch').removeClass("morph-trans");
           setTimeout(
                        function()
                        {
                           $('#morphsearch').addClass('morph-trans');
                        }, 1);
      }
      });
  </script>

  <script>
  $('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
  });
  </script>
</body>
<html>
