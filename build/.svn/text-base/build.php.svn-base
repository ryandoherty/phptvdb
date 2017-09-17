#!/usr/bin/php
<?php
	echo "Building PHPTVDB release \n";
	
	echo "Creating docs\n";
	passthru('PhpDocumentor/phpdoc -d ../src/ -t  docs');
	
	echo "Zipping files\n";
	
	//get tag name from folder name
	$currentDir = getcwd();
	$dirs = explode('/', $currentDir);
	$releaseDir = 'phptvdb-'.$dirs[count($dirs)-2];
	
	passthru('cp -r ../src/ '.$releaseDir);
	passthru('zip -r '.$releaseDir.'.zip '.$releaseDir.' -i \*.php');
	passthru('rm -rf '.$releaseDir);
	echo "Done! \n";
?>