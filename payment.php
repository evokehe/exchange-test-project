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
</head>
<body>
  <div id="loader">
    <span class="loader"></span>
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
                    <!-- <li onclick="goTo('pairs')" class="hover-underline-animation">Pairs</li> -->
                    <li  class="lng-about hover-underline-animation">About Us</li>
                    <!-- <li  class="lng-faq hover-underline-animation">FAQ</li> -->
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



<section class="payment_section">
  <div class="centering">
  <div class="payment_top">
    <div class="shuffle_title">
      <div class="shuffle_icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"/>
          <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"/>
        </svg>
      </div>
      <p class="lng-waiting"></p>
    </div>

    <div class="">
      <p class="lng-transaction-id" id="lng-transaction-id">

      </p>
    </div>
  </div>
  <div class="timer_part">
    <div class="timer_ico">
      <img src="assets/timer.svg" alt="">
    </div>
    <div class="time_left">
      <p id="demo"></p>
      <p class="lng-time-left"></p>
    </div>
  </div>

<div class="info_part">
  <div class="info_info">
    <div class="amountDiv">
      <div class="sendPDiv">
        <p class="lng-send-text sendP" ></p>
      </div>
      <div class="sendValueDiv">
        <p class="sendValue" id="sendvp"></p>
        <div class="copyBtn" onclick="copyBtn(1)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
            <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z"/>
          </svg>
        </div>
      </div>
    </div>

    <div class="walletDiv">
      <div class="sendPDiv">
        <p class="lng-to-wallet sendWalletP"></p>
      </div>
      <div class="sendValueDiv">
        <p class="sendWallet" id="sendWallet"></p>
        <div class="copyBtn" onclick="copyBtn(2)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
            <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z"/>
          </svg>
        </div>
      </div>
    </div>


<div class="warning_info">
<p class="lng-warning-text"></p>
</div>
  </div>




  <div class="qr_div">
    <p class="lng-qrtext qrtext"></p>
<div class="qrcode" id="qrcode">

</div>
  </div>
</div>

<div class="buttons">
  <div class="">
    <button class="lng-i-paid" type="button" name="button" onclick="goToWaiting()"></button>
  </div>
  <div class="">
    <button class="lng-cancel" type="button" name="button" onclick="cancel()"></button>
  </div>
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
        echo "if(".$row["accepted"]."){";
        echo "window.location.replace('/success');}";
    }}
    catch(Exception $e){

    }
    finally{}
?>

</script>


<script>
      //document.getElementById("tag").innerText = "<?php echo $site_name; ?> address (" + localStorage.getItem("coinSend") + ")";
      var systemWallet = ""
  </script>
<script>
  <?php

  $query = $pdo->prepare("SELECT * FROM wallets ");
  $query->execute();
  $result = $query;


  foreach ($result as $row) {


      echo "if(localStorage.getItem('sendCoinName')=='" . $row['coinName'] . "'){

  systemWallet = '" . $row['wallet'] . "'
}";
  }

  ?>
</script>
<script>
function goToWaiting(){
  window.location.href = '/logic/payed';
}
function cancel(){
  localStorage.clear();
  window.location.href = '/';
}
     // Set the date we're counting down to
     var countDownDate = new Date(localStorage.getItem("creationTime")).getTime();
     console.log(countDownDate);
     // Update the count down every 1 second
     var x = setInterval(function() {

         // Get today's date and time
         var now = new Date().getTime();

         // Find the distance between now and the count down date
         var distance = countDownDate - now;

         // Time calculations for days, hours, minutes and seconds
         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         // Output the result in an element with id="demo"
         document.getElementById("demo").innerHTML = minutes + ":" + seconds;

         // If the count down is over, write some text
         if (distance < 0) {
             clearInterval(x);
             window.location.href = '/';
         }
     }, 1000);



     document.getElementById("lng-transaction-id").innerText="#" + localStorage.getItem("transactionId")
     document.getElementById("sendWallet").innerText=systemWallet;
     document.getElementById("sendvp").innerText=localStorage.getItem("inputAmount");

     var sendText = localStorage.getItem("inputAmount")+" " + localStorage.getItem("coinSend");
 </script>
   <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"></script>
   <script type="text/javascript">
      new QRCode(document.getElementById("qrcode"), systemWallet);
  </script>
    <script src="scripts/Texts/textsPayment.js" type="text/javascript">
    </script>
    <script src="scripts/translate.js" type="text/javascript">
    </script>
    <script src="scripts/profile.js" type="text/javascript">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
