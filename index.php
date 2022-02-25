<?php 

class Movie{
    public $movieTitle;
    public $movieDescription;
    public $movieDate;
    public $movieGenre;
    public $movieLanguage;

    function __construct($_movieTitle, $_movieDescription, $_movieDate, $_movieGenre, $_movieLanguage) {
        $this->movieTitle = $_movieTitle;
        $this->movieDescription = $_movieDescription;
        $this->movieDate = $_movieDate;
        $this->movieGenre = $_movieGenre;
        $this->movieLanguage = $_movieLanguage;
    }

    public function getMovie() {
        return
            "<div><h3>Title: " . $this->movieTitle . "</h3>" . 
            "<p>Description: " . $this->movieDescription . "</p>" . 
            "<p>Date: " . $this->movieDate . "</p>" .
            "<p>Genre: " . $this->movieGenre . "</p>" .
            "<p>Language: " . $this->movieLanguage . "</p>" . "</div>";
    }

}

$movieOne = new Movie("Peaky Blinders", "Birmingham mafia family", "27-02-2022", "Historical Fiction", "Eng");       
$movieTwo = new Movie("Legend", "Gangstar twins", "03-03-2016", "Drama", "Eng");       

// var_dump($movieOne, $movieTwo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="card">
        <div class="img-movie img-movie-one"></div>
        <?php  echo ($movieOne -> getMovie());?>
    </div>

    <div class="card">
        <div class="img-movie img-movie-two"></div>
        <?php  echo ($movieTwo -> getMovie());?>
    </div>
    
</div>    

</body>
</html>