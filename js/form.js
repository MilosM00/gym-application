const labelFirstName = document.querySelector(".label-first-name");
const labelLastName = document.querySelector(".label-last-name");
const labelEmail = document.querySelector(".label-email");
const labelPhone = document.querySelector(".label-phone");
const inputFirstName = document.querySelector(".input-first-name");
const inputLastName = document.querySelector(".input-last-name");
const inputEmail = document.querySelector(".input-email");
const inputPhone = document.querySelector(".input-phone");
const form = document.querySelector(".form");

form.addEventListener("submit", (e) =>{
    if(inputFirstName.value.match(/^[0-9]+$/) || inputFirstName.value.length < 3)
    {
        e.preventDefault();
        labelFirstName.style.color = "#FF2400";
        labelFirstName.textContent = "Please, enter a first name!";
        inputFirstName.value = "";
    }
    
    else
    {
        labelFirstName.style.color = "#fff";
        labelFirstName.textContent = "First Name ✔";
    }
    
    if(inputLastName.value.match(/^[0-9]+$/) || inputLastName.value.length < 3)
    {
        e.preventDefault();
        labelLastName.style.color = "#FF2400";
        labelLastName.textContent = "Please, enter a last name!";
        inputLastName.value = "";
    }

    else
    {
        labelLastName.style.color = "#fff";
        labelLastName.textContent = "Last Name ✔";
    }

    if(!String(inputEmail.value).includes("@") || inputEmail.value.lenght < 6)
    {
        e.preventDefault();
        labelEmail.style.color = "#FF2400";
        labelEmail.textContent = "Please, enter a email address!";
        inputEmail.value = "";
    }

    else
    {
        labelEmail.style.color = "#fff";
        labelEmail.textContent = "Email Address ✔";
    }

    if(!inputPhone.value.match(/^[0-9]+$/) || inputPhone.value.length < 6)
    {
        e.preventDefault();
        labelPhone.style.color = "#FF2400";
        labelPhone.textContent = "Please, enter a phone number!";
        inputPhone.value = "";
        console.log(123);
    }

    else
    {
        labelPhone.style.color = "#fff";
        labelPhone.textContent = "Last Name ✔";
    }
});