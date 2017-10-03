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
      <li><a href="intro.php">Introduction to Web</a></li>
      <li><a href="html.php">HTML</a></li>
      <li><a href="css.php">CSS</a></li>
      <li><a href="php.php">PHP</a></li>
	  
    </ul>

</div>

<div class ="floatright">

<div class = "col">

	<h1 align="left"> CSS Quiz </h1>

	<form action="css_grade.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> What does CSS stand for? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Creative Style Sheets </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> Colorful Style Sheets </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> Computer Style Sheets </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> Cascading Style Sheets </label>
		</div>
		</li>
		
		<li>
		<h3>  Which is the correct CSS syntax? </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> body:color=black </label>
        </div>
                    
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">  {body;color:black} </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> {body:color=black(body} </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> body {color: black} </label>
		</div>
		</li>
		
		<li>
		<h3> How do you insert a comment in a CSS file? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> this is a comment </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> /* this is a comment */ </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> // this is a comment </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> // this is a comment // </label>
        </div>
		</li>
		
		<li>
		<h3> How do you display hyperlinks without an underline? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> a {text-decoration:none} </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> a {text-decoration:no underline} </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> a {decoration:no underline} </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> a {underline:none} </label>
         </div>
		 </li>
		 
		<li>
		<h3> How do you make a list that lists its items with squares? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> type: square </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> list-type: square </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C">  type: 2 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> list-style-type: square </label>
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
                    