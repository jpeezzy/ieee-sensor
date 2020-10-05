<?php
// Internationalisation for MyForm extension
// @FILLME!

$messages = [];

// English
$messages['en'] = [
	'myf-desc' => 'A generic extension used by the HTMLForm tutorial'
];

// Message documentation (Message documentation)
$messages['qqq'] = [
	'myf-desc' => '{{desc}}'
];

// French
$messages['fr'] = [
	'myf-desc' => 'Une extension générique utilisée par le tutoriel d\'HTMLForm'
];

$formDescriptor = [
	'simpletextfield' => [
		'label-message' => 'myform-simpletextfield', // i18n message id for the field's label
		'class' => 'HTMLTextField', // Input type
		'validation-callback' => [ $this, 'validateSimpleTextField' ],
		'filter-callback' => [ $this, 'filterSimpleTextField' ],
	]
];

{
		'section1': 'Hello',
		"section2": "Section II",
		"section3": "Third Section"
}
// More langages…
// NO PHP Closing bracket "? >". This is pure code.
