<?php
/**
 * Template Name: Partners
 *
 * @package Faminga_Theme_V1
 */

get_header();

// Get translated texts
$t = faminga_get_translated_texts();
?>

<main class="py-16 px-6">
    <div class="container mx-auto max-w-6xl">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php echo esc_html($t['our_strategic_partners']); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto"><?php echo esc_html($t['partners_subtitle']); ?></p>
        </div>

        <!-- Partnership Types -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php echo esc_html($t['types_of_partnerships']); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-government-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php _e( 'Government Partners', 'faminga-theme-v1' ); ?></h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Collaborating with ministries and agencies to implement national agricultural policies and programs.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-graduation-cap-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php _e( 'Research Institutions', 'faminga-theme-v1' ); ?></h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Working with universities and research centers to develop innovative agricultural solutions.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-building-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php _e( 'Technology Partners', 'faminga-theme-v1' ); ?></h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Integrating with leading technology companies to enhance our platform capabilities.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mx-auto mb-4">
                        <i class="ri-global-line text-primary text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2"><?php _e( 'Development Partners', 'faminga-theme-v1' ); ?></h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Partnering with international organizations to scale impact across Africa.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </section>

        <!-- Government Partners -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e( 'Government & International Partners', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="Ministry of Agriculture Rwanda" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'Ministry of Agriculture', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Rwanda', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Implementing smart agriculture initiatives across all 30 districts, reaching over 15,000 farmers with digital farming tools and training programs.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="FAO" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'Food and Agriculture Organization', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'United Nations', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Collaborating on food security monitoring systems and early warning mechanisms for drought and pest management across East Africa.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="World Bank" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'World Bank', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'International Finance', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Supporting digital agriculture transformation projects with $50M funding for technology adoption and farmer training programs.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="USAID" class="mr-4">
                        <div>
                            <h3 class="font-bold">USAID</h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'United States Agency for International Development', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Implementing Feed the Future initiatives through technology-enabled agricultural extension services and market linkage programs.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="African Union" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'African Union', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Continental Organization', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Contributing to the Comprehensive Africa Agriculture Development Programme (CAADP) with innovative technology solutions for sustainable agriculture.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="EU" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'European Union', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Development Cooperation', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Supporting green agriculture transition through climate-smart farming technologies and sustainable agricultural practices across partner countries.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </section>

        <!-- Research Partners -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e( 'Research & Academic Partners', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="University of Rwanda" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'University of Rwanda', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Research Institution', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Joint research on AI applications in agriculture, developing machine learning models for crop disease detection and yield prediction.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="CGIAR" class="mr-4">
                        <div>
                            <h3 class="font-bold">CGIAR</h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Global Agricultural Research Partnership', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Collaborating on climate-resilient crop varieties and sustainable farming practices research for smallholder farmers across Africa.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="ICRAF" class="mr-4">
                        <div>
                            <h3 class="font-bold">ICRAF</h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'World Agroforestry Centre', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Developing agroforestry systems integrated with smart farming technologies for improved soil health and carbon sequestration.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="MIT" class="mr-4">
                        <div>
                            <h3 class="font-bold">MIT</h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Massachusetts Institute of Technology', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Advanced IoT sensor development and edge computing solutions for agricultural applications in low-connectivity environments.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="Wageningen University" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'Wageningen University', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Netherlands', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Research collaboration on precision agriculture techniques and sustainable farming systems for tropical agriculture.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/60x40" alt="Makerere University" class="mr-4">
                        <div>
                            <h3 class="font-bold"><?php _e( 'Makerere University', 'faminga-theme-v1' ); ?></h3>
                            <p class="text-gray-400 text-sm"><?php _e( 'Uganda', 'faminga-theme-v1' ); ?></p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm"><?php _e( 'Joint programs in agricultural innovation, training the next generation of agricultural technologists and extension workers.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </section>

        <!-- Technology Partners -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e( 'Technology Partners', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <img src="https://via.placeholder.com/120x60" alt="Microsoft Azure" class="mx-auto mb-4">
                    <h3 class="font-semibold mb-2">Microsoft Azure</h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Cloud infrastructure and AI services for scalable agricultural solutions.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <img src="https://via.placeholder.com/120x60" alt="Google Cloud" class="mx-auto mb-4">
                    <h3 class="font-semibold mb-2">Google Cloud</h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Machine learning and satellite imagery processing for crop monitoring.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <img src="https://via.placeholder.com/120x60" alt="Intel" class="mx-auto mb-4">
                    <h3 class="font-semibold mb-2">Intel</h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'Edge computing hardware for real-time agricultural data processing.', 'faminga-theme-v1' ); ?></p>
                </div>

                <div class="bg-[#0a2c0a] p-6 rounded-lg border border-[#526700] border-opacity-30 text-center hover:shadow-lg transition duration-300">
                    <img src="https://via.placeholder.com/120x60" alt="NVIDIA" class="mx-auto mb-4">
                    <h3 class="font-semibold mb-2">NVIDIA</h3>
                    <p class="text-gray-300 text-sm"><?php _e( 'GPU computing for advanced AI model training and deployment.', 'faminga-theme-v1' ); ?></p>
                </div>
            </div>
        </section>

        <!-- Partnership Benefits -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e( 'Partnership Benefits', 'faminga-theme-v1' ); ?></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-bold mb-6"><?php _e( 'For Organizations', 'faminga-theme-v1' ); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-arrow-right-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Expanded Reach', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Access to our network of 50,000+ farmers across Africa for implementing programs and initiatives.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-database-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Data Insights', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Access to aggregated agricultural data for research, policy making, and program evaluation.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-rocket-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Innovation Acceleration', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Collaborative development of cutting-edge agricultural technologies and solutions.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6"><?php _e( 'For Farmers', 'faminga-theme-v1' ); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-graduation-cap-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Enhanced Training', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Access to world-class agricultural training and extension services through our partner network.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-money-dollar-circle-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Financial Access', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Improved access to credit, insurance, and financial services through partner institutions.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center bg-primary bg-opacity-20 rounded-full mr-3 mt-1">
                                <i class="ri-shopping-bag-line text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1"><?php _e( 'Market Opportunities', 'faminga-theme-v1' ); ?></h4>
                                <p class="text-gray-300 text-sm"><?php _e( 'Direct connections to premium buyers and export markets through our partnership network.', 'faminga-theme-v1' ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Become a Partner -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold text-center mb-12"><?php _e( 'Become a Partner', 'faminga-theme-v1' ); ?></h2>
            
            <div class="bg-[#0a2c0a] p-8 rounded-lg border border-[#526700] border-opacity-30 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-xl font-bold mb-4"><?php _e( 'Partner with Faminga', 'faminga-theme-v1' ); ?></h3>
                        <p class="text-gray-300 mb-6"><?php _e( 'We\'re always looking for organizations that share our passion for transforming African agriculture. Whether you\'re a government agency, research institution, technology company, or development organization, we\'d love to explore partnership opportunities.', 'faminga-theme-v1' ); ?></p>
                        
                        <h4 class="font-semibold mb-3"><?php _e( 'Partnership Criteria:', 'faminga-theme-v1' ); ?></h4>
                        <ul class="space-y-2 text-gray-300 text-sm">
                            <li class="flex items-center">
                                <i class="ri-check-line text-primary mr-2"></i>
                                <?php _e( 'Alignment with our mission and values', 'faminga-theme-v1' ); ?>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-check-line text-primary mr-2"></i>
                                <?php _e( 'Commitment to farmer-centric solutions', 'faminga-theme-v1' ); ?>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-check-line text-primary mr-2"></i>
                                <?php _e( 'Sustainable development focus', 'faminga-theme-v1' ); ?>
                            </li>
                            <li class="flex items-center">
                                <i class="ri-check-line text-primary mr-2"></i>
                                <?php _e( 'Proven track record in your field', 'faminga-theme-v1' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partnership.jpg" alt="<?php esc_attr_e( 'Partnership', 'faminga-theme-v1' ); ?>" class="w-full rounded-lg mb-6">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-block px-8 py-4 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php _e( 'Start Partnership Discussion', 'faminga-theme-v1' ); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center">
            <div class="bg-[#0a2c0a] p-12 rounded-lg border border-[#526700] border-opacity-30">
                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($t['together_transform_agriculture']); ?></h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto"><?php echo esc_html($t['join_growing_network']); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="px-8 py-4 bg-primary text-white font-medium hover:bg-opacity-90 transition-all duration-300 rounded-lg"><?php echo esc_html($t['explore_partnership']); ?></a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="px-8 py-4 border border-primary text-primary hover:bg-primary hover:text-white transition-all duration-300 rounded-lg"><?php echo esc_html($t['learn_about_us']); ?></a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?> 