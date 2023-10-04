let addProd = document.getElementById("add-prod");
let addProdDiv = document.getElementById("pupload");
addProd.addEventListener("click", function() {
  if (addProdDiv.style.display === "none") {
    mProdDiv.style.display = "none";
    addProdDiv.style.display = "block";
  } else {
    addProdDiv.style.display = "none";
  }
});

let mProd = document.getElementById("man-prod");
let mProdDiv = document.getElementById("mprod");
mProd.addEventListener("click", function() {
  if (mProdDiv.style.display === "none") {
    addProdDiv.style.display = "none";
    mProdDiv.style.display = "block";
  } else {
    mProdDiv.style.display = "none";
  }
});