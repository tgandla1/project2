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

	<h1 align="left"> PHP Quiz </h1>

	<form action="css_grade.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> What does PHP stand for? </h3>
		
		<div>
			<label for="question-1-answers-A"> Hypertext Preprocessor </label>
			<?php
			if ($answer1 == "A") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		
		<div>
			<label for="question-1-answers-B"> HyperLanguage Preprocessor </label>
			<?php
			if ($answer1 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-C"> Pretext Hypertext Processor </label>
			<?php
			if ($answer1 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-D"> Preprocessor Home Page </label>
			<?php
			if ($answer1 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		</li>
		
		<li>
		<h3>  Who is the father of PHP? </h3>
		
		<div>
            <label for="question-2-answers-A"> Rasmus Lerdorf </label>
			<?php
			if ($answer2 == "A") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
            <label for="question-2-answers-B"> Willam Makepiece </label>
			<?php
			if ($answer2 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-2-answers-C"> Drek Kolkevi </label>
			 <?php
			if ($answer2 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
        <div>
             <label for="question-2-answers-D"> List Barely </label>
			 <?php
			if ($answer2 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		</li>
		
		<li>
		<h3> A PHP script should start with ___ and end with ___: </h3>
		
		<div>
             <label for="question-3-answers-A"> &lt;php, &gt; </label>
			 <?php
			if ($answer3 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-B"> &lt;?, php?&gt; </label>
			 <?php
			if ($answer3 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-C"> &lt;?, ?&gt; </label>
			 <?php
			if ($answer3 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-D"> &lt;?php, ?&gt; </label>
			 <?php
			if ($answer3 == "D") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
		</li>
		
		<li>
		<h3> Which version of PHP introduced Try/catch Exception? </h3>
		
		<div>
             <label for="question-4-answers-A"> PHP 4 </label>
			 <?php
			if ($answer4 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-B"> PHP 5 </label>
			 <?php
			if ($answer4 == "B") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-C"> PHP 5.3 </label>
			 <?php
			if ($answer4 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-D"> PHP 6 </label>
			 <?php
			if ($answer4 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
         </div>
		 </li>
		 
		<li>
		<h3> Which of the following php statement/statements will store 111 in variable num? </h3>
		 
		<div>
             <label for="question-5-answers-A"> int $num = 111; </label>
			 <?php
			if ($answer5 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-B"> int mum = 111; </label>
			 <?php
			if ($answer5 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-C">  $num = 111; </label>
			 <?php
			if ($answer5 == "C") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-D">  111 = $num; </label>
			 <?php
			if ($answer5 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
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
                    