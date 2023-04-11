<?php
/**
 * WordPress Settings Framework
 *
 * @link https://github.com/gilbitron/WordPress-Settings-Framework
 * @package sbsa
 */

/**
 * Define your settings
 *
 * The first parameter of this filter should be sbsa_register_settings_[options_group],
 * in this case "my_example_settings".
 *
 * Your "options_group" is the second param you use when running new WordPressSettingsFramework()
 * from your init function. It's important as it differentiates your options from others.
 *
 * To use the tabbed example, simply change the second param in the filter below to 'sbsa_tabbed_settings'
 * and check out the tabbed settings function on line 156.
 */

add_filter( 'sbsa_register_settings_my_example_settings', 'sbsa_tabbed_settings' );

/**
 * Tabless example.
 *
 * @param array $sbsa_settings Settings.
 */
function sbsa_tabless_settings( $sbsa_settings ) {
	// General Settings section.
	$sbsa_settings[] = array(
		'section_id'          => 'general',
		'section_title'       => 'General Settings',
		'section_description' => 'Some intro description about this section.',
		'section_order'       => 5,
		'fields'              => array(
			array(
				'id'          => 'text',
				'title'       => 'Text',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'text',
				'default'     => 'This is default',
			),
			array(
				'id'      => 'number',
				'title'   => 'Number',
				'desc'    => 'This is a description.',
				'type'    => 'number',
				'default' => 10,
			),
			array(
				'id'         => 'time',
				'title'      => 'Time Picker',
				'desc'       => 'This is a description.',
				'type'       => 'time',
				'timepicker' => array(), // Array of timepicker options (http://fgelinas.com/code/timepicker).
			),
			array(
				'id'         => 'date',
				'title'      => 'Date Picker',
				'desc'       => 'This is a description.',
				'type'       => 'date',
				'datepicker' => array(), // Array of datepicker options (http://api.jqueryui.com/datepicker/).
			),
			array(
				'id'      => 'image_radio',
				'title'   => 'Select a radio',
				'desc'    => 'This is a description.',
				'type'    => 'image_radio',
				'choices' => array(
					'choice-1' => array(
						'text'  => 'Choice 1',
						'image' => 'https://picsum.photos/100',
					),
					'choice-2' => array(
						'text'  => 'Choice 2',
						'image' => 'https://picsum.photos/100',
					),
				),
			),
			array(
				'id'      => 'image_checkboxes',
				'title'   => 'Select a Checkbox',
				'desc'    => 'This is a description.',
				'type'    => 'image_checkboxes',
				'choices' => array(
					'choice-1' => array(
						'text'  => 'Choice 1',
						'image' => 'https://picsum.photos/100',
					),
					'choice-2' => array(
						'text'  => 'Choice 2',
						'image' => 'https://picsum.photos/100',
					),
					'choice-2' => array(
						'text'  => 'Choice 3',
						'image' => 'https://picsum.photos/100',
					),
				),
			),
			array(
				'id'        => 'group',
				'title'     => 'Group',
				'desc'      => 'This is a description.',
				'type'      => 'group',
				'subfields' => array(
					// accepts most types of fields.
					array(
						'id'          => 'sub-text',
						'title'       => 'Sub Text',
						'desc'        => 'This is a description.',
						'placeholder' => 'This is a placeholder.',
						'type'        => 'text',
						'default'     => 'Sub text',
					),
				),
			),
			array(
				'id'          => 'password',
				'title'       => 'Password',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'password',
				'default'     => 'Example',
			),
			array(
				'id'          => 'textarea',
				'title'       => 'Textarea',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'textarea',
				'default'     => 'This is default',
			),
			array(
				'id'       => 'select',
				'title'    => 'Select',
				'desc'     => 'This is a description.',
				'type'     => 'select',
				'default'  => 'green',
				'multiple' => false, // Can be 'true'.
				'choices'  => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'radio',
				'title'   => 'Radio',
				'desc'    => 'This is a description.',
				'type'    => 'radio',
				'default' => 'green',
				'choices' => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'checkbox',
				'title'   => 'Checkbox',
				'desc'    => 'This is a description.',
				'type'    => 'checkbox',
				'default' => 1,
			),
			array(
				'id'      => 'checkboxes',
				'title'   => 'Checkboxes',
				'desc'    => 'This is a description.',
				'type'    => 'checkboxes',
				'default' => array(
					'red',
					'blue',
				),
				'choices' => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'color',
				'title'   => 'Color',
				'desc'    => 'This is a description.',
				'type'    => 'color',
				'default' => '#ffffff',
			),
			array(
				'id'      => 'file',
				'title'   => 'File',
				'desc'    => 'This is a description.',
				'type'    => 'file',
				'default' => '',
			),
			array(
				'id'              => 'editor',
				'title'           => 'Editor',
				'desc'            => 'This is a description.',
				'type'            => 'editor',
				'default'         => '',
				'editor_settings' => array(
					'teeny' => false,
				),
			),
			array(
				'id'          => 'code_editor',
				'title'       => 'Code Editor',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'code_editor',
				'mimetype'    => 'css',
				'default'     => 'This is default.',
			),
			array(
				'id'       => 'export',
				'title'    => 'Export settings',
				'subtitle' => 'Export settings.',
				'type'     => 'export',
			),
			array(
				'id'       => 'import',
				'title'    => 'Import Settings',
				'subtitle' => 'Import settings.',
				'type'     => 'import',
			),
		),
	);

	// More Settings section.
	$sbsa_settings[] = array(
		'section_id'    => 'more',
		'section_title' => 'More Settings',
		'section_order' => 10,
		'fields'        => array(
			array(
				'id'       => 'heading-tooltip-link',
				'title'    => 'Heading with tooltip',
				'subtitle' => 'Lorem ipsum dolor sit amet congue aliqua scelerisque dictumst ornare nullam suspendisse.',
				'desc'     => 'This is a description.',
				'type'     => 'text',
				'default'  => 'This is default',
				'link'     => array(
					'url'      => esc_url( 'https://google.com' ),
					'type'     => 'tooltip', // Can be 'tooltip' or 'link'. Default is 'tooltip'.
					'text'     => 'Learn More', // Default is 'Learn More'.
					'external' => true, // Default is `true`.
				),
			),
			array(
				'id'       => 'heading-subtitle-link',
				'title'    => 'Heading with link',
				'subtitle' => 'Lorem ipsum dolor sit amet congue aliqua scelerisque dictumst ornare nullam suspendisse.',
				'desc'     => 'This is a description.',
				'type'     => 'text',
				'default'  => 'This is default',
				'link'     => array(
					'url'      => esc_url( 'https://google.com' ),
					'type'     => 'link', // Can be 'tooltip' or 'link'. Default is 'tooltip'.
					'text'     => 'Learn More', // Default is 'Learn More'.
					'external' => true, // Default is `true`.
				),
			),
			array(
				'id'      => 'more-text',
				'title'   => 'More Text',
				'desc'    => 'This is a description.',
				'type'    => 'text',
				'default' => 'This is default',
			),
			array(
				'id'       => 'control-group',
				'title'    => 'Control Group',
				'subtitle' => 'Select option 1 or 2 to show and hide controls.',
				'type'     => 'select',
				'choices'  => array(
					'option-1' => 'Option 1',
					'option-2' => 'Option 2',
					'option-3' => 'Option 3',
				),
				'default'  => 'text',
			),
			array(
				'id'       => 'show-if-option-1',
				'title'    => 'Show if Option 1',
				'subtitle' => 'Will show if Option 1 is set.',
				'type'     => 'select',
				'type'     => 'text',
				'default'  => 'This is default',
				'show_if'  => array( // Field will only show, if the control `more_control-group` is set to Option 1.
					array(
						'field' => 'more_control-group',
						'value' => array( 'option-1' ),
					),
				),
			),
			array(
				'id'       => 'show-if-option-2',
				'title'    => 'Show if Option 2',
				'subtitle' => 'Will show if Option 2 is set.',
				'type'     => 'select',
				'type'     => 'text',
				'default'  => 'This is default',
				'show_if'  => array( // Field will only show, if the control `more_control-group` is set to Option 2.
					array(
						'field' => 'more_control-group',
						'value' => array( 'option-2' ),
					),
				),
			),
			array(
				'id'       => 'show-if-option-2-or-3',
				'title'    => 'Show if Option 2 or 3',
				'subtitle' => 'Will show if Option 2 or 3 is set.',
				'type'     => 'select',
				'type'     => 'text',
				'default'  => 'This is default',
				'show_if'  => array( // Field will only show, if the control `more_control-group` is set to Option 2 or Option 3.
					array(
						'field' => 'more_control-group',
						'value' => array( 'option-2', 'option-3' ),
					),
				),
			),
			array(
				'id'       => 'hide-if-option-1',
				'title'    => 'Hide if Option 1',
				'subtitle' => 'Will hide if Option 1 is set.',
				'type'     => 'select',
				'type'     => 'text',
				'default'  => 'This is default',
				'hide_if'  => array( // Field will only hide, if the control `more_control-group` is set to Option 1.
					array(
						'field' => 'more_control-group',
						'value' => array( 'option-1' ),
					),
				),
			),
			array(
				'id'      => 'section-control',
				'title'   => 'Will show Additional Settings Group if toggled',
				'flux-checkout',
				'type'    => 'toggle',
				'default' => false,
			),
		),
	);

	$sbsa_settings[] = array(
		'section_id'            => 'additional',
		'section_title'         => 'Additional Settings',
		'section_order'         => 10,
		'section_control_group' => 'section-control',
		'show_if'               => array( // Field will only show, if the control `more_section-control` is set to true.
			array(
				'field' => 'more_section-control',
				'value' => array( '1' ),
			),
		),
		'fields'                => array(
			array(
				'id'      => 'additional-text',
				'title'   => 'Additional Text',
				'desc'    => 'This is a description.',
				'type'    => 'text',
				'default' => 'This is default',
			),
			array(
				'id'      => 'additional-number',
				'title'   => 'Additional Number',
				'desc'    => 'This is a description.',
				'type'    => 'number',
				'default' => 10,
			),
		),
	);

	return $sbsa_settings;
}

