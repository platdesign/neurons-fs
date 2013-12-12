<?PHP

	namespace nrns;
	use nrns;
	
	

	$module = nrns::module("fs", ['nrns']);

	$module->config(function(){
	
		require "trait/fsItemInfo.php";
		require "trait/fsItem.php";
		require "class/fsDir.php";
		require "class/fsFile.php";
	
		require "provider/fsProvider.php";
		
		
		
	});

	$module->provider("fsProvider", "fs\\fsProvider");
	
?>