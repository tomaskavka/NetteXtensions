<?php

// first add this row
use Nette\Application\Responses\JsonpResponse;

class HomepagePresenter extends BasePresenter {

	/**
	 * Test JSONP response
	 * 
	 * @param string $callback 
	 */
	public function renderTestJsonp($callback) {
		// add some test data
		$this->jsonpPayload->data = array(
			'hello' => 'world'
		);

		// create response
		$response = new JsonpResponse($callback, $this->jsonpPayload);

		// and send it
		$this->sendResponse($response);
	}
}
