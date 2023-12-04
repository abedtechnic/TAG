// navbar toggeler

const menuBtn = document.querySelector(".menu-icon span");
// const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");




menuBtn.onclick = ()=>{
  items.classList.add("active");
  menuBtn.classList.add("hide");
  searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
}

cancelBtn.onclick = ()=>{
  items.classList.remove("active");
  menuBtn.classList.remove("hide");
  searchBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  form.classList.remove("active");
  cancelBtn.style.color = "#fff";
}

// searchBtn.onclick = ()=>{
//   form.classList.add("active");
//   searchBtn.classList.add("hide");
//   cancelBtn.classList.add("show");
// }

  //button up
 
window.addEventListener("scroll", function() {
  var scrollButton = document.getElementById("scrollButton");
  if (window.pageYOffset > 100) {
    scrollButton.style.display = "block";
  } else {
    scrollButton.style.display = "none";
  }
});

document.getElementById("scrollButton").addEventListener("click", function() {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// end button up

// read more toggle


function toggleHiddenContent(event, contentId, readMoreId, readLessId) {
  event.preventDefault();
  var hiddenContent = document.getElementById(contentId);
  var readMoreText = document.getElementById(readMoreId);
  var readLessText = document.getElementById(readLessId);

  hiddenContent.classList.toggle("show");
  if (hiddenContent.classList.contains("show")) {
    readMoreText.style.display = "none";
    readLessText.style.display = "inline";
  } else {
    readMoreText.style.display = "inline";
    readLessText.style.display = "none";
  }
}

//end read more


///translation

// import translations from "./translations.js";

// const languageSelector = document.querySelector("select");
// languageSelector.addEventListener("change", (event) => {
//   setLanguage(event.target.value);
//   localStorage.setItem("lang", event.target.value);
// });

// document.addEventListener("DOMContentLoaded", () => {
//   const language = localStorage.getItem("lang") || "ar"; // اذا لم تكن اللغة متوفرة استخدم الانجليزية
//   setLanguage(language);
// });

// const setLanguage = (language) => {
//   const elements = document.querySelectorAll("[data-i18n]");
//   elements.forEach((element) => {
//     const translationKey = element.getAttribute("data-i18n");
//     element.textContent = translations[language][translationKey];
//   });
//   document.dir = language === "ar" ? "rtl" : "ltr";
// };

////end translition


