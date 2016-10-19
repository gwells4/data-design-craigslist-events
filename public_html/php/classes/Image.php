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


	/**
	 * Mutator method for imageId
	 *
	 * @param int|null $imageId
	 */
	public function setImageId($newImageId = null) {

		// Base case: if the imageId is null, this is a new Image before mySQL has assigned an Id
		if($newImageId === null) {
			$this->imageId = null;
			return;
		}
		// Verify that imageId is positive
		if($newImageId <= 0) {
			throw(new \RangeException("imageId is not positive"));
		}
		// Store the imageId
		$this->imageId = $newImageId;

	}

	/**
	 * Mutator method for imageEventId
	 *
	 * @param int $newImageEventId new value of imageEventId
	 * @throws \RangeException if $newImageEventId is not positive
	 * @throws \TypeError if $newImageEventId is not an integer
	 **/
	public function setImageEventId($newImageEventId) {

		// Verify that imageEventId is positive
		if($newImageEventId <= 0) {
			throw(new \RangeException("imageEventId is not positive"));
		}

		// Store the imageEventId
		$this->imageEventId = $newImageEventId;
	}

	/**
	 * Mutator method for imageFilename
	 *
	 * @param string $newImageFilename
	 */
	public function setImageFilename($newImageFilename) {

		// Verify that imageFilename is secure
		$newImageFilename = trim($newImageFilename);
		$newImageFilename = filter_var($newImageFilename, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newImageFilename) === true) {
			throw(new \InvalidArgumentException("imageFilename is empty or insecure"));
		}

		// Verify that imageFilename will fit in the database
		if(strlen($newImageFilename) > 20) {
			throw(new \RangeException("imageFilename has too many characters in it"));
		}

		// Store the imageFilename
		$this->imageFilename = $newImageFilename;

	}

	/**
	 * Mutator method for imagePath
	 *
	 * @param string $newImagePath
	 */
	public function setImagePath($newImagePath) {

		// Verify that imagePath is secure
		$newImagePath = trim($newImagePath);
		$newImagePath = filter_var($newImagePath, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newImagePath) === true) {
			throw(new \InvalidArgumentException("imagePath is empty or insecure"));
		}

		// Verify that imagePath will fit in the database
		if(strlen($newImagePath) > 100) {
			throw(new \RangeException("imagePath has too many characters in it"));
		}

		// Store the imagePath
		$this->imagePath = $newImagePath;

	}

}
?>