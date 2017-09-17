#!/usr/bin/php
<?php
	/**
	 * Test suite for PHP::TVDB
	 */
    date_default_timezone_set('America/Los_Angeles');
	include('../src/TVDB.php');
	require_once('simpletest/unit_tester.php');
	require_once('simpletest/reporter.php');

	$test = &new TestSuite('All TVDB Tests');
	$test->addTestFile('Test_TV_Shows.php');
	$test->addTestFile('Test_TVDB.php');
	$test->addTestFile('Test_TV_Show.php');
	$test->addTestFile('Test_TV_Episode.php');
	$test->run(new TextReporter());

?>
