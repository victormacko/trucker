<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 20/09/15
 * Time: 2:01 PM
 */

namespace Trucker;

use Exception;
use stdClass;

/**
 * Class RequestException
 * Represents an error received from a request (when finding something, or requesting an object).
 *
 * @package Trucker
 */
class RequestException extends Exception
{
	protected $errors = null;

	public function __construct($message, $errors) {
		parent::__construct(
			$message .
			"\n" .
			$this->getErrorsAsStr($errors)
		);

		$this->errors = $errors;
	}

	/**
	 * @param $errors
	 * @return mixed
	 */
	protected function getErrorsAsStr($errors) {
		return print_r($errors, true);
	}

	/**
	 * @return stdClass|null
	 */
	public function getErrors() {
		return $this->errors;
	}
}