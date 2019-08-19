function openNav() {
  document.getElementById("side-menu").style.marginLeft = "250px";
  document.getElementById("primary-menu").style.marginLeft = "250px";
  document.getElementById("primary-menu").style.marginRight = "-250px";
  document.body.style.marginLeft = "250px";
  document.body.style.marginRight = "-250px";
  document.getElementById("overlay").style.display = "block";
}

function closeNav() {
  document.getElementById("side-menu").style.marginLeft = "-250px";
  document.getElementById("primary-menu").style.marginLeft = "0";
  document.getElementById("primary-menu").style.marginRight = "0";
  document.body.style.marginLeft = "0";
  document.body.style.marginRight = "0";
  document.getElementById("overlay").style.display = "none";
}