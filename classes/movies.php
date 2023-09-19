<?php
  class Movie {
    // Variables
    public $title;
    public $categories;
    public $year;
    public $film_production;
    public $image;
    public $time;

    // Construct
    function __construct(string $_title, string $_categories, int $_year, string $_film_production, string $_image, string $_time) {
      $this->title = $_title;
      $this->categories = $_categories;
      $this->year = $_year;
      $this->film_production = $_film_production;
      $this->image = $_image;
      $this->time = $_time;
    }

    // Methods
    public function fetchTitle() {
      return $this->title;
    }
    
    public function fetchCategories() {
      return $this->categories;
    }

    public function fetchYear() {
      return $this->year;
    }

    public function fetchFilmProduction() {
      return $this->film_production;
    }

    public function fetchImage() {
      return $this->image;
    }

    public function fetchTime() {
      return $this->time;
    }
  }
?>