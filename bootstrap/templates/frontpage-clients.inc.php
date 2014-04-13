<section id="website-clients" class="visible-lg">
	<div class="row">
		<div class="column col-xs-12 col-lg-12">

			<ul class="clients">
				<li><span class="client-img client-google"></span></li>
				<li><span class="client-img client-yahoo"></span></li>
				<li><span class="client-img client-acquia"></span></li>
				<li><span class="client-img client-facebook"></span></li>
			</ul>

		</div>
	</div>
</section>

<style type="text/css">

.clients {
	margin: 0 auto;
	padding: 0;
	display: inline-block;
	width: 100%;
}

.clients li {
	margin: 0px;
	width: 100%;
	text-align: center;
	list-style: none;
}

.client-img {
	background: url('imgs/clients.png') no-repeat 0px 0px ;
	display: inline-block;
	width: 300px;
	height: 105px;
}

.client-acquia { background-position: 0px 0px; }
.client-facebook { background-position: 0px -105px; }
.client-google { background-position: 0px -210px;  }
.client-yahoo { background-position: 0px  -315px; }

@media (min-width: 40rem) {

	.clients li {
		width: 25%;
		float:left;
	}

	.client-img {
		background: url('imgs/clients.png') no-repeat 0px 0px ;
		display:inline-block;
		width: 114px;
		height: 39px;
		background-size:114px;
	}

	.client-acquia { background-position: 0px 0px; }
	.client-facebook {  background-position: 0px -40px; }
	.client-google { background-position: 0px -80px;  }
	.client-yahoo { background-position: 0px  -120px; }


}

</style>