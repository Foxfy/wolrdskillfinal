<?php
  session_start();
  include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Overview Competition - Thai Football Tournament</title>

  <script type="module" crossorigin src="./assets/compiled/js/bootstrap.esm.js"></script>
  <link rel="stylesheet" href="./assets/compiled/css/bootstrap.css" />
  <link rel="stylesheet" href="./assets/compiled/css/styles.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="competition-index.php">Thai Football competition</a>
    </div>
  </nav>

  <?php
      $slug = $_GET['competition_slug'];
      $sql = "SELECT c.* , COUNT(ap.provinces_id) as count_province 
      FROM competitions c 
      LEFT JOIN allowed_provinces ap ON c.id = ap.competitions_id 
      WHERE c.slug='$slug'";
      $result = $conn->query($sql);
      $competition = mysqli_fetch_array($result);
    ?>

  <main class="container py-5">
    <section class="mb-4 d-flex align-items-center justify-content-between">
      <header>
        <h3><?=$competition['name']?></h3>
      </header>
       
    </section>

    <div class="bg-light text-center">
      <img src="images/<?=$competition['banner']?>" alt="<?=$competition['banner']?>" class="img-w100">
    </div>

    <section class="my-5">
      <header class="text-center mb-3">
        <h5>Competition Info</h5>
      </header>
      <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-body text-center py-3">
              <h1><?=$competition['max_teams']?></h1>
              <p class="text-muted mb-0">Max Teams</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card">
            <div class="card-body text-center py-3">
              <h1><?=$competition['count_province']?></h1>
              <p class="text-muted mb-0">Provinces</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <header class="text-center">
        <h5>Participated Provinces</h5>
      </header>
      <div class="row justify-content-center">
        <?php
          $sql = "SELECT * 
          from allowed_provinces ap 
          INNER JOIN provinces p ON ap.provinces_id = p.id 
          WHERE ap.competitions_id = ".$competition['id'];
          $result = $conn->query($sql);
          while($row=mysqli_fetch_array($result)){
        ?>
        <div class="col-md-2 col-sm-6 mt-3">
          <div class="card">
            <div class="card-body text-center py-3">
              <span class="text-muted"><?=$row['name']?></span>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </section>

     
  </main>
</body>

</html>