<?php
	/**
	* Test TV_Shows
	*/
	class Test_TV_Shows extends UnitTestCase {
	
		private $showId = 73545;
		private $season = 2;
		private $episode = 1;
		
		public function testSearching() {
			$shows = TV_Shows::search("Battlestar Galactica");
			$this->assertTrue(count($shows) >= 1);
		}
			
		public function testFindById() {
			$show = TV_Shows::findById($this->showId);
		
			$this->assertTrue($show);
			$this->assertTrue($show->seriesName == 'Battlestar Galactica (2003)');
			$this->assertTrue($show->id == $this->showId);
		}
	}
?>
