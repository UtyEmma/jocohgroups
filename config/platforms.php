<?php

use App\Enums\Platforms;

return [

    Platforms::GROUP->value => [
        'name' => Platforms::GROUP->label(),
        'slug' => Platforms::GROUP->value,
        'logo' => 'assets/group/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Group',
            'company_name' => 'Jocoh Group',
            'site_name' => 'Jocoh Group',
            'site_email' => 'info@jocohgroup.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => [
            "home" => [
                "sections" => [
                    [
                        "type" => "hero_section",
                        "data" => [
                            "image" => "/assets/group/images/banners/farmers-in-the-field.jpeg",
                            "title" => "Facilitating the production and delivery of **agricultural** produce across Africa",
                            "caption" => " Founded on the belief that farming can be both profitable and environmentally responsible, we integrate innovation, technology, and community engagement to drive positive change in the agricultural sector."
                        ]
                    ],
                    [
                        "type" => "about_section",
                        "data" => [
                            "image_1" => "/assets/group/images/banners/factory.jpeg",
                            "image_2" => "/assets/group/images/banners/harvesting.jpeg",
                            "title" => "We Are Leading the Charge for Sustainable Agriculture **Join us today.**",
                            "description" => "Redefining food production with technology and collaboration to combat climate change, \nfood insecurity, and environmental degradation."
                        ]
                    ],
                    [
                        "type" => "impact_section",
                        "data" => [
                            "title" => "Our Impact over the years",
                            "impact" => [
                                "45" => "Products Produced Organically",
                                "5+" => "Years in production",
                                "80+" => "Global Partners"
                            ]
                        ]
                    ],
                    [
                        "type" => "ventures_section",
                        "data" => [
                            "ventures" => [
                                [
                                    "image" => "/assets/group/images/banners/supermarket-shoppers.jpeg",
                                    "logo" => "/assets/stores/images/logo.png",
                                    "title" => "Jocoh Stores",
                                    "link" => "https://stores.jocohgroup.com",
                                    "caption" => "We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space."
                                ],
                                [
                                    "image" => "/group/images/banners/tomato-harvesters.png",
                                    "logo" => "/farms/images/logo.png",
                                    "title" => "Jocoh Farms",
                                    "link" => "https://farms.jocoh.com",
                                    "caption" => "We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just an amazing digital space."
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            "about" => [
                "sections" => [
                    [
                        "type" => "banner_section",
                        "data" => [
                            "button_text" => "Explore Careers",
                            "button_link" => "group.about",
                            "image" => "/assets/group/images/banners/farmers-in-the-field.jpeg",
                            "title" => "Join our team to help lead the change in food production",
                            "caption" => "A sustainable food system means more than just producing food. It means ensuring that every step in the process—from farm to table—is done with respect for people and the planet. Let's work together to create a brighter future for everyone."
                        ]
                    ],
                    [
                        "type" => "about_section",
                        "data" => [
                            "title" => "Our goals.",
                            "description" => "We strive to be the gold standard for high-quality, sustainably grown agricultural products. With a commitment to environmental stewardship and social responsibility, we work to deliver fresh, nutritious, and delicious food to our customers, while also creating jobs and economic opportunities for our employees and communities. By harnessing the power of technology, sustainable farming practices, and community partnerships, we hope to contribute to a more just and resilient food system for all."
                        ]
                    ],
                    [
                        "type" => "uniqueness_section",
                        "data" => [
                            "title" => "Here’s what makes us Unique",
                            "uniqueness" => [
                                [
                                    "title" => "Sustainability-Driven",
                                    "caption" => "Jocoh Farm Produce is committed to eco-friendly and socially responsible farming practices, which sets us apart from conventional agricultural businesses."
                                ],
                                [
                                    "title" => "Locally-Focused",
                                    "caption" => "Our approach emphasizes local partnerships and community engagement, which ensures that our impact is felt beyond the farm and reaches into the neighborhoods where we operate."
                                ],
                                [
                                    "title" => "Technology-Enabled",
                                    "caption" => "Jocoh leverages cutting-edge technology to optimize our farming operations and ensure the quality and freshness of our products, giving us a competitive edge in the marketplace."
                                ]
                            ]
                        ]
                    ],
                    [
                        "type" => "career_section",
                        "data" => [
                            "title" => "Our Openings"
                        ]
                    ]
                ]
            ]
        ]        
    ],

    Platforms::FARMS->value => [
        'name' => Platforms::FARMS->label(),
        'slug' => Platforms::FARMS->value,
        'logo' => 'assets/farms/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Farms',
            'company_name' => 'Jocoh Farms',
            'site_name' => 'Jocoh Farms',
            'site_email' => 'info@jocohgroup.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => [
            "home" => [
                "sections" => [
                    [
                        "type" => "hero_section",
                        "data" => [
                            "sliders" => [
                                [
                                    "image" => "/assets/group/images/banners/tomato-harvesters.png",
                                    "title" => "**Organic** food products from the ground to your table.",
                                    "caption" => "From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields",
                                    "button_text" => "Contact Us",
                                    "button_link" => "stores.contact"
                                ],
                                [
                                    "button_text" => "Contact Us",
                                    "button_link" => "stores.contact",
                                    "image" => "/assets/group/images/banners/butter-processing.png",
                                    "title" => "**Organically,** processed & delivered to you ",
                                    "caption" => "From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields"
                                ],
                                [
                                    "button_text" => "Contact Us",
                                    "button_link" => "stores.contact",
                                    "image" => "/assets/group/images/banners/chicken-coop.jpeg",
                                    "title" => "**Rared,** with absolute care to produce the finest results",
                                    "caption" => "From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields"
                                ],
                                [
                                    "button_text" => "Contact Us",
                                    "button_link" => "stores.contact",
                                    "image" => "/assets/group/images/banners/egg-trays.jpeg",
                                    "title" => "**Best products,** delivered with uptmost care.",
                                    "caption" => "From precision farming to smart irrigation our platform offers a suite of tools designed to the enhance efficiency and increase yields"
                                ]
                            ]
                        ]
                    ],
                    [
                        "type" => "about_section",
                        "data" => [
                            "caption" => "Jocoh Farms",
                            "title" => "The best producer of **organic** food imported and shipped across Africa "
                        ]
                    ],
                    [
                        "type" => "mission_section",
                        "data" => [
                            "vision_title" => "High-quality organic products for you and your family.",
                            "vision_caption" => "Explore comprehensive suite of innovative farming solution tailored to meet the unique challenges of modern agriculture.",
                            "title" => "who we are",
                            "heading" => "Africa’s leading provider of **Agricultural ** products.",
                            "caption" => "We believe in the transformative power of agriculture and its ability to shape sustainable future. our platform is more than just a digital space.",
                            "image" => "/assets/group/images/banners/tomato-fruit.png",
                            "mission_title" => "High-quality organic products for you and your family.",
                            "mission_caption" => "Explore comprehensive suite of innovative farming solution tailored to meet the unique challenges of modern agriculture."
                        ]
                    ],
                    [
                        "type" => "product_section",
                        "data" => [
                            "title" => "our products",
                            "heading" => "Explore our organic **Products**",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space."
                        ]
                    ],
                    [
                        "type" => "partners_section",
                        "data" => [
                            "title" => "trusted partners",
                            "heading" => "Partnerships and **Collaborations.**",
                            "caption" => "Share experiences, exchange ideas, and collaborate on innovative projects that have the potential to revolutionise agriculture Together, we can build a resilient agricultural."
                        ]
                    ],
                    [
                        "type" => "process_section",
                        "data" => [
                            "button_text" => "Contact Us",
                            "button_link" => "stores.contact",
                            "title" => "our Process",
                            "heading" => "**Discover** Fresh farm produce from Jocoh Farm.",
                            "caption" => "Our commitment goes beyond digital boundaries. Jocoh Farm is dedicated to empowering farmers. through partnerships, education initiatives and technology."
                        ]
                    ],
                    [
                        "type" => "client_section",
                        "data" => [
                            "title" => "client’s testimonial",
                            "heading" => "What clients are saying about the Jocoh’s Products",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space."
                        ]
                    ],
                    [
                        "type" => "faq_section",
                        "data" => [
                            "title" => "frequently asked questions",
                            "heading" => "How can agri-entrepreneurs Innovations. showcase their **innovations**",
                            "caption" => "Explore the all resources and initiatives aimed at promoting best eco-friendly farming methods and reducing of the environmental impact of agriculture.",
                            "image" => "/assets/group/images/banners/farm-machine-at-work.png"
                        ]
                    ]
                ]
            ]
        ]        
    ],

    Platforms::STORES->value => [
        'name' => Platforms::STORES->label(),
        'slug' => Platforms::STORES->value,
        'logo' => 'assets/stores/images/logo.png',
        'settings' => [
            'site_title' => 'Jocoh Stores',
            'company_name' => 'Jocoh Stores',
            'site_name' => 'Jocoh Stores',
            'site_email' => 'info@jocohstores.com',
            'site_description' => '',
            'contact_address' => 'Lagos, Nigeria',

            'contact_phone' => '',

            'seo_description' => "",

            'seo_tags' => '',

            'twitter_link' => "",

            'instagram_link' => "",

            'linkedin_link' => "",

            'facebook_link' => "",

            'header_scripts' => "",

            'footer_scripts' => ""
        ],
        'content' => [
            "home" => [
                "sections" => [
                    [
                        "type" => "hero_section",
                        "data" => [
                            "title" => "We are providing you with everyday fresh & organic Products.",
                            "image" => "/assets/stores/images/banner/food-stuffs.png"
                        ]
                    ],
                    [
                        "type" => "about_section",
                        "data" => [
                            "title" => "Looking to place a wholesale order with us? Follow these simple steps to get started.",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more than just a digital space.",
                            "steps" => [
                                [
                                    "image" => "/assets/stores/images/preview.png",
                                    "title" => "Visit the website",
                                    "caption" => "Log on to our website, Navigate to the product page of the item you're interested in purchasing in bulk."
                                ],
                                [
                                    "image" => "/assets/stores/images/preview-contact.png",
                                    "title" => "Request on the contact page",
                                    "caption" => "Scroll to the contact page on the website ensure that on the page you enter your name, email & the description of the product you choose to purchase"
                                ],
                                [
                                    "image" => "/assets/stores/images/shopping-cart.png",
                                    "title" => "Get your items delivered",
                                    "caption" => "Log on to our website, Navigate to the product page of the item you're interested in purchasing in bulk."
                                ]
                            ]
                        ]
                    ],
                    [
                        "type" => "wholesale_retail",
                        "data" => [
                            "title" => "Shop Wholesale & Retails",
                            "caption" => "You have the opportunity to shop both retail and wholesale we have product available across major stores in Nigeria, ",
                            "left_image" => "/assets/stores/images/people-shopping.png",
                            "right_image" => "/assets/stores/images/bag-with-foodstuffs.png"
                        ]
                    ],
                    [
                        "type" => "product_section",
                        "data" => [
                            "title" => "Organic farm produce, sourced and delivered at unbeatable wholesale prices.",
                            "caption" => "Your one-stop wholesale solution for top-quality organic farm produces, delivered at competitive prices."
                        ]
                    ],
                    [
                        "type" => "faq_section",
                        "data" => [
                            "title" => "Frequently asked questions",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more "
                        ]
                    ]
                ]
            ],
            "about" => [
                "sections" => [
                    [
                        "type" => "hero_section",
                        "data" => [
                            "caption" => "ABOUT US",
                            "title" => "An African food ingredient supplier company.",
                            "image" => "/assets/stores/images/banner/food-stuffs.png"
                        ]
                    ],
                    [
                        "type" => "journey_section",
                        "data" => [
                            "title" => "Our Journey so far",
                            "caption" => null,
                            "journey" => [
                                [
                                    "image" => "/assets/stores/images/cac-document.png",
                                    "title" => "Operation Started.",
                                    "date" => "2020"
                                ],
                                [
                                    "image" => "/assets/stores/images/delivery-trucks.png",
                                    "title" => "Delivered over 10m products",
                                    "date" => "2021"
                                ],
                                [
                                    "image" => "/assets/stores/images/handshakes.png",
                                    "title" => "Partnered with Jocoh Farm",
                                    "date" => "2023"
                                ],
                                [
                                    "image" => "/assets/stores/images/funds-raise.png",
                                    "title" => "We raised $56m",
                                    "date" => "2024"
                                ]
                            ]
                        ]
                    ],
                    [
                        "type" => "map_section",
                        "data" => [
                            "title" => "Being the catalyst for nutritious and sustainable **food and a brighter future for all**",
                            "caption" => "By providing quality cooking oils and ingredients, we hope to make a positive impact on people's health and well-being, as well as the planet's future."
                        ]
                    ],
                    [
                        "type" => "faq_section",
                        "data" => [
                            "title" => "Frequently asked questions",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more "
                        ]
                    ]
                ]
            ],
            "contact" => [
                "sections" => [
                    [
                        "type" => "contact_section",
                        "data" => [
                            "title" => "Need assistance with your order or have questions about our products? We’re here to help.",
                            "caption" => "Our dedicated customer support team is available to ensure your shopping experience is smooth and enjoyable.",
                            "badge" => "@JocohStores"
                        ]
                    ],
                    [
                        "type" => "faq_section",
                        "data" => [
                            "title" => "Frequently asked questions",
                            "caption" => "We believe in the transformative power of agriculture and its ability to sustainable future. our platform is more "
                        ]
                    ]
                ]
            ]
        ]        
    ],

];