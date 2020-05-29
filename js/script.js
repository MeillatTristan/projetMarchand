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

function changeRadioDomicile(){
  if(document.getElementById('livraisonDomicile').checked){
    document.getElementById('containerDomicile').style.backgroundColor = "#4A4A4A";
    document.getElementById('containerDomicile').style.color = "#ffffff";
    document.getElementById('containerEmporter').style.backgroundColor = "#ffffff";
    document.getElementById('containerEmporter').style.color = "#4A4A4A";
  }
}

function inscription() {
  alert('yoo')
  document.getElementById('inscription_onclick').style.display = block ;
}