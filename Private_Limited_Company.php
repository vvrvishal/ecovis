<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Limited Company</title>
    <link rel="stylesheet" href="./css/style.css">k
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner image  -->

    <div class="align-items-center Private_Limited_CompanyBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Private Limited Company
            </p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Business need
        </h3>
        <div class="row" id="Your_Business_needs">
            <div class="col-md-6 col-sm-12 text-center">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
                        Select service
                    </button>
                    <div class="dropdown-menu FIRSTserviceDD w-100">
                        <button class="dropdown-item services" id="" onclick="showDD('FormationCompanies', 'Formation')" type="button">Formation</button>
                        <button class="dropdown-item services" id="" onclick="showDD('RegistrationCompanies','Registration')" type="button">Registration</button>
                        <button class="dropdown-item services" id="" onclick="showDD('Closure_of_ConcernCompanies','Closure of Concern')" type="button">Closure of Concern</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
                        Select category
                    </button>
                    <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                        <button class="dropdown-item" type="button">Private Limited Company</button>
                        <button class="dropdown-item" type="button">Limited Liability Partnerships</button>
                        <button class="dropdown-item" type="button">One Person Company (OPC)</button>
                        <button class="dropdown-item" type="button">Proprietorship</button>
                        <button class="dropdown-item" type="button">Partnership</button>
                        <button class="dropdown-item" type="button">Nidhi Company</button>
                        <button class="dropdown-item" type="button">NGO Registration</button>
                        <button class="dropdown-item" type="button">Society Registration</button>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                        <!-- <button class="dropdown-item" type="button">Professional Tax Registration</button>
                    <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
                    <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
                    <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
                    <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
                    <button class="dropdown-item" type="button">Digital Signature Registration</button>
                    <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button> -->

                        <button class="dropdown-item" type="button">PTR</button>
                        <button class="dropdown-item" type="button">GST Registration</button>
                        <button class="dropdown-item" type="button">EPF Registration</button>
                        <button class="dropdown-item" type="button">ESI Registration</button>
                        <button class="dropdown-item" type="button">PAN Application</button>
                        <button class="dropdown-item" type="button">Digital Signature Registration</button>
                        <button class="dropdown-item" type="button">TAN</button>
                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                        <button class="dropdown-item" type="button">Close Your Public Limited Company</button>
                        <button class="dropdown-item" type="button">Closing a One Person Company</button>
                        <button class="dropdown-item" type="button">Closing a Partnership</button>
                        <button class="dropdown-item" type="button">Closing a Proprietorship</button>
                        <button class="dropdown-item" type="button">Closing a Nidhi Company</button>
                        <button class="dropdown-item" type="button">Closing a Private Limited Company</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Why should I register as a Private Limited Company?</h1>
            <p class="normalText">So you’ve done your research, selected a name, set up all your contacts, and are ready to make it official. Even if you’re not, here’s a few reasons why you should register your company.</p>
            <ul class="pl-2">
                <li class="mb-1"> <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> Increased credibility</li>
                <li class="mb-1"><span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> A range of legal and taxation related benefits</li>
                <li class="mb-1"><span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> Reduced personal liability, thus less personal risk and/or loss.</li>
                <li class="mb-1"> <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> Increased capacity to borrow and raise capital</li>
                <li class="mb-1"><span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> More potential to grow and develop</li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">How should I register as a Private Limited Company?</h1>
            <p class="normalText">According to the Company Law, 2003, there are certain requirements that need to be met before you can register as a private limited company.</p>
            <ul class="pl-2">
                <li class="mb-1"> <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> At least two directors and at the most fifteen directors</li>
                <li class="mb-1"><span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> A name for it that isn’t the same as any previously registered companies or trademarked names.</li>
                <li class="mb-1"><span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> Authorized capital of one lakh.</li>
                <li class="mb-1"> <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> A registered office address (Now this doesn’t mean you have to have a different office space, any address even your rented home, can be a registered address as long as it fulfills the required conditions w.r.t to NoCs etc)</li>
            </ul>
        </div>
    </div>
    <?php include_once "footer.php" ?>
    <script>
        $("#servicebtn").click(function() {
            $(".FIRSTserviceDD").slideDown();
        });

        function showDD(id, name) {
            $("#servicebtn").attr("attr-selected", id);
            $(".baseofselectedService").slideUp();
            $("#servicebtn").text('').text(name);

        }

        function showchildDD(id) {
            $(".baseofselectedService").hide();
            var childId = $("#" + id).attr('attr-selected');
            $("#" + childId).slideDown();
        }

        $(document).mouseup(function(e) {
            if ($(e.target).closest(".baseofselectedService").length === 0) {
                $(".baseofselectedService").slideUp();
                $(".FIRSTserviceDD").slideUp();
            }
        });
    </script>
</body>

</html>