/**
 * Tabbed example.
 *
 * @param array $sbsa_settings settings.
 */
function sbsa_tabbed_settings( $sbsa_settings ) {
	// Tabs.
	$sbsa_settings['tabs'] = array(
		array(
			'id'    => 'gateway',
			'title' => esc_html__( 'Gateway', 'text-domain' ),
		),
		array(
			'id'    => 'notification',
			'title' => esc_html__( 'Notification', 'text-domain' ),
		),
		array(
			'id'     => 'general',
			'title'  => esc_html__( 'General', 'text-domain' ),
		),
		array(
			'id'    => 'quicknotifications',
			'title' => esc_html__( 'Quick Notification', 'text-domain' ),
		),
	);

	// Settings.
	$sbsa_settings['sections'] = array(
		array(
			'tab_id'        => 'gateway',
			'section_id'    => 'testgatewaycontent',
			'section_title' => 'TEST GATEWAY SETTINGS',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'enable-all-countries',
					'title'   => 'All Countries',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'test-message-content',
					'title'   => 'Message Content',
					'type'    => 'textarea',
				),
				array(
					'id'      => 'test-phone-number',
					'title'   => 'Phone Number',
					'type'    => 'number',
				),
			),
		),
		array(
			'tab_id'        => 'gateway',
			'section_id'    => 'whatsappcontent',
			'section_title' => 'Whatsapp',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'       => 'whatsapp-gateway',
					'title'    => 'WhatsApp Gateway',
					'type'     => 'select',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'whatsappfree'   => 'WhatsApp Business Free',
					),
				),
				array(
					'id'       => 'enable-whatsapp-desktop',
					'title'    => 'WhatsApp Gateway',
					'type'     => 'select',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'yes'   => 'Yes',
						'no'   => 'No',
					),
				),
				array(
					'id'      => 'manual-key',
					'title'   => 'Key (for manual setup)',
					'type'    => 'text',
				),
			),
		),
		array(
			'tab_id'        => 'general',
			'section_id'    => 'generalcontent',
			'section_title' => 'General',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'       => 'country-code',
					'title'    => 'Default Country Code',
					'type'     => 'select',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'+92'   => 'Pakistan (+92)',
						'+44' => 'UK (+44)',
					),
				),
				array(
					'id'      => 'phone-verified',
					'title'   => 'Phone verification in subscription form',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'       => 'order-notification',
					'title'    => 'Send Pending Order Notification after',
					'type'     => 'text',
				),
				array(
					'id'       => 'cart-notification',
					'title'    => 'Send abandon cart notification after',
					'type'     => 'text',
				),
			),
		),
		array(
			'tab_id'        => 'general',
			'section_id'    => 'newslettercontent',
			'section_title' => 'Newsletter',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'       => 'sending-frequency',
					'title'    => 'Sending Frequency',
					'type'     => 'text',
				),
				array(
					'id'       => 'cron-method',
					'title'    => 'Cron Method',
					'type'     => 'select',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'wp-corn'   => 'WordPress Cron Job',
						'wpnotif-cron' => 'WPNotif Cron Job',
					),
				),
			),
		),
		array(
			'tab_id'        => 'notification',
			'section_id'    => 'adminnotificationcontent',
			'section_title' => 'Admin Notifications',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'admin-User-Login',
					'title'   => 'User Login',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-User-Registration',
					'title'   => 'New User Registration',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-User-Password-Change',
					'title'   => 'User Password Change',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Low-Stock',
					'title'   => 'Low Stock',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-No-Stock',
					'title'   => 'No Stock',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Pending-payment',
					'title'   => 'Pending payment',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Processing',
					'title'   => 'Processing (New Order)',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-On-hold',
					'title'   => 'On hold',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Completed',
					'title'   => 'Completed',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Cancelled',
					'title'   => 'Cancelled',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Refunded',
					'title'   => 'Refunded',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Failed',
					'title'   => 'Failed',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Draft',
					'title'   => 'Draft',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'admin-Abandoned-Cart-Message',
					'title'   => 'Abandoned Cart Message',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
			),
		),

		array(
			'tab_id'        => 'notification',
			'section_id'    => 'customernotificationcontent',
			'section_title' => 'Customer Notifications',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'customer-User-Login',
					'title'   => 'User Login',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-User-Registration',
					'title'   => 'New User Registration',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Pending-payment',
					'title'   => 'Pending payment',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Processing',
					'title'   => 'Processing (New Order)',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-On-hold',
					'title'   => 'On hold',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Completed',
					'title'   => 'Completed',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Cancelled',
					'title'   => 'Cancelled',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Refunded',
					'title'   => 'Refunded',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Failed',
					'title'   => 'Failed',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Draft',
					'title'   => 'Draft',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'      => 'customer-Abandoned-Cart-Message',
					'title'   => 'Abandoned Cart Message',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
			),
		),
		array(
			'tab_id'        => 'notification',
			'section_id'    => 'generalcontent',
			'section_title' => 'Post Notifications',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'       => 'send_message_on_basis_of_post',
					'title'    => 'Post Type',
					'type'     => 'select',
					'default'  => 'Post',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'post'   => 'Post',
						'product' => 'Product',
					),
				),
				array(
					'id'      => 'enable_posts',
					'title'   => 'Enable for Posts',
					'flux-checkout',
					'type'    => 'toggle',
					'default' => false,
				),
				array(
					'id'       => 'send_message_on_basis_of_user',
					'title'    => 'User',
					'type'     => 'select',
					'multiple' => false, // Can be 'true'.
					'choices'  => array(
						'a'   => 'A',
						'b' => 'B',
					),
				),
				array(
					'id'      		=> 'newpost-message',
					'title'   		=> 'New Post Message',
					'type'    		=> 'textarea',
					'placeholder'  	=> 'Write your message',
				),
				array(
					'id'      		=> 'updatepost-message',
					'title'   		=> 'Update Post Message',
					'type'    		=> 'textarea',
					'placeholder'  	=> 'Write your message',
				),
			),
		),
		array(
			'tab_id'        => 'quicknotifications',
			'section_id'    => 'quicknotificationscontent',
			'section_title' => 'Quick Notifications',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      		 => 'whatsapp-phone-number',
					'title'   		 => 'Phone Number',
					'placeholder'    => 'e.g +923311234567',
					'type'    		 => 'number',
				),
				array(
					'id'      		=> 'whatsapp-message',
					'title'   		=> 'Whatsapp Message',
					'type'    		=> 'textarea',
					'placeholder'  	=> 'Write your message',
				),
				
			),
		),
		
	);

	return $sbsa_settings;
}
