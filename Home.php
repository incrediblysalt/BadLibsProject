<!DOCTYPE html>
<html lang="en">
<!-- Ad Libs Project: Home Page -->
<?php include("format.php");?>
	<head>
		<meta charset="UTF-8">
		<title>Bad-Libs</title>
		<link rel="stylesheet" href="css/format.css">
	</head>
	<body>
		<!-- <object class="logo" data="./video/logo.svg" type="image/svg+xml" height="140" width="500"></object> -->
		<?php echo logo(140, 500);?>
		<div class="container">
			
			<h1> Welcome to Bad-Libs </h1>
			
			<button type="button" class="btn" onclick="location.href='Form.php'">Create New Bad-Lib</button>
			
			<!-- &emsp; is the TAB character! -->
			<div class="para">
				<h2> What is an Ad-Lib? </h2>
					<p> &emsp;&emsp;An Ad-Lib has many different forms of speech. 
					It can be a verb (ad-libbed/ad-libbing), an adjective, or
					an adverb. The verb ad-lib means to deliver spontanously, or
					to improvise especially with lines or speech. Similarly, the
					adjective ad-lib describes something which is spoken, composed,
					or performed without preparation. Originating from the word 
					Ad Libitum, which is Latin for "at one's pleasure" or "as you
					desire", it's essence is that of something improvised or
					created fluidly.
					</p>
				<h2> What are Mad Libs?</h2>
					<p> &emsp;&emsp;Mad Libs, created by Leonard Stern and Roger
					Price, is a template word game. The game is played by one player
					prompting others for a list of words, which are substituted for
					blanks in a story before reading aloud. The series was first
					published in 1958, and has sold more than 110 million copies
					since then. There were other predecessors to Mad Libs even
					before 1958, such as the game <i>Revelations about my Friends</i>
					in 1912.
					</p>
				<h2> What are Bad-Libs?</h2>
					<p> &emsp;&emsp;Similary to the name Mad Libs being a pun on
					the word Ad-Lib, Bad-Libs are just another pun added to the
					stack.
					</p>
				<h2> How do I make a Bad-Lib?</h2>
					<p> &emsp;&emsp;Push the "Create New Bad-Lib" button at the top
						of the page! Or, you can click <a href="Form.php">here</a>.</p>
				<h2> Need a refresh on all those English terms?</h2>
					<p> &emsp;&emsp;Here's a quick review on the terms you'll see
					in these Bad-Lib templates: </p>
					<ul class="homeList">
						<li>
							<strong>Adjectives</strong> are words which
							describe something or somebody. Examples are words like
							<i>lumpy</i> or <i>messy</i>.
						</li>
						<li>
							<strong>Adverbs</strong> tell how something is done
							by modifying a verb. These words often end with "-ly",
							such as <i>stupidly</i> or <i>carefully</i>.
						</li>
						<li>
							<strong>Nouns</strong> can be a person, place, or thing.
							Examples are words like <i>Bob</i> or <i>bathtub</i>.
						</li>
						<li>
							<strong>Plural</strong> denotes more than one, and is
							often used for plural nouns. <i>Cats</i> or <i>shoes</i>
							are examples of plural nouns.
						</li>
						<li>
							<strong>Verbs</strong> are action words, such as <i>run</i>
							or <i>jump</i>.
						</li>
						<li>
							<strong>Exclamations and Silly Words</strong> are any sort
							of funny sound, gasp, or outcry. Examples such as <i>Wow!</i>
							or <i>Gadzooks!</i> are good examples.
						</li>
						<li>
							<strong>Numbers, Colors, Animals, and Body
							Parts</strong> are as they sound, and ask for a specific term.
							Such as <i>green</i> for color, or <i>dog</i> for animal.
						</li>
					</ul>
			</div>
			<h3> Still confused? This video may help!</h3>
			<iframe width="480" height="260" 
			src="https://www.youtube.com/embed/_Oo46k8Jl-Q">
			</iframe>
			<p>&copy;
			<a href="https://www.youtube.com/watch?v=_Oo46k8Jl-Q">Stephani MacPhail 2019</a>
			</p>
			
			<?php echo index("home");?>
		</div>
	</body>
</html>