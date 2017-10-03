<!DOCTYPE html>
<html lang = "en">
<head>

    <meta charset="UTF-8">

    <title>TECHQuiz</title>

    <link href="hello.css" rel="stylesheet"/>

</head>

<body>
<div class="wrap">
    <div class="floatleft">
<ul>
      <input type="checkbox" id="collapse"/> 
      <label for="collapse"></label>  
	  
        <li><a href="index.html"><b>Home</b></a></li>     
      <li><a href="intro.php">Intro</a></li>
      <li><a href="html.php">HTML</a></li>
      <li><a href="css.php">CSS</a></li>
      <li><a href="php.php">PHP</a></li>
	  
    </ul>

</div>

<div class ="floatright">

<div class = "col">
<?php
		$answer1 = NULL;
		$answer2 = NULL;
		$answer3 = NULL;
		$answer4 = NULL;
		$answer5 = NULL;
		$points=0;
            if (!empty($_POST['question-1-answers'])) {
				$answer1 = $_POST['question-1-answers'];
			}
			if (!empty($_POST['question-2-answers'])) {
				$answer2 = $_POST['question-2-answers'];
			}
			if (!empty($_POST['question-3-answers'])) {
				$answer3 = $_POST['question-3-answers'];
			}
			if (!empty($_POST['question-4-answers'])) {
				$answer4 = $_POST['question-4-answers'];
			}
			if (!empty($_POST['question-5-answers'])) {
				$answer5 = $_POST['question-5-answers'];
			}
			?>
	<h1 align="left"> CSS Quiz </h1>

	<ol>
		<li> 
		<h3> What does CSS stand for? </h3>
		
		<div>
			<label for="question-1-answers-A"> Creative Style Sheets </label>
			<?php
			if ($answer1 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-B"> Colorful Style Sheets </label>
			<?php
			if ($answer1 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-C"> Computer Style Sheets </label>
			<?php
			if ($answer1 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-D"> Cascading Style Sheets </label>
			<?php
			if ($answer1 == "D") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		</li>
		
		<li>
		<h3>  Which is the correct CSS syntax? </h3>
		
		<div>
            <label for="question-2-answers-A"> body:color=black </label>
			<?php
			if ($answer2 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
            <label for="question-2-answers-B">  {body;color:black} </label>
			<?php
			if ($answer2 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-2-answers-C"> {body:color=black(body} </label>
			 <?php
			if ($answer2 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
        <div>
             <label for="question-2-answers-D"> body {color: black} </label>
			 <?php
			if ($answer2 == "D") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		</li>
		
		<li>
		<h3> How do you insert a comment in a CSS file? </h3>
		
		<div>
             <label for="question-3-answers-A"> this is a comment </label>
			 <?php
			if ($answer3 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-B"> /* this is a comment */ </label>
			 <?php
			if ($answer3 == "B") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-C"> // this is a comment </label>
			 <?php
			if ($answer3 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-D"> // this is a comment // </label>
			 <?php
			if ($answer3 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
		</li>
		
		<li>
		<h3> How do you display hyperlinks without an underline? </h3>
		
		<div>
             <label for="question-4-answers-A"> a {text-decoration:none} </label>
			 <?php
			if ($answer4 == "A") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-B"> a {text-decoration:no underline} </label>
			 <?php
			if ($answer4 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-C"> a {decoration:no underline} </label>
			 <?php
			if ($answer4 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-D"> a {underline:none} </label>
			 <?php
			if ($answer4 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
         </div>
		 </li>
		 
		<li>
		<h3> How do you make a list that lists its items with squares? </h3>
		 
		<div>
             <label for="question-5-answers-A"> type: square </label>
			 <?php
			if ($answer5 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-B"> list-type: square </label>
			 <?php
			if ($answer5 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-C">  type: 2 </label>
			 <?php
			if ($answer5 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-D"> list-style-type: square </label>
			 <?php
			if ($answer5 == "D") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
		</li>
		
	</ol>	
<?php            
            echo "<div id='results'> You have answered $points out of 5 questions correctly </div>";
?>	
</div>
</div>
<br>
<br>
	
</body>
</html>
                    