

//
// document.getElementById("amount").innerHTML =localStorage.getItem("inputAmount") + " " + localStorage.getItem("coinSend")
// document.getElementById("address").innerHTML =rocketAddress
//

function copyBtn(copyNumber){
  if(copyNumber==1){
    copy(localStorage.getItem("inputAmount"));
    document.getElementById("sendWallet").classList.remove("copied");
    document.getElementById("sendvp").classList.add("copied");
  }
  else{
    copy(systemWallet);
    document.getElementById("sendvp").classList.remove("copied");
    document.getElementById("sendWallet").classList.add("copied");
  }
}

function copy(text) {
    var input = document.createElement('textarea');
    input.innerHTML = text;
    document.body.appendChild(input);
    input.select();
    var result = document.execCommand('copy');
    document.body.removeChild(input);
    return result;
}
