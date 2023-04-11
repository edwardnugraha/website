let menuBox = document.getElementById("menuBox");
let menuIcon = document.getElementById("menuIcon");

menuIcon.onclick = function() {
    menuBox.classList.toggle("open-menu");
    if (menuBox.classList.contains("open-menu")) {
        menuIcon.src = "/wp-content/themes/nxparklastupdate/assets/close.svg";
    } else {
        menuIcon.src = "/wp-content/themes/nxparklastupdate/assets/open.svg";
    }
}

let videoEl = document.querySelector('.hero-banner video');
let currentSrc = '';
let currentBreakpoint = ''; function getBreakpoint(width) {
  if (width >= 1024) {
    return 'desktop';
  } else if (width >= 640) {
    return 'laptop';
  } else {
    return 'mobile';
  }
} function changeVideo() {
  let screenWidth = window.innerWidth;
  let newSrc = '';
  let newBreakpoint = getBreakpoint(screenWidth);  
  if (screenWidth >= 1024) {
    newSrc = '/wp-content/themes/nxparklastupdate/assets/Desktop.mp4';
  } else if (screenWidth >= 640) {
    newSrc = '/wp-content/themes/nxparklastupdate/assets/laptop.mp4';
  } else if (screenWidth <= 639) {
    newSrc = '/wp-content/themes/nxparklastupdate/assets/480 - Mobile (Big Resolution).mp4';
  }   if (newBreakpoint !== currentBreakpoint) {
    videoEl.src = newSrc;
    videoEl.load();
    currentSrc = newSrc;
    currentBreakpoint = newBreakpoint;
    console.log('Width:', screenWidth, 'Source:', currentSrc);
  }
} window.addEventListener('load', changeVideo);
window.addEventListener('resize', changeVideo);




const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab-content");

tabs.forEach(function(tab) {
  tab.addEventListener("click", function() {
    const tabContentId = this.getAttribute("data-tab-content");
    tabs.forEach(function(tab) {
      tab.classList.remove("active");
    });
    tabContents.forEach(function(tabContent) {
      tabContent.classList.remove("active");
    });
    this.classList.add("active");
document.getElementById(tabContentId).classList.add("active");
});
});

let language = 'en'; // default language

function switchLanguage(lang) {
  language = lang;
  translate();
}

function translate() {
  fetch('translate.json')
    .then(response => response.json())
    .then(data => {
      document.getElementById('greeting').textContent = data.greeting[language];
      document.getElementById('description').textContent = data.description[language];
    });
}

translate(); // translate on load

document.addEventListener("DOMContentLoaded", function(event) {
    window.addEventListener('resize', checkMediaQuery);
    var swiper = null;

    function checkMediaQuery() {
        //eventlistener when screen resize smaller than 640px
        if (window.innerWidth <= 639 && !swiper) {
            swiper = new Swiper(".featureSlide", {
                slidesPerView: 1.5,
                centeredSlides: true,
                spaceBetween: 30,
                loop: true,
                slidesPerGroup: 1
            });
        } 
        //when screen resize bigger than or equal to 640px
          else if (window.innerWidth >= 640 && swiper) {
            swiper.destroy();
            swiper = null;
        }
    }
});


var mq = window.matchMedia("(max-width: 639px)");
var slides = document.getElementsByClassName("image-container");
var dots = document.getElementsByClassName("dot");
var currentSlideIndex = 0;
var slideInterval; function showSlide(slideIndex) {
  // Hide all slides except for the one with the given index
  for (var i = 0; i < slides.length; i++) {
    if (i === slideIndex) {
      slides[i].style.display = "block";
    } else {
      slides[i].style.display = "none";
    }
  }   // Highlight the dot corresponding to the current slide
  for (var i = 0; i < dots.length; i++) {
    if (i === slideIndex) {
      dots[i].classList.add("active-dot");
    } else {
      dots[i].classList.remove("active-dot");
    }
  }
} function handleDotClick() {
  // Get the index of the clicked dot and show the corresponding slide
  var slideIndex = parseInt(this.getAttribute("data-slide"));
  showSlide(slideIndex);
  currentSlideIndex = slideIndex;
} function handleTabletChange(e) {
  if (e.matches) {
    // Add event listeners to dots and show the first slide
    for (var i = 0; i < dots.length; i++) {
      dots[i].addEventListener("click", handleDotClick);
    }
    showSlide(currentSlideIndex);
    // Start the slide interval
    slideInterval = setInterval(function() {
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      showSlide(currentSlideIndex);
    }, 3000);
  } else {
    // Remove event listeners and show all slides
    for (var i = 0; i < dots.length; i++) {
      dots[i].removeEventListener("click", handleDotClick);
    }
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "block";
    }
    // Stop the slide interval
    clearInterval(slideInterval);
  }
} mq.addListener(handleTabletChange);
handleTabletChange(mq);


const clickableBox = document.querySelector('.cta-box');
const clickableBoxCon = document.querySelector('.cta-col-con');
const popupOverlay = document.querySelector('.popup-overlay');
const closeButton = document.querySelector('.popup-close');

clickableBox.addEventListener('click', () => {
  popupOverlay.classList.add('active');
});


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("img-contact");
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active-slide");
    slides[i].style.display = "none";
  }
  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].style.display = "block";
  slides[slideIndex].classList.add("active-slide");
  setTimeout(showSlides, 5000);
}
