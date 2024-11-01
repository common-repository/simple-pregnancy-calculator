<?php
class Pregnancy_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(

                // base ID of the widget
                'pregnancy_widget',

                // name of the widget
                __('Pregnancy Widgets', 'giannisdallas' ),

                // widget options
                array (
                    'description' => __( 'Displays a simple due date calculator in the sidebar area', 'giannisdallas' )
                )

            );
    }

    function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
    			$title = $instance[ 'title' ];
    		}
    		else {
    			$title = __( 'New title', 'text_domain' );
    		}
    		?>
    		<p>
    			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    		</p>
    	    <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        return $instance;
    }

    function widget( $args, $instance ) {
             if ( ! empty( $instance['title'] ) ) {
             		echo '<section id="pregnancy-widget" class="widget pregnancy-widget">'.
             		$args['before_title'].
             		apply_filters( 'widget_title', $instance['title'] ).
             		$args['after_title'].' </section>';
             }
             echo do_shortcode( '[simple_pregnancy_widget_calculator]' );
    }

}

function register_pregnancy_widget() {

    register_widget( 'Pregnancy_Widget' );

}
add_action( 'widgets_init', 'register_pregnancy_widget' );

?>