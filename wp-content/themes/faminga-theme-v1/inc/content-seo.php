<?php
declare(strict_types=1);

/**
 * Content SEO - Smart Farming Content Stubs & FAQ Sections
 * 
 * @package Faminga_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create content stubs for smart farming topics
 */
function faminga_create_content_stubs() {
    // Only run once after theme activation
    if (get_option('faminga_content_stubs_created') === 'yes') {
        return;
    }
    
    $content_stubs = faminga_get_content_stubs();
    
    foreach ($content_stubs as $stub) {
        // Check if page already exists
        $existing_page = get_page_by_path($stub['slug']);
        if ($existing_page) {
            continue;
        }
        
        $page_data = [
            'post_title' => $stub['title'],
            'post_content' => $stub['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_name' => $stub['slug'],
            'meta_input' => [
                '_seo_title' => $stub['seo_title'],
                '_seo_description' => $stub['seo_description'],
                '_seo_keywords' => $stub['seo_keywords']
            ]
        ];
        
        $page_id = wp_insert_post($page_data);
        
        if ($page_id && !is_wp_error($page_id)) {
            // Set featured image if specified
            if (!empty($stub['featured_image'])) {
                set_post_thumbnail($page_id, $stub['featured_image']);
            }
        }
    }
    
    update_option('faminga_content_stubs_created', 'yes');
}

/**
 * Get content stubs data
 */
function faminga_get_content_stubs(): array {
    return [
        [
            'title' => 'Smart Farming Solutions - AI-Powered Agriculture',
            'slug' => 'smart-farming-solutions',
            'seo_title' => 'Smart Farming Solutions | AI-Powered Agriculture Technology - Faminga',
            'seo_description' => 'Discover advanced smart farming solutions with AI technology. Monitor crops, detect diseases, predict weather, and optimize yields with Faminga\'s precision agriculture platform.',
            'seo_keywords' => 'smart farming, AI agriculture, precision farming, crop monitoring, agricultural technology, farming solutions',
            'content' => faminga_get_smart_farming_content(),
        ],
        [
            'title' => 'IoT in Agriculture - Connected Farm Management',
            'slug' => 'iot-agriculture',
            'seo_title' => 'IoT in Agriculture | Connected Farm Management Systems - Faminga',
            'seo_description' => 'Learn how IoT sensors and devices revolutionize agriculture. Monitor soil moisture, temperature, humidity, and crop conditions in real-time with our IoT farming solutions.',
            'seo_keywords' => 'IoT agriculture, farm sensors, connected farming, agricultural IoT, smart sensors, farm automation',
            'content' => faminga_get_iot_agriculture_content(),
        ],
        [
            'title' => 'AI Disease Detection in Crops - Early Warning System',
            'slug' => 'ai-disease-detection',
            'seo_title' => 'AI Disease Detection in Crops | Early Warning System - Faminga',
            'seo_description' => 'Protect your crops with AI-powered disease detection. Get early warnings, identify plant diseases, and receive treatment recommendations to prevent crop loss.',
            'seo_keywords' => 'crop disease detection, AI plant pathology, agricultural disease prevention, plant health monitoring, crop protection',
            'content' => faminga_get_disease_detection_content(),
        ],
        [
            'title' => 'Agricultural Weather Forecasting - Precision Weather Data',
            'slug' => 'agricultural-weather-forecasting',
            'seo_title' => 'Agricultural Weather Forecasting | Precision Weather Data - Faminga',
            'seo_description' => 'Access hyper-local weather forecasting designed for farmers. Get accurate precipitation, temperature, and weather alerts to optimize planting and harvesting.',
            'seo_keywords' => 'agricultural weather, farm weather forecasting, precision weather data, farming weather alerts, crop weather monitoring',
            'content' => faminga_get_weather_forecasting_content(),
        ],
        [
            'title' => 'Sustainable Agriculture Practices - Eco-Friendly Farming',
            'slug' => 'sustainable-agriculture',
            'seo_title' => 'Sustainable Agriculture Practices | Eco-Friendly Farming - Faminga',
            'seo_description' => 'Implement sustainable farming practices with data-driven insights. Reduce environmental impact while maintaining productivity with our green agriculture solutions.',
            'seo_keywords' => 'sustainable agriculture, eco-friendly farming, green agriculture, environmental farming, sustainable crop production',
            'content' => faminga_get_sustainable_agriculture_content(),
        ],
        [
            'title' => 'Farm Management Software - Complete Agricultural Solution',
            'slug' => 'farm-management-software',
            'seo_title' => 'Farm Management Software | Complete Agricultural Solution - Faminga',
            'seo_description' => 'Streamline your farm operations with comprehensive management software. Track expenses, manage inventory, plan crops, and analyze performance in one platform.',
            'seo_keywords' => 'farm management software, agricultural management system, farm planning software, crop management, farm operations',
            'content' => faminga_get_farm_management_content(),
        ]
    ];
}

/**
 * Smart Farming Solutions Content
 */
function faminga_get_smart_farming_content(): string {
    $current_lang = faminga_get_current_language();
    
    if ($current_lang === 'rw_RW') {
        return '
        <h1>Ibisubizo by\'Ubuhinzi Bushingiye ku Bumenyi</h1>
        
        <p>Faminga itanga ibisubizo by\'ubuhinzi bushingiye ku bumenyi bikoresha ikoranabuhanga ry\'ubwenge bw\'ikoranabuhanga (AI) no gukurikirana ibimera mu gihe nyacyo.</p>
        
        <h2>Inyungu z\'Ubuhinzi Bushingiye ku Bumenyi</h2>
        <ul>
            <li><strong>Kongera umusaruro:</strong> Koresha amakuru meza kugira umusaruro munini</li>
            <li><strong>Kugabanya ibiciro:</strong> Koresha neza inyongeramusaruro n\'amazi</li>
            <li><strong>Kurinda ibidukikije:</strong> Kugabanya imboni n\'inyongeramusaruro zitari nke</li>
            <li><strong>Gufata ibyemezo byihuse:</strong> Bone amakuru y\'igihe nyacyo</li>
        </ul>
        
        <h2>Ibikubiye muri gahunda yacu</h2>
        <p>Gahunda ya Faminga ikubiyemo:</p>
        <ul>
            <li>Gukurikirana ibimera bikoresha satellite</li>
            <li>Kugaragaza indwara z\'ibimera</li>
            <li>Guhanura ikirere</li>
            <li>Inama z\'impuguke mu buhinzi</li>
        </ul>';
    }
    
    return '
    <h1>Smart Farming Solutions - Transform Your Agriculture with AI</h1>
    
    <p>Faminga provides cutting-edge smart farming solutions that leverage artificial intelligence, IoT sensors, and real-time data analytics to revolutionize modern agriculture.</p>
    
    <h2>Benefits of Smart Farming</h2>
    <ul>
        <li><strong>Increased Yields:</strong> Optimize crop production with data-driven insights</li>
        <li><strong>Reduced Costs:</strong> Efficient use of fertilizers, water, and pesticides</li>
        <li><strong>Environmental Protection:</strong> Minimize waste and chemical runoff</li>
        <li><strong>Real-time Decision Making:</strong> Access to live farm data and analytics</li>
    </ul>
    
    <h2>Our Smart Farming Platform Includes</h2>
    <p>Faminga\'s comprehensive platform offers:</p>
    <ul>
        <li>Satellite-based crop monitoring</li>
        <li>AI-powered disease detection</li>
        <li>Weather forecasting and alerts</li>
        <li>Expert agricultural advice</li>
        <li>Farm management tools</li>
        <li>Market price tracking</li>
    </ul>
    
    <h2>FAQ - Smart Farming Solutions</h2>
    ' . faminga_render_faq_section(faminga_get_smart_farming_faqs()) . '
    
    <h2>Get Started with Smart Farming</h2>
    <p>Ready to transform your farming operations? <a href="' . home_url('/demo-request') . '">Request a demo</a> and discover how Faminga can boost your agricultural productivity.</p>';
}

/**
 * IoT Agriculture Content
 */
function faminga_get_iot_agriculture_content(): string {
    return '
    <h1>IoT in Agriculture - Connected Farm Management</h1>
    
    <p>Internet of Things (IoT) technology is transforming agriculture by providing real-time monitoring and automated control systems for modern farms.</p>
    
    <h2>IoT Sensors for Farming</h2>
    <ul>
        <li><strong>Soil Moisture Sensors:</strong> Monitor water levels and optimize irrigation</li>
        <li><strong>Weather Stations:</strong> Track local climate conditions</li>
        <li><strong>Crop Health Sensors:</strong> Detect plant stress and disease early</li>
        <li><strong>Livestock Monitoring:</strong> Track animal health and behavior</li>
    </ul>
    
    <h2>Benefits of IoT in Agriculture</h2>
    <ul>
        <li>Water conservation through smart irrigation</li>
        <li>Early pest and disease detection</li>
        <li>Automated climate control in greenhouses</li>
        <li>Precision fertilizer application</li>
        <li>Remote farm monitoring capabilities</li>
    </ul>
    
    <h2>FAQ - IoT Agriculture</h2>
    ' . faminga_render_faq_section(faminga_get_iot_agriculture_faqs()) . '
    
    <p><a href="' . home_url('/contact') . '">Contact us</a> to learn more about implementing IoT solutions on your farm.</p>';
}

/**
 * Disease Detection Content
 */
function faminga_get_disease_detection_content(): string {
    return '
    <h1>AI Disease Detection in Crops - Early Warning System</h1>
    
    <p>Protect your crops with our advanced AI-powered disease detection system that identifies plant diseases before they spread.</p>
    
    <h2>How AI Disease Detection Works</h2>
    <ol>
        <li><strong>Image Analysis:</strong> AI analyzes crop photos from drones or cameras</li>
        <li><strong>Pattern Recognition:</strong> Machine learning identifies disease symptoms</li>
        <li><strong>Early Warning:</strong> Get alerts before diseases spread</li>
        <li><strong>Treatment Recommendations:</strong> Receive specific treatment advice</li>
    </ol>
    
    <h2>Common Diseases We Detect</h2>
    <ul>
        <li>Blight in potatoes and tomatoes</li>
        <li>Rust in wheat and coffee</li>
        <li>Bacterial infections in vegetables</li>
        <li>Fungal diseases in fruits</li>
        <li>Viral infections in crops</li>
    </ul>
    
    <h2>FAQ - Disease Detection</h2>
    ' . faminga_render_faq_section(faminga_get_disease_detection_faqs()) . '
    
    <p>Early detection saves crops and money. <a href="' . home_url('/demo-request') . '">Try our disease detection system</a> today.</p>';
}

/**
 * Weather Forecasting Content
 */
function faminga_get_weather_forecasting_content(): string {
    return '
    <h1>Agricultural Weather Forecasting - Precision Weather Data</h1>
    
    <p>Access hyper-local weather data designed specifically for agricultural decision-making and farm planning.</p>
    
    <h2>Weather Data Features</h2>
    <ul>
        <li><strong>7-day Forecasts:</strong> Plan planting and harvesting activities</li>
        <li><strong>Precipitation Alerts:</strong> Get early warnings for storms and drought</li>
        <li><strong>Temperature Monitoring:</strong> Protect crops from frost and heat</li>
        <li><strong>Wind Speed Data:</strong> Plan spraying and field operations</li>
        <li><strong>Humidity Tracking:</strong> Prevent fungal diseases</li>
    </ul>
    
    <h2>Agricultural Weather Benefits</h2>
    <ul>
        <li>Optimize irrigation scheduling</li>
        <li>Plan harvest timing perfectly</li>
        <li>Protect crops from weather damage</li>
        <li>Reduce pesticide applications</li>
        <li>Improve crop quality and yield</li>
    </ul>
    
    <h2>FAQ - Weather Forecasting</h2>
    ' . faminga_render_faq_section(faminga_get_weather_forecasting_faqs()) . '
    
    <p>Stay ahead of weather changes. <a href="' . home_url('/smart-farming-solutions') . '">Learn more about our weather services</a>.</p>';
}

/**
 * Get other content functions
 */
function faminga_get_sustainable_agriculture_content(): string {
    return '
    <h1>Sustainable Agriculture Practices - Eco-Friendly Farming</h1>
    
    <p>Implement sustainable farming practices that protect the environment while maintaining high productivity and profitability.</p>
    
    <h2>Sustainable Farming Techniques</h2>
    <ul>
        <li><strong>Precision Agriculture:</strong> Use exact amounts of inputs where needed</li>
        <li><strong>Crop Rotation:</strong> Maintain soil health and reduce pests</li>
        <li><strong>Integrated Pest Management:</strong> Minimize chemical pesticide use</li>
        <li><strong>Water Conservation:</strong> Efficient irrigation and water management</li>
        <li><strong>Soil Health:</strong> Build organic matter and prevent erosion</li>
    </ul>
    
    <h2>Environmental Benefits</h2>
    <ul>
        <li>Reduced carbon footprint</li>
        <li>Improved soil health</li>
        <li>Water conservation</li>
        <li>Biodiversity protection</li>
        <li>Reduced chemical runoff</li>
    </ul>
    
    <p><a href="' . home_url('/contact') . '">Contact us</a> to learn about implementing sustainable practices on your farm.</p>';
}

function faminga_get_farm_management_content(): string {
    return '
    <h1>Farm Management Software - Complete Agricultural Solution</h1>
    
    <p>Streamline your entire farm operation with our comprehensive farm management software platform.</p>
    
    <h2>Key Features</h2>
    <ul>
        <li><strong>Field Management:</strong> Track crops, activities, and inputs by field</li>
        <li><strong>Financial Tracking:</strong> Monitor expenses, income, and profitability</li>
        <li><strong>Inventory Management:</strong> Track seeds, fertilizers, and equipment</li>
        <li><strong>Labor Management:</strong> Schedule workers and track time</li>
        <li><strong>Compliance:</strong> Maintain records for certifications</li>
    </ul>
    
    <h2>Management Benefits</h2>
    <ul>
        <li>Improve operational efficiency</li>
        <li>Reduce paperwork and errors</li>
        <li>Better financial planning</li>
        <li>Regulatory compliance</li>
        <li>Data-driven decisions</li>
    </ul>
    
    <p><a href="' . home_url('/demo-request') . '">Request a demo</a> to see how our farm management software can help your operation.</p>';
}

/**
 * FAQ Section Data
 */
function faminga_get_smart_farming_faqs(): array {
    return [
        [
            'question' => 'What is smart farming and how does it work?',
            'answer' => 'Smart farming uses technology like AI, IoT sensors, and data analytics to optimize agricultural practices. It works by collecting real-time data from your fields and providing insights to improve crop yields, reduce costs, and make better farming decisions.'
        ],
        [
            'question' => 'How much does smart farming technology cost?',
            'answer' => 'Smart farming costs vary depending on farm size and technology needed. Faminga offers flexible pricing plans starting from basic monitoring to comprehensive farm management solutions. Most farmers see ROI within the first growing season.'
        ],
        [
            'question' => 'Can smart farming work on small farms?',
            'answer' => 'Yes! Smart farming solutions are scalable and work effectively on farms of all sizes. Small-scale farmers often see significant benefits from crop monitoring, weather alerts, and disease detection without large upfront investments.'
        ],
        [
            'question' => 'What crops can benefit from smart farming?',
            'answer' => 'Smart farming works with virtually all crops including cereals (maize, wheat, rice), vegetables, fruits, coffee, tea, and cash crops. Our AI models are trained on diverse crop types common in Rwanda and East Africa.'
        ]
    ];
}

function faminga_get_iot_agriculture_faqs(): array {
    return [
        [
            'question' => 'What IoT sensors do I need for my farm?',
            'answer' => 'Basic IoT setup includes soil moisture sensors, weather stations, and crop monitoring cameras. Advanced systems add livestock trackers, equipment monitoring, and automated irrigation controls based on your specific needs.'
        ],
        [
            'question' => 'How reliable is IoT technology in remote areas?',
            'answer' => 'Modern IoT systems use cellular, satellite, and LoRaWAN networks to ensure connectivity even in remote areas. Many sensors can store data locally and sync when connection is available.'
        ],
        [
            'question' => 'Do IoT sensors require technical expertise to install?',
            'answer' => 'Most IoT sensors are designed for easy installation. Faminga provides installation support and training. Basic sensors can be installed by farmers themselves, while complex systems include professional installation.'
        ]
    ];
}

function faminga_get_disease_detection_faqs(): array {
    return [
        [
            'question' => 'How accurate is AI disease detection?',
            'answer' => 'Our AI disease detection system has over 95% accuracy for common crop diseases. It continuously learns from new data and expert validations to improve accuracy for local conditions and crop varieties.'
        ],
        [
            'question' => 'How early can diseases be detected?',
            'answer' => 'AI can often detect diseases 3-7 days before they become visible to the human eye, giving farmers crucial early warning time to prevent spread and minimize crop loss.'
        ],
        [
            'question' => 'What happens after a disease is detected?',
            'answer' => 'When disease is detected, you receive immediate alerts with treatment recommendations, including specific products, application rates, and timing. Our agronomists can provide additional consultation if needed.'
        ]
    ];
}

function faminga_get_weather_forecasting_faqs(): array {
    return [
        [
            'question' => 'How accurate are agricultural weather forecasts?',
            'answer' => 'Our hyper-local weather forecasts combine satellite data, ground sensors, and AI models to achieve 85-90% accuracy for 7-day forecasts. Short-term forecasts (1-3 days) are typically 95% accurate.'
        ],
        [
            'question' => 'Can I get weather alerts for my specific farm?',
            'answer' => 'Yes! Weather alerts are customized for your exact farm location and crop types. You can set thresholds for temperature, rainfall, wind, and other conditions important to your crops.'
        ],
        [
            'question' => 'Does weather forecasting work offline?',
            'answer' => 'Weather data is automatically synced to your device when connected. Recent forecasts and alerts remain available offline, with updates syncing when connectivity returns.'
        ]
    ];
}

/**
 * Render FAQ section with schema markup
 */
function faminga_render_faq_section(array $faqs): string {
    if (empty($faqs)) {
        return '';
    }
    
    $output = '<div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">' . "\n";
    
    foreach ($faqs as $faq) {
        $output .= '<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">' . "\n";
        $output .= '<h3 class="faq-question" itemprop="name">' . esc_html($faq['question']) . '</h3>' . "\n";
        $output .= '<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">' . "\n";
        $output .= '<div itemprop="text">' . wpautop(esc_html($faq['answer'])) . '</div>' . "\n";
        $output .= '</div>' . "\n";
        $output .= '</div>' . "\n";
    }
    
    $output .= '</div>' . "\n";
    
    // Add FAQ schema to head
    add_action('wp_footer', function() use ($faqs) {
        faminga_add_faq_schema($faqs);
    });
    
    return $output;
}

/**
 * Add internal linking suggestions
 */
function faminga_add_internal_links($content) {
    if (!is_singular() || is_admin()) {
        return $content;
    }
    
    $internal_links = [
        'smart farming' => home_url('/smart-farming-solutions'),
        'IoT agriculture' => home_url('/iot-agriculture'),
        'disease detection' => home_url('/ai-disease-detection'),
        'weather forecasting' => home_url('/agricultural-weather-forecasting'),
        'farm management' => home_url('/farm-management-software'),
        'sustainable agriculture' => home_url('/sustainable-agriculture'),
        'demo request' => home_url('/demo-request'),
        'contact us' => home_url('/contact')
    ];
    
    foreach ($internal_links as $keyword => $url) {
        $pattern = '/\b(' . preg_quote($keyword, '/') . ')\b(?![^<]*<\/a>)/i';
        $replacement = '<a href="' . esc_url($url) . '" title="' . esc_attr($keyword) . '">$1</a>';
        $content = preg_replace($pattern, $replacement, $content, 1);
    }
    
    return $content;
}
add_filter('the_content', 'faminga_add_internal_links');

/**
 * Initialize content stubs on theme activation
 */
function faminga_activate_content_seo() {
    faminga_create_content_stubs();
}
register_activation_hook(__FILE__, 'faminga_activate_content_seo');
