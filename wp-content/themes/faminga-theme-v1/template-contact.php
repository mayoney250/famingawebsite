<?php
/**
 * Template Name: Contact
 *
 * @package Faminga_Theme_V1
 */

get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main class="py-8 lg:py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-12 lg:mb-16">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6"><?php echo esc_html($t['contact']); ?></h1>
            <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto mb-8"><?php echo esc_html($t['get_in_touch']); ?></p>
            <p class="text-sm lg:text-base text-gray-400 max-w-4xl mx-auto"><?php echo esc_html($t['contact_desc']); ?></p>
        </div>

        <!-- Contact Methods -->
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mb-12 lg:mb-16">
            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30 text-center">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <i class="ri-mail-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php echo esc_html($t['email_support']); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php echo esc_html($t['email_availability']); ?></p>
                <a href="mailto:support@faminga.com" class="text-[#F26B3A] hover:text-[#e55a2b] transition-colors font-medium">support@faminga.com</a>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30 text-center">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <i class="ri-phone-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php _e( 'Phone Support', 'faminga-theme-v1' ); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php _e( 'Available Mon-Fri, 8am-6pm EAT', 'faminga-theme-v1' ); ?></p>
                <a href="tel:+250788123456" class="text-[#F26B3A] hover:text-[#e55a2b] transition-colors font-medium">+250 788 123 456</a>
            </div>

            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30 text-center">
                <div class="w-12 h-12 bg-[#F26B3A] bg-opacity-20 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <i class="ri-whatsapp-line text-2xl text-[#F26B3A]"></i>
                </div>
                <h3 class="text-xl font-bold mb-3"><?php _e( 'WhatsApp Support', 'faminga-theme-v1' ); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php _e( 'Quick responses during business hours', 'faminga-theme-v1' ); ?></p>
                <a href="https://wa.me/250788123456" class="text-[#F26B3A] hover:text-[#e55a2b] transition-colors font-medium">+250 788 123 456</a>
            </div>
        </div>

        <!-- Contact Form & Office Info -->
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 mb-12 lg:mb-16">
            <!-- Contact Form -->
            <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                <h2 class="text-xl lg:text-2xl font-bold mb-6"><?php _e( 'Send Us a Message', 'faminga-theme-v1' ); ?></h2>
                
                <form class="space-y-6" action="#" method="POST">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2"><?php _e( 'Your Name', 'faminga-theme-v1' ); ?></label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 bg-[#0a1a0a] border border-gray-600 rounded-lg focus:outline-none focus:border-[#F26B3A] transition-colors" placeholder="<?php esc_attr_e( 'Enter your name', 'faminga-theme-v1' ); ?>">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2"><?php _e( 'Email Address', 'faminga-theme-v1' ); ?></label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 bg-[#0a1a0a] border border-gray-600 rounded-lg focus:outline-none focus:border-[#F26B3A] transition-colors" placeholder="<?php esc_attr_e( 'Enter your email', 'faminga-theme-v1' ); ?>">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium mb-2"><?php _e( 'Help Topic', 'faminga-theme-v1' ); ?></label>
                        <select id="subject" name="subject" class="w-full px-4 py-3 bg-[#0a1a0a] border border-gray-600 rounded-lg focus:outline-none focus:border-[#F26B3A] transition-colors">
                            <option value=""><?php _e( 'Select a topic', 'faminga-theme-v1' ); ?></option>
                            <option value="general"><?php _e( 'General Inquiry', 'faminga-theme-v1' ); ?></option>
                            <option value="sales"><?php _e( 'Sales & Pricing', 'faminga-theme-v1' ); ?></option>
                            <option value="support"><?php _e( 'Technical Support', 'faminga-theme-v1' ); ?></option>
                            <option value="partnership"><?php _e( 'Partnership Opportunities', 'faminga-theme-v1' ); ?></option>
                            <option value="billing"><?php _e( 'Account & Billing', 'faminga-theme-v1' ); ?></option>
                            <option value="other"><?php _e( 'Other', 'faminga-theme-v1' ); ?></option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium mb-2"><?php _e( 'Your Message', 'faminga-theme-v1' ); ?></label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 bg-[#0a1a0a] border border-gray-600 rounded-lg focus:outline-none focus:border-[#F26B3A] transition-colors resize-none" placeholder="<?php esc_attr_e( 'Describe your issue or question...', 'faminga-theme-v1' ); ?>"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#F26B3A] text-white py-3 px-6 rounded-lg font-medium hover:bg-[#e55a2b] transition-colors">
                        <?php _e( 'Send Message', 'faminga-theme-v1' ); ?>
                    </button>
                </form>
            </div>

            <!-- Office Information -->
            <div class="space-y-6">
                <!-- Faminga Contact & Office Locations -->
                <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-6 lg:p-8 border border-[#1B3B1C] border-opacity-30">
                    <h3 class="text-lg font-bold mb-6 text-center"><?php _e( 'Faminga Contact & Office Locations', 'faminga-theme-v1' ); ?></h3>
                    
                    <!-- Head Office -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-3 flex items-center">
                            <span class="mr-2">🏢</span><?php _e( 'Head Office – Kigali', 'faminga-theme-v1' ); ?>
                        </h4>
                        <div class="space-y-1 text-sm text-gray-300 ml-6">
                            <p><?php _e( 'Faminga Ltd', 'faminga-theme-v1' ); ?></p>
                            <p><?php _e( 'Kicukiro District', 'faminga-theme-v1' ); ?></p>
                            <p><?php _e( 'Kigali, Rwanda', 'faminga-theme-v1' ); ?></p>
                            <p class="text-[#F26B3A] mt-2"><?php _e( 'Business Hours: Monday – Friday, 8:00 AM – 6:00 PM (EAT)', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>

                    <!-- Branch Office -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-3 flex items-center">
                            <span class="mr-2">🏢</span><?php _e( 'Branch Office – Southern Province', 'faminga-theme-v1' ); ?>
                        </h4>
                        <div class="space-y-1 text-sm text-gray-300 ml-6">
                            <p><?php _e( 'Muhanga Town', 'faminga-theme-v1' ); ?></p>
                            <p><?php _e( 'Nyamabuye Sector, Muhanga District', 'faminga-theme-v1' ); ?></p>
                            <p><?php _e( 'Southern Province, Rwanda', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-6">
                        <h4 class="text-md font-semibold mb-3 flex items-center">
                            <span class="mr-2">📞</span><?php _e( 'Contact Us', 'faminga-theme-v1' ); ?>
                        </h4>
                        <div class="space-y-2 text-sm text-gray-300 ml-6">
                            <p><span class="text-[#F26B3A]">📞</span> <?php _e( 'Phone/WhatsApp:', 'faminga-theme-v1' ); ?> +250 788 763 436</p>
                            <p><span class="text-[#F26B3A]">📧</span> <?php _e( 'General Inquiries:', 'faminga-theme-v1' ); ?> info@faminga.app</p>
                            <p><span class="text-[#F26B3A]">📧</span> <?php _e( 'Technical Support:', 'faminga-theme-v1' ); ?> support@faminga.app</p>
                            <p><span class="text-[#F26B3A]">🌐</span> <?php _e( 'Website:', 'faminga-theme-v1' ); ?> www.ihinga.com / www.faminga.app</p>
                        </div>
                    </div>

                    <!-- Emergency Support -->
                    <div>
                        <h4 class="text-md font-semibold mb-3 flex items-center">
                            <span class="mr-2">🚨</span><?php _e( 'Emergency Support', 'faminga-theme-v1' ); ?>
                        </h4>
                        <div class="space-y-2 text-sm text-gray-300 ml-6">
                            <p><?php _e( 'For urgent issues affecting your farm operations:', 'faminga-theme-v1' ); ?></p>
                            <p><span class="text-red-400">📧</span> support@faminga.app</p>
                            <p class="text-[#F26B3A]">⏱️ <?php _e( 'Response guaranteed within 2 hours', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-gradient-to-br from-[#0a2c0a] to-[#0a1a0a] rounded-xl p-8 lg:p-12 border border-[#1B3B1C] border-opacity-30 mb-12 lg:mb-16">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['faq_section_title']); ?></h2>
                <p class="text-gray-300 text-sm lg:text-base"><?php echo esc_html($t['faq_section_subtitle']); ?></p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq1_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq1_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq2_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq2_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq3_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq3_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq8_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq8_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq6_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq6_answer']); ?></p>
                    </div>
                </div>

                <!-- Additional FAQs -->
                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq5_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq5_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq7_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq7_answer']); ?></p>
                    </div>
                </div>

                <div class="border border-gray-600 rounded-lg">
                    <button class="w-full text-left p-4 hover:bg-[#0a1a0a] transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <span class="font-medium"><?php echo esc_html($t['faq10_question']); ?></span>
                            <i class="ri-arrow-down-s-line transform transition-transform"></i>
                        </div>
                    </button>
                    <div class="faq-content hidden px-4 pb-4">
                        <p class="text-gray-300 text-sm"><?php echo esc_html($t['faq10_answer']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center bg-gradient-to-r from-[#F26B3A] to-[#e55a2b] rounded-xl p-8 lg:p-12">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo esc_html($t['ready_to_get_started']); ?></h2>
            <p class="text-lg mb-6 opacity-90"><?php echo esc_html($t['join_thousands_farmers']); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-[#F26B3A] px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors"><?php echo esc_html($t['start_free_trial']); ?></button>
                <button class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-[#F26B3A] transition-colors"><?php echo esc_html($t['schedule_demo']); ?></button>
            </div>
        </div>
    </div>
</main>

<script>
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>

<?php get_footer(); ?> 