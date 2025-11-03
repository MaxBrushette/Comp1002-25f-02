<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Pizza Processed</title>
    </head>
    <body>
        <header>Pizza-Processing</header>
        <main>
            <?php

            $fname = $_POST["fname"];

            $lname = $_POST["lname"];

            $amount = $_POST['amount-pizza'];

            $selectedSize = $_POST['size'];

            $selectedShape = $_POST['shape'];

            $selectedSauce = $_POST['sauce'];

            if (isset($_POST['toppings'])){
                $selectedToppings = $_POST['toppings'];

                echo('<p>Your selected toppings are: <ul>');
                foreach($selectedToppings as $toppings){
                    echo('<li>'.$toppings.'</li>');
                }

                echo('</ul');
            }else{
                echo('<p>No toppings set.</p>');
            }

            $selectedCrust = $_POST['crust-type'];

            $selectedRetrievalMethod = $_POST['retrieve'];

            if ($selectedRetrievalMethod == "delivery-pizza" ){
                echo('<p>You have selected delivery.</p>')
            }elseif($selectedRetrievalMethod == "carry-out-pizza"){
                echo('<p>You have selected carry-out.')
            }

            $phone = $_POST['phone'];

            if(isset($_POST['city-pizza'])){
                $city = $_POST['city-pizza'];
            }
            if(isset($_POST['address-line-one-pizza'])){
                $addresslineone = $_POST['address-line-one-pizza'];
            }
            if(isset($_POST['address-line-two-pizza'])){
                $addresslinetwo = $_POST['address-line-two-pizza'];
            }
            if(isset($_POST['province'])){
                $selectedProvince = $_POST['province'];
            }
            if(isset($_POST['postal-code-pizza'])){
                $zipcode = $_POST['postal-code-pizza'];
            }
            if(isset($_POST['retrieve-info'])){
                $retrieveInfo = $_POST['retrieve-info'];
            }
            echo('<p>Thank you for your order,' .$fname.' '.$lname.'!</p>');
            ?>
        </main>
    </body>
</html>