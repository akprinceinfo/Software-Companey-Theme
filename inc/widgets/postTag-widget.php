<?php

/**
 * ---  Psot Tag widget --
 */
 

// Creating the widget
class software_post_tag_wpb_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'software_post_tag_wpb_widget',
 
            // Widget name will appear in UI
            __( 'software Psot Tag widget', 'CompaneyTextDomain' ),
 
            // Widget description
            [
                'description' => __( 'cetegory Psot Tag For Blog Page', 'CompaneyTextDomain' ),
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

        ?>

             <!-- Tags Start -->
                <div class="d-flex flex-wrap m-n1">
                   
                    <?php 
                        $tags = get_tags();
                        foreach($tags as $tag){
                        //tag link add
                        $tag_link = get_tag_link($tag->term_id);
                    ?>
                         <a href="<?php echo $tag_link ?>" class="btn btn-light m-1"><?php echo $tag->name; ?></a>
                    <?php
                        }
                    ?>
                            
                </div>
                    <!-- Tags End -->
        <?php
            echo $args['after_widget'];
        } 
    }

 
    // Widget Settings Form ||  Backend
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Tag Cloud', 'CompaneyTextDomain' );
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
function software_post_tag_widget_load() {
    register_widget( 'software_post_tag_wpb_widget' );
}
 
add_action( 'widgets_init', 'software_post_tag_widget_load' );

