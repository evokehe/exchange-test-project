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
</head>
<body>
  <div class="tg_support">
    <?php
      echo '<a href="'.$supportTG.'">';
    ?>
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
      </svg>
      <?php
        echo '</a>';
      ?>
  </div>
  <div id="loader">
    <span class="loader"></span>
  </div>

<div id="notification" class="notification centering">
  <div class="not-text">

  <p class="lng-notification"></p>
  </div>
  <div class="not-close" onclick="closeNotification()">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
  </div>

</div>
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
                    <li  class="lng-about hover-underline-animation">About Us</li>
                    <li class=" hover-underline-animation"><a href="/aml-kyc">AML/KYC</a></li>
                    <li class="lng-terms hover-underline-animation"><a href="/terms">Terms</a></li>
                    <li>
                        <select class="select-language">
                            <option value="en">EN
                            </option>
                            <option value="ru">RU
                            </option>
                        </select>
                    </li>
                </ul>
            </span>
        </div>
        </div>
    </nav>

<section class="first_section centering">
<div class="first_text">
  <p class="lng-title-main title">Trade safely</p>
  <p class="lng-description-main description">The main goal we set for ourselves is fast and secure exchanges for our clients 24/7. Try our service and feel all advantages.
</p>
</div>
<div class="first_bg_img">
<img src="assets/first_bg.png" alt="">
</div>
</section>



    <div class="main-main">
        <div class="centering">
            <div class="form">
              <div class="coins" id="coins">

                  <div id="sendCoins" class="send">
                      <div class="block_title right_send"><p class="lng-you-send">You send</p></div>


                      <div class="coins_send">
                        <input id="searchValue1" class="searchCoin lng-search-coin-placeholder" type="text" name="" value="" placeholder="Search coin" oninput="searchCoin(1)">
                      <?php

                          $query = $pdo->prepare("SELECT * FROM wallets WHERE forReceive=1 ORDER BY coin");
                          $query->execute();
                          $result = $query;


                          foreach ($result as $row) {
                              echo '<div onclick="chooseCoin(\'' . $row['coin'] . '\',1,\'' . $row['coinName'] . '\')" class="coin coin-1 ' . $row['coinName'] . '" id="' . $row['coinName'] . '-1">';
                              echo '<div><img loading="lazy" src="assets/coins/' . $row['coin'] . '.png" alt=""></div>';
                              echo '<div  class="coin_text">';
                              echo '<p>' . $row['coinName'] . '</p>';
                              echo '</div>';
                              echo '</div>';
                          }

                          ?>
                      </div>
                  </div>
                  <div id="receiveCoins" class="receive">
                      <div class="block_title">

                      <p class="lng-you-get">You get</p>
                      </div>

                      <div class="coins_receive">
                        <input id="searchValue2" class="searchCoin lng-search2-coin-placeholder" type="text" name="" value="" placeholder="Search coin" oninput="searchCoin(2)">
                      <?php
                                  $query = $pdo->prepare("SELECT * FROM wallets WHERE forSend=1 ORDER BY coin");
                                  $query->execute();
                                  $result = $query;
                                  foreach ($result as $row) {
                                      echo '<div onclick="chooseCoin(\'' . $row['coin'] . '\',2,\'' . $row["coinName"] . '\')" class="coin coin-2 ' . $row['coinName'] . '" id="' . $row['coinName'] . '-2">';
                                      echo '<div><img loading="lazy" src="assets/coins/' . $row['coin'] . '.png" alt=""></div>';
                                      echo '<div class="coin_text">';
                                      echo '<p>' . $row['coinName'] . '</p>';
                                      echo '</div>';
                                      echo '</div>';
                                  }
                                  ?>
                      </div>
                  </div>
              </div>



                <div class="form_form">
                  <div class="real_form">


                    <div class="form_top">

                      <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"/>
                      </svg>
                      </div>
                      <div class="">
                        <p class="lng-exchange">Exchange</p>
                      </div>
                      <div class="">

                        <p id="rate_p">Rate</p>
                      </div>

                    </div>

                    <div class="real_form_form">


                    <div class="send_receive_inputs ">
                      <div class="inputs_inputs">
                        <div class="inputDiv">
                            <p id="sendCoinInfo" class="coinInfo"></p>
                            <div class="mobileInputDiv">
                            <input class="lng-you-send-placeholder" type="number" id="inputAmount" oninput="processChange()">
                             <div class="mobileCoin" id="mobileSend" onclick="openMobileChoose(1)">

                             </div>
                            </div>

                            <p id="error"></p>
                        </div>
                        <div  id="switchBtn" class="switchBtn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                          </svg>
                        </div>
                        <div class="inputDiv">
                            <p id="receiveCoinInfo" class="coinInfo"></p>
                            <div class="mobileInputDiv">
                            <input type="text" id="receiveInput" disabled>
                            <div class="mobileCoin" id="mobileReceive" onclick="openMobileChoose(2)"></div>
                          </div>
                        </div>
                      </div>

                      <div class="user_email_div">
                        <input id="email" type="mail" name="mail" value="" class="lng-your-email-placeholder user_email" oninput="typing('errorEmail')">
                        <p id="errorEmail" class="lng-invalid-email"></p>
                      </div>
                      <div class="user_wallet_div">
                        <input id="walletAddress" type="text" name="" value="" class="lng-your-wallet-placeholder user_wallet"
                        <p id="errorWallet" class="lng-invalid-wallet"></p>
                      </div>
                      <div class="user_promo_div">
                        <div class="">

                          <input id="promocode" type="text" name="" value="" class="lng-promocode-placeholder user_wallet" oninput="removeError()">
                          <button id="promoBtn" type="button" name="button" onclick="activatePromo()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                          </button>
                        </div>
                        <p id="errorWallet" class="lng-invalid-wallet"></p>
                      </div>
                      <div class="terms_div">
                        <p class="lng-accept-terms">By clicking on the "Go to payment" button, I agree to the rules of the exchange.</p>
                      </div>
                      <div class="exchange_button_div">
                        <button type="button" name="button" class="lng-go-to-payment" onclick="exchange()">Go to payment</button>
                      </div>

                    </div>

                    </div>
                </div>

              </div>
            </div>
        </div>
    </div>


    <footer>
      <div class="centering">
        <div class="">
          <p>© 2019-2023 <?php
          echo $site_name;

          ?></p>
        </div>

        <div class="">
          <?php
 echo "<a href='".$trustpilotLink."'>";

                  echo '<img src="assets/bestchange.svg" alt=""></a>'
                  ?>
        </div>


      </div>
    </footer>


    <script>

      function closeNotification(){
        document.getElementById("notification").style.display = "none";
        localStorage.setItem("hideNotification","true");
      }
      if(localStorage.getItem("hideNotification")){
        closeNotification();
      }
      var url = window.location.href;
      var domain = url.replace('http://','').replace('https://','').split(/[/?#]/)[0];
        var siteName = "";
        <?php
        echo "siteName = '".$site_name."';";

        ?>
        //document.title = siteName;
    </script>

    <script src="scripts/Texts/textsMainPage.js" type="text/javascript">
    </script>
    <script src="scripts/translate.js" type="text/javascript">
    </script>
    <?php
    $query = $pdo->prepare("SELECT * FROM sitesettings");
    $query->execute();
    $result = $query;
    foreach ($result as $row) {
        echo '<script>';
        echo 'var addPercentage = ' . $row['addPercentage'] . ';';
        echo 'var percentage = ' . $row['percentage'] . ';';
        echo 'var minAmount = ' . $row['min'] . ';';
        echo 'var maxAmount = ' . $row['max'] . ';';
        echo '</script>';
    }
    ?>
    <script>

    <?php
    $query = $pdo->prepare("SELECT * FROM customCoins");
    $query->execute();
    $result = $query;
    echo "var customCoins = {";
    foreach ($result as $row) {

        echo '"'. $row['coin'] . '":' . $row["rate"].',';

    }
    echo "}";
    ?>

    </script>
    <script>

        localStorage.setItem("addPercentage", addPercentage);
        localStorage.setItem("percentage", percentage);
        localStorage.setItem("minAmount", minAmount);
        localStorage.setItem("maxAmount", maxAmount);
        var coinSend = "BTC";
        var coinReceive = "ETH";
        var sendUsd = 0;
        var receiveUsd = 0;
        var inputAmount = 0;
        var receiveAmount = 0;
        var bonus = 0;
        var sendCoinName = "BTC";
        var receiveCoinName = "ETH";
        var isFirstLoad = true;
        var usedPromo = "";
    </script>

    <?php

    $query_pairs = $pdo->prepare("SELECT * FROM pairs");
    $query_pairs->execute();
    $result_pairs = $query_pairs;

    echo '<script>';
    echo 'var pairs = {}; ';
    foreach ($result_pairs as $row) {

        echo "pairs['" . $row["pair"] . "'] = " . $row["percentage"] . ";";
    }
    echo '</script>';
    ?>
    <script src="scripts/config.js"></script>
    <script src="scripts/processing.js"></script>
    <script src="scripts/crypto-api.js"></script>
    <script src="scripts/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/forge/0.8.2/forge.all.min.js"></script>

    <?php

    $query_promocodes = $pdo->prepare("SELECT * FROM promocodes");
    $query_promocodes->execute();
    $result_promocodes = $query_promocodes;

    echo '<script>';
    echo 'var promocodes = {}; ';
    foreach ($result_promocodes as $row) {

        echo "promocodes['" . hash('sha256', $row["code"]) . "'] = " . $row["percentage"] . ";";
    }
    echo '</script>';
    ?>
    <script src="scripts/promo.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
