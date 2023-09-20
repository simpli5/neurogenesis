<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    
    <meta name="application-name" content="{{app-name}}" />
		<meta name="author" content="{{app-author}}" />
		<meta name="description" content="{{app-description}}" />
		<meta name="keywords" content="{{app-keywords}}" />
<!--
    <base href="/" />
-->
    <meta name="format-detection" content="telephone=yes" />
    
    <title>{{app-name}}</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes" />
		<meta name="application-name" content="{{app-name}}" />
    <link rel="icon" sizes="192x192" href="assets/imgs/icons/android-desktop.png" />
		<link rel="icon" sizes="all" href="assets/imgs/icons/neurogenesis_monogram.svg" type="image/svg+xml" />

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="{{app-name}}" />
    <link rel="apple-touch-icon-precomposed" href="assets/imgs/icons/ios-desktop.png" />
    <link rel="apple-touch-icon-precomposed" sizes="all" href="assets/imgs/icons/neurogenesis_monogram.svg" type="image/svg+xml" />

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="assets/imgs/icons/ms-touch-icon-144x144-precomposed.png" />
    <meta name="msapplication-TileImage" sizes="all" href="assets/imgs/icons/neurogenesis_monogram.svg" type="image/svg+xml" />
    <meta name="msapplication-TileColor" content="#3372DF" />

    <link rel="shortcut icon" href="assets/imgs/icons/favicon.png" />
    <link rel="shortcut icon" sizes="all" href="assets/imgs/icons/neurogenesis_monogram.svg" type="image/svg+xml" />

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Prefetch DNS for external assets -->
		 <link rel="dns-prefetch" href="//fonts.googleapis.com" />
		 <link rel="dns-prefetch" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		 <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />

     <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- MaterialDesign-Webfont from http://materialdesignicons.com -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Material Design Lite CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material-grid.min.css" integrity="sha512-VJeLA+7kmiV9FLqexXznK9XO8Y6+HokGVyO8Fs3cKttg0mYDrCh+wj5YAbdT9nWiHUyruCxQM9wlBF9heHPhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.css" integrity="sha512-jEuZ7UJIkLuNJYX1ONC+vhYwf0uYbqbd3IoHO8bHRzl8mpB5aj1wLtjxzm5F7fzuqpNQvP1FZXYtgv6kWhVKvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.blue-pink.min.css" integrity="sha512-JBe4vp/+V1fnG5PRPxipjoPRV9sorIpKWWexHPWS88bvHiTDcq7PVPc+xIqN4P1H95ZFImAsJvVIY+gDzF+R3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.js" integrity="sha512-mPYFRGkgrXvIQo9eMKjv5vuy73j7kXXelllj3W49nVCKarBVOUxNai2dnqVIp8QnnVS7AKHwdFyZSVibSqWtkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Swiper Slider CSS and JS files CDNs  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.css" integrity="sha512-EDXaYrpumQKF+Ic8nuEsgJWBwMOhgwWvNINclFu91nx5VR4MeZ5xlUvyRaYQJTMImwbXSeDjtZMtTs8EB65Z0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js" integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- jQuery JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- App Specific CSS' -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/app-rox__navigation--mdl.css" />

    <style>
    #view-source,#ctas {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="app-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php include('app_header.inc') ?>
      <?php include('app_drawer.inc') ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <?php include('app_homepage_slider.inc') ?>
        <div class="mdl-grid app-content">
		<!--
          <div class="app-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="app-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan font-size="0.2" dy="-0.07">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="app-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="app-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="app-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
          </div>
          <div class="app-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="app-graph">
              <use xlink:href="#chart" />
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="app-graph">
              <use xlink:href="#chart" />
            </svg>
          </div>
          <div class="app-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="app-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Non dolore elit adipisicing ea reprehenderit consectetur culpa.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
              </div>
            </div>
            <div class="app-separator mdl-cell--1-col"></div>
            <div class="app-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                <h3>View options</h3>
                <ul>
                  <li>
                    <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Click per object</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Views per object</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects selected</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects viewed</span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
                <div class="mdl-layout-spacer"></div>
                <i class="material-icons">location_on</i>
              </div>
            </div>
          </div>
		-->
        </div>
      </main>
      <footer>
        Footer
      </footer>
    </div>
	<!--
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
          </g>
        </defs>
      </svg>
	-->
	<!--
      <a href="https://github.com/google/material-design-lite/blob/mdl-1.x/templates/dashboard/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">View Source</a>
	-->
	<a id="ctas" href="tel://919940228438" class="mdl-button mdl-js-button mdl-button--fab mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">
		<i class="material-icons">phone</i>
	</a>
	<!-- <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>| -->
  <script type="text/javascript">
			console.log(navigator.platform);
			function isAndroid()
			{
				return navigator.userAgent.match(/Android/i);
			}

			/* Check user ONLINE status */
			function isUserOnline()
			{
				return navigator.onLine;
			}

			/* Check Status of AppDrawer - whether is open or close */
			function isAppDrawerOpen()
			{
				return document.getElementById('AppDrawer').classList.contains('is-visible');
			}

			/* Toggle App Drawer */
			function togggleAppDrawer()
			{
				document.getElementById('App').MaterialLayout.toggleDrawer();
			}

			/* Show Toast Bar with a message */
			function showToastbar(msg)
			{
				var tbar = document.querySelector('.mdl-js-snackbar');
				var tbarMsg = {message: msg};

				tbar.MaterialSnackbar.showSnackbar(tbarMsg);
			}

			/* Stop bubbling and prevent default action App Event */
			function stopAppEvent(evt)
			{
				evt.stopPropagation();
				evt.preventDefault();
				return false;
			}

			/* On document ready*/
			$(document).ready(function () {

				//initialize swiper when document ready
				var mySwiper = new Swiper ('.swiper-container', {
					// Optional parameters
					direction: 'horizontal',
					effect: 'slide',
					setWrapperSize: true,
					slidesPerColumnFill: 'row',
					centeredSlides: true,
					grabCursor: true,
					slideToClickedSlide: true,
					speed: 1000,
					loop: true,
					freemode: true,
					pagination: {
						el: '.swiper-pagination',
					},

					// Navigation arrows
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},

					// And if we need scrollbar
					scrollbar: {
						el: '.swiper-scrollbar',
						hide: true,
						snapOnRelease: true,
					},

					//Autoplay
					autoplay : {
						delay: 1000,
					}
				});

				if (!isAndroid())
				{
					$('[id$="whatsapp"]').css("display", "none");
					//$('[class$="whatsapp"]').hide();
				}

				if (!isUserOnline())
				{
					showToastbar('You are Offline');
				}

			});


			//mdl-rox-menu / mdl-drawer dropdown menus
			(function() {
				'use strict';

				$('.mdl-navigation__toggle .mdl-navigation__link').on('click',function()
				{
					if($(this).parent().attr('class') !== undefined )
					{
						$(this).toggleClass('is_slide');
						$(this).parent().children('.mdl-navigation__dropdown').slideToggle();
					}
				});

				$('.mdl-close').on('click',function()
				{
					$(this).parent().remove();
				});

				$("[data-toggle]").map(function(key)
				{
					var toggle = $(this).attr('data-toggle');

					$(toggle).toggleClass('hide_sb_right');
					$('[data-toggle="'+toggle+'"]').click(function()
					{
						$(toggle).toggleClass("show_sb_right hide_sb_right");
					});
				}).get();

				var all = $("[data-target]").map(function(key)
				{
					var target = $(this).attr('data-target');

					$('[data-target="'+target+'"]').click(function()
					{
						$(target).show();
						$('.dialog-close').click(function()
						{
							$(target).hide();
						});
					});
				}).get();

			}());

			/* Stop propagating ALL dummy links - eg: <a href="#"></a> */
			$('a[href="#"]').click(
				function(evt) {
					// Stop the event bubbling and the default action
					stopAppEvent(evt);

					/* If AppDrawer is open, close it. */
					if (isAppDrawerOpen())
					{
						/* If event trigger is slide down menu, do not close the drawer */
						if (! $(this).parent().hasClass('mdl-navigation__toggle'))
						{
							togggleAppDrawer();
						}
					}

					return false;
				}
			);

			$('a:not([href^="#"])').click(
				function(evt) {
					/* If AppDrawer is open, close it. */
					if (isAppDrawerOpen())
					{
						/* If event trigger is slide down menu, do not close the drawer */
						if (! $(this).parent().hasClass('mdl-navigation__toggle'))
						{
							togggleAppDrawer();
						}
					}
				}
			);

		</script>
  </body>
</html>
