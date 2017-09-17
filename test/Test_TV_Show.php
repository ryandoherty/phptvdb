<?php
	/**
	* Test TV_Show
	*/

	class Test_TV_Show extends UnitTestCase {

		private $showId = 73545;
		private $season = 2;
		private $episode = 1;

		public function testTvShow() {
			$show = TV_Shows::findById($this->showId);

			$this->assertTrue($show->seriesName == 'Battlestar Galactica (2003)');
		}


        public function testGetSeason() {
            $show = TV_Shows::findById($this->showId);

            $season = $show->getSeason(2);

            foreach($season as $episode) {
                $this->assertTrue((int)$episode->SeasonNumber == 2);
            }
        }
	}
?>
