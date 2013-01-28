<?php

/**
 * Base class for all application presenters.
 * JSONP functionality added
 *
 * @author     David Grudl, Tomas Kavka
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	
	/** @var \stdClass */
	private $jsonpPayload; 

	protected function startup() {
		parent::startup();
		
		// create JSONP payload
		$this->jsonpPayload = new \stdClass;
	}
	
	/**
	 * Returns JSONP payload
	 * 
	 * @return \stdClass
	 */
	public function getJsonpPayload() {
		return $this->jsonpPayload;
	}
}
