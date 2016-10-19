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
		return ($this->eventId);
	}

	/**
	 * Accessor method for eventDateTime
	 *
	 * @return string
	 */
	public function getEventDateTime() {
		return ($this->eventDateTime);
	}

	/**
	 * Accessor method for eventVenue
	 *
	 * @return string
	 */
	public function getEventVenue() {
		return ($this->eventVenue);
	}

	/**
	 * Accessor method for eventDetails
	 *
	 * @return string
	 */
	public function getEventDetails() {
		return ($this->eventDetails);
	}

}


?>