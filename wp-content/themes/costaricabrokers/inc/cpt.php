<?php

add_filter( 'rwmb_meta_boxes', 'costaricabrokers_register_meta_boxes' );

function costaricabrokers_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'additional_information',
        'title'    => 'Información Adicional',
        'pages'    => array('property', 'projects','real-estate' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
    
             array(
                'name'  => 'Photos',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'property_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
            
            
             array(
                'name'  => 'Features',
                'id'    => $prefix . 'features',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'features',
                'rows' => 6
                
                
            ),
              array(
                'name'  => 'Bed Distribution',
                'id'    => $prefix . 'beddistribution',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'beddistribution',
                'rows' => 6
                
                
            ),
            // OEMBED
            array(
              'name' => 'video',
              'id'   =>  $prefix. "video",
              'type' => 'oembed',
            ),
            
          
             

        )
    );


    return $meta_boxes;
}
