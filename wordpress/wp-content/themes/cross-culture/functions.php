<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function CC_customize_register( $wp_customize ) {
  //All our sections, settings, and controls will be added here

		// 1. change header text color		
		$color = array(
		  'name'=>'h1_color', 
		  'default' => '#88C34B',
		  'label' => __('Header Text Color', 'CC')
		);

		  // SETTINGS
		  $wp_customize->add_setting(
		    $color['name'], array(
		      'default' => $color['default'],
		      'type' => 'option', 
		      'capability' => 
		      'edit_theme_options'
		    )
		  );
		  // CONTROLS
		  $wp_customize->add_control(
		    new WP_Customize_Color_Control(
		      $wp_customize,
		      $color['name'], 
		      array('label' => $color['label'], 
		      'section' => 'colors',
		      'settings' => $color['name'])
		    )
		  );

		// 2. change the banner text
		class CC_Customize_Textarea_Control extends WP_Customize_Control {
			public $type = 'textarea';
			public function render_content() {
		?>

		  <label>
		    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
		  </label>

		<?php
		  }
		}
			
		$wp_customize->add_setting('textarea_setting', array('default' => 'default text',));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'textarea_setting', array(
		  'label' => 'Banner text',
		  'section' => 'content',
		  'settings' => 'textarea_setting',
		)));
		$wp_customize->add_section('content' , array(
		  'title' => __('Banner Text','CC'),
		));

		// 3. change the banner image
		$wp_customize->add_section( 'banner_image_section' , array(
		    'title'       => __( 'Banner Image', 'CC' ),
		    'priority'    => 30,
		    'description' => 'Upload an image to replace the default banner image in the header',
		) );
		$wp_customize->add_setting( 'banner_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
		    'label'    => __( 'Banner Image', 'CC' ),
		    'section'  => 'banner_image_section',
		    'settings' => 'banner_image',
		) ) );

		// 4. add Visible Edit Shortcuts in the Customizer Preview
		$wp_customize->get_setting( 'textarea_setting' )->transport = 'postMessage';
		$wp_customize->get_setting( 'banner_image' )->transport = 'postMessage';
		 
		$wp_customize->selective_refresh->add_partial( 'textarea_setting', array(
		    'selector' => '.banner1>div',
		    // 'render_callback' => 'twentyfifteen_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'banner_image', array(
		    'selector' => '.banner1',
		    // 'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
		) );

}
add_action( 'customize_register', 'CC_customize_register' );


?>