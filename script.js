const slides = document.querySelectorAll(".slide");
let maxSlide = slides.length - 1;
let curSlide = 0;

function UPDATE() {
  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });
}

UPDATE();

document.querySelector("#btn-next").addEventListener("click", function () {
  if (curSlide === maxSlide) {
    curSlide = 0;
  } else {
    curSlide++;
  }
  UPDATE();
});

document.querySelector("#btn-prev").addEventListener("click", function () {
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }
  UPDATE();
});

let project = [];
project.push({
    "project": "Duurzame landbouw",
    "land": "Bangladesh"
})
project.push({
    "project": "Red de regenwouden",
    "land": "Benin"
})
project.push({
    "project": "Red de regenwouden",
    "land": "Mali"
})
project.push({
  "project": "Voedselbossen",
  "land": "Colombia"
})
function zoekproject(zoektekst) {
    zoektekst = zoektekst.toUpperCase();
    let myGrid =
        "<div class='cell'><b>project</b></div><div class='cell'><b>land</b></div>";

    for (let x = 0; x < project.length; x++) {
        if (project[x].project.toUpperCase().includes(zoektekst)|| project[x].land.toUpperCase().includes(zoektekst)) {
            myGrid += '<div class="cell">' + project[x].project + '</div>'
            myGrid += '<div class="cell">' + project[x].land + '</div>'
        }
    }
    document.getElementById('grid').innerHTML = myGrid;
}

// hamburger
const hamburgerCheckbox = document.getElementById("hamburger");
const hamburgerNav = document.querySelector("nav[hidden]");

function handleResize() {
  if (window.innerWidth <= 700) {
    hamburgerCheckbox.hidden = false;
    hamburgerNav.hidden = false;
  } else {
    hamburgerCheckbox.hidden = true;
    hamburgerNav.hidden = true;
  }
}

window.addEventListener("resize", handleResize);
handleResize();


