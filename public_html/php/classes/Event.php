<?php
/**
 * Event posted on craigslist
 *
 * This Event will have an Id, datetime, venue, and details associated with it, so someone who is interested in attending the event has everything they need to know to attend.
 *
 * @author G. Wells <gwells4@cnm.edu>
 * @version 1.0.0
 **/
class Event {
	/**
	 * The Id for this Event.
	 * This is the primary key.
	 * The null datatype is specified below, because the SQL will assign the value, and the null serves as a placeholder.
	 *
	 * @var int|null $eventId
	 **/
	private $eventId;
	/**
	 * The Date & Time for this Event.
	 *
	 * @var string $eventDateTime
	 **/
	private $eventDateTime;
	/**
	 * The Venue for this Event.
	 *
	 * @var string $eventVenue
	 **/
	private $eventVenue;
	/**
	 * The Details of this Event.
	 *
	 * @var string $eventDetails
	 **/
	private $eventDetails;


	// CONSTRUCTOR GOES HERE LATER


	/**
	 * Accessor method for eventId
	 *
	 * @return int|null
	 */
	public function getEventId() {
		return $this->eventId;
	}

	/**
	 * Accessor method for eventDateTime
	 *
	 * @return string
	 */
	public function getEventDateTime() {
		return $this->eventDateTime;
	}

	/**
	 * Accessor method for eventVenue
	 *
	 * @return string
	 */
	public function getEventVenue() {
		return $this->eventVenue;
	}

	/**
	 * Accessor method for eventDetails
	 *
	 * @return string
	 */
	public function getEventDetails() {
		return $this->eventDetails;
	}

	/**
	 * Mutator method for eventId
	 *
	 * @param int|null $eventId
	 */
	public function setEventId(int $newEventId = null) {

		// Base case: if the eventId is null, this is a new Event before mySQL has assigned an Id
		if($newEventId === null) {
			$this->eventId = null;
			return;
		}
		// Verify the eventId is positive
		if($newEventId <= 0) {
			throw(new \RangeException("eventId is not positive"));
		}
		// Convert and store the eventId
		$this->tweetId = $newEventId;

	}

	/**
	 * Mutator method for eventDateTime
	 *
	 * @param string $eventDateTime
	 */
	public function setEventDateTime($eventDateTime) {
		$this->eventDateTime = $eventDateTime;
	}

	/**
	 * Mutator method for eventVenue
	 *
	 * @param string $eventVenue
	 */
	public function setEventVenue(string $newEventVenue) {

		// Verify the eventVenue is secure
		$newEventVenue = trim($newEventVenue);
		$newEventVenue = filter_var($newEventVenue, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newEventVenue) === true) {
			throw(new \InvalidArgumentException("eventVenue is empty or insecure"));
		}

		// verify the eventVenue will fit in the database
		if(strlen($newEventVenue) > 50) {
			throw(new \RangeException("eventVenue has too many characters in it"));
		}

		// Store the eventVenue
		$this->eventVenue = $newEventVenue;

	}

	/**
	 * Mutator method for eventDetails
	 *
	 * @param string $eventDetails
	 */
	public function setEventDetails($eventDetails) {
		$this->eventDetails = $eventDetails;
	}

}


?>