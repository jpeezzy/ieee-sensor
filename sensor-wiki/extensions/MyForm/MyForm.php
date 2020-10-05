<?php
/**
 *  * Necessary description of @file, @authors and license
 *   * @FILLME!
 *    * Always good to remind that important part
 */

// Avoid illegal processing, doesn't cost much, but unnecessary on a correct installation
if ( !defined( 'MEDIAWIKI' ) ) { 
	die( -1 ); 
} 

//Extension Declaration
$wgExtensionCredits['specialpage'][] = [
	'path' => __FILE__,
	'name' => 'MyForm',
	'author' => 'My Name',
	'version' => '0.1.0',
	'url' => 'https://www.mediawiki.org/',
	'descriptionmsg' => 'myf-desc',
];

// A var to ease the referencing of files
$dir = dirname(__FILE__) . '/';

// // i18n file referencing
$wgExtensionMessagesFiles['MyForm'] = $dir . 'MyForm.i18n.php';
// // View file referencing
$wgAutoloadClasses['SpecialMyForm'] = $dir . 'MyForm_body.php';
// // SpecialPage referencing
$wgSpecialPages['MyForm'] = 'SpecialMyForm';

// // The Logic for your extension should be somewhere around here.

// // NO PHP Closing bracket "? >". This is pure code.
