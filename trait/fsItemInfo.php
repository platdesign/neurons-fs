<?PHP
namespace fs;
use nrns;

trait fsItemInfo {
	
	/**
	 * Get Object of info-file
	 *
	 * @example There is a File named: test.md - Then the info-file has to be stored as test.md.json
	 * @return void
	 * @author Christian Blaschke
	 */
	public function cached_info() {
		if( $infoFile = $this->sibling($this->getFilename().".json") OR $infoFile = $this->sibling($this->getFilename().".info") ) {
			return $infoFile->parseAs("json");
		} else {
			return new \stdClass;
		}
	}
	
	
	
	/**
	 * Returns the Name of the File without the Extension or the name out of the info()-object
	 *
	 * @return string
	 * @author Christian Blaschke
	 */
	public function cached_getTitle() {
		$info = $this->info();
		
		if( isset($info->title) ) {
			return $info->title;
		} else {
			return $this->getName(true);
		}
	}

	
	
	
}


?>