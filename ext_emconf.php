<?php
/**
 * Extension Manager configuration file for ext "static_info_tables_de"
 */
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables (de)',
	'description' => 'German (de) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'version' => '6.4.0',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author' => 'Sebastian Seidelmann',
	'author_email' => 'sebastian.seidelmann@googlemail.com',
	'author_company' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-8.7.99',
			'static_info_tables' => '6.3.9-'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);