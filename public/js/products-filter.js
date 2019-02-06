filterSelection("all")
function filterSelection(c) {
  let allBrands, i;
  allBrands = document.getElementsByClassName("wrapper-filterCard");
  if (c == "all") c = "";
  // Add the "showCards" class (display:inline-block) to the filtered elements
  // and remove the "showCards" class from the elements that are not selected
  for (i = 0; i < allBrands.length; i++) {
    w3RemoveClass(allBrands[i], "showCards");
    if (allBrands[i].className.indexOf(c) > -1) w3AddClass(allBrands[i], " showCards");
  }
}

// Show filtered elements above
function w3AddClass(element, name) {
  let i, arr1, arr2;
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
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
let buttonWrapper = document.getElementsByClassName("wrapper-filter-btn");
let buttons = buttonWrapper.getElementsByClassName("btn1");
for (let i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}