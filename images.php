<?php
include("header.html");
 ?>
			<section>
				<h2>Images Gallery</h2>
				<p>Capoeira is also an expression of art. The movements, performances, batizados and rodas are plenty of good moments to enjoy, capture and share. Here we have some images about Capoeira that deserve to be remebered.</p>
				<contimages>
					<div class="slideshow-container">

					<div class="mySlides fade">
					  <div class="numbertext">1 / 6</div>
					  <img src="images/image1.jpg" style="width:100%">
					  <div class="text">AU sem mão</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 6</div>
					  <img src="images/image2.jpg" style="width:100%">
					  <div class="text">Flip Mortal</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 6</div>
					  <img src="images/image3.jpg" style="width:100%">
					  <div class="text">Capoeira at the beach</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">4 / 6</div>
						<img src="images/image4.jpg" style="width:100%">
						<div class="text">Salvador, Bahia</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">5 / 6</div>
						<img src="images/image5.jpg" style="width:100%">
						<div class="text">Farol da Barra</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">6 / 6</div>
						<img src="images/image6.jpg" style="width:100%">
						<div class="text">No pé do Berimbau</div>
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span>
					  <span class="dot" onclick="currentSlide(2)"></span>
					  <span class="dot" onclick="currentSlide(3)"></span>
						<span class="dot" onclick="currentSlide(4)"></span>
						<span class="dot" onclick="currentSlide(5)"></span>
						<span class="dot" onclick="currentSlide(6)"></span>
					</div>
					<br><br><br>
			</contimages>
<?php
include("footer.html");
 ?>
