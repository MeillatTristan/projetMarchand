function quantityUpdate(signe, index, prix){
  let quantity = document.getElementById('viewQuantity').innerHTML;
  if (quantity <= 1 && signe == '-'){
    return;
  }
  if (signe == '-'){
    let total = (parseFloat(quantity)-1) * parseFloat(prix);
  jQuery('#viewQuantity').load('updateQuantity.php?signe=-&indexToChange='+index);
  document.getElementById('priceArticle').innerHTML = total.toFixed(2);
  }
  else if(signe == '+'){
  let total = (parseFloat(quantity)+1) * parseFloat(prix);
  console.log(total) // console.log("quantity : " + parseInt(quantity+1) + "prix : " + prix + "total : " + parseInt(quantity+1) * prix);
  jQuery('#viewQuantity').load('updateQuantity.php?signe=plus&indexToChange='+index);
  document.getElementById('priceArticle').innerHTML = total.toFixed(2);
  }

}