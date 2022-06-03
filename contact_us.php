<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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

    <!-- header -->
    <!-- <header id="Header"></header> -->
    <?php include_once "header.html" ?>


    <!-- banner   -->
    <div class="banner ">
        <img src="./ecovis-images/careers_bannercroped.png" class="w-100" alt="">

        <div class="bannerDD border mx-auto pb-4 position-absolute pt-2 w-75">
            <h3 class="text-center text-light mt-3">
                Let’s Connect
            </h3>
            <div class="font-weight-bold mb-2 mt-4 mx-auto problemDD py-2 text-light text-center" style="width: 60%;">
                <p class="mb-0">Career routes aren't direct all the time. We enroll a different blend of people by
                    taking a
                    gander at your true capacity and desire. Our wide scope of administration and industry
                    specialisms guarantees there's </p>
            </div>

        </div>

        <div class="justify-content-around mt-5 mx-0 row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mb-4 mt-4 text-center">Job Application</h3>
                        <form action="" class="form-group" method="post">
                            <input type="text" name="" id="" class="form-control input_form mx-auto w-75"
                                placeholder="Name">
                            <input type="text" name="" id="" class="form-control input_form mt-4 mx-auto w-75"
                                placeholder="Mobile No.">
                            <input type="text" name="" id="" class="form-control input_form mt-4 mx-auto w-75"
                                placeholder="Email">
                            <select name="functional_area" id="functional_area"
                                class="form-control mt-4 input_form mx-auto w-75">
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                            </select>
                            <input type="file" name="" id="" class="form-control input_form mt-4 mx-auto w-75"
                                placeholder="Upload CV in Doc or Pdf format">
                            <button type="submit"
                                class="form-control border-0 bg-danger mt-4 text-light font-weight-bold mx-auto w-25"
                                style="box-shadow: 0px 2px 4px 0px gray;">SUBMIT</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="locations d-flex align-items-center">
                            <i class="fa-solid fa-location-dot" id="location_icon"></i>
                            <a href="./ecovis_india.html">
                                <button type="submit" class="bg-danger btn font-weight-bold  text-light">VIEW OUR
                                    LOCATIONS</button>
                            </a>
                        </div>
                        <div class="communication">
                            <i class="fa-envelope fa-solid mx-3 text-danger" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-linkedin" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-instagram" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-facebook" id="comm_icon"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-around mx-0">
            <div class="col-md-9">
                <h4 class="mb-4 mt-4 text-center">Want to know more about us?Leave us a message</h3>
                    <form action="" class="form-group" method="post" style="margin-bottom: 5rem;">
                        <div class="d-flex justify-content-between mb-5">
                            <input type="text" name="email" id="email" class="form-control ml-4" style="width:40% !important"  placeholder="Email"
                            style="margin-right:15px;">
                            <div class="d-flex justify-content-between" style="width:55% !important">
                                <input type="text" name="first_name" id="first_name" class="form-control mr-3"
                                placeholder="First Name">
                            <input type="text" name="last_name" id="last_name" class="form-control "
                                placeholder="Last Name">
                            </div>
                       
                        </div>
                        
                        <span style="font-size:20px;">Your message or query : </span>
                        <textarea class="form-control mt-2 mb-3" rows="3" style="background-color: whitesmoke; border-radius: 6px;"></textarea>
                        <p style="font-size:20px;" class="mb-2 text-center">Our team will get in touch with you as soon as possible</p>
                        <div class="text-center">
                        <button type="submit" class="bg-danger btn font-weight-bold text-light" style="width: 12%;">SUBMIT</button>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                    </div>
            </div>

        </div>
        <div class="lets_connect text-center m-0">
            <h3 class="lets_connect_title text-light mb-5 text-center">Didn't find your preferred job role? Connect with
                us
                anyway</h5>
                <button type="submit" class="lets_connect_button">LETS CONNECT</button>
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
<style>
    .input_form {
        /* width: 85%; */
        /* height: 10%;
        margin-left: 21%;
        margin-bottom: 4%; */
        /* border-radius: 5px; */
        background-color: whitesmoke !important;
        /* border: none; */
        padding: 10px;
        /* border: none; */
    }

    .submit_form {
        background-color: #cd1432;
        border-radius: 5px;
        width: 23%;
        height: 7%;
        color: white;
        font-weight: bold;
        margin-left: 52%;
    }

    .query_sumit {
        background-color: #cd1432;
        border-radius: 5px;
        width: 12%;
        height: 4%;
        color: white;
        font-weight: bold;
        margin-left: 800px;
    }

    .query_form {
        background-color: whitesmoke;
        border: none;
        width: 250px;
        padding: 10px;
        height: 5%;
        margin-right: 15px;
        border-radius: 5px;
    }

    .email_query {
        width: 40%;
        height: 50px;
        margin-left: 10%;
        margin-bottom: 30px;
        border-radius: 5px;
        background-color: whitesmoke;
        border: none;
        padding: 10px;
    }

    /* .location_button {
        background-color: #cd1432;
        border-radius: 5px;
        width: 30%;
        height: 40px;
        color: white;
        font-weight: bold;
        margin-top: 0px;
    } */

    #location_icon {
        font-size: 50px;
        margin-right: 8%;
        margin-top: 5px;
        color: #cd1432;
        /* margin-top:15px; */
    }

    .locations {
        margin-left: 25%;
        margin-top: 12%;
    }

    #comm_icon {
        font-size: 50px;
        /* color: #cd1432;
        margin: 15px; */
    }

    .communication {
        margin-left: 25%;
        margin-top: 10%;
    }

    .lets_connect {
        background-color: #cd1432;
        height: 30%;
        margin: 10px;
    }

    .lets_connect_button {
        background-color: transparent;
        border-radius: 5px;
        width: 15%;
        height: 15%;
        color: white;
        margin-top: 0px;
        border: 1px solid white;
        justify-content: center;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./bootstrap/bootstrap.css">

<!-- custom css link  -->
<link rel="stylesheet" href="./css/style.css">