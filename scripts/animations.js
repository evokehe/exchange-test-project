function goTo(id) {
    const element = document.getElementById(id);
    element.scrollIntoView();
}
agreeTerms();

function agreeTerms(){
    var element = document.getElementById("submitBtn");
    if(document.getElementById("agreeCheckbox")){
    if(document.getElementById("agreeCheckbox").checked){
        element.disabled = false;
        element.style.backgroundColor ="#10d078";
        element.style.cursor ="pointer";
    }
    else{
        element.disabled = true;
        element.style.backgroundColor ="#7cdfb1";
        element.style.cursor ="auto";
    }}
}