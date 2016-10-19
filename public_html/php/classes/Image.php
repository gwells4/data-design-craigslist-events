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
	 * The null datatype is specified below, because the SQL will assign the value, and the null serves as a placeholder.
	 *
	 * @var int|null $imageId
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


	// CONSTRUCTOR GOES HERE LATER


	/**
	 * Accessor method for imageId
	 *
	 * @return int|null
	 */
	public function getImageId() {
		return $this->imageId;
	}

	/**
	 * Accessor method for imageEventId
	 *
	 * @return int
	 */
	public function getImageEventId() {
		return $this->imageEventId;
	}

	/**
	 * Accessor method for imageFilename
	 *
	 * @return string
	 */
	public function getImageFilename() {
		return $this->imageFilename;
	}

	/**
	 * Accessor method for imagePath
	 *
	 * @return string
	 */
	public function getImagePath() {
		return $this->imagePath;
	}
}


?>