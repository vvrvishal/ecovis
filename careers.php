<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecovis</title>
        <!-- font-awesome cdn  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- bootstrap css cdn  -->
        <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    
        <!-- custom css link  -->
        <link rel="stylesheet" href="./css/style.css">
    
        <!-- box icons link  -->
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
        <!-- bootstrap javascript cdn  -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- google font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <!-- oul carousel link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <!-- header  -->
    <!-- <header id="Header"></header> -->
    <?php include_once "header.html" ?>


    <!-- career nammer  -->
        <div class="banner ">
            <img src="./ecovis-images/careers_bannercroped.png" class="w-100" alt="">
        </div>
        <div class="row justify-content-around bg-danger">
            <div class="col-md-8">
                <div class="text-center">
                    <p class="w-75 mx-auto text-center text-light " style="font-size: 19px; padding: 6rem 0rem;">Career routes aren't direct all the time. We enroll a different blend of people by taking a gander at your
                        true capacity and desire. Our wide scope of administration and industry specialisms guarantees there's
                        a lot of scope for you to learn and foster in accordance with your interests.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-around " style="margin: 8rem 0rem;">
            <div class="col-md-8">
                <div class="text-center">
                    <h2 style="text-align:center; margin-bottom: 6rem;" >We will believe in bringing out the best out from the people who work with us</h2>

                    <p class="w-75 mx-auto  text-center " style="font-size: 19px; font-weight: 500;">At Ecovis, we re pleased to develop our own ability by fostering our people right from the start through to
                        proficient capabilities and beyond. We likewise value the benefit of enrolling experienced staff with in depth
                        knowledge and skills. This assists us to infuse and curate new ideas and perspective to our team.</p>
                 
                </div>
            </div>
        </div>
        <div class="row justify-content-around " style="margin: 8rem 0rem;">
            <div class="col-md-8">
                <div class="jobs_section w-75 mx-auto">
                    <h2 style="text-align:center;" class="mb-5 pb-1">JOBS AT ECOVIS INDIA</h2>
                    <h4 style="font-size: large;" class="text-center mb-5">If you are intrigued with our work join us and we can develop together.</h4>
                    <div class="text-center mb-5">
                    <button type="submit" class="current_vacancies text-light btn">CURRENT VACANCIES<i class="fa-solid fa-angle-right" style="margin-left:10px; text-shadow:0px 5px 4px black"></i></button>

                    </div>
                </div>
            </div>
        </div>
       

        
  
    
      <!-- footer  -->
      <div id="footer"></div>

      <script>
          $(function () {
              $("#Header").load("header.html");
              $("#footer").load("footer.html");
          });
      </script>
</body>
</html>
<!-- carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">

    <!-- custom css link  -->
    <link rel="stylesheet" href="./css/style.css">
<style>
    .owl-carousel button .next-slide{
        position: absolute;
        top: 25%;
        background: white;
        right: 1%;
    }
    .owl-carousel button .next-slide:hover, .owl-carousel button .prev-slide:hover{
        background-color: var(--greenTheme);
        color: var(--textWhiteColor);
        border: var(--onHoverTextColor);
    }
    .owl-carousel button .prev-slide{
        position: absolute;
        top: 25%;
        background: white;
        left: 1%;
    }
    .nav-link{
        color: #1ab293;
    }
    .prenavigate, .postnavigate{
        
        border: 1px solid;
        padding: 0px 11px !important;
        border-radius: 3px;
        color: #1ab293;
        background: transparent;
        /* font-weight: 400; */
        line-height: 32px;
        margin-bottom: 0px !important;
        /* padding-bottom: 4px !important; */
    }
    .prenavigate:focus-visible, .postnavigate:focus-visible{
        border: 2px solid var(--greenTheme);
        outline: none !important;
    }
    .current_vacancies{
        background-color: #cd1432;
    box-shadow: 0px 2px 4px 0px grey;
    border-radius: 5px;
    width: 25%;
    height: 40px;
    color: white;
    /* margin-left: 37%; */
    border: none;
    }
    .jobs_section{
        background-color: #eda4ad;
        width:100%;
        padding:1%;
        border-radius:7px;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<div class="container">
    <div class="owl-carousel owl-theme my-4">
        <div class="item text-center" style="width:90%;">
            <img src="./ecovis-images/ecovis-logo.jpeg" alt="" height="240px">
            <h4 class="categryName">Fresh Vegetables</h4>
        </div>
        <div class="item text-center" style="width:90%;">
            <img src="./ecovis-images/space.jpg" alt="" height="240px">
            <h4 class="categryName">Fruits</h4>
        </div>
        <div class="item text-center" style="width:90%;">
            <img src="./ecovis-images/abstract.jpg" alt="" height="240px">
            <h4 class="categryName">Green Vegetables</h4>
        </div>
        <div class="item text-center" style="width:90%;">
            <img src="./ecovis-images/space.jpg" alt="" height="240px">
            <h4 class="categryName">organic Vegetables</h4>
        </div>
        <div class="item text-center" style="width:90%;">
            <img src="./ecovis-images/abstract.jpg" alt="" height="240px" width="50px;">
            <h4 class="categryName">Cut & Sprouts</h4>
        </div>

    </div>

</div>