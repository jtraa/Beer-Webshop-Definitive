filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


document.getElementById('sort-apple').addEventListener('click', sortApple);// hierdoor snapt js welke knop we aan moeten roepen
document.getElementById('sort-samsung').addEventListener('click', sortSamsung);




function showAll(url, outputData){
 // console.log(sortApple); //check of functie werkt
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        outputData(this);
}

}
xhr.open('GET', url, true);
xhr.send();

};

function showData(data){
    var div = document.getElementsByClassName('filtered-cards');// dit is de div waarbij hij de fnctie showall gaat uitpoepen.
    div[0].innerHTML = data.responseText;
    console.log(data.responseText);
}

showAll('productquery.php', showData)// is om alles op het begin weer te geven


function sortApple(){
showAll('filter-1.php', showData)// hier gebruik je de showAll en vul je een andere link in. 
//
}
 function sortSamsung(){
     showAll('productquery.php', showData)
 }

