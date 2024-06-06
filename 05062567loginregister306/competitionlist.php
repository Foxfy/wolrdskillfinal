<?php
	session_start();
	include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>List Competitions - Thai Football Tournament</title>

    <script
      type="module"
      crossorigin
      src="js/bootstrap.esm.js"
    ></script>
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="competition-index.html"
          >Thai Football competition</a
        >
      </div>
    </nav>

    <main class="container py-5">
      <header class="mb-4 d-flex align-items-center justify-content-between">
        <h3 class="mb-0">Competition List</h3>
        <a class="btn btn-outline-primary" href="competition-create.html">Create a competition</a>
      </header>

      <section class="competition-list">
		<?php
			  $sql = "SELECT c.* , COUNT(ap.provinces_id) as count_provinces FROM competitions as c LEFT JOIN allowed_provinces as ap ON c.id = ap.competitions_id GROUP BY c.id ORDER BY c.id;";
		  
		  	  $result = $conn->query($sql);
		  	  while($row = mysqli_fetch_array($result)){
				  
		?>
        <a href="competition-detail.php?competition_slug=<?=$row['slug']?>">
          <article class="competition-box card mb-3">
            <div class="card-body">
              <h4><?=$row['name']?></h4>
              <p class="text-muted mb-0"><?=$row['max_teams']?> Teams - <?=$row['count_provinces']?> Provinces</p>
            </div>
          </article>
        </a>
		<?php
			  }
		?>
      </section>
    </main>
  </body>
</html>
