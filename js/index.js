const instructorOne = document.querySelector(`.instructors-div-one`);
const instructorTwo = document.querySelector(`.instructors-div-two`);
const instructorThree = document.querySelector(`.instructors-div-three`);
const instructorMedia = document.querySelectorAll(`.instructor-media`);

instructorOne.addEventListener(`mouseover`, () =>{
    instructorMedia[0].style.display = `flex`;
});

instructorOne.addEventListener(`mouseleave`, () =>{
    instructorMedia[0].style.display = `none`;
});

instructorTwo.addEventListener(`mouseover`, () =>{
    instructorMedia[1].style.display = `flex`;
});

instructorTwo.addEventListener(`mouseleave`, () =>{
    instructorMedia[1].style.display = `none`;
});

instructorThree.addEventListener(`mouseover`, () =>{
    instructorMedia[2].style.display = `flex`;
});

instructorThree.addEventListener(`mouseleave`, () =>{
    instructorMedia[2].style.display = `none`;
});