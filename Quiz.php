<?php
	$yourAns1 = $_POST["q1answer"];
	$yourAns2 = $_POST["q2answer"];
	$yourAns3 = $_POST["q3answer"];
	$yourAns4 = $_POST["q4answer"];
	$yourAns5 = $_POST["q5answer"];
	$correctAns1 = "2";
	$correctAns2 = "4";
	$correctAns3 = "6";
	$correctAns4 = "8";
	$correctAns5 = "10";
	$answerCorrectly = 0;
	
	if ($correctAns1 != $yourAns1) {
		echo "Question 1: What is 1 + 1? <br>";
		echo "You answered: " . $yourAns1 . "<br>";
		echo "Correct answer: ". $correctAns1 . "<br>";
	}

	elseif ($correctAns1 == $yourAns1) {
		echo "Correct!!! <br>";
		$answerCorrectly++;
		echo "<br>";
	}

	
	if ($correctAns2 != $yourAns2) {
		echo "Question 2: What is 2 + 2? <br>";
		echo "You answered: " . $yourAns2 . "<br>";
		echo "Correct answer: ". $correctAns2 . "<br>";
	}

	elseif ($correctAns2 == $yourAns2) {
		echo "Correct!!! <br>";
		$answerCorrectly++;
		echo "<br>";
	}

	
	if ($correctAns3 != $yourAns3) {
		echo "Question 3: What is 3 + 3? <br>";
		echo "You answered: " . $yourAns3 . "<br>";
		echo "Correct answer: ". $correctAns3 . "<br>";
	}

	elseif ($correctAns3 == $yourAns3) {
		echo "Correct!!! <br>";
		$answerCorrectly++;
		echo "<br>";
	}

	
	if ($correctAns4 != $yourAns4) {
		echo "Question 4: What is 4 + 4? <br>";
		echo "You answered: " . $yourAns4 . "<br>";
		echo "Correct answer: ". $correctAns4 . "<br>";
	}

	elseif ($correctAns4 == $yourAns4) {
		echo "Correct!!! <br>";
		$answerCorrectly++;
		echo "<br>";
	}

	
	if ($correctAns5 != $yourAns5) {
		echo "Question 4: What is 5 + 5? <br>";
		echo "You answered: " . $yourAns5 . "<br>";
		echo "Correct answer: ". $correctAns5 . "<br>";
	}

	elseif ($correctAns5 == $yourAns5) {
		echo "Correct!!! <br>";
		$answerCorrectly++;
		echo "<br>";
	}

	echo "You answered total " . $answerCorrectly . " questions correctly <br>";
	echo "Your score is " . ($answerCorrectly)/5*100  . "% <br>";
	?>