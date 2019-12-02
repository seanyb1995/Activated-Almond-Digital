function openNav() {
  document.getElementById("side-navigation").style.display = "block";
  document.getElementById("side-menu").style.marginLeft = "300px";
  document.getElementById("primary-menu").style.marginLeft = "300px";
  document.getElementById("primary-menu").style.marginRight = "-300px";
  document.body.style.marginLeft = "300px";
  document.body.style.marginRight = "-300px";
  document.getElementById("overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("side-navigation").style.display = "none";
  document.getElementById("side-menu").style.marginLeft = "0";
  document.getElementById("primary-menu").style.marginLeft = "0";
  document.getElementById("primary-menu").style.marginRight = "0";
  document.body.style.marginLeft = "0";
  document.body.style.marginRight = "0";
  document.getElementById("overlay").style.display = "none";
}

jQuery('#overlay').click(function(){
  document.getElementById("overlay").style.display = "none";
  document.getElementById("side-navigation").style.display = "none";
  document.getElementById("side-menu").style.marginLeft = "0";
  document.getElementById("primary-menu").style.marginLeft = "0";
  document.getElementById("primary-menu").style.marginRight = "0";
  document.body.style.marginLeft = "0";
  document.body.style.marginRight = "0";
});