<?php
require 'FixtureTestCase.php';
class MyTestCase extends FixtureTestCase {
  public $fixtures = array(
		'inventory',
		'postmeta',
		'options'
	);
	function testReadDatabase() {
		$conn = $this->getConnection()->getConnection();
		
		// fixtures auto loaded, let's read some data
		$query = $conn->query('SELECT * FROM inventory');
		$results = $query->fetchAll(PDO::FETCH_COLUMN);
		$this->assertEquals(2, count($results));
		// now delete them
		$conn->query('TRUNCATE inventory');
		$query = $conn->query('SELECT * FROM inventory');
		$results = $query->fetchAll(PDO::FETCH_COLUMN);
		$this->assertEquals(0, count($results));
		// now reload them
		$ds = $this->getDataSet(array('inventory'));
		$this->loadDataSet($ds);
		$query = $conn->query('SELECT * FROM inventory');
		$results = $query->fetchAll(PDO::FETCH_COLUMN);
		$this->assertEquals(2, count($results));
	}
}