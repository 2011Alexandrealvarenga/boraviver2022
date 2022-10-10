<?php 
add_action('widgets_init','boraviver_sidebars');

function boraviver_sidebars(){
    // register_sidebar(

    //     array(
    //         'name'      =>      'Blog Sidebar',
    //         'id'      =>      'sidebar-blog',
    //         'description'      =>      'Esta é uma sidebar.',
    //         'before_widget'      =>      '<div class="widget-wrapper">',
    //         'after_widget'      =>      '</div>',
    //         'before_title'      =>      '<h4 class="widget-title">',
    //         'after_title'      =>      '</h4>'
    //     )    
    // );
    register_sidebar(
        array(
          'name' => 'sidebar',
          'id' => 'sidebar-blog',
            'description'      =>      'Esta é uma sidebar.',
            'before_widget'      =>      '<div class="widget-wrapper">',
            'after_widget'      =>      '</div>',
            'before_title'      =>      '<h4 class="widget-title">',
            'after_title'      =>      '</h4>'
        )
      );
}

