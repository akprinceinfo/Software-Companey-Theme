<?php

/**
 * --- stratup Category widget --
 */


// Creating the widget
class software_cetegory_wpb_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'software_cetegory_wpb_widget',
 
            // Widget name will appear in UI
            __( 'software cetegory widget', 'CompaneyTextDomain' ),
 
            // Widget description
            [
                'description' => __( 'cetegory widget For Blog Page', 'CompaneyTextDomain' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>

           <!-- Category Start -->
                <div class="link-animated d-flex flex-column justify-content-start">
                        <?php 
                            $categories = get_categories();
                            foreach ($categories as $categorie) {
                                //category id Url add
                                $category_link = get_category_link($categorie->term_id);
                        ?>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo $category_link; ?>"><i class="fa fa-arrow-right me-2"></i><?php echo $categorie->name;?> , Post : <?php echo $categorie->count ?></a>
                        <?php
                            }
                        ?>    
                    
                </div>
            <!-- Category End -->

        <?php
        
        echo $args['after_widget'];
    }
 
    // Widget Settings Form ||  Backend
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'New title', 'CompaneyTextDomain' );
        }
 
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'CompaneyTextDomain' ); ?>
            </label>
            <input
                    class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function software_cetegory_widget_load() {
    register_widget( 'software_cetegory_wpb_widget' );
}
 
add_action( 'widgets_init', 'software_cetegory_widget_load' );


