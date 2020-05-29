function show(){
  document.getElementById('sidebar').classList.toggle('active');
  let heightHTML = document.getElementById('body').clientHeight;
  
  console.log(heightHTML)
  document.getElementById('sidebar').style.height = heightHTML + "px";
  console.log("height body : ", heightHTML, "  heightSidebar : ", document.getElementById('body').clientHeight)

}
