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
      <li><a href="intro.php">Introduction to Web</a></li>
      <li><a href="html.php">HTML</a></li>
      <li><a href="css.php">CSS</a></li>
      <li><a href="php.php">PHP</a></li>
	  
    </ul>

</div>

<div class ="floatright">

<div class = "col">

	<h1 align="left"> HTML Quiz </h1>

	<form action="html_grade.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> What does HTML stand for? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Hyper Text Making Language </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> Hyper Typewrite Mark Language </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> Hyper Text Markup Language </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> Hyper Text Mozilla Language </label>
		</div>
		</li>
		
		<li>
		<h3> Choose the correct HTML element for the largest heading: </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> &lt;heading&gt; </label>
        </div>
                    
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B"> &lt;h6&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> &lt;h1&gt; </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> &lt;head&gt; </label>
		</div>
		</li>
		
		<li>
		<h3> What is the correct HTML for adding a background color? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> &lt;background&gt; yellow &lt;/background&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> &lt;body style="background-color:yellow;"&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> &lt;body bg="yellow"&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> &lt;body background: yellow &gt; </label>
        </div>
		</li>
		
		<li>
		<h3> What is the correct HTML for creating a hyperlink? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> &lt;a href="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> &lt;a url="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> &lt;a name="http://icollege.gsu.edu">ICollege GSU&lt;/a&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> &lt;a&gt;http://icollege.gsu.edu&lt;/a&gt; </label>
         </div>
		 </li>
		 
		<li>
		<h3> How can you make a numbered list? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> &lt;ul&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> &lt;dl&gt; </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> &lt;list&gt;</label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> &lt;ol&gt; </label>
        </div>
		</li>
		
	</ol>
     
	<div class="button">  
    <input type="submit" value="Submit"/>  
	</div>	 
   
	</form>
	
</div>
</div>
<br>
<br>
	
</body>
</html>
                    