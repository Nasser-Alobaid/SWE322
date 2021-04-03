	<?php

 class Student {
	public $name;
	public $id;

	function __construct($name) {
	$this->name = $name;
	}

	function __destruct() {
	echo "The student {$this->name}. has been destoryed";
	}

	function get_name() {
	return $this->name;
	}
	}

	function set_name($name) {
	$this->name = $name;
	}

	$student_2 = new Student("Manal");

	echo $student_2->get_name(); //Manal

	?>
