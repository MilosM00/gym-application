const modal = document.querySelector(".modal");
const modalBox = document.querySelector(".modal-box");
const closeModal = document.querySelector("#close-modal");
const packName = document.querySelectorAll(".pack-name");
const packPrice = document.querySelector(".pack-price");
const packURL = document.querySelector(".pack-url");
const buttonPrice = document.querySelectorAll(".button-price");


const closeModalF = () =>{
    modal.style.display = "none";
    modalBox.style.display = "none";
};

modal.addEventListener("click", () =>{
    closeModalF();
});

modalBox.addEventListener("click", () =>{
    closeModalF();
});

buttonPrice[0].addEventListener("click", () =>{
    modal.style.display = "block";
    modalBox.style.display = "flex";
    packName[0].textContent = "Lorem";
    packName[1].textContent = "Lorem";
    packPrice.textContent = "50";
    packURL.href = "form.php?pack=Lorem";
});

buttonPrice[1].addEventListener("click", () =>{
    modal.style.display = "block";
    modalBox.style.display = "flex";
    packName[0].textContent = "Ipsum";
    packName[1].textContent = "Ipsum";
    packPrice.textContent = "70";
    packURL.href = "form.php?pack=Ipsum";
});

buttonPrice[2].addEventListener("click", () =>{
    modal.style.display = "block";
    modalBox.style.display = "flex";
    packName[0].textContent = "Dolor";
    packName[1].textContent = "Dolor";
    packPrice.textContent = "100";
    packURL.href = "form.php?pack=Dolor";
});