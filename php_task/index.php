<?php include 'php/fetch_content.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <h1><?php echo $heading; ?></h1>
    <p><?php echo $paragraph; ?></p>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
