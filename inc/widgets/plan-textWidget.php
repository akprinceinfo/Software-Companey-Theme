<?php
/**
 * ---  Plan Text widget --
 */

 
// Creating the widget
class software_plan_text_wpb_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Base ID of your widget
            'software_plan_text_wpb_widget',
 
            // Widget name will appear in UI
            __( 'software Plan Text widget', 'CompaneyTextDomain' ),
 
            // Widget description
            [
                'description' => __( 'Plan Text For Blog Page', 'CompaneyTextDomain' ),
            ]
        );
    }
 
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        $palan_input_text = $instance['palan_input_text'];
        $palan_btn_text = $instance['palan_btn_text'];
        $palan_btn_url = $instance['palan_btn_url'];


        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];

        ?>

            
        <!-- Plain Text Start -->
            <div class="bg-light text-center" style="padding: 30px;">
                <p><?php echo $palan_input_text;?></p>
                <a href="<?php echo $palan_btn_url;?>" class="btn btn-primary py-2 px-4"><?php echo $palan_btn_text;?></a>
            </div>
        <!-- Plain Text End -->


        <?php
            echo $args['after_widget'];
        } 
    }

 
    // Widget Settings Form ||  Backend
    public function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = __( 'Plan Text', 'CompaneyTextDomain' );
        }

        $palan_input_text = $instance['palan_input_text'];
        $palan_btn_text = $instance['palan_btn_text'];
        $palan_btn_url = $instance['palan_btn_url'];
 
        // Widget admin form
        ?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                <?php _e( 'Title:', 'CompaneyTextDomain' ); ?>
            </label>

            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'palan_input_text' ); ?>">
                <?php _e( 'Text:', 'CompaneyTextDomain' ); ?>
            </label>

            <input class="widefat" id="<?php echo $this->get_field_id( 'palan_input_text' ); ?>" name="<?php echo $this->get_field_name( 'palan_input_text' ); ?>" type="text" value="<?php echo esc_attr( $palan_input_text ); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'palan_btn_text' ); ?>">
                <?php _e( 'Button Text:', 'CompaneyTextDomain' ); ?>
            </label>

            <input class="widefat" id="<?php echo $this->get_field_id( 'palan_btn_text' ); ?>" name="<?php echo $this->get_field_name( 'palan_btn_text' ); ?>" type="text" value="<?php echo esc_attr( $palan_btn_text); ?>"
            />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'palan_btn_text' ); ?>">
                <?php _e( 'Button Url:', 'CompaneyTextDomain' ); ?>
            </label>

            <input class="widefat" id="<?php echo $this->get_field_id( 'palan_btn_url' ); ?>" name="<?php echo $this->get_field_name( 'palan_btn_url' ); ?>" type="url" value="<?php echo esc_attr( $palan_btn_url); ?>"
            />
        </p>
        

     <?php
    }
 
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        
        //Data update
        $instance['palan_input_text'] = $new_instance['palan_input_text'];
        $instance['palan_btn_text'] = $new_instance['palan_btn_text'];
        $instance['palan_btn_url'] = $new_instance['palan_btn_url'];

        return $instance;
    }
 
    // Class wpb_widget ends here
}
 
// Register and load the widget
function software_plan_text_widget_load() {
    register_widget( 'software_plan_text_wpb_widget' );
}
 
add_action( 'widgets_init', 'software_plan_text_widget_load' );


