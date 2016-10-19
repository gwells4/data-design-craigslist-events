<?php
/**
 * Images for Events posted on craigslist
 *
 * Images may be promotional flyers for the Events or pictures from past instances of the Event.
 *
 * @author G. Wells <gwells4@cnm.edu>
 * @version 1.0.0
 **/
class Image {
	/**
	 * The Id for this Image.
	 * This is the primary key.
	 *
	 * @var int $imageId
	 **/
	private $imageId;
	/**
	 * The eventId for the Image.
	 * This is the foreign key.
	 *
	 * @var int $imageEventId
	 **/
	private $imageEventId;
	/**
	 * The Filename for this Image.
	 *
	 * @var string $imageFilename
	 **/
	private $imageFilename;
	/**
	 * The Path to the Image file.
	 *
	 * @var string $imagePath
	 **/
	private $imagePath;

}


?>