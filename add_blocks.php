<?php 
//icons !IMPORTATNT sin dashboad https://developer.wordpress.org/resource/dashicons/#star-filled
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'testimonial1',
            'title'             => __('Testimonial1'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => get_template_directory() .'/inc/parts/blocks/block_testimonial.php',
           // 'enqueue_script'    => get_template_directory_uri() . '/'.$GLOBALS['THEME_MLM_ENV']. '/js/block_testimonial.js',
            'icon'              => 'star-filled',
            'category'          => 'media',
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'testimonial'   => "
                         simply dummy text of the printing and typesetting industry.
                         readable content of a page when looking at its layout. 
                         The point of using Lorem Ipsum is that it letters, 
                        ",
                        'author'        => "Jane Smith",
                        'role'          => "Admin",
                        'pic'           => 'https://picsum.photos/id/2/200/',
                        'is_preview'    => true
                    )
                )
            )
        ));



    }
}

?>
