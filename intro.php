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

	<h1 align="left"> Web Programming Quiz </h1>

	<form action="intro_grade.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> What do you need to create webpages? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> A super fast computer </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> Your own server </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> A text editor </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> Special software </label>
		</div>
		</li>
		
		<li>
		<h3> Who is making the Web standards? </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> Google </label>
        </div>
                    
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B"> Microsoft </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> Mozilla </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> The World Wide Web Consortium</label>
		</div>
		</li>
		
		<li>
		<h3> Who invented World Wide Web? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Tim Berners-Lee </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> Thomas Jefferson </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> Benjamin Franklin </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> George Washington </label>
        </div>
		</li>
		
		<li>
		<h3> when was the first WWW started? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> 1974 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> 1963 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> 1989 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> 1992 </label>
         </div>
		 </li>
		 
		<li>
		<h3> Who teaches Web Programming course? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> Dr.Cao </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> Columbus </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> Dr.Raj </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> Louis Henry </label>
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
                    