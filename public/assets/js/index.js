const navToggle = document.querySelector(".navButton-toggle");
const navMenu = document.querySelector(".menu-bar");
//Menú
navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("menu-bar_visible");

    if (navMenu.classList.contains("menu-bar_visible")) {
        navToggle.setAttribute("aria-label", "Contraer Menú");
    } else {
        navToggle.setAttribute("aria-label", "Desplegar Menú");
    }
});

/*videos*/
let listVideo = document.querySelectorAll(".video-list .vid");
let mainVideo = document.querySelector(".video-container video");
let title = document.querySelector(".video-container .title-video");
listVideo.forEach((video) => {
    video.onclick = () => {
        listVideo.forEach((vid) => vid.classList.remove("activate"));
        video.classList.add("activate");
        if (video.classList.contains("activate")) {
            let src = video.children[0].getAttribute("src");
            mainVideo.src = src;
            let text = video.children[1].innerHTML;
            title.innerHTML = text;
        }
    };
});

var allImages = "";
for (var i = 1; i < 28; i++) {
    allImages += '<img src="../assets/img/opinion/opinion (' + i + ').png">';
}
document.getElementById("photos").innerHTML = allImages;

const images = document.querySelectorAll(".img-modal-selector img");
const imgContainer = document.querySelector(".imgModal");
const imgShow = document.querySelector('.imgShow');
images.forEach((images) => {
    images.addEventListener("click", () => {
        viewportImg(images.getAttribute("src"));
    });
});
const viewportImg = (src) => {
    imgContainer.classList.toggle("modalView");
    imgShow.src = src;
};
imgContainer.addEventListener('click',() =>{
    imgContainer.classList.toggle("modalView");
});


//alert
function notification() {
    alert("Enviando Formulario!...");
}
