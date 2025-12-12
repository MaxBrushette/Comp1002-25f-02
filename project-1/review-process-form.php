<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Review-Processed</title>
    </head>
    <body>
        <header>Review</header>
        <main>
            <?php
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $stars = $_POST['stars-amount'];
                $reviewtext = $_POST['review-text'];

                echo('<p>Thanks, ' ' .$fname. ' ' .$lname.' '</p>');
            ?>
        </main>
    </body>
</html>
