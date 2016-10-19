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
	 *
	 * @var int $eventId
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

}


?>