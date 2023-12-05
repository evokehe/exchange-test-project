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
    <link rel="stylesheet" href="styles/terms.css">
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
                        <li class="lng-about hover-underline-animation">About Us</li>
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


    <section class="terms_section">
        <div class="centering">
            <div class="terms">
                <div class="terms_title">
                    <div class="">
                        <img src="assets/doc.png" alt="">
                    </div>
                    <div class="">
                        <p class="lng-about-title"></p>
                    </div>
                </div>

                <div class="terms_body">
                    <p class="lng-about-terms"></p>
                </div>
            </div>
        </div>
    </section>
<script>
    var siteName = "";
    <?php
        echo "siteName = '".$site_name."';";

        ?>
    </script>
    <script src="scripts/Texts/textsTerms.js" type="text/javascript">
    </script>
    <script src="scripts/translate.js" type="text/javascript">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>