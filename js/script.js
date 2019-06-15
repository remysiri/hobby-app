{
  const stickNavigationFunction = () => {
    var navigation = document.getElementById("nav");
    var stick = navigation.offsetTop;

    if(window.pageYOffset >= stick + 5) {
      navigation.classList.add("navstick");
    } else {
      navigation.classList.remove("navstick");
    }
  }

  /*const searchByKeyword = async() => {
    const $form = document.getElementById("filterform");
    const $userInput = document.getElementById("keyword");
    const url = `${$form.getAttribute("action")}?keyword=${$userInput.value}`;

    const response = await fetch(url, {
      headers: new Headers({
          Accept: "application/json"
      })
    });

    const activities = await response.json();

    if($userInput.value.length >= 3) {
        createDOM(activities);
    }
  }*/

  /*const createDOM = activities => {
    $calendar = document.querySelector(".full__calendar");
    $calendar.innerHTML = "test test js work";
  }*/
 
  const init = () => {
      window.addEventListener('scroll', stickNavigationFunction);

      /*$filterButton = document.querySelector(".calendar-btn");
      $userInputKeyword = document.getElementById("keyword");
      $userInputDate = document.getElementById("filterdate");
      $userInputCategory = document.getElementById("categoryfilter");

      $filterButton.style.display = "none";

      $userInputKeyword.addEventListener("input", searchByKeyword);
      $userInputDate.addEventListener("input", searchByDate);
      $userInputCategory.addEventListener("change", searchByCategory);*/
  }
  init();
}
