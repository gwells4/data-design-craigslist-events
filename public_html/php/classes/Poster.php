<?php
/**
 * The person (Poster) for Events posted on craigslist
 *
 * This person (Poster) is the one who posts the Event to craigslist.
 * Generally, it will contain the contact information for the poster, so people interested in attending can contact them for more details, if necessary.
 *
 * @author G. Wells <gwells4@cnm.edu>
 * @version 1.0.0
 **/
class Poster {
	/**
	 * The Name of the Poster.
	 * It is not required.
	 *
	 * @var string $posterName
	 **/
	private $posterName;
	/**
	 * The Email address of the Poster.
	 * This is the primary key.
	 * In the real craigslist, it may be optionally assigned by craigslist.
	 * Is is a required field.
	 *
	 * @var string $posterEmail
	 **/
	private $posterEmail;
	/**
	 * The Phone number of the Poster.
	 * It is not required.
	 *
	 * @var string $posterPhone
	 **/
	private $posterPhone;
	/**
	 * This is the eventId for the Event the Poster posted.
	 * This is the foreign key.
	 *
	 * @var int $posterEventId
	 **/
	private $posterEventId;


	// CONSTRUCTOR GOES HERE LATER


	/**
	 * Accessor method for posterName
	 *
	 * @return string
	 */
	public function getPosterName() {
		return $this->posterName;
	}

	/**
	 * Accessor method for posterEmail
	 *
	 * @return string
	 */
	public function getPosterEmail() {
		return $this->posterEmail;
	}

	/**
	 * Accessor method for posterPhone
	 *
	 * @return string
	 */
	public function getPosterPhone() {
		return $this->posterPhone;
	}

	/**
	 * Accessor method for posterEventId
	 *
	 * @return int
	 */
	public function getPosterEventId() {
		return $this->posterEventId;
	}


	/**
	 * Mutator method for posterName
	 *
	 * @param string $newPosterName
	 */
	public function setPosterName($newPosterName) {

		// Verify that posterName is secure
		$newPosterName = trim($newPosterName);
		$newPosterName = filter_var($newPosterName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newPosterName) === true) {
			throw(new \InvalidArgumentException("posterName is empty or insecure"));
		}

		// Verify that posterName will fit in the database
		if(strlen($newPosterName) > 256) {
			throw(new \RangeException("posterName has too many characters in it"));
		}

		// Store the posterName
		$this->posterName = $newPosterName;

	}

	/**
	 * Mutator method for posterEmail
	 *
	 * @param string $newPosterEmail
	 */
	public function setPosterEmail($newPosterEmail) {

		// Verify that posterEmail is secure
		$newPosterEmail = trim($newPosterEmail);
		$newPosterEmail = filter_var($newPosterEmail, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL);
		if(empty($newPosterEmail) === true) {
			throw(new \InvalidArgumentException("posterEmail is empty or insecure"));
		}

		// Verify that posterEmail will fit in the database
		if(strlen($newPosterEmail) > 256) {
			throw(new \RangeException("posterEmail has too many characters in it"));
		}

		// Store the posterEmail
		$this->posterEmail = $newPosterEmail;

	}

	/**
	 * Mutator method for posterPhone
	 *
	 * @param string $newPosterPhone
	 */
	public function setPosterPhone($newPosterPhone) {

		// Verify that posterPhone is secure
		$newPosterPhone = trim($newPosterPhone);
		$newPosterPhone = filter_var($newPosterPhone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newPosterPhone) === true) {
			throw(new \InvalidArgumentException("posterPhone is empty or insecure"));
		}

		// Verify that posterPhone will fit in the database
		if(strlen($newPosterPhone) > 32) {
			throw(new \RangeException("posterPhone has too many characters in it"));
		}

		// Store the posterPhone
		$this->posterPhone = $newPosterPhone;

	}

	/**
	 * Mutator method for posterEventId
	 *
	 * @param int $newPosterEventId new value of posterEventId
	 * @throws \RangeException if $newPosterEventId is not positive
	 * @throws \TypeError if $newPosterEventId is not an integer
	 **/
	public function setPosterEventId($newPosterEventId) {

		// Verify that posterEventId is secure
		$newPosterEventId = trim($newPosterEventId);
		$newPosterEventId = filter_var($newPosterEventId, FILTER_SANITIZE_NUMBER_INT);

		// Verify that posterEventId is positive
		if($newPosterEventId <= 0) {
			throw(new \RangeException("posterEventId is not positive"));
		}

		// Store the posterEventId
		$this->posterEventId = $newPosterEventId;
	}

}
?>