<?php
//2 - Define the kind of request + store inputs them in variables
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $actors=$_POST["actors"] ?? null;
    $director=$_POST["directors"] ?? null;
    $producer=$_POST["producer"] ?? null;
    $year=$_POST["year"] ?? null;
    $language=$_POST["language"] ?? null;
    $categories=$_POST["categories"] ?? null;
    $storyline=$_POST["storyline"] ?? null;
    $video=$_POST["video"] ?? null;
    
// 2.1 -  Check all the input values 

    $actorChecked = is_string($actors)&& ($actors)<50;
    $directorChecked = is_string($director)&& ($director)<50;
    $producerChecked = is_string($producer) && ($producer)<50;
    $yearChecked = is_int($year) && ($year)<4;
    $languageChecked = is_string($language) && ($language)<50;
    $storylineChecked = is_string($storyline);
    $videoChecked = is_string($video);
    
// 2.2  Before try a connexion to the database

    if($actorChecked || $directorChecked || $producerChecked || $yearChecked || $languageChecked || $storylineChecked || $videoChecked){
        try{
            $connection = new PDO('mysql:host=localhost; dbname=exercise_3', 'root', 'dbpass');
        }		catch (PDOException $e){
            echo "Try again";
        }
    }


       
    } echo "try again later";
    
      






//Step 2 :
// 1 Create a form to add a movie and make the necessary checks.
?>
<!DOCTYPE html>
    <html>
    <head>
		<meta charset="utf8">    
    </head>
    <body>
		
		<nav>
			<h1>WELCOME TO THE MOVIE DATABASE</h1>
		</nav> 
		
		<header>
			<h2>PLEASE FOLLOW THE INSTRUCTIONS OF THE FORM</h2>
			<h2>ADD YOUR MOVIES IN THE FORM</h2>
		</header> 
		<article>
			<form action = "RedirectionPage.php" method="POST">
				<input type="text" name="actors" value="actors">
				<input type ="text" name="directors" value="directors">
				<input type ="text" name="producer" value="producer">
				<input type="text" name="year" value="year">
				<input type="text" name="language" value="language">
				<div id="categories">
    				<select>
    					<option>Horror</option>
    					<option>Comedy</option>
    					<option>Scifi</option>
    					<option>Fantasy</option>
    					<option>Musical</option>
    				</select>
    			</div>
    			<input type="text" name="storyline" value="storyline">
    			<input type = "text" name="video" value="video">
    			
    			<button type ="submit">Add Movie</button>	
			</form>
		</article>  
    
    </body>
    
    </html>

<?php 


//Step 4 :
//Create a page that dynamically displays a movie detail. If the film does not exist, an
//error will be displayed.

?>