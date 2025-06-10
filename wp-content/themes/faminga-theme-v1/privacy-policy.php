<?php
/**
 * Privacy Policy Page Template
 * 
 * This template is automatically used by WordPress for the designated Privacy Policy page.
 * WordPress looks for privacy-policy.php first before falling back to page.php or index.php
 *
 * @package Faminga_Theme_V1
 */

// Force Kinyarwanda locale for this page
add_filter('locale', function($locale) {
    return 'rw_RW';
}, 999);

// Force our language detection to return Kinyarwanda
global $faminga_current_language_request;
$faminga_current_language_request = 'rw_RW';

// Get translations after setting up language forcing
$t = faminga_get_translated_texts();
get_header(); 

// Force our content instead of using database content
remove_filter('the_content', 'wpautop');

// Debug information
$current_lang = faminga_get_current_language();
$locale = get_locale();
?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-4xl">
        <!-- Debug Information (remove in production) -->
        <?php if (current_user_can('manage_options') && isset($_GET['debug'])): ?>
        <div style="background: #000; color: #0f0; padding: 10px; margin: 10px 0; font-family: monospace; border: 2px solid #0f0;">
            <strong>DEBUG:</strong> Using privacy-policy.php | 
            Current Language: <?php echo $current_lang; ?> | 
            Locale: <?php echo $locale; ?> | 
            Translation Count: <?php echo count($t); ?> |
            Sample Key 'how_we_use_info': <?php echo esc_html($t['how_we_use_info'] ?? 'NOT FOUND'); ?> |
            Sample Key 'privacy_policy_title': <?php echo esc_html($t['privacy_policy_title'] ?? 'NOT FOUND'); ?>
        </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['privacy_policy_title'] ?? 'Politiki y\'Ubuzima Bwite'); ?></h1>
            <p class="text-lg text-gray-300"><?php echo esc_html($t['last_updated'] ?? 'Ivuguruye bwa nyuma: Mutarama 1, 2024'); ?></p>
        </div>

        <!-- Privacy Content -->
        <div class="prose prose-invert max-w-none">
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['introduction'] ?? '1. Intangiriro'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['privacy_intro'] ?? 'Faminga Ltd ("twebwe", "byacu", cyangwa "dubu") ni iyemeje kurinda ubuzima bwawe bwite. Politiki y\'Ubuzima Bwite isobanura uburyo dukusanya, dukoresha, dusakaza, kandi dukarinda amakuru yawe iyo ukoresha urubuga rwacu rw\'ikoranabuhanga ry\'ubuhinzi, aplikasiyo zo mu rugendo, na serivisi zihuye (aha "Serivisi").'); ?></p>
                <p><?php echo esc_html($t['privacy_consent'] ?? 'Ukoresheje Serivisi yacu, wemera imikorere y\'amakuru asobanurwa muri ino Politiki y\'Ubuzima Bwite. Niba udashyigikiye imikorere yacu, ntukoreshe Serivisi yacu.'); ?></p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['information_we_collect'] ?? '2. Amakuru Dukusanya'); ?></h2>
                
                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['personal_information'] ?? 'Amakuru Yihariye'); ?></h3>
                <p class="mb-4"><?php echo esc_html($t['personal_info_desc'] ?? 'Dushobora gukusanya amakuru yihariye utanga ku buryo butaziguye, harimo:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['name_email_phone'] ?? 'Amazina, aderesi ya email, nimero ya telefone, n\'amakuru yo kubajorera'); ?></li>
                    <li><?php echo esc_html($t['account_credentials'] ?? 'Ibyangombwa bya konti n\'amakuru ya profil'); ?></li>
                    <li><?php echo esc_html($t['farm_location_details'] ?? 'Aho umurima uherereye, ubunini, n\'amakuru y\'ibikorwa'); ?></li>
                    <li><?php echo esc_html($t['payment_billing_info'] ?? 'Amakuru y\'iyishyura n\'ibiciro'); ?></li>
                    <li><?php echo esc_html($t['communications_support'] ?? 'Itumanaho n\'ibyifuzo by\'ubufasha'); ?></li>
                </ul>

                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['agricultural_data'] ?? 'Amakuru y\'Ubuhinzi'); ?></h3>
                <p class="mb-4"><?php echo esc_html($t['farm_data_desc'] ?? 'Dukusanya amakuru ajyanye n\'umurima kugira ngo duhe serivisi zacu:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['crop_types_data'] ?? 'Ubwoko bw\'ibihingwa, amakuru yo gutera no gusarura'); ?></li>
                    <li><?php echo esc_html($t['soil_weather_data'] ?? 'Ibidukikije by\'ubutaka, amakuru y\'ikirere, n\'ibipimo by\'ibidukikije'); ?></li>
                    <li><?php echo esc_html($t['iot_sensor_data'] ?? 'Gusoma kwa sensors za IoT n\'amakuru y\'ibikoresho'); ?></li>
                    <li><?php echo esc_html($t['crop_photos'] ?? 'Amafoto y\'ibihingwa n\'ibidukikije by\'umurima'); ?></li>
                    <li><?php echo esc_html($t['input_usage_data'] ?? 'Ikoresha ry\'ibinjira (ifumbire, icyangwa cy\'udukoko, amazi)'); ?></li>
                    <li><?php echo esc_html($t['yield_production_data'] ?? 'Amakuru y\'umusaruro n\'inyandiko z\'umusaruro'); ?></li>
                </ul>

                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['automatically_collected'] ?? 'Amakuru Yakusanyirijwe Mu Buryo Bwikora'); ?></h3>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['device_info'] ?? 'Amakuru y\'igikoresho (aderesi ya IP, ubwoko bwa browser, sisitemu y\'imikorere)'); ?></li>
                    <li><?php echo esc_html($t['usage_interactions'] ?? 'Amakuru yo gukoresha n\'ibikorwa by\'aplikasiyo'); ?></li>
                    <li><?php echo esc_html($t['location_data_permission'] ?? 'Amakuru y\'ahantu (uruhushya rwawe)'); ?></li>
                    <li><?php echo esc_html($t['cookies_tracking'] ?? 'Cookies n\'ubuhanga bwo gukurikirana bumeze'); ?></li>
                </ul>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['how_we_use_info'] ?? '3. Uko Dukoresha Amakuru Yawe'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['use_info_desc'] ?? 'Dukoresha amakuru dukusanya ku ntego zitandukanye:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['providing_maintaining_service'] ?? 'Gutanga no kubungabunga Serivisi zacu'); ?></li>
                    <li><?php echo esc_html($t['processing_payments'] ?? 'Gutunganya iyishyura no gucunga kwiyandikisha'); ?></li>
                    <li><?php echo esc_html($t['personalized_recommendations'] ?? 'Gutanga ubuvuzi bw\'ubuhinzi bwite'); ?></li>
                    <li><?php echo esc_html($t['analyzing_farm_data'] ?? 'Gusesengura amakuru y\'umurima kugira ngo twongere gucunga ibihingwa'); ?></li>
                    <li><?php echo esc_html($t['weather_forecasts_alerts'] ?? 'Gutanga amahiganuro y\'ikirere n\'iburira'); ?></li>
                    <li><?php echo esc_html($t['disease_detection_prevention'] ?? 'Kwemeza kumenya indwara no kuzibuza'); ?></li>
                    <li><?php echo esc_html($t['marketplace_transactions'] ?? 'Korosha ibikorwa by\'amasoko'); ?></li>
                    <li><?php echo esc_html($t['improving_new_features'] ?? 'Kunoza no gutegura ibintu bishya'); ?></li>
                    <li><?php echo esc_html($t['providing_customer_support'] ?? 'Gutanga ubufasha bw\'abakiriya'); ?></li>
                    <li><?php echo esc_html($t['important_updates'] ?? 'Gitumanaho amakuru y\'ingenzi n\'amabwiriza'); ?></li>
                    <li><?php echo esc_html($t['legal_obligations'] ?? 'Kubahiriza inshingano z\'amategeko'); ?></li>
                </ul>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['info_sharing_disclosure'] ?? '4. Gusangira no Guterekana Amakuru'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['no_sell_trade'] ?? 'Ntudugurishije, ntuducuruza, cyangwa se ntukohereza amakuru yawe yihariye ku bandi bantu be gatatu nta mvugo wacu, uretse mu bihe bikurikira:'); ?></p>
                
                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['service_providers'] ?? 'Abatanga Serivisi'); ?></h3>
                <p class="mb-4"><?php echo esc_html($t['service_providers_desc'] ?? 'Dushobora gusangira amakuru n\'abatanga serivisi b\'icyizere bo ku bantu be gatatu badufasha mu:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['cloud_hosting_storage'] ?? 'Gutangaza ibicu no kubika amakuru'); ?></li>
                    <li><?php echo esc_html($t['payment_processing'] ?? 'Gutunganya iyishyura'); ?></li>
                    <li><?php echo esc_html($t['weather_satellite_data'] ?? 'Amakuru y\'ikirere n\'amashusho yo mu kirere'); ?></li>
                    <li><?php echo esc_html($t['analytics_monitoring'] ?? 'Isesengura n\'igenzura ry\'imikorere'); ?></li>
                    <li><?php echo esc_html($t['customer_support_services'] ?? 'Serivisi z\'ubufasha bw\'abakiriya'); ?></li>
                </ul>

                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['research_development'] ?? 'Ubushakashatsi n\'Iterambere'); ?></h3>
                <p class="mb-4"><?php echo esc_html($t['anonymized_data_desc'] ?? 'Dushobora gusangira amakuru adafite amazina, yegeranijwe hamwe n\'ibigo by\'ubushakashatsi n\'abafatanyabikorwa kugira ngo:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['agricultural_research'] ?? 'Ubushakashatsi n\'iterambere ry\'ubuhinzi'); ?></li>
                    <li><?php echo esc_html($t['climate_environmental_studies'] ?? 'Ubushakashatsi bw\'ikirere n\'ibidukikije'); ?></li>
                    <li><?php echo esc_html($t['food_security_initiatives'] ?? 'Gahunda z\'umutekano w\'ibiribwa'); ?></li>
                    <li><?php echo esc_html($t['improving_farming_practices'] ?? 'Kunoza imikorere y\'ubuhinzi n\'ubuhanga'); ?></li>
                </ul>

                <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['legal_requirements'] ?? 'Ibisabwa n\'Amategeko'); ?></h3>
                <p class="mb-4"><?php echo esc_html($t['legal_disclosure_desc'] ?? 'Dushobora guterekana amakuru yawe iyo bisabwa n\'amategeko cyangwa kugira ngo:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['comply_legal_processes'] ?? 'Dubahirize inyigisho z\'amategeko cyangwa ibyifuzo bya guverinoma'); ?></li>
                    <li><?php echo esc_html($t['protect_rights_property'] ?? 'Durinde uburenganzira n\'umutungo byacu'); ?></li>
                    <li><?php echo esc_html($t['ensure_user_safety'] ?? 'Dushishikare umutekano w\'abakoresha no gukumira uburiganya'); ?></li>
                    <li><?php echo esc_html($t['investigate_violations'] ?? 'Dukore iperereza ku kwica amategeko yacu'); ?></li>
                </ul>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_security'] ?? '5. Umutekano w\'Amakuru'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['security_measures_desc'] ?? 'Dushyira mu bikorwa ingamba zikwiye zo kurinda amakuru yawe:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['encryption_data'] ?? 'Guhisha amakuru iyo ayoherezwa no kubikwa'); ?></li>
                    <li><?php echo esc_html($t['multi_factor_auth'] ?? 'Kwemeza abakoresha mu buryo bwiyongereye bwo kwinjira mu konti'); ?></li>
                    <li><?php echo esc_html($t['security_assessments'] ?? 'Isuzuma rihoraho ry\'umutekano n\'ubushakashatsi bw\'ubushinze'); ?></li>
                    <li><?php echo esc_html($t['employee_training'] ?? 'Guhugura abakozi ku mico myiza yo kurinda amakuru'); ?></li>
                    <li><?php echo esc_html($t['incident_response'] ?? 'Inzira zo gutabara no kumenyesha ku bikorwa bibi byerekeye umutekano'); ?></li>
                    <li><?php echo esc_html($t['compliance_standards'] ?? 'Kubahiriza ibipimo mpuzamahanga by\'umutekano'); ?></li>
                </ul>
                <p class="mb-4"><?php echo esc_html($t['no_100_percent_secure'] ?? 'Icyakora, ntamburyo yo kohereza cyangwa kubika ari mu rwego rwa 100% w\'umutekano. Nubwo dutunguranye kurinda amakuru yawe, ntidushobora kwemeza umutekano wuzuye.'); ?></p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['your_rights_choices'] ?? '6. Uburenganzira Bwawe n\'Amahitamo'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['rights_desc'] ?? 'Ufite uburenganzira bukurikira bijyanye n\'amakuru yawe yihariye:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><strong><?php echo esc_html($t['access_right'] ?? 'Kugera:'); ?></strong> <?php echo esc_html($t['access_desc'] ?? 'Gusaba kopi z\'amakuru yawe yihariye'); ?></li>
                    <li><strong><?php echo esc_html($t['correction_right'] ?? 'Kososa:'); ?></strong> <?php echo esc_html($t['correction_desc'] ?? 'Gusaba kososa amakuru atari ukuri'); ?></li>
                    <li><strong><?php echo esc_html($t['deletion_right'] ?? 'Gusiba:'); ?></strong> <?php echo esc_html($t['deletion_desc'] ?? 'Gusaba gusiba amakuru yawe yihariye'); ?></li>
                    <li><strong><?php echo esc_html($t['portability_right'] ?? 'Kumurika:'); ?></strong> <?php echo esc_html($t['portability_desc'] ?? 'Gusaba kohereza amakuru yawe ku kindi kintu'); ?></li>
                    <li><strong><?php echo esc_html($t['objection_right'] ?? 'Kwanga:'); ?></strong> <?php echo esc_html($t['objection_desc'] ?? 'Kwanga bikorwa bimwe na bimwe'); ?></li>
                    <li><strong><?php echo esc_html($t['restriction_right'] ?? 'Kugabanya:'); ?></strong> <?php echo esc_html($t['restriction_desc'] ?? 'Gusaba kugabanya gutunganya'); ?></li>
                </ul>
                <p><?php echo esc_html($t['exercise_rights'] ?? 'Kugira ngo ukoreshe ubu burenganzira, nyamuneka duhamagare kuri privacy@faminga.com. Tuzasubiza icyifuzo cyawe mu minsi 30.'); ?></p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_retention'] ?? '7. Kubika Amakuru'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['retention_periods_desc'] ?? 'Dubika amakuru yawe mu bihe bitandukanye bitewe n\'ubwoko bw\'amakuru:'); ?></p>
                <ul class="list-disc pl-6 mb-6">
                    <li><?php echo esc_html($t['account_info_retention'] ?? 'Amakuru ya konti: Kugeza konti isibwa cyangwa imyaka 3 itakoreshwa'); ?></li>
                    <li><?php echo esc_html($t['farm_data_retention'] ?? 'Amakuru y\'umurima: Kugeza usaba gusiba cyangwa imyaka 5 nyuma yo gufunga konti'); ?></li>
                    <li><?php echo esc_html($t['transaction_records_retention'] ?? 'Inyandiko z\'ibikorwa: Imyaka 7 ku mpamvu z\'imisoro n\'ubwiyunge'); ?></li>
                    <li><?php echo esc_html($t['communications_retention'] ?? 'Itumanaho: Imyaka 3 keretse iyo kubika ku gihe kirekire bisabwa n\'amategeko'); ?></li>
                    <li><?php echo esc_html($t['anonymized_retention'] ?? 'Amakuru adafite amazina: Ashobora kubikwa burundu ku bwumvikane'); ?></li>
                </ul>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['contact_information'] ?? '12. Amakuru yo Kubajorera'); ?></h2>
                <p class="mb-4"><?php echo esc_html($t['contact_questions_desc'] ?? 'Niba ufite ibibazo bijyanye n\'iyi Politiki y\'Ubuzima Bwite cyangwa imikorere yacu y\'amakuru, nyamuneka duhamagare:'); ?></p>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <p><strong><?php echo esc_html($t['faminga_data_protection'] ?? 'Faminga Ltd - Umukozi Ushinzwe Kurinda Amakuru'); ?></strong></p>
                    <p><?php echo esc_html($t['kigali_heights_address'] ?? 'Kigali Heights, KG 7 Ave'); ?></p>
                    <p><?php echo esc_html($t['kacyiru_district'] ?? 'Kacyiru, Akarere ka Gasabo'); ?></p>
                    <p><?php echo esc_html($t['kigali_rwanda'] ?? 'Kigali, U Rwanda'); ?></p>
                    <p class="mt-2"><?php echo esc_html($t['email_privacy'] ?? 'Email: privacy@faminga.com'); ?></p>
                    <p><?php echo esc_html($t['phone_contact'] ?? 'Telefone: +250 788 123 456'); ?></p>
                </div>
                <p class="mt-4 text-sm text-gray-400"><?php echo esc_html($t['policy_effective_date'] ?? 'Iyi Politiki y\'Ubuzima Bwite itangira gukurikizwa kuva Mutarama 1, 2024. Amajwi abanziriza arabonetse ku cyifuzo.'); ?></p>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?> 