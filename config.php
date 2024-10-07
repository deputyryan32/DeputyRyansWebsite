<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$config = [
	'name' => 'DevByBit',
	'logo' => 'https://license.devbybit.com/parent/img/icon.png',
	'link' => 'https://devbybit.com',
	'hero' => [
		'card' => [
			'badge' => 'New',
			'title' => 'DevByBit is out! See what\'s new',
			'link' => 'https://devbybit.com/discord',
		],
		'title' => 'We invest in the world’s potential',
		'subtitle' => 'Here at DevByBit we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.',
		'button' => [
			'name' => 'Learn More',
			'link' => 'https://devbybit.com/discord',
		],
	],
	'products' => [
		'title' => 'Products',
		'list' => [
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1639/1639625-0c616a71bdab08f1a56c7beda8174ec9.jpg?variant=card',
				'title' => 'Prime Status | Status Page v1.0-beta',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/prime-status-status-page.51795/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1616/1616977-c249895cbb460e98d8c2c4b852e9bd5b.jpg?variant=card',
				'title' => 'Fragify | Pre-designer v1.0',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/fragify-pre-designer.49363/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1584/1584571-38729f1c6c8eceb3d033f9a1d06ac687.jpg?variant=card',
				'title' => 'Voler | License dashboard | MySQL v1.0',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/voler-license-dashboard-mysql.46010/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1577/1577114-3d03ccc939606d0054dea29eab828c04.jpg?variant=card',
				'title' => 'Solary License | MySQL, JSON & MongoDB v1.1',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 5,
				'reviews' => 3,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/solary-license-mysql-json-mongodb.45207/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1575/1575564-5f7cb7df8e402d8a39ccef78adebbefa.jpg?variant=card',
				'title' => 'Soroly | License Management FREE v1.0',
				'price' => 'FREE',
				'discount' => 'Up to 0% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/soroly-license-management-free.44558/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1559/1559369-42febbb88c6b8c94edc1c0fa0ac87ada.jpg?variant=card',
				'title' => 'Mia Accounts - For businesses v1.0',
				'price' => '$2.50',
				'discount' => 'Up to 38% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/mia-accounts-for-businesses.43195/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1636/1636071-9f08de41ccf1868e942824ae276b1b19.jpg?variant=card',
				'title' => 'Mongo Manager | Manage mongodb easier v2.0-FIRE',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 0,
				'reviews' => 0,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/mongo-manager-manage-mongodb-easier.40545/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1576/1576649-cc199742ae148e50879fb21842554355.jpg?variant=card',
				'title' => 'Atomic | Unique Litebans Website v1.0-beta',
				'price' => '$2.50',
				'discount' => 'Up to 38% off',
				'rating' => 5,
				'reviews' => 1,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/atomic-unique-litebans-website.40180/',
				'button' => 'Go Shopping',
			],
			[
				'image' => 'https://cdn.builtbybit.com/carousel_images/1576/1576648-887c653d65d5be65a4b5b7fcc8239f03.jpg?variant=card',
				'title' => 'Blackout | 1 on Unique License dashboard v1.5.3',
				'price' => '$5.50',
				'discount' => 'Up to 38% off',
				'rating' => 5,
				'reviews' => 5,
				'fastDelivery' => true,
				'bestPrice' => true,
				'link' => 'https://builtbybit.com/resources/blackout-1-on-unique-license-dashboard.38607/',
				'button' => 'Go Shopping',
			],
		],
	],
	'comissions' => [
		'image' => 'https://i.pinimg.com/564x/36/8c/96/368c967df4cdb8e288b8cf19eed82707.jpg',
		'title' => 'Commissions are open!',
		'subtitle' => 'Take advantage now of working with us with open commissions. Have your software tailored, professional and at an affordable price.',
		'button' => 'Pre-order now',
		'link' => 'https://devbybit.com/discord',
	],
	'footer' => [
		'first' => [
			'title' => 'Resources',
			'list' => [
                [
                    'title' => 'BuiltByBit',
                    'link' => 'https://builtbybit.com/vuhp',
                ],
			],
		],
		'second' => [
			'title' => 'Follow us',
			'list' => [
				[
					'title' => 'Github',
					'link' => 'https://github.com/jVuhp?tab=repositories',
				],
				[
					'title' => 'Discord',
					'link' => 'https://devbybit.com/discord',
				],
			],
		],
		'third' => [
			'title' => 'Legal',
			'list' => [
				[
					'title' => 'Privacy Policy',
					'link' => '#',
				],
				[
					'title' => 'Terms & Conditions',
					'link' => '#',
				],
			],
		],
	],
];

echo json_encode($config);



?>