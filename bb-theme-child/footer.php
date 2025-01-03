<?php do_action( 'fl_content_close' ); ?>

	</div><!-- .fl-page-content -->
	<?php

	do_action( 'fl_after_content' );

	if ( FLTheme::has_footer() ) :

		?>
	<footer class="fl-page-footer-wrap"<?php FLTheme::print_schema( ' itemscope="itemscope" itemtype="https://schema.org/WPFooter"' ); ?>  role="contentinfo">
		<?php

		do_action( 'fl_footer_wrap_open' );
		do_action( 'fl_before_footer_widgets' );

		FLTheme::footer_widgets();

		do_action( 'fl_after_footer_widgets' );
		do_action( 'fl_before_footer' );

		FLTheme::footer();

		do_action( 'fl_after_footer' );
		do_action( 'fl_footer_wrap_close' );

		?>
		<div id="nu-global-footer" class="nu-global">
								<div class="container">
									<div class="py-4 px-4 text-white font-sans text-base antialiased bg-black lg:px-16">
										<div class="-mx-4">
      <div class="flex justify-center md:justify-start">
        <a class="inline-flex px-4 py-2 text-white transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://www.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          <svg width="248" height="22" viewBox="0 0 248 22" aria-label="Northeastern University">
            <g clip-path="url(#clip0)">
              <path d="M242.06 18.59l4.05-9.02c.8-1.79 1.08-2.17 1.89-2.38v-.6h-4.27v.6c1.4.32 1.57 1.02.92 2.54l-1.62 3.89-2.06-4.6c-.43-1.02-.37-1.62 1.14-1.78V6.6h-5.68v.65c.65.16.92.43 1.52 1.68l3.62 7.78-.6 1.3c-.32.75-.64 1.3-1.02 1.62-.27-.87-.76-1.35-1.51-1.35-.76 0-1.47.54-1.47 1.5 0 .98.82 1.8 1.79 1.8 1.4.05 2.27-.66 3.3-2.98zm-5.73-2.7l-.33-.7c-.6.27-1.08.37-1.56.37-1.03 0-1.3-.54-1.3-1.24V7.84h2.76V6.59h-2.76v-2h-.38l-3.9 2.54v.7h1.58v7.09c0 1.4.8 2.16 2.37 2.16a6.1 6.1 0 003.52-1.2zm-8.22.32c-1.35-.21-1.51-.48-1.51-1.67V6.27h-1.08l-3.19 2.1v.5h1.51v5.72c0 1.19-.21 1.46-1.51 1.68v.64h5.78v-.7zm-3.13-11.56c.92 0 1.62-.76 1.62-1.68a1.5 1.5 0 00-1.46-1.51c-.97 0-1.67.76-1.67 1.62.05.87.64 1.57 1.5 1.57zm-3.73 9.08c0-2-1.68-2.65-3.24-3.14-1.52-.48-2.6-.8-2.6-1.94 0-.6.44-1.2 1.35-1.2 1.09 0 2.06.66 3.25 2l.54-.26-.81-2.7h-.33l-.38.32a4.97 4.97 0 00-2.05-.43c-2.27 0-3.78 1.35-3.78 3.3 0 2 1.67 2.59 3.24 3.07 1.51.54 2.6.81 2.6 1.95 0 .7-.55 1.24-1.57 1.24-1.46 0-2.54-.97-3.9-2.65l-.59.22.87 3.35h.37l.65-.43a5.7 5.7 0 002.38.54c2.16.1 4-1.19 4-3.24zm-11.3 2.48c-1.4-.21-1.62-.54-1.62-1.84V9.94c.44-.75.87-1.35 1.3-1.73 0 .87.6 1.4 1.3 1.4.75 0 1.46-.58 1.46-1.72 0-.97-.54-1.51-1.52-1.51-1.08 0-1.89.86-2.65 2.16V6.38h-.97l-3.13 2.05v.49h1.51v5.72c0 1.2-.22 1.52-1.4 1.68v.65h5.72v-.76zm-13.5-5.83c0-1.73.75-2.81 2.16-2.81.97 0 1.62.7 1.89 2.1l-4 1.4c-.06-.2-.06-.48-.06-.7zm6.75 4.59l-.6-.43a3.38 3.38 0 01-2.48 1.13c-2 0-3.14-1.51-3.52-3.46l6.49-2.16c-.1-2.27-1.84-3.56-3.94-3.51-3.03 0-5.2 2.43-5.2 5.46 0 2.97 1.9 5.24 5.25 5.24 2.05-.1 3.3-1.03 4-2.27zm-11.35-5.3c.81-1.78 1.08-2.16 1.9-2.37v-.6h-4.28v.6c1.4.32 1.57 1.02.92 2.53l-1.62 3.9-2.05-4.6c-.44-1.02-.38-1.62 1.13-1.78V6.7h-5.67v.65c.64.16.97.43 1.51 1.68l3.73 8h1.13l3.3-7.36zm-9.84 6.6c-1.35-.22-1.5-.49-1.5-1.68V6.32h-1.09l-3.19 2.11v.49h1.52v5.72c0 1.2-.22 1.46-1.52 1.68v.65h5.78v-.7zM178.93 4.7c.92 0 1.63-.75 1.63-1.67a1.5 1.5 0 00-1.46-1.52c-.98 0-1.68.76-1.68 1.62 0 .92.65 1.57 1.51 1.57zm-10.91 11.62c-1.25-.16-1.4-.49-1.4-1.67V9.67c1.07-.97 1.94-1.46 2.75-1.46 1.08 0 1.35.54 1.35 1.52v4.92c0 1.18-.22 1.5-1.4 1.67v.65h5.56v-.65c-1.24-.16-1.4-.49-1.4-1.67v-5.2c0-1.72-.76-2.96-2.92-2.96-1.35 0-2.65.8-3.95 1.94V6.38h-.97l-3.13 2.05v.49h1.5v5.72c0 1.2-.2 1.52-1.4 1.68v.65h5.57l-.16-.65zm-23.56-12.7v6.49c0 4.21 2.21 7.13 7.72 7.08 5.52 0 7.68-2.92 7.68-7.03V4.97c0-2.54.7-3.19 1.94-3.51V.8h-5.24v.65c1.24.32 1.95.97 1.95 3.51v5.19c0 3.67-1.9 5.35-5.57 5.35-3.62 0-5.57-1.68-5.57-5.35v-6.6c0-1.61.49-1.94 1.84-2.1v-.7h-6.6v.7c1.41.27 1.84.54 1.84 2.16zM127.1 16.37c-1.25-.16-1.4-.48-1.4-1.67V9.73c1.07-.97 1.94-1.46 2.75-1.46 1.08 0 1.35.54 1.35 1.51v4.92c0 1.19-.22 1.51-1.4 1.68v.64h5.56v-.64c-1.24-.17-1.4-.5-1.4-1.68V9.51c0-1.73-.76-2.97-2.92-2.97-1.35 0-2.65.81-3.95 1.95V6.43h-.97l-3.14 2.05v.5h1.52v5.72c0 1.19-.22 1.51-1.4 1.67v.65h5.56l-.16-.65zm-8.6 0c-1.4-.21-1.62-.54-1.62-1.83V10.1a6.8 6.8 0 011.3-1.73c0 .86.6 1.4 1.3 1.4.7 0 1.46-.6 1.46-1.73 0-.97-.54-1.51-1.52-1.51-1.08 0-1.89.86-2.65 2.16V6.54h-.97l-3.13 2.05v.49h1.51v5.73c0 1.19-.21 1.51-1.4 1.67v.65h5.72v-.75zm-13.56-5.83c0-1.73.76-2.81 2.16-2.81.97 0 1.62.7 1.9 2.1l-4 1.41c-.06-.22-.06-.49-.06-.7zm6.8 4.6l-.58-.44a3.38 3.38 0 01-2.5 1.13c-2 0-3.13-1.51-3.5-3.45l6.48-2.17c-.1-2.27-1.84-3.56-3.94-3.5-3.03 0-5.2 2.42-5.2 5.45 0 2.97 1.9 5.24 5.25 5.24 2-.1 3.24-1.03 4-2.27zm-9.99.96l-.32-.7c-.6.27-1.08.38-1.57.38-1.03 0-1.3-.54-1.3-1.24V8.05h2.76V6.81h-2.76v-2h-.38L94.3 7.35v.7h1.57v7.08c0 1.4.81 2.16 2.38 2.16 1.24 0 2.48-.38 3.51-1.19zm-8.16-2.16c0-2-1.67-2.64-3.24-3.13-1.51-.49-2.6-.81-2.6-1.95 0-.6.44-1.19 1.36-1.19 1.08 0 2.05.65 3.24 2l.54-.27-.81-2.7h-.33l-.38.32a4.98 4.98 0 00-2.05-.43c-2.27 0-3.78 1.35-3.78 3.3 0 2 1.67 2.6 3.24 3.08 1.51.54 2.6.81 2.6 1.95 0 .7-.54 1.24-1.57 1.24-1.46 0-2.54-.97-3.9-2.65l-.59.22.87 3.35h.38l.64-.44a5.7 5.7 0 002.38.55c2.16.16 4-1.14 4-3.25zm-16.64.43c0-1.08.48-1.62 3.02-2.32v3.14c-.6.48-1.13.7-1.67.7-.87 0-1.35-.43-1.35-1.52zm4.75 2.87a5.1 5.1 0 002.6-.87l-.22-.59c-1.08.22-1.46.05-1.46-.65V9.35c0-1.73-.76-2.65-3.19-2.65-2.75 0-4.75 1.46-4.75 2.86 0 .65.43 1.25 1.24 1.25.86 0 1.3-.6 1.46-1.2.1-.64-.11-1.18-.43-1.45.5-.25 1.06-.38 1.62-.38.92 0 1.4.33 1.4 1.2v2.15c-3.89.98-5.62 1.79-5.62 3.84 0 1.57 1.03 2.43 2.6 2.43 1.02 0 2.16-.43 3.18-1.24.11.7.65 1.08 1.57 1.08zm-15.35-6.65c0-1.73.76-2.8 2.16-2.8.98 0 1.63.7 1.9 2.1l-4 1.4c-.06-.21-.06-.43-.06-.7zm6.76 4.6l-.6-.44a3.38 3.38 0 01-2.48 1.14c-2 0-3.14-1.52-3.51-3.46L73 10.27c-.1-2.27-1.84-3.57-3.95-3.52-3.02 0-5.18 2.44-5.18 5.46 0 2.98 1.89 5.24 5.24 5.24 2.05-.1 3.3-1.02 4-2.26zm-17.19 1.3c-1.24-.17-1.4-.5-1.4-1.68V9.78c1.02-.97 1.83-1.4 2.75-1.4 1.09 0 1.35.54 1.35 1.51v4.92c0 1.19-.21 1.51-1.4 1.67v.65h5.57v-.65c-1.25-.16-1.4-.48-1.4-1.67V9.62c0-1.73-.77-2.97-2.93-2.97-1.3 0-2.6.75-3.89 1.89V0h-.8L50.3 2.27v.49h1.57v12.1c0 1.2-.22 1.51-1.4 1.68v.65h5.56l-.1-.7zm-6.21-.28l-.33-.7c-.6.27-1.08.38-1.56.38-1.03 0-1.3-.54-1.3-1.24V8.16h2.75V6.92h-2.75v-2h-.38l-3.9 2.54v.7h1.58v7.08c0 1.4.8 2.16 2.37 2.16 1.3 0 2.5-.43 3.52-1.19zm-10.6.33c-1.4-.22-1.62-.54-1.62-1.84v-4.43c.44-.76.87-1.35 1.3-1.73 0 .86.6 1.4 1.3 1.4.76 0 1.46-.6 1.46-1.73 0-.97-.54-1.5-1.52-1.5-1.08 0-1.89.86-2.64 2.15V6.7h-.98l-3.08 1.95v.48h1.52v5.73c0 1.2-.22 1.51-1.4 1.68v.65h5.72l-.05-.65zm-15.61-5.52c0-1.94.8-3.18 2.6-3.18 2.26 0 2.96 2.8 2.96 5.4 0 1.95-.8 3.19-2.59 3.19-2.27-.06-2.97-2.87-2.97-5.4zm8.27.92c0-2.8-1.9-5.18-5.4-5.18-3.52 0-5.63 2.54-5.58 5.45 0 2.81 1.9 5.2 5.4 5.2a5.22 5.22 0 005.58-5.47zm-14.1-6.7c0-2.54.7-3.19 1.94-3.51v-.65h-5.24v.65c1.24.32 1.94.97 1.94 3.51v7.62L5.35 1.73c-.65-.6-.86-.65-1.24-.65H0v.65c.92.1 1.4.43 2.43 1.4.33.33.65.65.65 1.3v8.65c0 2.54-.7 3.19-1.95 3.51v.65h5.25v-.65c-1.25-.32-1.95-.97-1.95-3.51V4.92l12.43 12.43h.87l-.06-12.1z" fill="currentColor"></path>
            </g>
          </svg>
        </a>
      </div>
      <div class="mt-2 px-2 flex flex-wrap items-center justify-center text-sm text-gray-300 md:mt-0 md:justify-start">
        <a class="p-2 text-white font-bold font-sans whitespace-no-wrap transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://admissions.northeastern.edu/student-life/" target="_blank" data-gtm-track="Global Footer">
          Boston
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://arlington.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Arlington
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://www.burlington.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Burlington
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://charlotte.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Charlotte
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://www.nchlondon.ac.uk/" target="_blank" data-gtm-track="Global Footer">
          London
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://miami.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Miami
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://csi.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Nahant
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://oakland.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Oakland
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://roux.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Portland
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://seattle.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Seattle
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://bayarea.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Silicon Valley
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://toronto.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Toronto
        </a>
        <a class="text-white p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-gray-200 focus:outline-none focus:ring focus:ring-blue-400" href="https://vancouver.northeastern.edu/" target="_blank" data-gtm-track="Global Footer">
          Vancouver
        </a>
      </div>
    </div>
										<div class="-mx-4 pb-2 flex flex-col items-center justify-between md:flex-row">
											<div class="px-4">
												<div class="mt-6 -mx-2 flex flex-wrap items-start justify-center text-xs text-gray-400 md:mt-2 md:justify-start">
													<a class="text-gray-300 p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-white focus:outline-none focus:ring focus:ring-blue-400" href="https://www.northeastern.edu/emergency-information" data-gtm-track="Global Footer">
														Emergency Information
													</a>
													<span class="p-2 font-sans">|</span>
													<a class="text-gray-300 p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-white focus:outline-none focus:ring focus:ring-blue-400" href="https://www.northeastern.edu/privacy-information" data-gtm-track="Global Footer">
														Privacy Policy
													</a>
													<span class="p-2 font-sans">|</span>
													<a class="text-gray-300 p-2 whitespace-no-wrap font-sans transition-colors duration-300 hover:text-white focus:outline-none focus:ring focus:ring-blue-400" href="https://www.northeastern.edu/policies/pdfs/Digital_Accessibility_Policy.pdf" data-gtm-track="Global Footer">
														Accessibility
													</a>
													<span class="p-2 font-sans">|</span>
													<span class="font-sans text-gray-300 p-2 whitespace-no-wrap">
														© 2024 Northeastern University
													</span>
												</div>
											</div>
											<div class="mt-6 px-4 md:mt-2">
												<div class="-mx-1 space-x-4 flex items-center justify-center md:justify-end">
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://www.facebook.com/northeastern/" aria-label="Facebook" title="Facebook" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z" fill="currentColor"></path>
														</svg>
													</a>
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://twitter.com/Northeastern" aria-label="Twitter" title="Twitter" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 3.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z" fill="currentColor"></path>
														</svg>
													</a>
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://www.youtube.com/user/Northeastern" aria-label="Youtube" title="Youtube" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z" fill="currentColor"></path>
														</svg>
													</a>
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://www.linkedin.com/school/northeastern-university/" aria-label="Linkedin" title="Linkedin" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M4.98 3.5C4.98 4.881 3.87 6 2.5 6S.02 4.881.02 3.5C.02 2.12 1.13 1 2.5 1s2.48 1.12 2.48 2.5zM5 8H0v16h5V8zm7.982 0H8.014v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0V24H24V13.869c0-7.88-8.922-7.593-11.018-3.714V8z" fill="currentColor"></path>
														</svg>
													</a>
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://www.instagram.com/northeastern/" aria-label="Instagram" title="Instagram" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="currentColor"></path>
														</svg>
													</a>
													<a class="inline-flex items-center justify-center w-6 h-6 bg-gray-400 text-black rounded-full transition-colors duration-300 hover:bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400 focus:bg-white" href="https://www.snapchat.com/add/NortheasternU" aria-label="Snapchat" title="Snapchat" data-gtm-track="Global Footer">
														<svg class="w-3 h-3" viewBox="0 0 24 24">
															<path d="M5.829 4.533c-.6 1.344-.363 3.752-.267 5.436-.648.359-1.48-.271-1.951-.271-.49 0-1.075.322-1.167.802-.066.346.089.85 1.201 1.289.43.17 1.453.37 1.69.928.333.784-1.71 4.403-4.918 4.931a.498.498 0 00-.416.519c.056.975 2.242 1.357 3.211 1.507.099.134.179.7.306 1.131.057.193.204.424.582.424.493 0 1.312-.38 2.738-.144 1.398.233 2.712 2.215 5.235 2.215 2.345 0 3.744-1.991 5.09-2.215.779-.129 1.448-.088 2.196.058.515.101.977.157 1.124-.349.129-.437.208-.992.305-1.123.96-.149 3.156-.53 3.211-1.505a.498.498 0 00-.416-.519c-3.154-.52-5.259-4.128-4.918-4.931.236-.557 1.252-.755 1.69-.928.814-.321 1.222-.716 1.213-1.173-.011-.585-.715-.934-1.233-.934-.527 0-1.284.624-1.897.286.096-1.698.332-4.095-.267-5.438C17.036 1.986 14.511.7 11.987.7 9.479.7 6.973 1.968 5.829 4.533z" fill="currentColor"></path>
														</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<script>
								jQuery(document).ready(function($) {


									$( window ).scroll( function() {
										if ( $( this ).scrollTop() > 800 ) {
											$( '.back-to-top' ).addClass( 'show-back-to-top' );
										} else {
											$( '.back-to-top' ).removeClass( 'show-back-to-top' );
										}
									});

									$( '.back-to-top' ).click( function() {
										$( 'html, body' ).animate( { scrollTop : 0 }, 800 );
										return false;
									});

								});
								</script>
							</div>
	</footer>
	<?php endif; ?>
	<?php do_action( 'fl_page_close' ); ?>
</div><!-- .fl-page -->
<?php

wp_footer();

do_action( 'fl_body_close' );

FLTheme::footer_code();

?>
</body>
</html>
