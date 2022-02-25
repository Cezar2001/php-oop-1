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
        $this->movieTitle . "<br/>";
        $this->movieDescription . "<br/>";
        $this->movieDate . "<br/>";
        $this->movieGenre . "<br/>";
        $this->movieLanguage . "<br/>";
    }

    $movieOne = new Movie("Peaky Blinders", "Birmingham mafia family", "27-02-2022", "Historical Fiction", "Eng");       
    $movieTwo = new Movie("Legend", "Gangstar twins", "03-03-2016", "Drama", "Eng");       
}

var_dump($movieOne, $movieTwo)

?>