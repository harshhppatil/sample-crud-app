<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $data['title']; ?></h1>
        <p><?php echo $data['description']; ?></p>
        
        <div class="info">
            <h3>MVC Structure Created:</h3>
            <ul>
                <li>Controllers: Handle application logic</li>
                <li>Models: Manage data and database operations</li>
                <li>Views: Display user interface</li>
                <li>Core: App routing and base classes</li>
                <li>Config: Application configuration</li>
            </ul>
        </div>
    </div>
</body>
</html>
