<?PHP
namespace fs;
use nrns;

trait fsItem {
	
	use nrns\methodcache;
	use fsItemInfo;
	
	
	
	private $parent;
	
	
	/**
	 * Sets the parentDir
	 *
	 * @param string $parent 
	 * @return fsDir
	 * @author Christian Blaschke
	 */
	public function setParent($parent) {
		$this->parent = $parent;
		return $this;
	}
	
	
	
	/**
	 * Returns the parentDir
	 *
	 * @return fsDir
	 * @author Christian Blaschke
	 */
	public function parent(){
		return $this->parent;
	}

	
	
	/**
	 * Returns a sibling File | Dir
	 *
	 * @param string $name 
	 * @return fsDir | fsFile
	 * @author Christian Blaschke
	 */
	public function sibling($name) {
		return $this->parent()->find($name);
	}
	
	
	
	public function isWriteable() {
		return is_writable($this);
	}
	
	public function getName($withoutOrderInt=false) {
		$name = $this->getFilename();
		
		if($withoutOrderInt) {
			if(is_numeric(substr($name, 0, 1))) {
				$name = substr($name, stripos($name, '-')+1);
			}
		}
		
		return str_replace('.'.$this->getExtension(), '', $name);
	}
	
}


?>