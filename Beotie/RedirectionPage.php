<?php
include_once __DIR__.'/Exercise3.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    
    $actors=$_GET["actors"] ?? null;
    $director=$_GET["directors"] ?? null;
    $producer=$_GET["producer"] ?? null;
    $year=$_GET["year"] ?? null;
    $language=$_GET["language"] ?? null;
    $categories=$_GET["categories"] ?? null;
    $storyline=$_GET["storyline"] ?? null;
    $video=$_GET["video"] ?? null;
    
   
        try{
            $connection = new PDO('mysql:host=localhost; dbname=exercise_3', 'root', 'dbpass');
        }		catch (PDOException $e){
            echo "Try again";
        }
    
   
    $sql = "INSERT INTO 'movie' (actors, directors, producer, year, language, category, storyline, video) VALUES (\"$actors\", \"$director\", \"$producer\", \"$year\", \"$language\", \"$categories\", \"$storyline\", \"$video\")";
    $affected = $connection->exec($sql);
    
    if (!$affected) {
        echo implode(', ', $connection->errorInfo());
        return;
    }
    $id = $connection->lastInsertId();
    
    echo "Thank You for the informations";
    return;
    
    $query = "SELECT * FROM movie WHERE actors=:actors";
    $statement = $connection->prepare($query);
    $statement->bindValue("actors", $actors);
    $statement->execute();
    $allLines = $statement->fetchAll();
    
    if(!empty($allLines)){
        foreach($allLines as $lines){
            echo $lines["actors"];
            echo $lines["directors"];
            echo $lines["producer"];
            echo $lines["year"];
            echo $lines["language"];
            echo $lines["category"];
            echo $lines["story"];
            echo $lines["video"];
        }
        
    }else{
        echo "try again later";
    }
       
}
//Step 3 :
//Create a page which lists the movies in the database in an HTML table. This table will
//contain, per film, only the name of the film, the director, and the year of production..
//One column of this table will contain a "see more info" link to see the detailed
//information sheet of a film
?>
<!DOCTYPE>
    