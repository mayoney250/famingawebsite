<?php
/**
 * Template Name: Help Page
 *
 * @package Faminga_Theme_V1
 */

get_header(); ?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-4xl">
        <!-- Help Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php _e( 'How Can We Help You?', 'faminga-theme-v1' ); ?></h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto"><?php _e( 'Find answers to common questions and learn how to get the most out of Faminga', 'faminga-theme-v1' ); ?></p>
        </div>
        
        <!-- Search Box -->
        <div class="max-w-2xl mx-auto mb-16">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="ri-search-line text-gray-400"></i>
                </div>
                <input type="text" class="w-full py-4 pl-12 pr-4 bg-[#001a00] border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-primary" placeholder="<?php echo esc_attr__( 'Search for help topics...', 'faminga-theme-v1' ); ?>">
                <button class="absolute inset-y-0 right-0 px-6 bg-primary text-white rounded-r-lg">Search</button>
            </div>
        </div>
        
        <!-- Help Categories -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            <!-- Getting Started -->
            <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                    <i class="ri-rocket-line text-primary text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php _e('Getting Started', 'faminga-theme-v1'); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php _e('Learn the basics of setting up your Faminga account and farm profile', 'faminga-theme-v1'); ?></p>
                <a href="#getting-started" class="text-primary text-sm flex items-center hover:underline">
                    <?php _e( 'View guides', 'faminga-theme-v1' ); ?>
                    <div class="w-4 h-4 flex items-center justify-center ml-1">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </a>
            </div>
            
            <!-- Farm Management -->
            <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                    <i class="ri-farm-line text-primary text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php _e('Farm Management', 'faminga-theme-v1'); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php _e('Tutorials on recording farm activities, tracking inputs, and managing your fields', 'faminga-theme-v1'); ?></p>
                <a href="#farm-management" class="text-primary text-sm flex items-center hover:underline">
                    <?php _e( 'View guides', 'faminga-theme-v1' ); ?>
                    <div class="w-4 h-4 flex items-center justify-center ml-1">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </a>
            </div>
            
            <!-- IoT Devices -->
            <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 hover:shadow-lg transition duration-300">
                <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mb-4">
                    <i class="ri-sensor-line text-primary text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php _e('IoT Devices', 'faminga-theme-v1'); ?></h3>
                <p class="text-gray-300 text-sm mb-4"><?php _e('Setting up and troubleshooting your Smart Hose and soil monitoring sensors', 'faminga-theme-v1'); ?></p>
                <a href="#iot-devices" class="text-primary text-sm flex items-center hover:underline">
                    <?php _e( 'View guides', 'faminga-theme-v1' ); ?>
                    <div class="w-4 h-4 flex items-center justify-center ml-1">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <section id="faq" class="mb-16">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4"><?php _e( 'Frequently Asked Questions', 'faminga-theme-v1' ); ?></h2>
            
            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold"><?php _e( 'How do I create a Faminga account?', 'faminga-theme-v1' ); ?></span>
                        <i class="ri-arrow-down-s-line transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0">
                        <p class="text-gray-300"><?php _e( 'To create a Faminga account, click the "Get Started" button in the top right corner of our website. Fill out the registration form with your details, select your plan, and follow the verification steps sent to your email.', 'faminga-theme-v1' ); ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold"><?php _e( 'Can I use Faminga offline?', 'faminga-theme-v1' ); ?></span>
                        <i class="ri-arrow-down-s-line transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0">
                        <p class="text-gray-300"><?php _e( 'Yes, the Faminga mobile app has offline functionality. You can record farm activities, take photos, and input data while offline. The app will automatically sync your data when you reconnect to the internet.', 'faminga-theme-v1' ); ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold"><?php _e( 'How accurate is the disease detection feature?', 'faminga-theme-v1' ); ?></span>
                        <i class="ri-arrow-down-s-line transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0">
                        <p class="text-gray-300"><?php _e( 'Our AI disease detection has an accuracy rate of 89-95% depending on the crop and disease. It can identify 176 different crop diseases across 33 main crops. For best results, take clear photos in good lighting conditions and follow the in-app guidance.', 'faminga-theme-v1' ); ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold"><?php _e( 'Is my farm data secure?', 'faminga-theme-v1' ); ?></span>
                        <i class="ri-arrow-down-s-line transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0">
                        <p class="text-gray-300"><?php _e( 'Yes, we take data security seriously. All data is encrypted both in transit and at rest. We never share your individual farm data with third parties without your explicit permission. You retain ownership of your data and can export or delete it at any time.', 'faminga-theme-v1' ); ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="bg-[#0a2c0a] rounded-lg border border-[#526700] border-opacity-30">
                    <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleFaq(this)">
                        <span class="font-semibold"><?php _e( 'How do I connect IoT sensors to my account?', 'faminga-theme-v1' ); ?></span>
                        <i class="ri-arrow-down-s-line transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0">
                        <p class="text-gray-300"><?php _e( 'To connect your IoT sensors, go to the "Devices" section in your dashboard. Click "Add New Device" and follow the step-by-step setup wizard. You\'ll need to scan the QR code on your device or enter its serial number, then follow the connection instructions specific to your sensor type.', 'faminga-theme-v1' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Support -->
        <section id="contact-support">
            <h2 class="text-2xl font-bold mb-8 border-b border-gray-700 pb-4"><?php _e( 'Still Need Help?', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Support Channels -->
                <div>
                    <h3 class="text-xl font-semibold mb-4"><?php _e( 'Contact Support', 'faminga-theme-v1' ); ?></h3>
                    
                    <div class="space-y-4">
                        <!-- Email Support -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-4">
                                <i class="ri-mail-line text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1"><?php _e('Email Support', 'faminga-theme-v1'); ?></h4>
                                <p class="text-gray-300 text-sm mb-1"><?php _e('Available 24/7, response within 24 hours', 'faminga-theme-v1'); ?></p>
                                <a href="mailto:support@faminga.com" class="text-primary hover:underline text-sm">support@faminga.com</a>
                            </div>
                        </div>
                        
                        <!-- Phone Support -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-4">
                                <i class="ri-phone-line text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1"><?php _e('Phone Support', 'faminga-theme-v1'); ?></h4>
                                <p class="text-gray-300 text-sm mb-1"><?php _e('Available Mon-Fri, 8am-6pm EAT', 'faminga-theme-v1'); ?></p>
                                <a href="tel:+250780123456" class="text-primary hover:underline text-sm">+250 780 123 456</a>
                            </div>
                        </div>
                        
                        <!-- WhatsApp Support -->
                        <div class="flex items-start">
                            <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-4">
                                <i class="ri-whatsapp-line text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-medium mb-1"><?php _e('WhatsApp Support', 'faminga-theme-v1'); ?></h4>
                                <p class="text-gray-300 text-sm mb-1"><?php _e('Quick responses during business hours', 'faminga-theme-v1'); ?></p>
                                <a href="https://wa.me/250780123456" class="text-primary hover:underline text-sm">+250 780 123 456</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Message Form -->
                <div>
                    <h3 class="text-xl font-semibold mb-4"><?php _e('Send Us a Message', 'faminga-theme-v1'); ?></h3>
                    
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Your Name', 'faminga-theme-v1'); ?></label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php esc_attr_e('Enter your name', 'faminga-theme-v1'); ?>">
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Email Address', 'faminga-theme-v1'); ?></label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm" placeholder="<?php esc_attr_e('Enter your email', 'faminga-theme-v1'); ?>">
                        </div>
                        
                        <div class="mb-4">
                            <label for="topic" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Help Topic', 'faminga-theme-v1'); ?></label>
                            <select id="topic" name="topic" class="w-full appearance-none px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm pr-8">
                                <option value="" disabled selected><?php esc_html_e('Select a topic', 'faminga-theme-v1'); ?></option>
                                <option value="account"><?php _e('Account & Billing', 'faminga-theme-v1'); ?></option>
                                <option value="app"><?php _e('Mobile App Issues', 'faminga-theme-v1'); ?></option>
                                <option value="iot"><?php _e('IoT Device Setup', 'faminga-theme-v1'); ?></option>
                                <option value="features"><?php _e('Feature Questions', 'faminga-theme-v1'); ?></option>
                                <option value="other"><?php _e('Other', 'faminga-theme-v1'); ?></option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2"><?php _e('Your Message', 'faminga-theme-v1'); ?></label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 bg-[#001a00] border border-gray-700 rounded text-white text-sm resize-none" placeholder="<?php esc_attr_e('Describe your issue or question...', 'faminga-theme-v1'); ?>"></textarea>
                        </div>
                        
                        <button type="submit" class="px-6 py-3 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 !rounded-button"><?php _e('Send Message', 'faminga-theme-v1'); ?></button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
function toggleFaq(element) {
    // Toggle the content visibility
    const content = element.nextElementSibling;
    content.classList.toggle('hidden');
    
    // Toggle the icon rotation
    const icon = element.querySelector('.ri-arrow-down-s-line');
    icon.classList.toggle('rotate-180');
}
</script>

<?php get_footer(); ?>