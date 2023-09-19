<?php
require_once __DIR__ . '/db/db.php';

$project_title = 'PHP OOP 1';
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $project_title ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid d-flex justify-content-between">
      <div class="nav-left">
        <a class="navbar-brand fw-bold text-white fs-1" href="#"><?php echo $project_title ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="nav-right">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Movies</a>
          <a class="nav-link" href="#">Top Rated</a>
          <a class="nav-link" href="#">Community</a>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="d-flex flex-wrap gap-5">
        <?php
          foreach ($movies as $movie) { ?>
            <div class="card border rounded-0 mt-5 width">
              <img src="<?php echo ($movie->fetchImage()) ?>" class="card-img-top h-100">
              <div class="card-body">
                <h5 class="card-title text-white text-center fw-bold fs-2 mb-4"><?php echo ($movie->fetchTitle()) ?></h5>
                <p class="card-text text-white text-center"><span class="fw-bold">Genere:</span> <?php echo ($movie->fetchCategories()) ?></p>
                <p class="card-text text-white text-center"><span class="fw-bold">Anno d'uscita:</span> <?php echo ($movie->fetchYear()) ?></p>
                <p class="card-text text-white text-center"><span class="fw-bold">Casa Produttrice:</span> <?php echo ($movie->fetchFilmProduction()) ?></p>
                <p class="card-text text-white text-center"><span class="fw-bold">Durata:</span> <?php echo ($movie->fetchTime()) ?></p>
              </div>
            </div>
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>