<?php include 'data.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/style.css" />
    <title>Bootstrap 4</title>
</head>

<body>
    <?php include 'header.php' ?>

    <!-- main -->
    <main role="main">
        <section class="jumbotron text-center py-10">
            <div class="container">
                <h1>Greetings, Bootstrap 4</h1>
                <p class="lead text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
                    distinctio ducimus, doloribus perspiciatis assumenda obcaecati
                    architecto.
                </p>
                <p>
                    <a href="#!" class="btn btn-primary m-2">About Us</a>
                    <a href="#!" class="btn btn-secondary m-2">Sign Up</a>
                </p>
            </div>
        </section>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach ($cardTextData as $cardText) :
                        include 'card.php';
                    endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <!-- ./main -->

    <?php include 'footer.php' ?>
    <script src="public/navbar.js"></script>
</body>

</html>
