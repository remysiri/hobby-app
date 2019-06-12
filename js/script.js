{
  const stickNavigationFunction = () => {
    var navigation = document.getElementById("nav");
    var stick = navigation.offsetTop;

    if(window.pageYOffset >= stick + 20) {
      navigation.classList.add("navstick");
    } else {
      navigation.classList.remove("navstick");
    }
  }
 
  const init = () => {
      window.addEventListener('scroll', stickNavigationFunction);

  }
  init();
}
