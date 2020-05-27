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