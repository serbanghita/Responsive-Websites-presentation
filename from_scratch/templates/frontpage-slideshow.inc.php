<section id="website-frontpage-slideshow" class="hide-small">

	<div class="slideshow">
		<div class="slide row">
			<div class="column two-thirds">
			  <h3>Fully Customizable</h3>
			  <p><strong>Embrace your brand.</strong> Mobile device detection systems typically combine a detection with the creation or retrieval of a capability profile of the device. These vary greatly in complexity, ranging from one data point to many hundreds. A device detection process answers the twin questions of "what is it?" and "what can it do?".</p>
			</div>
			<div class="column third">
			  <img src="imgs/testimonial-pic1.png">
			</div>
		</div>

		<div class="slide row">
			<div class="column third">
			  <img src="imgs/testimonial-pic1.png">
			</div>
			<div class="column two-thirds">
			  <h3>Detect tablets</h3>
			  <p><strong>Large screen devices.</strong> A tablet computer, or simply tablet, is a mobile computer with display, circuitry and battery in a single unit. Conceptualized in the mid-20th century and prototyped and developed in the last two decades of that century, the devices became popular in 2010. In April 2000 Microsoft launched the Pocket PC 2000, utilising their touch capable Windows CE 3.0 operating system.</p>

			</div>
		</div>

		<div class="slide row">
			<div class="column two-thirds">
			  <h3>Detect mobile phones</h3>
			   <p><strong>Small but smart.</strong> A smartphone, or smart phone, is a mobile phone with more advanced computing capability and connectivity than basic feature phones. The most popular smartphones today are powered by Google's Android and Apple's iOS mobile operating systems. The first mobile phone to incorporate PDA features was an IBM prototype developed in 1992.</p>
			</div>
			<div class="column third">
			  <img src="imgs/testimonial-pic2.png">
			</div>
		</div>
	</div>

</section>

<style type="text/css">

.slideshow {
  position: relative;
  width: 100%;
  min-height: 200px;
  height:auto;

  overflow: hidden; /* If not, we're gonna fail on resize */
}

@media (min-width: 40em) {

	.slideshow {
	  border: 1px solid #e3e3e3;
	  -webkit-border-radius: 4px;
	}

}


.slideshow .slide {
  margin: 0;
  padding: 1em;
  width: 100%;
  height: inherit;
  background: white;
  position: absolute;
  -webkit-border-radius: 4px;
}

.slideshow .slide h3 {
	padding-top: 0;
	margin-top: 0;
}

.slideshow img {
	width:100%;
	height:100%;
}

.slideshow .slide {
  opacity:0;
}

.slide:nth-child(1) {
  -webkit-animation: xfade 18s 12s infinite;
}
.slide:nth-child(2) {
  -webkit-animation: xfade 18s 6s infinite;
}
.slide:nth-child(3) {
  -webkit-animation: xfade 18s 0s infinite;
}

@-webkit-keyframes xfade {
	0%{
	  opacity: 1;
	}
	30.33% {
	  opacity:1;
	}
	33.33%{
	  opacity: 0;
	}
	98% {
	  opacity:0;
	}
	100% {
	  opacity:1;
	}
}

</style>