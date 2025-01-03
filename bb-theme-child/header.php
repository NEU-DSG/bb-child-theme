<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php do_action( 'fl_head_open' ); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php echo apply_filters( 'fl_theme_viewport', "<meta name='viewport' content='width=device-width, initial-scale=1.0' />\n" ); ?>
<?php echo apply_filters( 'fl_theme_xua_compatible', "<meta http-equiv='X-UA-Compatible' content='IE=edge' />\n" ); ?>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php

wp_head();

FLTheme::head();

?>
</head>
<body <?php body_class(); ?><?php FLTheme::print_schema( ' itemscope="itemscope" itemtype="https://schema.org/WebPage"' ); ?>>
<?php

FLTheme::header_code();

do_action( 'fl_body_open' );

?>
<div class="fl-page">
	<div class="itsglobalheader--container"><div id="itsglobalheader" x-data="NUGlobalElements.header({wordmark:false, menu:true})" x-init="init()"><div id="nu-global-header" class="nu-global">
      <nav class="flex items-center justify-between font-sans antialiased text-base text-gray-900 bg-black" aria-label="global">
        <div class="flex-1 flex items-center text-white">
          <a href="https://www.northeastern.edu/" target="_blank" class="w-12 h-12 flex items-center justify-center text-white bg-red-600 transition-colors duration-300 hover:bg-red-700 focus:outline-none focus:ring focus:ring-blue-400" data-gtm-track="Global Header">
            <svg class="w-7 h-7" viewBox="0 0 32 32" fill="none" aria-label="Northeastern University">
              <path d="M28 11c0-4 1.3-5.3 4-6.3V4h-8.8v.7c2.7 1 4 2.3 4 6.3v11.7L8.6 4.9C7.8 4.1 7.6 4 7 4H0v.7c1.5.2 2.5.6 4.7 2.7l.8.8v13.3c0 4-1.3 5.3-4 6.3v.7h8.8v-.7c-2.7-1-4-2.3-4-6.3V8.8l21.1 19.8h.6V11z" fill="#fff"></path>
            </svg>
          </a>
        </div>
      </nav></div>
    </div>

  </div>
	<?php

	do_action( 'fl_page_open' );

	FLTheme::fixed_header();

	do_action( 'fl_before_top_bar' );

	FLTheme::top_bar();

	do_action( 'fl_after_top_bar' );
	do_action( 'fl_before_header' );

	FLTheme::header_layout();

	do_action( 'fl_after_header' );
	do_action( 'fl_before_content' );

	?>
	<div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">

		<?php do_action( 'fl_content_open' ); ?>
