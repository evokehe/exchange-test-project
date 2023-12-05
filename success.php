<?php
require_once "logic/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?></title>
    <link rel="shortcut icon" href="assets/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/loading.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/payment.css">
    <link rel="stylesheet" href="styles/waiting.css">
    <link rel="stylesheet" href="styles/success.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav">
    <div class="centering">
        <a class="navbar-brand" href="/">
            <div class="logo">
                <p><?php echo $logo; ?></p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text nav-menu">
                <ul class="d-flex">
                    <!-- <li onclick="goTo('pairs')" class="hover-underline-animation">Pairs</li> -->
                    <li  class="lng-about hover-underline-animation">About Us</li>
                    <!-- <li  class="lng-faq hover-underline-animation">FAQ</li> -->
                    <li class=" hover-underline-animation"><a href="/aml-kyc">AML/KYC</a></li>
                    <li class="lng-terms hover-underline-animation"><a href="/terms">Terms</a></li>
                    <li>
                        <select class="select-language">
                            <option value="en">EN</option>
                            <option value="ru">RU</option>
                        </select>
                    </li>
                </ul>
            </span>
        </div>
        </div>
    </nav>

    <section class="success_section">
      <div class="centering">
        <div class="main">
            <p id="transaction"></p>
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="#17ac69" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </div>
            <p class="home"><a href="/">Go to home</a></p>
        </div>


      </div>
    </section>
    <script>

    <?php
    try{
        $query = $pdo->prepare("SELECT * FROM orders where  transactionId = '".$_COOKIE["transactionId"]."'");
        $query->execute();
        $result = $query;


        foreach ($result as $row) {
            echo "if(!".$row["accepted"]."){";
            echo "window.location.replace('/waiting.php');}";
        }}
        catch(Exception $e){

        }
        finally{}
    ?>

    </script>
    <script>
        document.getElementById("transaction").innerHTML = "Transaction <span class='black'>#" + localStorage.getItem("transactionId") + "</span><br>Succesfully completed";
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
