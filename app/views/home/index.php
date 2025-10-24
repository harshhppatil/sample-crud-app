<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <!-- Debug: URLROOT = <?php echo URLROOT; ?> -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo URLROOT; ?>/favicon.svg">
</head>
<body>
    <div class="container">
        <section class="hero">
            <h1><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>

            <div class="actions">
                <a class="btn btn-primary" href="#">Get Started</a>
                <a class="btn btn-outline" href="#">Learn More</a>
            </div>
        </section>

        <section class="info" aria-labelledby="mvc-heading">
            <h3 id="mvc-heading">MVC Structure Created:</h3>
            <ul>
                <li>Controllers: Handle application logic</li>
                <li>Models: Manage data and database operations</li>
                <li>Views: Display user interface</li>
                <li>Core: App routing and base classes</li>
                <li>Config: Application configuration</li>
            </ul>
        </section>
    </div>
</body>
</html>
