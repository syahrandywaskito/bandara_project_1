const hideButton = document.getElementById("hideButton");
    const elementToHide = document.getElementById("elementToHide");

    hideButton.addEventListener("click", function() {
      if (elementToHide.style.display === "none") {
        elementToHide.style.display = "block";
        hideButton.innerText = "Hide Element";
      } else {
        elementToHide.style.display = "none";
        hideButton.innerText = "Show Element";
      }
    });