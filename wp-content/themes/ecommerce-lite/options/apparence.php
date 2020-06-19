<?php
add_action('customize_register', function(WP_Customize_Manager $manager){

$manager->add_section('montheme_apparence', [
    'title' => "Personnalisation de l'apparence",
]);

$manager->add_setting('header_background', [
    'default' => '#ffffff',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_hex_color'
]);

$manager->add_control(new WP_Customize_Color_Control($manager, 'header_background', [
    'section' => 'montheme_apparence',
    'label' => 'Couleur de l\'en tête'
]));

});

