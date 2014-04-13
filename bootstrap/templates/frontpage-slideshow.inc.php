<section id="website-frontpage-slideshow" class="visible-lg">

	<div class="slideshow">
		<div class="slide row">
			<div class="col-xs-12 col-lg-9">
			  <h3>Fully Customizable</h3>
			  <p><strong>Embrace your brand.</strong> Our tablet menus come fully customized with your restaurant's existing branding and ambience. If you spent time and money designing an elegant paper menu, we'll make sure to bring it to life. Don't settle for a generic, boilerplate user experience. With Butter, you can embrace technology while enhancing the tasteful brand you worked so hard to build.</p>
			</div>
			<div class="col-xs-12 col-lg-3">
			  <img src="imgs/fully-customizable.png">
			</div>
		</div>

		<div class="slide row">
			<div class="col-xs-12 col-lg-3">
			  <img src="imgs/fully-customizable.png">
			</div>
			<div class="col-xs-12 col-lg-9">
			  <h3>Fully Customizable</h3>
			  <p><strong>Embrace your brand.</strong> Our tablet menus come fully customized with your restaurant's existing branding and ambience. If you spent time and money designing an elegant paper menu, we'll make sure to bring it to life. Don't settle for a generic, boilerplate user experience. With Butter, you can embrace technology while enhancing the tasteful brand you worked so hard to build.</p>
			</div>
		</div>

		<div class="slide row">
			<div class="col-xs-12 col-lg-9">
			  <h3>Fully Customizable</h3>
			  <p><strong>Embrace your brand.</strong> Our tablet menus come fully customized with your restaurant's existing branding and ambience. If you spent time and money designing an elegant paper menu, we'll make sure to bring it to life. Don't settle for a generic, boilerplate user experience. With Butter, you can embrace technology while enhancing the tasteful brand you worked so hard to build.</p>
			</div>
			<div class="col-xs-12 col-lg-3">
			  <img src="imgs/fully-customizable.png">
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

@media (min-width: 40rem) {

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