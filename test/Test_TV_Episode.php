<?php

	class Test_TV_Episode extends UnitTestCase {
		
		private $showId = 73545;
		private $season = 2;
		private $episode = 11;

		public function testGetEpisode() {
			$guestStars = array('Graham Beckel',
								'John Pyper-Ferguson',
								'Michelle  Forbes',
								'Tricia Helfer',
		    					'Vincent Gale');
			$directors = array('Michael Rymer');
			$writers = array('Michael Rymer');



			$show = TV_Shows::findById($this->showId);
			$episode = $show->getEpisode($this->season, $this->episode);
			$this->assertTrue($episode->name == 'Resurrection Ship (1)');
			$this->assertTrue($episode->season == $this->season);
			$this->assertTrue($episode->number == $this->episode);
			$this->assertTrue($episode->firstAired == 1136534400);
			$this->assertTrue(count(array_diff($episode->guestStars, $guestStars)) == 0);
			$this->assertTrue(count(array_diff($episode->directors, $directors)) == 0);
			$this->assertTrue(count(array_diff($episode->writers, $writers)) == 0);
			$this->assertTrue($episode->overview == 'The Battlestars Galactica and Pegasus face a new Cylon target, a "Resurrection" ship, while a power struggle threatens to result in all-out war among the human fleet.');
			$this->assertTrue($episode->imdbId == '');
        
			$episode = $show->getEpisode(1, 2);
			$this->assertTrue($episode->imdbId == 'tt0519792');

		}
		
		
		public function testEpisodeNotFound() {
		
		    
	        $show = TV_Shows::findById($this->showId);
	        $missingEpisode = $show->getEpisode(1, 99); //test for existing season, but not episode
	        $this->assertFalse($missingEpisode, "Error fetching episode that doesn't exist from existing season");
	        
	        $missingSeason = $show->getEpisode(99, 1); //test for non-existing season and episode
	        $this->assertFalse($missingSeason, "Error fetching episode for season that doesn't exist"); 
	        
		}
	}
?>