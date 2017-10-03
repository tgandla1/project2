<!DOCTYPE html>
<html lang = "en">
<head>

    <meta charset="UTF-8">

    <title>HTMLQuiz</title>

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
			
	<h1 align="left"> HTML Quiz </h1>
	<ol>
		<li> 
		<h3> What does HTML stand for? </h3>
		
		<div>
			<label for="question-1-answers-A"> Hyper Text Making Language </label>
			<?php
			if ($answer1 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-B"> Hyper Typewrite Mark Language </label>
			<?php
			if ($answer1 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		
		<div>
			<label for="question-1-answers-C"> Hyper Text Markup Language </label>
			<?php
			if ($answer1 == "C") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		
		<div>
			<label for="question-1-answers-D"> Hyper Text Mozilla Language </label>
			<?php
			if ($answer1 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		</li>
		
		<li>
		<h3> Choose the correct HTML element for the largest heading: </h3>
		
		<div>
            <label for="question-2-answers-A"> &lt;heading&gt; </label>
			<?php
			if ($answer2 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
            <label for="question-2-answers-B"> &lt;h6&gt; </label>
			<?php
			if ($answer2 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-2-answers-C"> &lt;h1&gt; </label>
			 <?php
			if ($answer2 == "C") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
		</div>
		
        <div>
             <label for="question-2-answers-D"> &lt;head&gt; </label>
			 <?php
			if ($answer2 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
		</div>
		</li>
		
		<li>
		<h3> What is the correct HTML for adding a background color? </h3>
		
		<div>
             <label for="question-3-answers-A"> &lt;background&gt; yellow &lt;/background&gt; </label>
			 <?php
			if ($answer3 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-B"> &lt;body style="background-color:yellow;"&gt; </label>
			 <?php
			if ($answer3 == "B") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-C"> &lt;body bg="yellow"&gt; </label>
			 <?php
			if ($answer3 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-3-answers-D"> &lt;body background: yellow &gt; </label>
			 <?php
			if ($answer3 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
		</li>
		
		<li>
		<h3> What is the correct HTML for creating a hyperlink? </h3>
		
		<div>
             <label for="question-4-answers-A"> &lt;a href="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
			 <?php
			if ($answer4 == "A") { $points++; }
			echo "<img src = 'tick.png' style='width:30px;height:20px;'/>";
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-B"> &lt;a url="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
			 <?php
			if ($answer4 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-C"> &lt;a name="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
			 <?php
			if ($answer4 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-4-answers-D"> &lt;a&gt;http://icollege.gsu.edu&lt;/a&gt; </label>
			 <?php
			if ($answer4 == "D") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
         </div>
		 </li>
		 
		<li>
		<h3> How can you make a numbered list? </h3>
		 
		<div>
             <label for="question-5-answers-A"> &lt;ul&gt; </label>
			 <?php
			if ($answer5 == "A") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-B"> &lt;dl&gt; </label>
			 <?php
			if ($answer5 == "B") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-C"> &lt;list&gt;</label>
			 <?php
			if ($answer5 == "C") { echo "<img src = 'cross.png' style='width:30px;height:20px;'/>";}
			?>
        </div>
                    
        <div>
             <label for="question-5-answers-D"> &lt;ol&gt; </label>
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
                    