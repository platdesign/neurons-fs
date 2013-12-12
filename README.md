#neurons-express#

A filesystem-module for [Neurons](https://github.com/platdesign/Neurons).

##install##
`bower install neurons-fs --save`

##Provider#

###$fsProvider###

**->setRootPath($path)**	
Sets the rootpath of `$fs-service`.



##Services##

###$fs###
**->find($path)**	
Returns the a `fsFile` or `fsDir` of the path.




##fsDir##
- **items()**	
Returns an array of Items in this directory. (An item can be a `fsFile`- or `fsDir`-instance.)

- **files()**	
Returns an array of files in this directory as `fsFile`-instances. 

- **dirs()**	
Returns an array of directories in this directory as `fsDir`-instances.

- **filesExt($extension)**	
Returns an array of `fsFile`-instances of files this directory where file-extension equals `$extension`.

- **exists($path/$filename)**	
Checks if `$path` or `$filename` exists in this directory and returns a boolean.

- **find($path/$filename)**		
If `$path` or `$filename` exists in this directory this method
returns a `fsDir` / `fsFile`-instance.

- **createDir($dirname)**	
Creates a new directory and returns a `fsDir`-instance of it.

- **createFile($filename[, $content])**	
Creates a new file with `$content` as content and returns a `fsFile`-instance of it.

- **getIterator()** 	
Returns an instance of `DirectoryIterator` of this directory.