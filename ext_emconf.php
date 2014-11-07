<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "varnish".
 *
 * Auto generated 29-04-2014 16:16
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Varnish Connector',
	'description' => 'This extension is managed on GitHub. Feel free to get in touch at https://github.com/snowflakech/typo3-varnish/',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.1-dev',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-0.0.0',
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'state' => 'stable',
	'author' => 'Andri Steiner',
	'author_email' => 'varnish@snowflake.ch',
	'author_company' => 'snowflake',
	'_md5_values_when_last_written' => 'a:15:{s:16:"ext_autoload.php";s:4:"a0ec";s:21:"ext_conf_template.txt";s:4:"78a9";s:12:"ext_icon.gif";s:4:"a993";s:17:"ext_localconf.php";s:4:"cf97";s:13:"locallang.xml";s:4:"2529";s:10:"README.rst";s:4:"f6be";s:39:"classes/class.tx_varnish_controller.php";s:4:"6c71";s:33:"classes/class.tx_varnish_http.php";s:4:"1e50";s:45:"classes/Hooks/class.tx_varnish_hooks_ajax.php";s:4:"82d2";s:55:"classes/Hooks/class.tx_varnish_hooks_clearcachemenu.php";s:4:"95b8";s:48:"classes/Hooks/class.tx_varnish_hooks_tcemain.php";s:4:"9abd";s:49:"classes/Hooks/class.tx_varnish_hooks_tslib_fe.php";s:4:"6f01";s:53:"classes/Utilities/class.tx_varnish_generalutility.php";s:4:"6c64";s:15:"res/default.vcl";s:4:"9699";s:16:"static/setup.txt";s:4:"69d1";}',
);

?>