<?php
/**
 * Template Name: Data Processing Agreement
 *
 * @package Faminga_Theme_V1
 */

$t = faminga_get_translated_texts();
get_header(); ?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['data_processing_agreement']); ?></h1>
            <p class="text-lg text-gray-300"><?php echo esc_html($t['last_updated']); ?></p>
        </div>

        <!-- DPA Content -->
        <div class="prose prose-invert max-w-none">
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['introduction']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['dpa_intro']); ?></p>
                    <p><?php echo esc_html($t['dpa_supplement']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['definitions']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <p><strong><?php echo esc_html($t['controller_def']); ?></strong> <?php echo esc_html($t['controller_desc']); ?></p>
                        </div>
                        <div>
                            <p><strong><?php echo esc_html($t['processor_def']); ?></strong> <?php echo esc_html($t['processor_desc']); ?></p>
                        </div>
                        <div>
                            <p><strong><?php echo esc_html($t['personal_data_def']); ?></strong> <?php echo esc_html($t['personal_data_desc']); ?></p>
                        </div>
                        <div>
                            <p><strong><?php echo esc_html($t['processing_def']); ?></strong> <?php echo esc_html($t['processing_desc']); ?></p>
                        </div>
                        <div>
                            <p><strong><?php echo esc_html($t['data_subject_def']); ?></strong> <?php echo esc_html($t['data_subject_desc']); ?></p>
                        </div>
                        <div>
                            <p><strong><?php echo esc_html($t['sub_processor_def']); ?></strong> <?php echo esc_html($t['sub_processor_desc']); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['scope_and_nature_processing']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['categories_personal_data']); ?></h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['name_email_phone']); ?></li>
                        <li><?php echo esc_html($t['account_credentials']); ?></li>
                        <li><?php echo esc_html($t['farm_location_details']); ?></li>
                        <li><?php echo esc_html($t['geographic_location_data']); ?></li>
                        <li><?php echo esc_html($t['farm_worker_information']); ?></li>
                        <li><?php echo esc_html($t['communication_records']); ?></li>
                    </ul>

                    <h3 class="text-xl font-semibold mb-4 mt-8"><?php echo esc_html($t['categories_data_subjects']); ?></h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['farm_owners_managers']); ?></li>
                        <li><?php echo esc_html($t['farm_workers_employees']); ?></li>
                        <li><?php echo esc_html($t['cooperative_members']); ?></li>
                        <li><?php echo esc_html($t['marketplace_buyers_sellers']); ?></li>
                        <li><?php echo esc_html($t['service_users_administrators']); ?></li>
                    </ul>

                    <h3 class="text-xl font-semibold mb-4 mt-8"><?php echo esc_html($t['purposes_processing']); ?></h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['providing_farm_management_services']); ?></li>
                        <li><?php echo esc_html($t['iot_data_collection']); ?></li>
                        <li><?php echo esc_html($t['agricultural_advisory']); ?></li>
                        <li><?php echo esc_html($t['weather_environmental_monitoring']); ?></li>
                        <li><?php echo esc_html($t['marketplace_facilitation']); ?></li>
                        <li><?php echo esc_html($t['customer_support']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['processor_obligations']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['faminga_agrees']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['process_personal_data']); ?></li>
                        <li><?php echo esc_html($t['ensure_confidentiality']); ?></li>
                        <li><?php echo esc_html($t['implement_technical_security']); ?></li>
                        <li><?php echo esc_html($t['engage_sub_processors']); ?></li>
                        <li><?php echo esc_html($t['assist_controller']); ?></li>
                        <li><?php echo esc_html($t['notify_breaches']); ?></li>
                        <li><?php echo esc_html($t['delete_return_data']); ?></li>
                        <li><?php echo esc_html($t['make_available_information']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['security_measures']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($t['technical_measures']); ?></h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['encryption_transit_rest']); ?></li>
                        <li><?php echo esc_html($t['multi_factor_authentication']); ?></li>
                        <li><?php echo esc_html($t['regular_security_updates']); ?></li>
                        <li><?php echo esc_html($t['network_firewalls']); ?></li>
                        <li><?php echo esc_html($t['secure_backup']); ?></li>
                        <li><?php echo esc_html($t['data_pseudonymization']); ?></li>
                    </ul>

                    <h3 class="text-xl font-semibold mb-4 mt-8"><?php echo esc_html($t['organizational_measures']); ?></h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['staff_training']); ?></li>
                        <li><?php echo esc_html($t['role_based_access']); ?></li>
                        <li><?php echo esc_html($t['regular_security_assessments']); ?></li>
                        <li><?php echo esc_html($t['data_protection_impact']); ?></li>
                        <li><?php echo esc_html($t['vendor_management']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['sub_processors']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['controller_provides_general_consent']); ?></p>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-600">
                            <thead>
                                <tr class="bg-[#0a2c0a]">
                                    <th class="border border-gray-600 p-3 text-left"><?php echo esc_html($t['sub_processor']); ?></th>
                                    <th class="border border-gray-600 p-3 text-left"><?php echo esc_html($t['service']); ?></th>
                                    <th class="border border-gray-600 p-3 text-left"><?php echo esc_html($t['location']); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-600 p-3">Google Cloud</td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['cloud_hosting_storage']); ?></td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['ireland_usa']); ?></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 p-3">Microsoft Azure</td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['analytics_monitoring']); ?></td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['usa_ireland']); ?></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 p-3">SendGrid</td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['email_delivery']); ?></td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['usa']); ?></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-600 p-3">OpenWeatherMap</td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['weather_data_services']); ?></td>
                                    <td class="border border-gray-600 p-3"><?php echo esc_html($t['uk']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <p><?php echo esc_html($t['we_will_notify_controllers']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_subject_rights']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['faminga_will_assist_controllers']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['right_access_personal_data']); ?></li>
                        <li><?php echo esc_html($t['right_rectification']); ?></li>
                        <li><?php echo esc_html($t['right_erasure']); ?></li>
                        <li><?php echo esc_html($t['right_restriction']); ?></li>
                        <li><?php echo esc_html($t['right_data_portability']); ?></li>
                        <li><?php echo esc_html($t['right_object']); ?></li>
                    </ul>
                    <p><?php echo esc_html($t['we_will_respond']); ?></p>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_breach_notification']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['faminga_will']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['notify_controller']); ?></li>
                        <li><?php echo esc_html($t['provide_details']); ?></li>
                        <li><?php echo esc_html($t['describe_measures']); ?></li>
                        <li><?php echo esc_html($t['recommend_actions']); ?></li>
                        <li><?php echo esc_html($t['provide_ongoing_updates']); ?></li>
                        <li><?php echo esc_html($t['assist_breach_notification']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['international_data_transfers']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['adequate_protection']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['european_commission_standard_contractual_clauses']); ?></li>
                        <li><?php echo esc_html($t['binding_corporate_rules']); ?></li>
                        <li><?php echo esc_html($t['adequacy_decisions']); ?></li>
                        <li><?php echo esc_html($t['explicit_consent']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['audit_and_compliance']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['faminga_agrees']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['maintain_processing_records']); ?></li>
                        <li><?php echo esc_html($t['allow_controller_audits']); ?></li>
                        <li><?php echo esc_html($t['provide_compliance_info']); ?></li>
                        <li><?php echo esc_html($t['submit_security_assessments']); ?></li>
                        <li><?php echo esc_html($t['maintain_certifications']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['data_return_deletion']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['upon_termination']); ?></p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><?php echo esc_html($t['return_personal_data']); ?></li>
                        <li><?php echo esc_html($t['delete_data_copies']); ?></li>
                        <li><?php echo esc_html($t['provide_deletion_certification']); ?></li>
                        <li><?php echo esc_html($t['retain_data_legal']); ?></li>
                        <li><?php echo esc_html($t['ensure_subprocessor_deletion']); ?></li>
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6"><?php echo esc_html($t['contact_information']); ?></h2>
                <div class="text-gray-300 space-y-4">
                    <p><?php echo esc_html($t['contact_dpa_questions']); ?></p>
                    <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30">
                        <p><strong><?php echo esc_html($t['data_protection_officer']); ?></strong></p>
                        <p><?php echo esc_html($t['faminga_ltd']); ?></p>
                        <p><?php echo esc_html($t['kigali_heights_address']); ?></p>
                        <p><?php echo esc_html($t['kacyiru_district']); ?></p>
                        <p><?php echo esc_html($t['kigali_rwanda']); ?></p>
                        <p><?php echo esc_html($t['email_dpo']); ?></p>
                        <p><?php echo esc_html($t['phone_contact']); ?></p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer Notice -->
        <div class="text-center mt-16 pt-8 border-t border-gray-700">
            <p class="text-gray-400 text-sm"><?php echo esc_html($t['dpa_effective_date']); ?></p>
        </div>
    </div>
</main>

<?php get_footer(); ?> 