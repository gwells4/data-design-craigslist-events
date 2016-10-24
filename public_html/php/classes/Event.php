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
	 * Accessor method for eventCategory
	 *
	 * @return string
	 */
	public function getEventCategory() {
		return $this->eventCategory;
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
	public function setEventId($newEventId = null) {

		// Base case: if the eventId is null, this is a new Event before mySQL has assigned an Id
		if($newEventId === null) {
			$this->eventId = null;
			return;
		}

		// Verify that eventId is secure
		$newEventId = trim($newEventId);
		$newEventId = filter_var($newEventId, FILTER_SANITIZE_NUMBER_INT);

		// Verify that eventId is positive
		if($newEventId <= 0) {
			throw(new \RangeException("eventId is not positive"));
		}
		// Store the eventId
		$this->eventId = $newEventId;

	}

	/**
	 * Mutator method for eventDateTime
	 *
	 * @param \DateTime|string $newEventDateTime is a DateTime object or string
	 * @throws \InvalidArgumentException if $newTweetDate is not a valid object or string
	 * @throws \RangeException if $newTweetDate is a date that does not exist
	 */
	public function setEventDateTime($newEventDateTime) {

		// Verify that eventDateTime is secure (and not null)
		$newEventDateTime = trim($newEventDateTime);
		$newEventDateTime = filter_var($newEventDateTime, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newEventDateTime) === true) {
			throw(new \InvalidArgumentException("eventDateTime is empty or insecure"));
		}

		// Store the eventDateTime
		$this->eventDateTime = $newEventDateTime;

	}

	/**
	 * Mutator method for eventVenue
	 *
	 * @param string $eventVenue
	 */
	public function setEventVenue($newEventVenue) {

		// Verify that eventVenue is secure
		$newEventVenue = trim($newEventVenue);
		$newEventVenue = filter_var($newEventVenue, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newEventVenue) === true) {
			throw(new \InvalidArgumentException("eventVenue is empty or insecure"));
		}

		// Verify that eventVenue will fit in the database
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
	public function setEventDetails($newEventDetails) {

		// Verify that eventDetails is secure
		$newEventDetails = trim($newEventDetails);
		$newEventDetails = filter_var($newEventDetails, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newEventDetails) === true) {
			throw(new \InvalidArgumentException("eventDetails is empty or insecure"));
		}

		// Verify that eventDetails will fit in the database
		if(strlen($newEventDetails) > 2000) {
			throw(new \RangeException("eventDetails has too many characters in it"));
		}

		// Store the eventDetails
		$this->eventDetails = $newEventDetails;

	}


	/**
	 * constructor for the Event class
	 *
	 * @param int|null $newEventId the Id of the Event (null if new Event since it is assigned by MySQL)
	 * @param string $newEventDateTime the Date and TIme of the Event
	 * @param string $newEventVenue the Venue of the Event
	 * @param string $newEventCategory the Category of the Event
	 * @param string $newEventDetails the Details of the Event
	 **/
	public function __construct($newEventId = null, $newEventDateTime, $newEventVenue, $newEventCategory, $newEventDetails) {
		try {
			$this->setEventId($newEventId);
			$this->setEventDateTime($newEventDateTime);
			$this->setEventVenue($newEventVenue);
			$this->setEventCategory($newEventCategory);
			$this->setEventDetails($newEventDetails);
		} catch(\InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));

			/*
		} catch(\RangeException $range) {
			// rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(), 0, $typeError));
		} catch(\Exception $exception) {
			// rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
		*/
	}


$testEvent= new Event()



}
?>