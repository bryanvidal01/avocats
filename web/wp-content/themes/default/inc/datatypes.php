<?php

function wpm_custom_post_type() {

    $labels = array(
        'name'                => __( 'Expertises'),
        'singular_name'       => __( 'Expertise'),
        'menu_name'           => __( 'Expertises'),
    );

    $args = array(
        'label'               => __( 'Expertises'),
        'description'         => __( 'Tous sur Expertises'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author','custom-fields' ),
        'menu_icon'           => 'dashicons-portfolio',
        'show_in_rest'        => false,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true
    );
    register_post_type( 'expertises', $args );


    $labels = array(
        'name'                => __( 'Membres'),
        'singular_name'       => __( 'Membre'),
        'menu_name'           => __( 'Membres'),
    );

    $args = array(
        'label'               => __( 'Membres'),
        'description'         => __( 'Tous sur Membres'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author','custom-fields' ),
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_rest'        => false,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => false
    );
    register_post_type( 'membres', $args );




}

add_action( 'init', 'wpm_custom_post_type', 0 );