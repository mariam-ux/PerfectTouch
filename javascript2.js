
const optionsContainer = document.querySelector(".options-container");
const optionsList = document.querySelectorAll(".option");
const officdescription = document.querySelector(".officdescription");
const researchdescription = document.querySelector(".researchdescription");
const option1 = document.querySelector(".option1");
const option2 = document.querySelector(".option2");
const careerform = document.querySelector(".career-form");
const applynow = document.querySelectorAll(".applynow");
const discription = document.querySelector(".jobdescription")
option1.addEventListener("click" , () => {
    officdescription.classList.toggle("active1");
    researchdescription.classList.remove("active2");
    discription.classList.remove("disappear");
    careerform.classList.remove("pop");
});

option2.addEventListener("click" , () => {
    researchdescription.classList.toggle("active2");
    officdescription.classList.remove("active1");
    discription.classList.remove("disappear");
    careerform.classList.remove("pop");
});


optionsList.forEach( o => {
    o.addEventListener("click", () => {
    optionsContainer.classList.remove("active");
});

});
applynow.forEach(a  => {
    a.addEventListener("click" , () =>{
        careerform.classList.toggle("pop");
        discription.classList.toggle("disappear");
    })
    
})