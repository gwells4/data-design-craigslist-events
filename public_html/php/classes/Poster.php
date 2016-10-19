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



}


?>