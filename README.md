# rock_paper_scissors
### DESCRIPTION
PHP script to play rock paper scissors against.

### SYNOPSIS
```
php rps.php
```

### USAGE
When running the script, you will be asked to write either rock, paper or scissors :
```
$> php rps.php
Choose rock, paper, or scissors: paper_
```
Press enter after writing your weapon of choice *(paper can be dangerous, too)*, the script will then display the result of the match depending on what it chose to face you.<br />
Now don't worry, I convinced it to not cheat and choose depending on what you entered, you can still win.
```
$> php rps.php
Choose rock, paper, or scissors: paper
Congratulations! You won! The computer chose rock.
$> php rps.php
Choose rock, paper, or scissors: rock
Sorry, you lost. The computer chose paper.
$> php rps.php
Choose rock, paper, or scissors: rock
It's a draw ! The computer chose rock.
$> _
```
Of course, the computer will only accept legal objects (rock, paper or scissors).
Seriously, don't try to scam it, it won't work.
```
$> php rps.php
Choose rock, paper, or scissors: black hole 
You didn't choose any of the given options and ruined the game... Quitting.
$> _
```
