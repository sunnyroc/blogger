<?php
/**
 * About Widget.
 *
 * @package    VT Blogging
 * @author     VolThemes
 * @copyright  Copyright (c) 2018, VolThemes
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */
class vt_blogging_About_Widget extends WP_Widget {
    function __construct() {
		parent::__construct(
			'vt_blogging_about_widget', esc_html_x('[VT] About Widget', 'widget name', 'vt-blogging'),
			array('classname' => 'vt_blogging_about_widget widget_social_icons', 'description' => esc_html__('About Widget with your image and description.', 'vt-blogging'))
		);
	}
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$imageurl = $instance['imageurl'];
		$imagealt = $instance['imagealt'];
		$imagewidth = $instance['imagewidth'];
		$imageheight = $instance['imageheight'];
		$aboutdescription = $instance['aboutdescription'];
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$googleplus = $instance['googleplus'];
		$youtube = $instance['youtube'];
		$instagram = $instance['instagram'];
		$feed = $instance['feed'];
		echo $before_widget; 
		?>

			<?php if($title != '') echo '<h3 class="widget-title"><span>'.$title.'</span></h3>'; ?>
			
			<div class="about-widget widget-content">
				
				<div class="about-img">
					<img src="<?php echo esc_attr($imageurl); ?>" width="<?php echo esc_attr($imagewidth); ?>" height="<?php echo esc_attr($imageheight); ?>" alt="<?php echo esc_attr($imagealt); ?>">
				</div>
				
				<div class="about-description">
					<p><?php echo $aboutdescription; ?></p>
					<div class="social-icons">
					  <ul>
						<li class="facebook"><?php if($facebook != '') echo '<a href="' . esc_url($facebook) . '" title="' . __( 'Facebook', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'Facebook', 'vt-blogging' ) . ' </a>'; ?></li>
						<li class="twitter"><?php if($twitter != '') echo '<a href="' . esc_url($twitter) . '" title="' . __( 'Twitter', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'Twitter', 'vt-blogging' ) . ' </a>'; ?></li>
						<li class="google-plus"><?php if($googleplus != '') echo '<a href="' . esc_url($googleplus) . '" title="' . __( 'Google Plus', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'Google+', 'vt-blogging' ) . ' </a>'; ?></li>
						<li class="youtube"><?php if($youtube != '') echo '<a href="' . esc_url($youtube) . '" title="' . __( 'Youtube', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'YouTube', 'vt-blogging' ) . ' </a>'; ?></li>
						<li class="instagram"><?php if($instagram != '') echo '<a href="' . esc_url($instagram) . '" title="' . __( 'Instagram', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'Instagram', 'vt-blogging' ) . ' </a>'; ?></li>
						<li class="rss"><?php if($feed != '') echo '<a href="' . esc_url($feed) . '" title="' . __( 'Feed', 'vt-blogging' ) . '" target="' . __( '_blank', 'vt-blogging' ) . '"> ' . esc_html__( 'RSS', 'vt-blogging' ) . ' </a>'; ?></li>
					  </ul>
					</div>
				</div>
			</div>

		<?php
		echo $after_widget;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
				'title' => '', 
				'imageurl' => 'http://...', 
				'imagealt' => '',  
				'imagewidth' => '300', 
				'imageheight' => '250',
				'aboutdescription' => '',
				'facebook' => '',
				'twitter' => '',
				'googleplus' => '',
				'youtube' => '',
				'instagram' => '',
				'feed' => './feed/',
			);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title' )); ?>"><?php _e('Title:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'imageurl' )); ?>"><?php _e('Image URL:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'imageurl' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'imageurl' )); ?>" type="text" value="<?php echo esc_attr($instance['imageurl']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'imagealt' )); ?>"><?php _e('Image ALT:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'imagealt' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'imagealt' )); ?>" type="text" value="<?php echo esc_attr($instance['imagealt']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'imagewidth' )); ?>"><?php _e('Image Width:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'imagewidth' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'imagewidth' )); ?>" type="text" value="<?php echo esc_attr($instance['imagewidth']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'imageheight' )); ?>"><?php _e('Image Height:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'imageheight' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'imageheight' )); ?>" type="text" value="<?php echo esc_attr($instance['imageheight']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'aboutdescription' )); ?>"><?php _e('About Description:','vt-blogging'); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'aboutdescription' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'aboutdescription' )); ?>" rows="12" cols="20"><?php echo esc_attr($instance['aboutdescription']); ?></textarea>
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'facebook' )); ?>"><?php _e('Facebook:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'facebook' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'facebook' )); ?>" type="text" value="<?php echo esc_attr($instance['facebook']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>"/>
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'twitter' )); ?>"><?php _e('Twitter:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'twitter' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'twitter' )); ?>" type="text" value="<?php echo esc_attr($instance['twitter']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>"/>
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'googleplus' )); ?>"><?php _e('Googleplus:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'googleplus' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'googleplus' )); ?>" type="text" value="<?php echo esc_attr($instance['googleplus']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>"/>
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'youtube' )); ?>"><?php _e('Youtube:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'youtube' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'youtube' )); ?>" type="text" value="<?php echo esc_attr($instance['youtube']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>"/>
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'instagram' )); ?>"><?php _e('Instagram:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'instagram' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'instagram' )); ?>" type="text" value="<?php echo esc_attr($instance['instagram']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'feed' )); ?>"><?php _e('RSS Feed:','vt-blogging'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'feed' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'feed')); ?>" type="text" value="<?php echo esc_attr($instance['feed']); ?>" placeholder="<?php echo esc_attr( 'http://', 'vt-blogging' ); ?>" />
		</p>
		
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = wp_strip_all_tags ( $new_instance['title'] );
		$instance['imageurl'] = esc_url_raw ( $new_instance['imageurl'] );
		$instance['imagealt'] = wp_strip_all_tags ( $new_instance['imagealt'] );
		$instance['imagewidth'] = wp_strip_all_tags ( $new_instance['imagewidth'] );
		$instance['imageheight'] = wp_strip_all_tags ( $new_instance['imageheight'] );
		$instance['aboutdescription'] = wp_strip_all_tags ( $new_instance['aboutdescription'] );
		$instance['facebook'] = esc_url_raw ( $new_instance['facebook'] );
		$instance['twitter'] = esc_url_raw ( $new_instance['twitter'] );
		$instance['googleplus'] = esc_url_raw ( $new_instance['googleplus'] );
		$instance['youtube'] = esc_url_raw ( $new_instance['youtube'] );
		$instance['instagram'] = esc_url_raw ( $new_instance['instagram'] );
		$instance['feed'] = wp_strip_all_tags ( $new_instance['feed'] );
		
		return $instance;
	}
	
} // class vt_blogging_about_widget
?>