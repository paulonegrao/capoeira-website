
function loading() {
	var vid1 = document.getElementById('home_video1')
	var vid2 = document.getElementById('home_video2');
	vid2.onended = function() {
		vid2.removeAttribute('controls');
	}
	setTimeout(playvids, 2000);
	function playvids(){
		vid1.play();
		vid2.play();
	}
}
function volumeset() {
	var vid2 = document.getElementById('home_video2');
  var volbutton = document.getElementById('volume_button');
	if (volbutton.classList.contains('volume_off')) {
	  volbutton.classList.remove('volume_off');
		volbutton.classList.add('volume_on');
		vid2.muted = false;
	} else {
	  volbutton.classList.remove('volume_on');
	  volbutton.classList.add('volume_off');
		vid2.muted = true;
	}
}

(function(){

	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper');

    //open and close menu when the button is clicked
	var open = false;
	button.addEventListener('click', handler, false);

	function handler(){
	  if(!open){
	    this.innerHTML = "Close";
	    classie.add(wrapper, 'opened-nav');
	  }
	  else{
	    this.innerHTML = "Menu";
		classie.remove(wrapper, 'opened-nav');
	  }
	  open = !open;
	}
	function closeWrapper(){
		classie.remove(wrapper, 'opened-nav');
	}

})();

/*===========================Caroussel Videos ====================*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
