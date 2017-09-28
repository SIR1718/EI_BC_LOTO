<?php 
class keyGenerator {
	public $numbers;
	public $stars;

	public function __construct($nn,$ns) {
		$this->numbers = array();
		$this->stars = array();

		//extract numbers
		do {
			$random = rand(1,50);
			if (!in_array($random, $this->numbers)) {
				$this->numbers[] = $random;
			}
		} while (count($this->numbers) < $nn);

		//extract stars
		do {
			$random = rand(1,50);
			if (!in_array($random, $this->stars)) {
				$this->stars[] = $random;
			}
		} while (count($this->stars) < $ns);

	}
}

$myKey = new keyGenerator(5,2);
var_dump($myKey);

?>