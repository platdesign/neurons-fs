<?PHP
namespace fs;
use nrns;



class fsProvider extends nrns\Provider {
	
	private $rootDir;
	
	function __construct($nrns){
	//	$this->setRootPath(__SCRIPT__);
		$this->setRootPath($_SERVER['SCRIPT_FILENAME']);
	}
	
	public function setRootPath($path) {
		$this->rootDir = new fsDir($path);
	}

	public function getService() {
		return $this->rootDir;
	}
	
	public function __tostring() {
		return (string) $this->rootDir;
	}
	
}


?>