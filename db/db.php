<?php
  require_once __DIR__ . "/../classes/Movies.php";

  $movies = [
    new Movie("Il Padrino", "drammatico", "1972", "Paramount Pictures", "./img/ilpadrino.jpg", "179 min"),
    new Movie("Il Signore degli Anelli", "fantasy", "2001", "New Line Cinema", "./img/ilsignoredeglianelli.jpg", "228 min"),
    new Movie("Inception", "fantascienza", "2010", "Warner Bros.", "./img/inception.jpg", "148 min"),
    new Movie("Il Gladiatore", "epico", "2000", "Universal Pictures", "./img/ilgladiatore.jpg", "155 min"),
    new Movie("Jurassic Park", "avventura", "1993", "Universal Pictures", "./img/jurassicpark.jpg", "127 min"),
    new Movie("Harry Potter", "fantasy", "2001", "Warner Bros.", "./img/harrypotter.jpg", "159 min")
  ];
?>