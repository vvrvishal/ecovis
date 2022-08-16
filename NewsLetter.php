<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>ECOVISRKCA - NewsLetters</title>
	<link rel="icon" href="./images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
		h1 {
			text-align: center;
		}


		.toggles button {
			border: 1px solid #212529;
			/* border-radius: 40px; */
			border-radius: 4px;
			background-color: #f5f5f5;
			display: inline-block;
			text-align: center;
			/* padding: 10px; */
			width: 100px;
			overflow: visible;
			/* margin: 5px auto !important; */
		}

		.toggles button:hover {
			color: #fff;
			background-color: #f58144;
			border: 1px solid #605c5c;
			font-weight: 700;
		}

		/* .cover img {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 200px;
      margin: 1.5rem 1.5rem;
    } */

		.covers {
			display: flex;
			flex-wrap: wrap;
			/* Creates rows */
			margin-left: 5%;
			margin-right: 5%;
		}

		.active {
			background-color: #f58144 !important;
			font-weight: 700;
			color: #fff !important;
			border: 1px solid #605c5c !important;
		}

		/* .activeTabBorder{
  border: 2px solid #f58144;
    position: relative;
    top: 20px;
    z-index: 2;
    border-radius: 5px;
} */
		#audio {
			width: 160px;
		}
	</style>
</head>

<body>
	<?php include_once("./header.php") ?>
	<div class="mx-0 row">
		<div class="col-md-5 text-danger">
			<h1 style="margin-top: 7rem; font-family: 'Libre Baskerville', serif;">Ecovis-RKCA </h1>
			<h1 style="font-family: 'Libre Baskerville', serif;">NewsLetter</h1>
		</div>
		<div class="col-md-7">
			<img src="./images/ecovis_banners/4042846.jpg" class="w-100" alt="">
		</div>
	</div>
	<div id="wrapper">


		<div class="toggles d-flex justify-content-around py-3 mb-4 toggles" style="border-bottom: 2px solid darkgray;">
			<button class="NewsletterYearTab active" id="showall"> All
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2022">2022
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2021">2021
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2020">2020
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2019">2019
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2018">2018
				<div class="activeTab"></div>
			</button>
			<button class="NewsletterYearTab" id="_2017">2017
				<div class="activeTab"></div>
			</button>
			<!-- <button id="pol">Politics</button>
  <button id="biz">Business</button>
  <button id="misc">Misc</button> -->
		</div>



		<div class="covers">
			<div class="row w-100">
				<div class="align-items-end col-md-12 d-flex justify-content-end mb-3 pr-0">
				<div class="btn-group mb-2 " style="width: 30%;min-width: 250px; box-shadow: var(--box-shadow);">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; ">
                    Category
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item quater_1" type="button" id="quater_1">Q-1</button>
                    <button class="dropdown-item quater_2" type="button" id="quater_2">Q-2</button>
                    <button class="dropdown-item quater_3" type="button" id="quater_3">Q-3</button>
                    <button class="dropdown-item quater_4" type="button" id="quater_4">Q-4 </button>
                    
                </div>
            </div>
				</div>
			</div>
			
			<div class="row">

				<div class="_2022 cover mb-5 col-md-4 quater_4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2022 cover  mb-5 col-md-4 quater_3">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2022 cover mb-5 col-md-4 quater_2">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2022 cover mb-5 col-md-4 quater_1">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf " target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>


				<div class="_2021 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2021 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2021 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>


				<div class="_2020 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="_blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2020 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2020 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2020 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>


				<!-- <div class="_2019 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2019 cove mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2019 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2019 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>


				<div class="_2018 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2018 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2018 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2018 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2017 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="media-object w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2017 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2017 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
						</a>
					</div>
				</div>

				<div class="_2017 cover mb-5 col-md-4">
					<div>
						<a href="./newsletterPDF/NEWSLETTER DRAFT 220811.pdf" target="blank">
							<img class="thumbnail w-100" src="./images/newslettersFrontPage/newsLetterFrontPage-1.jpeg" alt="NEWSLETTER_2022_220811">
					</div>
				</div> -->
			</div>

		</div>
	</div>
	<script>
		$(function() {

			$('.toggles button').click(function() {
				var get_id = this.id;
				var get_current = $('.covers .' + get_id);

				$('.cover').not(get_current).hide(500);
				get_current.show(500);
			});


			$('#showall').click(function() {
				$('.cover').show(500);
			});


		});
		var NewsletterYearTab = document.querySelectorAll(".NewsletterYearTab");
		//  console.log(NewsletterYearTab);
		for (let i = 0; i < NewsletterYearTab.length; i++) {
			NewsletterYearTab[i].addEventListener("click", filterTab.bind(this, NewsletterYearTab[i]));

		}

		function filterTab(selectedItem, selectedItemID) {
			//  console.log(selectedItemID.path[0].innerHTML + " year is selected");
			//  let selecte_tab = selectedItemID.path[0].innerHTML + " year is selected";
			//  console.log(selecte_tab.location);
			// //  console.log('_'+selecte_tab);
			//  $('#_2022').css({"background-color": "ORANGE", "font-weight": 500, "color": "black"});
			//  console.log($('#_'+selecte_tab).css({"background-color": "ORANGE", "font-weight": 500, "color": "black"}));
			//  $("#selecte_tab")
			$(".NewsletterYearTab").removeClass('active');
			$(selectedItem).addClass('active ');
			// $(".ActiveTab").removeClass('activeTabBorder');
			// $(selectedItem).addClass('activeTabBorder');

		}
	</script>



</body>

</html>