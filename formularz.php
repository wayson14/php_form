<?php
	echo "<link rel='stylesheet' href='styles.css'>";

	include 'classes.php';
	$field_objects = [];

	foreach ($field_names as $f){
		$obj = new Field($f);
		array_push($field_objects, $obj);
	}

	echo "<form action='' method='post'>";
	foreach ($field_objects as $obj){
		# print_r($obj->placeholder);
		echo "<div class='formline'>
			<input name=$obj->name type='text' value=$obj->placeholder /> 
			<span>$obj->fullname</span>
		</div>";
	}


	echo "<div>
    <input type='radio' id='contactChoice1'
     name='sex' value='K'>
    <label for='contactChoice1'>K</label>

    <input type='radio' id='contactChoice2'
     name='sex' value='M'>
    <label for='contactChoice2'>M</label>
    <br/>
    <input type='submit'></input>
    </div>";
	echo "</form>";

	print_r($_POST)
?>