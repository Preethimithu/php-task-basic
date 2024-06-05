<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/validation.js"></script>
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <form name="contactForm" action="php/submit_contact.php" onsubmit="return validateForm()" method="post">
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName">
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName">
        </div>
        <div>
            <label for="phoneNumber">Phone No:</label>
            <input type="text" id="phoneNumber" name="phoneNumber">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
