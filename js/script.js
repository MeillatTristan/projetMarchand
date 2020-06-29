function quantityUpdate(signe, index, prix){
  let quantity = document.getElementById('viewQuantity'+index).innerHTML;
  let total = document.getElementById('totalPanier').innerHTML;
  if (quantity <= 1 && signe == '-'){
    return;
  }
  if (signe == '-'){
    let totalArticle = (parseFloat(quantity)-1) * parseFloat(prix);
    jQuery('#viewQuantity'+index).load('updateQuantity.php?signe=-&indexToChange='+index);
    document.getElementById('priceArticle'+index).innerHTML = totalArticle.toFixed(2) + "€";
    document.getElementById('totalPanier').innerHTML  = (parseFloat(total) - parseFloat(prix)).toFixed(2) + "€";
  }
  else if(signe == '+'){
    let totalArticle = (parseFloat(quantity)+1) * parseFloat(prix);
    jQuery('#viewQuantity'+index).load('updateQuantity.php?signe=plus&indexToChange='+index);
    document.getElementById('priceArticle'+index).innerHTML = totalArticle.toFixed(2) + "€";
    document.getElementById('totalPanier').innerHTML = (parseFloat(total) + parseFloat(prix)).toFixed(2) + "€";

  }

}

function changeRadioEmport(){
  if(document.getElementById('livraisonEmporter').checked){
    document.getElementById('containerEmporter').style.backgroundColor = "#4A4A4A";
    document.getElementById('containerEmporter').style.color = "#ffffff";
    document.getElementById('containerDomicile').style.backgroundColor = "#ffffff";
    document.getElementById('containerDomicile').style.color = "#4A4A4A";

  }
}

function changeRadioDomicile(adresse){
  if(adresse.length == 0){
    document.getElementById('livraisonDomicile').checked = false;
    document.getElementById('livraisonEmporter').checked = true;
    changeRadioEmport();
    document.getElementById('overlayAdresse').style.display = "block";
    document.getElementById('overlayAdresse').style.opacity = "1";
    document.getElementById('overlayAdresse').style.zIndex = "4";

  }
  else{
    if(document.getElementById('livraisonDomicile').checked){
      document.getElementById('containerDomicile').style.backgroundColor = "#4A4A4A";
      document.getElementById('containerDomicile').style.color = "#ffffff";
      document.getElementById('containerEmporter').style.backgroundColor = "#ffffff";
      document.getElementById('containerEmporter').style.color = "#4A4A4A";
    }
  }
}

function closePopup(){
  document.getElementById('overlayAdresse').style.display = "none";
  document.getElementById('overlayAdresse').style.opacity = "0";
  document.getElementById('overlayAdresse').style.zIndex = "0";

}

function inscription() {
  document.getElementById('background_inscription').style.display = "flex" ;
  document.getElementById('connexion').style.display = 'none';
  document.getElementById('coo').style.display = 'none';
  document.getElementById('buttonInscription').style.visibility = 'hidden'
}

function close_inscription() {
  document.getElementById('background_inscription').style.display = "none";
  document.getElementById('connexion').style.display = 'block';
  document.getElementById('coo').style.display = 'flex';
  document.getElementById('buttonInscription').style.visibility = 'visible';
}

function validForm() {
  let password1 = document.getElementById('password_1').innerHTML;
  let password2 = document.getElementById('password_2').innerHTML;
  if (password1 == password2) {
    return true
  }
  else {
    return false
  }
}

function filtre(choiceFiltre, idCheckmark){
  let articles = document.getElementsByClassName("article");
  let checkmark = document.getElementById(idCheckmark);

  if (checkmark.checked == true){
    for (let index = 0; index < articles.length; index++) {
      if(!articles[index].className.includes(choiceFiltre)){
        articles[index].style.display = 'none';
      }
    }
  }
  else{
    for (let index = 0; index < articles.length; index++) {
      if(!articles[index].className.includes(choiceFiltre)){
        articles[index].style.display = 'flex';
      }
    }
  }

}
