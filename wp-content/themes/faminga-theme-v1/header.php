<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/WebPage">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'faminga-theme-v1' ); ?></a>

	<!-- Main Navigation -->
    <header role="banner">
        <nav id="main-nav" class="w-full py-4 px-6 flex items-center justify-between bg-dark-green transition-all duration-300 z-50" role="navigation" aria-label="Main navigation">
            <!-- Left: Logo -->
            <div class="flex-1">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - Homepage">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faminga-logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Logo - Faminga Smart Farming Solutions" class="h-10 w-auto object-contain" width="140" height="60" />
                </a>
            </div>
        
        <!-- Center: Menu -->
        <div class="hidden md:flex space-x-6" role="menubar" aria-label="Primary navigation menu">
            <?php
            // Translations for menu items
            $menu_translations = [
                'en_US' => [
                    'features' => 'Features',
                    'solutions' => 'Solutions',
                    'technology' => 'Technology',
                    'pricing' => 'Pricing',
                    'career' => 'Career',
                    'help' => 'Help'
                ],
                'rw_RW' => [
                    'features' => 'Ahabanza',
                    'solutions' => 'Serivisi',
                    'technology' => 'Ikoranabuhanga',
                    'pricing' => 'Ibiciro',
                    'career' => 'Akazi',
                    'help' => 'Ubufasha'
                ],
                'sw_KE' => [
                    'features' => 'Vipengele',
                    'solutions' => 'Suluhisho',
                    'technology' => 'Teknolojia',
                    'pricing' => 'Bei',
                    'career' => 'Kazi',
                    'help' => 'Usaidizi'
                ],
                'lg_UG' => [
                    'features' => 'Ebintu',
                    'solutions' => 'Ebisubizo',
                    'technology' => 'Tekinologiya',
                    'pricing' => 'Ebipimo',
                    'career' => 'Emirimu',
                    'help' => 'Obuyambi'
                ],
                'fr_FR' => [
                    'features' => 'Fonctionnalités',
                    'solutions' => 'Solutions',
                    'technology' => 'Technologie',
                    'pricing' => 'Tarification',
                    'career' => 'Carrière',
                    'help' => 'Aide'
                ]
            ];
            
            $current_locale = faminga_get_current_language();
            if (!isset($menu_translations[$current_locale])) {
                $current_locale = 'en_US';
            }
            $mt = $menu_translations[$current_locale];
            ?>
            <a href="<?php echo esc_url(home_url('/')); ?>#features" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['features']); ?></a>
            <a href="<?php echo esc_url(home_url('/')); ?>#solutions" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['solutions']); ?></a>
            <a href="<?php echo esc_url(home_url('/')); ?>#technology" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['technology']); ?></a>
            <a href="<?php echo esc_url(home_url('/')); ?>#pricing" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['pricing']); ?></a>
            <a href="<?php echo esc_url(home_url('/career')); ?>" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['career']); ?></a>
            <a href="<?php echo esc_url(home_url('/help')); ?>" class="px-4 py-2 text-white hover:text-primary transition-colors duration-200"><?php echo esc_html($mt['help']); ?></a>
        </div>

        <!-- Right: Buttons -->
        <div class="flex-1 flex justify-end items-center space-x-4">
            <?php
            $current_locale = faminga_get_current_language();
            $languages = [
                'en_US' => ['short' => 'EN', 'flag' => 'us', 'name' => 'English'],
                'rw_RW' => ['short' => 'RW', 'flag' => 'rw', 'name' => 'Kinyarwanda'],
                'fr_FR' => ['short' => 'FR', 'flag' => 'fr', 'name' => 'Français'],
                'sw_KE' => ['short' => 'SW', 'flag' => 'ke', 'name' => 'Kiswahili'],
                'lg_UG' => ['short' => 'LU', 'flag' => 'ug', 'name' => 'Luganda'],
            ];
            $current_lang_data = $languages[$current_locale] ?? $languages['en_US'];
            
            // Translations for buttons
            $button_translations = [
                'en_US' => [
                    'sign_in' => 'Sign In',
                    'get_started' => 'Get Started'
                ],
                'rw_RW' => [
                    'sign_in' => 'Injira',
                    'get_started' => 'Tangira Ubu'
                ],
                'sw_KE' => [
                    'sign_in' => 'Ingia',
                    'get_started' => 'Anza Sasa'
                ],
                'lg_UG' => [
                    'sign_in' => 'Yingira',
                    'get_started' => 'Tandika Kati'
                ],
                'fr_FR' => [
                    'sign_in' => 'Se Connecter',
                    'get_started' => 'Commencer'
                ]
            ];
            
            if (!isset($button_translations[$current_locale])) {
                $bt = $button_translations['en_US'];
            } else {
                $bt = $button_translations[$current_locale];
            }
            ?>
            <div class="relative" id="language-switcher">
                <button id="language-switcher-button" class="px-3 py-2 border border-white text-white hover:bg-white hover:text-primary transition !rounded-button flex items-center space-x-2">
                    <img src="https://flagcdn.com/w20/<?php echo esc_attr($current_lang_data['flag']); ?>.png" alt="<?php echo esc_attr($current_lang_data['short']); ?> flag" class="h-4 w-auto">
                    <span class="hidden sm:inline"><?php echo esc_html($current_lang_data['short']); ?></span>
                    <i class="ri-arrow-down-s-line"></i>
                </button>
                <div id="language-switcher-options" class="hidden absolute right-0 mt-2 py-2 w-48 bg-[#0a2c0a] rounded-lg shadow-xl z-20 border border-[#526700] border-opacity-30">
                    <?php 
                    // Force reload current URL with language parameter and a cache-busting query string
                    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $current_url = preg_replace('/\?.*/', '', $current_url); // Remove existing query parameters
                    
                    foreach ( $languages as $locale_code => $lang_data ) : 
                        if ( $current_locale !== $locale_code ) : 
                            $url_with_lang = add_query_arg('lang', $locale_code, $current_url);
                            $url_with_cache_buster = add_query_arg('ver', wp_rand(), $url_with_lang);
                    ?>
                            <a href="<?php echo esc_url($url_with_cache_buster); ?>" class="flex items-center space-x-3 px-4 py-2 text-sm text-white hover:bg-primary">
                                <img src="https://flagcdn.com/w20/<?php echo esc_attr($lang_data['flag']); ?>.png" alt="<?php echo esc_attr($lang_data['short']); ?> flag" class="h-4 w-auto">
                                <span><?php echo esc_html( $lang_data['name'] ); ?></span>
                            </a>
                    <?php 
                        endif; 
                    endforeach; 
                    ?>
                </div>
            </div>

            <a href="<?php echo esc_url(home_url('/demo-request')); ?>" class="px-4 py-2 bg-primary text-white hover:bg-opacity-90 transition !rounded-button whitespace-nowrap"><?php echo esc_html($bt['get_started']); ?></a>
        </div>
        </nav>
    </header>
    
    <!-- Spacer for fixed navigation -->
    <div id="nav-spacer" class="hidden h-[72px]"></div>

	<main id="content" class="site-content" role="main" itemprop="mainContentOfPage"> 
