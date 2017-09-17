<?php
	class Test_TVDB extends UnitTestCase {
		
		public function testRemoveEmptyIndexes() {
			$oldArray = array('', 'index_1', ' ', 'index_3', 'index_4');
			
			$newArray = TVDB::removeEmptyIndexes($oldArray);
			
			$this->assertTrue(count($newArray) == 3);
			$this->assertTrue($newArray[0] == 'index_1');
			$this->assertTrue($newArray[1] == 'index_3');
			$this->assertTrue($newArray[2] == 'index_4');
		}
	}
?>