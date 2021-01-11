//Menu fil d'ariane

const menuList = document.querySelectorAll("header div ul li a");

     for (let i = 0; i < menuList.length; i++) {
     menuList[i].addEventListener("click", () => {
      for (let i = 0; i < menuList.length; i++) {
        menuList[i].classList.remove("active");
      }
      menuList[i].classList.remove("active");
      menuList[i].classList.add("active");
    });
  }

  console.log(menuList);
