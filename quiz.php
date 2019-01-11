    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>Quiz</title>
    	<!-- Quiz Written By Jeremy Rue, UC Berkeley Graduate School of Journalism -->
    	<style>
    		/*css reset */
    		html,body,div,span,h1,h2,h3,h4,h5,h6,p,code,small,strike,strong,sub,sup,b,u,i{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0;} 
    		article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;} 
    		body{line-height:1; font:normal 0.9em/1em "Helvetica Neue", Helvetica, Arial, sans-serif;} 
    		ol,ul{list-style:none;} 
    		#frame{max-width:620px;width:100%;border:1px solid #ccc;background:#eee;padding:10px;} 
    		#content{font:normal normal 1em/1.5em "Helvetica Neue", Helvetica, Arial, sans-serif;margin:0 40px 10px;} 
    		h1{font:normal bold 2em/1.8em "Helvetica Neue", Helvetica, Arial, sans-serif;text-align:left;background:#ccc;padding:0 15px;width:auto}
    		h2{font:italic bold 1.3em/1.2em "Helvetica Neue", Helvetica, Arial, sans-serif;padding:5px 15px 15px;} 
    		input[type=radio]{margin:0 10px 5px -22px;} label{margin:0 0 5px;}
    		#score p{font-size:0.95em; font-style:italic; color:#666; float:right;margin:5px 5px 0 0;}
    		#score:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
    		#response{min-height:70px; margin:10px; }
    		#response h3{font:normal bold 1.2em/1.5em "Helvetica Neue", Helvetica, Arial, sans-serif; margin:5px 0;}
    	</style>
    	<script>
     
    		var quiz = [
    			{
    				"question"		: 	"Q1: Who came up with theory of relativity?",
    				"choices"		: 	[
    										"Sir Isaac Newton",
    										"Nicolaus Copernicus",
    										"Albert Einstein",
    										"Ralph Waldo Emmerson"
    									],
    				"correct"		: 	"Albert Einstein",
    				"explanation"	: 	"Albert Einstein drafted the special theory of relativity in 1905.",
     
    			},
    			{
    				"question"		: 	"Q2: Who is on the two dollar bill?",
    				"choices"		: 	[
    										"Thomas Jefferson",
    										"Dwight D. Eisenhower",
    										"Benjamin Franklin",
    										"Abraham Lincoln"
    									],
    				"correct"		: 	"Thomas Jefferson",
    				"explanation"	: 	"The two dollar bill is seldom seen in circulation. As a result, some businesses are confused when presented with the note.",
    			},
    			{
    				"question"		: 	"Q3: What event began on April 12, 1861?",
    				"choices"		: 	[
    										"First manned flight",
    										"California became a state",
    										"American Civil War began",
    										"Declaration of Independence"
    									],
    				"correct"		: 	"American Civil War began",
    				"explanation"	: 	"South Carolina came under attack when Confederate soldiers attacked Fort Sumter. The war lasted until April 9th 1865.",
    			},
     
    		];
     
    		var currentQuestion = 0;
    		var score = 0;
    		var askingQuestion = true;
     
    		function loadQuestion(){
     
    			//set temporary variable for creating radio buttons
    			var radioButton;
     
    			//clear out radio buttons from previous question
    			document.getElementById('content').innerHTML = "";
     
    			//loop through choices, and create radio buttons
    			for(var i=0; i < quiz[currentQuestion]["choices"].length; i++){
     
    				radioButton  = document.createElement('input');
    				radioButton.type = 'radio';
    				radioButton.name = 'quiz';
    				radioButton.id = 'choice'+ (i+1);
    				radioButton.value = quiz[currentQuestion]["choices"][i];
     
    				//create label tag, which hold the actual text of the choices
    				var label = document.createElement('label');
    				label.setAttribute('for','choice'+ (i+1));
    				label.innerHTML = quiz[currentQuestion]["choices"][i];
     
    				//create a <br> tag to separate options
    				var br = document.createElement('br');
     
    				//attach them to content. Attach br tag, then label, then radio button
    				document.getElementById('content').insertBefore(br);
    				document.getElementById('content').insertBefore(label, br);
    				document.getElementById('content').insertBefore(radioButton, label);
    			}
     
    			//load the question
    			document.getElementById('question').innerHTML = quiz[currentQuestion]["question"];
     
    			//setup score for first time
    			if(currentQuestion == 0){
    				document.getElementById('score').innerHTML = '<p>score: 0 right answers out of ' + quiz.length +' possible</p>';
    			}
    		}
     
    		function checkAnswer(){
     
    			//are we asking a question, or proceeding to next question?
    			if(askingQuestion){
     
    				//change button text to next question, so next time they click it, it goes to next question
    				document.getElementById('check').innerHTML = 'Next Question';
    				askingQuestion = false;
     
    				//determine which radio button they clicked
    				var userpick;
    				var correctIndex;
    				var radios = document.getElementsByName('quiz');
    				for(var i=0; i < radios.length; i++){
    					if(radios[i].checked){ //if this radio button is checked
    						userpick = radios[i].value;
    					}
    					//get index of correct answer
    					if(radios[i].value == quiz[currentQuestion]["correct"]){
    						correctIndex = i;
    					}
    				}
     
    				//set the color if they got it right, or wrong
    				if(userpick == quiz[currentQuestion]["correct"]){
    					score++;
    					document.getElementsByTagName('label')[correctIndex].style.color = "green";
    					document.getElementsByTagName('label')[correctIndex].style.fontWeight = "bold";
    					document.getElementById('explanation').innerHTML = "<h3>Correct!</h3>";
    				} else {
    					document.getElementsByTagName('label')[correctIndex].style.color = "red";
    					document.getElementsByTagName('label')[correctIndex].style.fontWeight = "bold";
    					document.getElementById('explanation').innerHTML = "<h3>Incorrect</h3>";
    				}
     
    				document.getElementById('explanation').innerHTML += '<p>' + quiz[currentQuestion]["explanation"] + '</p>';
    				document.getElementById('score').innerHTML = '<p>score: '+ score +' right answers out of ' + quiz.length +' possible</p>';
     
     
    			} else { //reset form and move to next question
     
    				//setting up so user can ask a question
    				askingQuestion = true;
     
    				//change button text back to 'submit answer'
    				document.getElementById('check').innerHTML = 'Submit Answer';
     
    				document.getElementById('explanation').innerHTML = "";
     
    				//if we're not on last question, increase question number
    				if(currentQuestion < quiz.length - 1){
    					currentQuestion++;
    					loadQuestion();
    				} else {
    					showFinalResults();
    				}
     
    			}
    		}
     
    		function showFinalResults(){
     
    			document.getElementById('content').innerHTML = '<h2>You Completed The Quiz</h2>';
    			document.getElementById('content').innerHTML += '<p>Below are your results:</p>';
    			document.getElementById('content').innerHTML += '<h2>' + score + ' out of ' + quiz.length + ' questions, ' + Math.round(score/quiz.length * 100) + '%</h2>';
     
    			//delete the button
    			var button = document.getElementById('check');
    			button.parentNode.removeChild(button); //js requires you to delete elements from the parent
     
    			//remove question
    			document.getElementById('question').innerHTML = "";
     
    		}
     
     
    		window.onload = loadQuestion;
     
    	</script>
     
    </head>
    <body>
    	<div id="frame">
    		<h1>Quiz Title Here</h1>
    		<div id="score"><p>score: 0 right answers out of 0 possible</p></div>
    		<h2 id="question">Question here</h2>
    		<div id="content">
     
    		</div>
    		<button id="check" onclick="checkAnswer()">Submit Answer</button>
    		<div id="response">
    			<div id="explanation"></div>
    		</div>
    	</div>
    </body>
    </html>