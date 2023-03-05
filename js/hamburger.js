const hamburgerButton = document.querySelector("#hamburger-button");
const hamburgerNav = document.querySelector(".hamburger-nav");
const hamburgerLi = document.querySelectorAll(".hamburger-li");

let hamburger = true;

const hamburgerTrue = () =>{
    hamburgerNav.style.display = "flex";
    hamburgerButton.classList.remove("fa-bars");
    hamburgerButton.classList.add("fa-times");
    hamburger = false;
};

const hamburgerFalse = () =>{
    hamburgerNav.style.display = "none";
    hamburgerButton.classList.add("fa-bars");
    hamburgerButton.classList.remove("fa-times");
    hamburger = true;
};

hamburgerButton.addEventListener("click", () =>{
    if(hamburger === true)
    {
        hamburgerTrue();
    }

    else
    {
        hamburgerFalse();
    }
});

hamburgerLi[0].addEventListener("click", () =>{ hamburgerFalse(); });
hamburgerLi[1].addEventListener("click", () =>{ hamburgerFalse(); });
hamburgerLi[2].addEventListener("click", () =>{ hamburgerFalse(); });
hamburgerLi[3].addEventListener("click", () =>{ hamburgerFalse(); });
hamburgerLi[4].addEventListener("click", () =>{ hamburgerFalse(); });