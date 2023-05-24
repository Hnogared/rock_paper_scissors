<?php
	echo "Choose rock, paper, or scissors: ";
	$input = fread(STDIN, 100);
	$input = trim(preg_replace('/\s+/', '', $input));
	$random = rand(1, 3);
	if (strcmp($input, "rock") == 0) {
		if ($random == 1)
			echo "It's a draw ! The computer chose rock.\n";
		if ($random == 2)
			echo "Sorry, you lost. The computer chose paper.\n";
		if ($random == 3)
			echo "Congratulations! You won! The computer chose scissors.\n";
	}
	else if (strcmp($input, "paper") == 0) {
		if ($random == 1)
			echo "Congratulations! You won! The computer chose rock.\n";
		if ($random == 2)
			echo "It's a draw ! The computer chose paper.\n";
		if ($random == 3)
			echo "Sorry, you lost. The computer chose scissors.\n";
	}
	else if (strcmp($input, "scissors") == 0) {
		if ($random == 1)
			echo "Sorry, you lost. The computer chose rock.\n";
		if ($random == 2)
			echo "Congratulations! You won! The computer chose paper.\n";
		if ($random == 3)
			echo "It's a draw ! The computer chose scissors.\n";
	}
	else
		echo "You didn't choose any of the given options and ruined the game... Quitting.\n"
?>
