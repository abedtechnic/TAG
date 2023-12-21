// navbar toggeler

const menuBtn = document.querySelector(".menu-icon span");
// const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");




menuBtn.onclick = ()=>{
  items.classList.add("active");
  menuBtn.classList.add("hide");
//   searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
}

cancelBtn.onclick = ()=>{
  items.classList.remove("active");	
  menuBtn.classList.remove("hide");
//   searchBtn.classList.remove("hide");
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


////end translition
{
	class SliderClip {
		constructor(el) {
			this.el = el;
			this.Slides = Array.from(this.el.querySelectorAll('li'));
			this.Nav = Array.from(this.el.querySelectorAll('.headnav a'));
			this.totalSlides = this.Slides.length;
			this.current = 0;
			this.autoPlay = true; //true or false
			this.timeTrans = 4000; //transition time in milliseconds
			this.IndexElements = [];

			for(let i=0;i<this.totalSlides;i++) {
				this.IndexElements.push(i);
			}

			this.setCurret();
			this.initEvents();
		}
		setCurret() {
			this.Slides[this.current].classList.add('current');
			this.Nav[this.current].classList.add('current_dot');
		}
		initEvents() {
			const self = this;

			this.Nav.forEach((dot) => {
				dot.addEventListener('click', (ele) => {
					ele.preventDefault();
					this.changeSlide(this.Nav.indexOf(dot));
				})
			})

			this.el.addEventListener('mouseenter', () => self.autoPlay = false);
			this.el.addEventListener('mouseleave', () => self.autoPlay = true);

			setInterval(function() {
				if (self.autoPlay) {
					self.current = self.current < self.Slides.length-1 ? self.current + 1 : 0;
					self.changeSlide(self.current);
				}
			}, this.timeTrans);

		}
		changeSlide(index) {

			this.Nav.forEach((allDot) => allDot.classList.remove('current_dot'));

			this.Slides.forEach((allSlides) => allSlides.classList.remove('prev', 'current'));

			const getAllPrev = value => value < index;

			const prevElements = this.IndexElements.filter(getAllPrev);

			prevElements.forEach((indexPrevEle) => this.Slides[indexPrevEle].classList.add('prev'));

			this.Slides[index].classList.add('current');
			this.Nav[index].classList.add('current_dot');
		}
	}

	const slider = new SliderClip(document.querySelector('.slider'));
}

// start boxscroll
 
function scrollByPercentage(percentage) {
	// حساب النسبة المئوية من ارتفاع الشاشة
	const windowHeight = window.innerHeight;
	const scrollAmount = (percentage / 100) * windowHeight;
  
	// التمرير بناءً على النسبة المحسوبة
	window.scrollBy({
	  top: scrollAmount,
	  behavior: 'smooth'
	});
  }
///end boxscroll  

//start splash
// document.addEventListener("DOMContentLoaded", function () {
// 	setTimeout(function () {
// 		var ctnPreloader = document.getElementById("ctn-preloader");
// 		ctnPreloader.classList.add("loaded");

// 		var preloaderBody = document.getElementById("preloader-body");
// 		preloaderBody.classList.remove("no-scroll-y");

// 		if (ctnPreloader.classList.contains("loaded")) {
// 			setTimeout(function () {
// 				var preloader = document.getElementById("preloader");
// 				preloader.parentNode.removeChild(preloader);

// 				document.getElementById("page-top").scrollIntoView({
// 					behavior: "smooth"
// 				});
// 			}, 1000);
// 		}
// 	}, 4000); 
// });


// document.addEventListener("DOMContentLoaded", function () {
// 	setTimeout(function () {
// 		document.getElementById("ctn-preloader").classList.add("loaded");
// 		// إذا تم تحميل شاشة الـ "splash"، قم بإظهار السكريبت التالي
// 		if (document.getElementById("ctn-preloader").classList.contains("loaded")) {
// 			// إظهار صفحة الـ main
// 			document.getElementById("preloader").style.display = "none";
// 		}
// 	}, 4000);
// });

document.addEventListener("DOMContentLoaded", function () {
    // أضف تأخير 4000 مللي ثانية (4 ثوانٍ)
    setTimeout(function () {
        // قم بإضافة الفئة "loaded" لعنصر "ctn-preloader"
        document.getElementById("ctn-preloader").classList.add("loaded");

        // إذا تم تحميل شاشة الـ "splash"، قم بإظهار السكريبت التالي
        if (document.getElementById("ctn-preloader").classList.contains("loaded")) {
            // إظهار صفحة الـ main
            document.getElementById("preloader").style.display = "none";
        }
    }, 4000); // زمن التأخير في هذا المكان بالمللي ثانية (4 ثوانٍ)
});

//end splash




// /start scrollreavel animation

document.addEventListener('DOMContentLoaded', function () {
ScrollReveal({ 
	// reset: true,
	distance: '80px',
	duration: 2500,
	delay: 300 
});

// ScrollReveal().reveal('.heading', {  delay: 500 , origin: 'left' });
ScrollReveal().reveal('.info-one button a', { delay: 300 , origin: 'bottom'});
ScrollReveal().reveal('.info-one img', { delay: 300 , origin: 'bottom'});
ScrollReveal().reveal('.counter ul', { delay: 200 , origin: 'left'});
ScrollReveal().reveal('.why_p', { delay: 200 , origin: 'bottom'});
ScrollReveal().reveal('.whysection .icon-box', { delay: 200 , interval: 400 });
ScrollReveal().reveal('.home_manager_word_content_img ,.home_manager_word_title ,.home_manager_word_content_text',{ delay: 200 , origin: 'bottom'});
// ScrollReveal().reveal('.article-wrapper', { delay: 200 , interval: 400 });
ScrollReveal().reveal('.why_page .container .why_info ul', { delay: 300 , origin: 'bottom'});
ScrollReveal().reveal('footer .footerlist li , .socialicon a', { delay: 300 , origin: 'bottom'});

// ScrollReveal().reveal('.articles .article-wrapper', {
// 	delay: 200,
// 	distance: '20px',
// 	origin: 'bottom',
// 	easing: 'ease-out',
// 	duration: 1000
// });
});

///end scrollreavel animation  info-content