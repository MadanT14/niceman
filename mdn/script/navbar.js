const clickme = document.querySelector(".hamburger");
const head = document.querySelector(".navbar");
const togglenavbar = () => {
    head.classList.toggle("active");
}

clickme.addEventListener("click", () => togglenavbar());


