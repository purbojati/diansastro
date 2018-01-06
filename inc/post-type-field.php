<?php
define( 'ACF_LITE', true );
if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_apps-field',
		'title' => 'Apps Field',
		'fields' => array (
      array (
				'key' => 'field_55f978edd6c01',
				'label' => 'Offer',
				'name' => 'offer',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'free',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'field_55f978edd6c02',
				'label' => 'OS',
				'name' => 'os',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'windows',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'field_55f978edd6c03',
				'label' => 'Link Download Apps',
				'name' => 'link_download_apps',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'ex: http://arena.com/download/apps.apk',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55f9535faa6c2',
				'label' => 'Versi Terbaru Apps',
				'name' => 'versi_apps',
				'type' => 'text',
				'instructions' => 'Isikan Versi Terakhir Apps',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'ex: 269.69',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55f953e0aa6c3',
				'label' => 'Update Terakhir Apps',
				'name' => 'update_terakhir_apps',
				'type' => 'date_picker',
				'instructions' => 'Isikan Tanggal Terakhir Aplikasi di Perbarui',
				'required' => 1,
				'date_format' => 'dd MM yy',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_55f95439aa6c4',
				'label' => 'Ukuran File Apps',
				'name' => 'ukuran_file_apps',
				'type' => 'text',
				'instructions' => 'Isikan Ukuran File Apps',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'ex: 69Mb',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldca_55f978edd6c02',
				'label' => 'Rating',
				'name' => 'rating',
				'type' => 'text',
				'required' => 1,
				'placeholder' => '1 - 5',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'apps',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_archives-field',
		'title' => 'Info',
		'fields' => array (
      		array (
				'key' => 'fielda_65f978edd6c01',
				'label' => 'Wild Grass',
				'name' => 'wild_grass',
				'type' => 'wysiwyg',
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			)
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'archives',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field',
		'title' => 'Info',
		'fields' => array (
      array (
				'key' => 'fieldo_65f978edd6c01',
				'label' => 'Brand',
				'name' => 'brand',
				'type' => 'text',
				'required' => 1,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c03',
				'label' => 'Tipe',
				'name' => 'tipe',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c02',
				'label' => 'OS',
				'name' => 'os',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'placeholder' => 'ex. windows',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c04',
				'label' => 'Harga',
				'name' => 'harga',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'pake titik mas (ex: 6.969.696)',
				'prepend' => 'Rp.',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldos_55f978edd6c04',
				'label' => 'Rating',
				'name' => 'rating',
				'type' => 'text',
				'required' => 1,
				'placeholder' => '1,0 - 5,0 (koma bukan titik mas),',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field2',
		'title' => 'Screen',
		'fields' => array (
      array (
				'key' => 'fieldo_55f978edd6c012',
				'label' => 'Ukuran Layar',
				'name' => 'ukuranLayar',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c022',
				'label' => 'Resolusi',
				'name' => 'resolusi',
				'type' => 'text',
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
}

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field4',
		'title' => 'Memory',
		'fields' => array (
      array (
				'key' => 'fieldo_55f978edd6c013',
				'label' => 'RAM',
				'name' => 'ram',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c023',
				'label' => 'Tipe Memory ',
				'name' => 'tipe_memory',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c033',
				'label' => 'HDD',
				'name' => 'hdd',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c043',
				'label' => 'SSD',
				'name' => 'ssd',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
}
if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field3',
		'title' => 'Hardware',
		'fields' => array (
      array (
				'key' => 'fieldo_55f978edd6c015',
				'label' => 'Processor',
				'name' => 'processor',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c025',
				'label' => 'Model',
				'name' => 'generasi',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c035',
				'label' => 'Kecepatan',
				'name' => 'kecepatan',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
}
if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field5',
		'title' => 'Grafis',
		'fields' => array (
      array (
				'key' => 'fieldo_55f978edd6c014',
				'label' => 'Kartu Grafis',
				'name' => 'kartu_grafis',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c034',
				'label' => 'Ukuran VGA',
				'name' => 'ukuran_vga',
				'type' => 'text',
				'required' => 0,
				'default_value' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 4,
	));
}
if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field6',
		'title' => 'Design',
		'fields' => array (
			array (
				'key' => 'fieldo_55f978edd6c016',
				'label' => 'Berat',
				'name' => 'berat',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c026',
				'label' => 'Warna',
				'name' => 'warna',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 5,
	));
}
if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_products-field7',
		'title' => 'Additional',
		'fields' => array (
			array (
				'key' => 'fieldo_55f978edd6c017',
				'label' => 'DVD-RW',
				'name' => 'dvd',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'productend' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c027',
				'label' => 'Kamera',
				'name' => 'kamera',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),array (
				'key' => 'fieldo_55f978edd6c037',
				'label' => 'Bluetooth',
				'name' => 'bluetooth',
				'type' => 'text',
				'required' => 0,
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 6,
	));
}
