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

		// // 1. change header text color		
		// $color = array(
		//   'name'=>'h1_color', 
		//   'default' => '#88C34B',
		//   'label' => __('Header Text Color', 'CC')
		// );

		//   // SETTINGS
		//   $wp_customize->add_setting(
		//     $color['name'], array(
		//       'default' => $color['default'],
		//       'type' => 'option', 
		//       'capability' => 
		//       'edit_theme_options'
		//     )
		//   );
		//   // CONTROLS
		//   $wp_customize->add_control(
		//     new WP_Customize_Color_Control(
		//       $wp_customize,
		//       $color['name'], 
		//       array('label' => $color['label'], 
		//       'section' => 'colors',
		//       'settings' => $color['name'])
		//     )
		//   );

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
			
		$wp_customize->add_setting('banner_text', array('default' => 'MAKE FRIENDS,<br>MEET JESUS.', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'banner_text', array(
		  'label' => 'Banner text',
		  'section' => 'content1',
		  'settings' => 'banner_text',
		)));
		$wp_customize->add_section('content1' , array(
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

		// 4. change welcome text
		$wp_customize->add_setting('welcome_text', array('default' =>"Hi, international student!</br>Would you like to meet some new friends in Australia?</br>Come to Cross Cultures! Let's make friends and meet Jesus!", 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'welcome_text', array(
		  'label' => 'Welcome text',
		  'section' => 'content2',
		  'settings' => 'welcome_text',
		)));
		$wp_customize->add_section('content2' , array(
		  'title' => __('Welcome Text','CC'),
		));

		// 5.1. change intro_section title
		$wp_customize->add_setting('intro_title', array('default' => 'Cross Cultures Club', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_title', array(
		  'label' => 'Intro title',
		  'section' => 'content3',
		  'settings' => 'intro_title',
		  'priority' => 1,
		)));
		// 5.2. change intro_section subtitle
		$wp_customize->add_setting('intro_subtitle', array('default' => 'run by Christians', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_subtitle', array(
		  'label' => 'Intro subtitle',
		  'section' => 'content3',
		  'settings' => 'intro_subtitle',
		  'priority' => 2,
		)));
		// 5.3. change into text
		$wp_customize->add_setting('intro_text', array('default' => 'We are a mix of Australians and Internationals who meet to build friendships and investigate the identity of Jesus Christ by reading the bible together.</br></br>Our main meeting is every Thursday night at 6:00 pm. We also have many other events and activities such as free English class, camps and girls night.', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'intro_text', array(
		  'label' => 'Intro text',
		  'section' => 'content3',
		  'settings' => 'intro_text',
		  'priority' => 3,
		)));
		$wp_customize->add_section('content3' , array(
		  'title' => __('Intro Section','CC'),
		));

		// 6.1. change main section title
		$wp_customize->add_setting('main_title', array('default' => 'Thursday Night Meeting', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_title', array(
		  'label' => 'Meeting title',
		  'section' => 'content4',
		  'settings' => 'main_title',
		  'priority' => 1,
		)));
		// 6.2. change main section text
		$wp_customize->add_setting('main_text', array('default' => 'We meet Thursday night every week in a church near Melbourne Uni.</br>We have fun people, cool music, good food and impressive bible study!', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'main_text', array(
		  'label' => 'Meeting description',
		  'section' => 'content4',
		  'settings' => 'main_text',
		  'priority' => 2,
		)));
		// 6.3. change main section time
		$wp_customize->add_setting('main_time', array('default' => 'every Thursday 6pm', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_time', array(
		  'label' => 'Meeting time',
		  'section' => 'content4',
		  'settings' => 'main_time',
		  'priority' => 3,
		)));
		// 6.4. change main section cost
		$wp_customize->add_setting('main_cost', array('default' => 'dinner is $4 per week </br><span>(if it is your first time,dinner is free)</span>', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_cost', array(
		  'label' => 'Dinner price',
		  'section' => 'content4',
		  'settings' => 'main_cost',
		  'priority' => 4,
		)));
		// 6.5. change main section place
		$wp_customize->add_setting('main_place', array('default' => "ST. JUDE'S Anglican Church</br><span>2 KEPPEL ST, CARLTON, VIC, 3053</span>", 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_place', array(
		  'label' => 'Address',
		  'section' => 'content4',
		  'settings' => 'main_place',
		  'priority' => 5,
		)));
		// 6.6.1 change main section act_timetable1
		$wp_customize->add_setting('main_act_timetable1', array('default' => '6:00', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_act_timetable1', array(
		  'label' => 'Dinner Time',
		  'section' => 'content4',
		  'settings' => 'main_act_timetable1',
		  'priority' => 6,
		)));
		// 6.6.2 change main section act_timetable2
		$wp_customize->add_setting('main_act_timetable2', array('default' => '7:00', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_act_timetable2', array(
		  'label' => 'Bible Study Time',
		  'section' => 'content4',
		  'settings' => 'main_act_timetable2',
		  'priority' => 8,
		)));
		// 6.6.3 change main section act_timetable3
		$wp_customize->add_setting('main_act_timetable3', array('default' => '8:30', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_act_timetable3', array(
		  'label' => 'Dessert Time',
		  'section' => 'content4',
		  'settings' => 'main_act_timetable3',
		  'priority' => 10,
		)));
		// 6.6.4 change main section act_desc1
		$wp_customize->add_setting('main_act_desc1', array('default' => 'Make friends & </br> have Dinner', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'main_act_desc1', array(
		  'label' => 'Dinner description',
		  'section' => 'content4',
		  'settings' => 'main_act_desc1',
		  'priority' => 7,
		)));
		// 6.6.5 change main section act_timetable
		$wp_customize->add_setting('main_act_desc2', array('default' => 'Pray for Country & </br> Bible Study', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_act_desc2', array(
		  'label' => 'Bible study description',
		  'section' => 'content4',
		  'settings' => 'main_act_desc2',
		  'priority' => 9,
		)));
		// 6.6.6 change main section act_timetable
		$wp_customize->add_setting('main_act_desc3', array('default' => 'Social Talk & </br> Dessert Time', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'main_act_desc3', array(
		  'label' => 'Dessert description',
		  'section' => 'content4',
		  'settings' => 'main_act_desc3',
		  'priority' => 11,
		)));

		$wp_customize->add_section('content4' , array(
		  'title' => __('Main Section','CC'),
		));
		// 7.1 change english class section title
		$wp_customize->add_setting('En_class_title', array('default' => 'Free English class', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'En_class_title', array(
		  'label' => 'Free English Class Title',
		  'section' => 'content5',
		  'settings' => 'En_class_title',
		  'priority' => 1,
		)));
		// 7.2 change english class section description
		$wp_customize->add_setting('En_class_desc', array('default' => 'Want to improve your English? Please come early before our main meeting. </br>We are holding FREE English classes every Thursday 5-6 pm.', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'En_class_desc', array(
		  'label' => 'Free English Class Description',
		  'section' => 'content5',
		  'settings' => 'En_class_desc',
		  'priority' => 2,
		)));

		$wp_customize->add_section('content5' , array(
		  'title' => __('English Class Section','CC'),
		));

		//8.change pic


		//9.1.1 change contact meeting title
		$wp_customize->add_setting('contact_meeting_title', array('default' => 'Come this Thursday', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_meeting_title', array(
		  'label' => 'Meeting Title',
		  'section' => 'content7',
		  'settings' => 'contact_meeting_title',
		  'priority' => 1,
		)));
		//9.1.2 change contact meeting description
		$wp_customize->add_setting('contact_meeting_description', array('default' => "AT 6:00PM</br>We meet at St. Jude's church,</br> 2 Keppel St, Carlton.</br>(Near Melbourne Uni)", 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'contact_meeting_description', array(
		  'label' => 'Meeting Description',
		  'section' => 'content7',
		  'settings' => 'contact_meeting_description',
		  'priority' => 2,
		)));

		//9.2.1 change contact facebook title
		$wp_customize->add_setting('contact_facebook_title', array('default' => 'Join us on Facebook</br>and have fun', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_facebook_title', array(
		  'label' => 'Facebook Title',
		  'section' => 'content7',
		  'settings' => 'contact_facebook_title',
		  'priority' => 3,
		)));		

		//9.2.2 change contact facebook link
		$wp_customize->add_setting('contact_facebook_link', array('default' => 'https://www.facebook.com/crosscultures.melbourne', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'contact_facebook_link', array(
		  'label' => 'Facebook Link',
		  'section' => 'content7',
		  'settings' => 'contact_facebook_link',
		  'priority' => 4,
		)));
		//9.3.1 change contact church title
		$wp_customize->add_setting('contact_church_title', array('default' => 'Come to Unichurch', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact_church_title', array(
		  'label' => 'Church Title',
		  'section' => 'content7',
		  'settings' => 'contact_church_title',
		  'priority' => 5,
		)));	

		$wp_customize->add_section('content7' , array(
		  'title' => __('Contact Section','CC'),
		));
		//9.3.2 change contact facebook link
		$wp_customize->add_setting('contact_church_desc', array('default' => '6:00PM every Sunday</br>At Eastern Resource Centre (ERC), University Of Melbourne', 'transport' => 'postMessage', ));
		$wp_customize->add_control(new CC_Customize_Textarea_Control($wp_customize, 'contact_church_desc', array(
		  'label' => 'Church Description',
		  'section' => 'content7',
		  'settings' => 'contact_church_desc',
		  'priority' => 6,
		)));

		// . add Visible Edit Shortcuts in the Customizer Preview
		// $wp_customize->get_setting( 'banner_text' )->transport = 'postMessage';
		// $wp_customize->get_setting( 'banner_image' )->transport = 'postMessage';
		 
		$wp_customize->selective_refresh->add_partial( 'banner_text', array(
		    'selector' => '.banner1>div',
		    // 'render_callback' => 'twentyfifteen_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'welcome_text', array(
		    'selector' => '#welcome_text',
		    // 'render_callback' => 'twentyfifteen_customize_partial_blogname',
		) );
		// add edit shortcuts to introduction section
		$wp_customize->selective_refresh->add_partial( 'intro_title', array(
		    'selector' => '#intro_section>h1',
		) );
		$wp_customize->selective_refresh->add_partial( 'intro_subtitle', array(
		    'selector' => '#intro_section>h2',
		) );
		$wp_customize->selective_refresh->add_partial( 'intro_text', array(
		    'selector' => '#intro_section>p',
		) );

		// add edit shortcuts to main section
		$wp_customize->selective_refresh->add_partial( 'main_title', array(
		    'selector' => '#main_section>h2',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_text', array(
		    'selector' => '#main_section>p',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_time', array(
		    'selector' => '#meeting_time',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_cost', array(
		    'selector' => '#meeting_cost',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_place', array(
		    'selector' => '#meeting_place',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_timetable1', array(
		    'selector' => '#time_table1 p:nth-child(1)',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_timetable2', array(
		    'selector' => '#time_table2 p:nth-child(1)',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_timetable3', array(
		    'selector' => '#time_table3 p:nth-child(1)',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_desc1', array(
		    'selector' => '#time_table1 p:nth-child(3)',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_desc2', array(
		    'selector' => '#time_table2 p:nth-child(3)',
		) );
		$wp_customize->selective_refresh->add_partial( 'main_act_desc3', array(
		    'selector' => '#time_table3 p:nth-child(3)',
		) );


		// add edit shortcuts to English class section
		$wp_customize->selective_refresh->add_partial( 'En_class_title', array(
		    'selector' => '.English_class h2',
		) );

		$wp_customize->selective_refresh->add_partial( 'En_class_desc', array(
		    'selector' => '.English_class>div p:nth-child(2)',
		) );


		// add edit shortcuts to contact section
		$wp_customize->selective_refresh->add_partial( 'contact_meeting_title', array(
		    'selector' => '#contact_thursday p:nth-child(2)',
		) );
		$wp_customize->selective_refresh->add_partial( 'contact_meeting_description', array(
		    'selector' => '#contact_thursday span',
		) );
		$wp_customize->selective_refresh->add_partial( 'contact_facebook_title', array(
		    'selector' => '#contact_facebook p:nth-child(2)',
		) );
		$wp_customize->selective_refresh->add_partial( 'contact_facebook_link', array(
		    'selector' => '#contact_facebook p:nth-child(3)',
		) );
		$wp_customize->selective_refresh->add_partial( 'contact_church_title', array(
		    'selector' => '#contact_church p:nth-child(2)',
		) );
		$wp_customize->selective_refresh->add_partial( 'contact_church_desc', array(
		    'selector' => '#contact_church p:nth-child(3)',
		) );


		// $wp_customize->selective_refresh->add_partial( 'banner_image', array(
		//     'selector' => '.banner1',
		//     // 'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
		// ) );

}
add_action( 'customize_register', 'CC_customize_register' );


?>