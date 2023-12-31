<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yulstay
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/dist/output.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
    <script>
        var modal = document.getElementById("myModal");
        
        var btn = document.getElementById("MD_OPEN_BTN");
        
        var span = document.getElementsByClassName("close")[0];
        
        function openModal() {
             document.getElementById("myModal").style.display = "block";
             document.getElementById("logoIcon").style.display = "none";
             document.getElementById("xIcon").style.display = "block";
        }
        
        function cancelModal() {
             document.getElementById("myModal").style.display = "none";
             document.getElementById("logoIcon").style.display = "block";
             document.getElementById("xIcon").style.display = "none";
        }
        
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
    <nav class="h-12 w-screen md:w-12 md:h-screen right-0 fixed opacity-100 md:bg-white border-l border-gray-500 z-50 flex justify-between md:items-center md:content-between">
       <div class="md:hidden mx-6">
        <a href="<?php bloginfo('url'); ?>/home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="h-11" alt="">
        </a>
       </div>
       <div class="" >
            <img id="logoIcon" onclick="openModal()" class="w-12 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/12.png" alt="">
            <svg id="xIcon" onclick="cancelModal()" style="display:none;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-x-lg transitionCS7 mt-auto w-12 h-auto" viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
       </div>
    </nav>

    <div id="myModal" class="modal z-40" style="background-color: #d5d5d5;">
        <div class="grid grid-cols-1 md:grid-cols-2 w-screen mr-12">
          <div class="hidden md:block">
          <div class="px-6 py-14 md:p-14 h-screen flex flex-col justify-between">
                    <div class="text-center text-5xl w-3/4">
                        Investing in peace <br>
                        of mind
                        
                    </div>
                    <div>
                        <a href="<?php bloginfo('url'); ?>/home">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="w-40" alt="">
                        </a>
                    </div>
            </div>
          </div>
            
            <div class="px-6 py-14 md:p-14 h-screen flex flex-col justify-between">
                <div class="text-2xl uppercase">
                <!-- <?php 
                  $menu_name = 'main-menu';
                  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) 
                  {
                  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                  $menu_items = wp_get_nav_menu_items($menu->term_id); ?>
                  <?php foreach ( (array) $menu_items as $key => $menu_item ) 
                    { 
                  $ptitle = $menu_item->title; ?>
                      <li class="py-1"><a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a></li>
                      <?php 
                  }  
                    } 
                  ?>   -->
                  <div class="dropdown-container grid grid-cols-2">
                  <div>
                    <a href="<?php bloginfo('url'); ?>/residential" class="text-gray-700 text-3xl hover:font-bold">Residential</a>
                  </div>
                  <div>
                    <div class="ml-4">
                      <a href="<?php bloginfo('url'); ?>/residential" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Properties</a>
                    </div>
                    <div class="ml-4">
                      <a href="<?php bloginfo('url'); ?>/the-team" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Team</a>
                    </div>
                  </div>
                  </div>
                  <div class="dropdown-container grid grid-cols-2">
                  <div class="mt-2">
                    <a href="<?php bloginfo('url'); ?>/multi-residential" class="text-gray-700 text-3xl hover:font-bold">Multi-Residential</a>
                  </div>
                  <div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/multi-residential" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Properties</a>
                  </div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/the-team" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Team</a>
                  </div>
                  </div>
                  </div>
                  <div class="dropdown-container grid grid-cols-2">
                    <div class="mt-2">
                      <a href="<?php bloginfo('url'); ?>/rental-property" class="text-gray-700 text-3xl hover:font-bold">Rental + Property</a>
                    </div>
                    <div>
                      <div class="ml-4">
                        <a href="<?php bloginfo('url'); ?>/rental-property" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Properties</a>
                      </div>
                      <div class="ml-4">
                        <a href="<?php bloginfo('url'); ?>/the-team" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Team</a>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-container grid grid-cols-2">
                  <div class="mt-2">
                    <a href="#" class="text-gray-700 text-3xl hover:font-bold">Yulstay +</a>
                  </div>
                  <div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/events-collaboration" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Events & Collaboration</a>
                  </div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/podcasts" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Podcasts</a>
                  </div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/building-history" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Building History</a>
                  </div>
                  <div class="ml-4">
                    <a href="<?php bloginfo('url'); ?>/join-our-team" class="text-gray-600 link link-underline link-underline-black hover:font-bold">Join the Team</a>
                  </div>
                  </div>
                  </div>
                  <div class="mt-2">
                    <a href="<?php bloginfo('url'); ?>/new-construction" class="text-gray-700 text-3xl link link-underline link-underline-black hover:font-bold">New Construction</a>
                  </div>
                  <div class="mt-2">
                    <a href="<?php bloginfo('url'); ?>/contact-us" class="text-gray-700 text-3xl link link-underline link-underline-black hover:font-bold">Contact Us</a>
                  </div>
                  
                  
                </div>
                <div class="md:pr-6 mb-8">
                  <div>
                    <h2 class="text-xl">SUBSCRIBE TO OUR NEWSLETTER</h2>
                    <div class="flex gap-4 border-b border-black pt-5">
                      <input type="email" name="" placeholder="Email address" class="w-full bg-[#d5d5d5] outline-none" id="">
                      <input type="submit" value="Join" class="hover:font-black">
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav ending -->
