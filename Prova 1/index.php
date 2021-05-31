<?php // Import Class Movie e Data Fake per Connessione al DB
    require_once __DIR__ . '/movie.php';
    require_once __DIR__ . '/movie_data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>DB OOP</title>
</head>

<body>
    <header>
        <h1>DB OOP</h1>
    </header>

    <main class="container">
        <section class="jumbo">
            <?php // Movie List 
            foreach ($movies as $movie) {
                // Creo Istanze
                $film = new Movie($movie['title'], $movie['genre'], $movie['review'] = 'nd', $movie['date_of_release'], $movie['director'], $movie['language'], $movie['summary']); ?>

                <div class="card">
                    <article class="">
                        <h2 class="title"><?php echo $film->title; ?></h2>
                        <img src="<?php echo $movie['url']; ?>" alt="">
                        <p><?php echo $film->genre; ?></p>
                        <p><?php echo $film->review; ?></p>
                        <p><?php echo $film->date_of_release; ?></p>
                        <p><?php echo $film->director; ?></p>
                        <p><?php echo $film->language; ?></p>
                        <p><?php echo $film->getExcepert().'...'; ?></p>
                    </article>
                </div>

            <?php } ?>
        </section>

    </main>

</body>

</html>