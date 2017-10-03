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

	<h1 align="left"> Web Programming Quiz </h1>

	
	<ol>
		<li> 
		<h3> What do you need to create webpages? </h3>		
		<div>			
			<label for="question-1-answers-A"> A super fast computer </label>
			<?php
			if ($answer1 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>		
		<div>
			
			<label for="question-1-answers-B"> Your own server </label>
			<?php
			if ($answer1 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>		
		<div>			
			<label for="question-1-answers-C"> A text editor </label>
			<?php
			if ($answer1 == "C") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>		
		<div>			
			<label for="question-1-answers-D"> Special software </label>
			<?php
			if ($answer1 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		</li>
		
		<li>
		<h3> Who is making the Web standards? </h3>		
		<div>			
            <label for="question-2-answers-A"> Google </label>
			<?php
			if ($answer2 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>                    
        <div>
            <label for="question-2-answers-B"> Microsoft </label>
			<?php
			if ($answer2 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>                    
        <div>
             <label for="question-2-answers-C"> Mozilla </label>
			 <?php
			if ($answer2 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>		
        <div>
             <label for="question-2-answers-D"> The World Wide Web Consortium</label>
			 <?php
			if ($answer2 == "D") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		</li>
		
		<li>
		<h3> Who invented World Wide Web? </h3>		
		<div>
             <label for="question-3-answers-A"> Tim Berners-Lee </label>
			 <?php
			if ($answer3 == "A") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-B"> Thomas Jefferson </label>
			 <?php
			if ($answer3 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-C"> Benjamin Franklin </label>
			 <?php
			if ($answer3 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-D"> George Washington </label>
			 <?php
			if ($answer3 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
		</li>
		
		<li>
		<h3> when was the first WWW started? </h3>
		
		<div>
             <label for="question-4-answers-A"> 1974 </label>
			 <?php
			if ($answer4 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-B"> 1963 </label>
			 <?php
			if ($answer4 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-C"> 1989 </label>
			 <?php
			if ($answer4 == "C") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-D"> 1992 </label>
			 <?php
			if ($answer4 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
         </div>
		 </li>
		 
		<li>
		<h3> Who teaches Web Programming course? </h3>
		 
		<div>
             <label for="question-5-answers-A"> Dr.Cao </label>
			 <?php
			if ($answer5 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-B"> Columbus </label>
			 <?php
			if ($answer5 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-C"> Dr.Raj </label>
			 <?php
			if ($answer5 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-D"> Louis Henry </label>
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
                    