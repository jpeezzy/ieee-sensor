<?php
/**
 * Necessary description of @file, @authors and license
 * @FILLME!
 * Always good to remind that important part
 */

// Avoid illegal processing, doesn't cost much, but unnecessary on a correct installation
if ( !defined( 'MEDIAWIKI' ) ) { 
	die( -1 ); 
}  

// Our SpecialPage
class SpecialMyForm extends SpecialPage {

	/**
	 * Constructor : initialise object
	 * Get data POSTed through the form and assign them to the object
	 * @param $request WebRequest : data posted.
	 */
	public function __construct( $request = null ) {
		parent::__construct( 'MyForm' ); // The first argument must be the name of your special page
		// A second argument "right" can be added to restrict access to the SpecialPage.
	}

	/**
	 * Special page entry point
	 */
	public function execute( $par ) {
		$this->setHeaders();

		// formDescriptor Array to tell HTMLForm what to build
		$formDescriptor = [
			'field1' => [
				'section-message' => "section",
				'class' => 'HTMLTextField', //input type
				'label' => 'Name of Sensor', //Label of the field
			],
			'field2' => [
				'section-message' => 'section1',
				'class' => 'HTMLTextField',
				'label' => 'Manufactuer Name',
			],
			'field3' => [
				'section-message' => 'section1',
				'class' => 'HTMLTextField',
				'label' => 'Principle of Operation',
			],
			'field4' => [
				'section-message' => 'section1',
				'class' => 'HTMLTextField',
				'label' => 'Technologies',
			],

			'field5' => [
				'section-message' => 'section1',
				'class' => 'HTMLTextField',
				'label' => 'Specifications',
			]

		];

		$htmlForm = new HTMLForm( $formDescriptor, $this->getContext() ); // Build the HTMLForm object

		$htmlForm->setSubmitText( 'Process Form' ); // Text to display in submit button

		$htmlForm->show(); // Display the form
	}

	protected function getGroupName() {
		return 'other';
	}
}
// Same as before
// NO PHP Closing bracket "? >". This is pure code.
