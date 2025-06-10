<?php
/**
 * Template Name: Cookies
 *
 * @package Faminga_Theme_V1
 */

$t = faminga_get_translated_texts();
get_header(); ?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['cookie_policy']); ?></h1>
            <p class="text-lg text-gray-300"><?php echo esc_html($t['last_updated']); ?></p>
        </div>

        <!-- Cookie Content -->
        <div class="prose prose-invert max-w-none">
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['what_are_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['cookies_small_text_files']); ?></p>
                    <p><?php echo esc_html($t['cookies_help_experience']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['how_we_use_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['cookies_several_purposes']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['enable_essential_functionality']); ?></li>
                        <li><?php echo esc_html($t['remember_preferences']); ?></li>
                        <li><?php echo esc_html($t['keep_signed_in']); ?></li>
                        <li><?php echo esc_html($t['analyze_website_usage']); ?></li>
                        <li><?php echo esc_html($t['provide_personalized_content']); ?></li>
                        <li><?php echo esc_html($t['show_relevant_ads']); ?></li>
                        <li><?php echo esc_html($t['prevent_fraud_security']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['types_cookies_we_use']); ?></h2>
                
                <div class="space-y-8">
                    <!-- Essential Cookies -->
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-primary"><?php echo esc_html($t['essential_cookies_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['essential_cookies_necessary']); ?></p>
                        <div class="grid md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['purpose_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['auth_security_functionality']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['duration_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['session_until_logout']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['examples_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['faminga_session_examples']); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Preference Cookies -->
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-primary"><?php echo esc_html($t['preference_cookies_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['preference_cookies_remember']); ?></p>
                        <div class="grid md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['purpose_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['language_theme_dashboard']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['duration_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['thirty_days_year']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['examples_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['faminga_lang_examples']); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Cookies -->
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-primary"><?php echo esc_html($t['analytics_cookies_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['analytics_cookies_understand']); ?></p>
                        <div class="grid md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['purpose_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['usage_stats_monitoring']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['duration_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['thirty_min_two_years']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['examples_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['google_analytics_examples']); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Marketing Cookies -->
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4 text-primary"><?php echo esc_html($t['marketing_cookies_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['marketing_cookies_track']); ?></p>
                        <div class="grid md:grid-cols-3 gap-4 text-sm">
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['purpose_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['targeted_advertising']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['duration_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['one_day_year']); ?></p>
                            </div>
                            <div>
                                <strong class="text-white"><?php echo esc_html($t['examples_label']); ?></strong>
                                <p class="text-gray-400"><?php echo esc_html($t['facebook_google_examples']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['third_party_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['third_party_services']); ?></p>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full border border-gray-600 text-sm">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th class="border border-gray-600 px-4 py-2 text-left"><?php echo esc_html($t['service_table_header']); ?></th>
                                    <th class="border border-gray-600 px-4 py-2 text-left"><?php echo esc_html($t['purpose_table_header']); ?></th>
                                    <th class="border border-gray-600 px-4 py-2 text-left"><?php echo esc_html($t['cookie_names_header']); ?></th>
                                    <th class="border border-gray-600 px-4 py-2 text-left"><?php echo esc_html($t['duration_table_header']); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['google_analytics_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['website_analytics']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2">_ga, _gat, _gid</td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['thirty_min_two_years']); ?></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['google_maps_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['location_services']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2">NID, CONSENT</td>
                                    <td class="border border-gray-600 px-4 py-2">6 months</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['facebook_pixel_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['social_media_integration']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2">_fbp, _fbc</td>
                                    <td class="border border-gray-600 px-4 py-2">90 days</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['stripe_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['payment_processing_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2">__stripe_mid, __stripe_sid</td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['one_day_year']); ?></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['intercom_service']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2"><?php echo esc_html($t['customer_support_chat']); ?></td>
                                    <td class="border border-gray-600 px-4 py-2">intercom-*</td>
                                    <td class="border border-gray-600 px-4 py-2">1 week</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['managing_cookie_preferences']); ?></h2>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['cookie_banner_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['cookie_banner_description']); ?></p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-300">
                            <li><?php echo esc_html($t['accept_all_cookies']); ?></li>
                            <li><?php echo esc_html($t['customize_cookie_settings']); ?></li>
                            <li><?php echo esc_html($t['reject_non_essential']); ?></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['browser_settings_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['browser_settings_description']); ?></p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-300">
                            <li><?php echo esc_html($t['chrome_settings']); ?></li>
                            <li><?php echo esc_html($t['firefox_settings']); ?></li>
                            <li><?php echo esc_html($t['safari_settings']); ?></li>
                            <li><?php echo esc_html($t['edge_settings']); ?></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['account_settings_title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($t['account_settings_description']); ?></p>
                        <p class="text-gray-300"><?php echo esc_html($t['dashboard_path']); ?></p>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['impact_disabling_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['disabling_cookies_affect']); ?></p>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-800/50 p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 text-red-400"><?php echo esc_html($t['essential_cookies_disabled']); ?></h4>
                            <ul class="list-disc pl-4 space-y-1 text-sm">
                                <li><?php echo esc_html($t['cannot_stay_logged']); ?></li>
                                <li><?php echo esc_html($t['security_features_not_work']); ?></li>
                                <li><?php echo esc_html($t['basic_functionality_affected']); ?></li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-800/50 p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 text-yellow-400"><?php echo esc_html($t['preference_cookies_disabled']); ?></h4>
                            <ul class="list-disc pl-4 space-y-1 text-sm">
                                <li><?php echo esc_html($t['language_resets_visit']); ?></li>
                                <li><?php echo esc_html($t['theme_preferences_not_saved']); ?></li>
                                <li><?php echo esc_html($t['dashboard_layout_resets']); ?></li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-800/50 p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 text-blue-400"><?php echo esc_html($t['analytics_cookies_disabled']); ?></h4>
                            <ul class="list-disc pl-4 space-y-1 text-sm">
                                <li><?php echo esc_html($t['cannot_improve_services']); ?></li>
                                <li><?php echo esc_html($t['no_usage_insights']); ?></li>
                                <li><?php echo esc_html($t['performance_issues_persist']); ?></li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-800/50 p-6 rounded-lg">
                            <h4 class="font-semibold mb-3 text-purple-400"><?php echo esc_html($t['marketing_cookies_disabled']); ?></h4>
                            <ul class="list-disc pl-4 space-y-1 text-sm">
                                <li><?php echo esc_html($t['less_relevant_ads']); ?></li>
                                <li><?php echo esc_html($t['generic_marketing_content']); ?></li>
                                <li><?php echo esc_html($t['may_see_more_ads']); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['mobile_app_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['mobile_similar_technologies']); ?></p>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <strong class="text-white"><?php echo esc_html($t['local_storage']); ?></strong>
                            <p class="text-sm"><?php echo esc_html($t['local_storage_desc']); ?></p>
                        </div>
                        <div>
                            <strong class="text-white"><?php echo esc_html($t['device_identifiers']); ?></strong>
                            <p class="text-sm"><?php echo esc_html($t['device_identifiers_desc']); ?></p>
                        </div>
                        <div>
                            <strong class="text-white"><?php echo esc_html($t['analytics_sdks']); ?></strong>
                            <p class="text-sm"><?php echo esc_html($t['analytics_sdks_desc']); ?></p>
                        </div>
                        <div>
                            <strong class="text-white"><?php echo esc_html($t['push_notification_tokens']); ?></strong>
                            <p class="text-sm"><?php echo esc_html($t['push_tokens_desc']); ?></p>
                        </div>
                    </div>
                    
                    <p><?php echo esc_html($t['manage_device_settings']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_protection_security']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['cookie_security_seriously']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['cookies_encrypted']); ?></li>
                        <li><?php echo esc_html($t['secure_flags_https']); ?></li>
                        <li><?php echo esc_html($t['samesite_attributes']); ?></li>
                        <li><?php echo esc_html($t['regular_security_audits']); ?></li>
                        <li><?php echo esc_html($t['data_minimization_principles']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['updates_cookie_policy']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['update_policy_reflect']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['changes_cookie_use']); ?></li>
                        <li><?php echo esc_html($t['new_features_functionality']); ?></li>
                        <li><?php echo esc_html($t['legal_regulatory_requirements']); ?></li>
                        <li><?php echo esc_html($t['changes_third_party']); ?></li>
                    </ul>
                    <p><?php echo esc_html($t['notify_significant_changes']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['contact_us_cookies']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['questions_cookie_policy']); ?></p>
                    <div class="bg-gray-800/50 p-6 rounded-lg">
                        <h3 class="font-semibold mb-2"><?php echo esc_html($t['faminga_privacy_team']); ?></h3>
                        <p><?php echo esc_html($t['email_privacy']); ?></p>
                        <p><?php echo esc_html($t['phone_contact']); ?></p>
                        <p><?php echo esc_html($t['kigali_heights_address']); ?></p>
                        <p><?php echo esc_html($t['kacyiru_district']); ?></p>
                        <p><?php echo esc_html($t['kigali_rwanda']); ?></p>
                    </div>
                </div>
            </section>

            <!-- Cookie Preferences Button -->
            <section class="mb-12">
                <div class="text-center">
                    <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['manage_cookie_preferences_button']); ?></h2>
                    <p class="text-gray-300 mb-6"><?php echo esc_html($t['click_review_update']); ?></p>
                    <button class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-lg transition-colors">
                        <?php echo esc_html($t['cookie_preferences_button']); ?>
                    </button>
                </div>
            </section>

            <div class="text-center text-gray-400 text-sm mt-12 pt-8 border-t border-gray-700">
                <p><?php echo esc_html($t['cookie_policy_effective']); ?></p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 