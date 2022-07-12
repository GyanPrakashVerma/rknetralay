<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&family=Eczar&family=Joan&family=Mukta:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://d19m59y37dris4.cloudfront.net/universal/2-0-1/vendor/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css"> -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>R K Netralaya</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            transition: all 0.4s;
            padding: 14px 0;
            position: fixed;
            left: 0;
            top: 42px;
            right: 0;
            transition: all 0.5s;
            background-color: transparent;
            z-index: 997;

        }

        .navbar li {
            border-bottom: 3px solid rgba(8, 8, 99, 0);

        }

        .navbar .nav-link {
            color: white;
            /* text-shadow: 1px 1px 0px black; */
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: rgb(255, 255, 255);
            text-shadow: none;
        }

        .navbar li:hover {
            border-bottom: 3px solid rgb(8, 8, 99);
        }



        /* Change navbar styling on scroll */
        .navbar.active {
            top: 0;
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.active .nav-link {
            color: black;
            text-shadow: none;
            text-decoration: none;
        }

        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: rgb(18, 59, 196);
            text-decoration: none;
        }

        .navbar .navbar-brand {
            color: rgb(23, 121, 187);

        }

        .feature-box-1 .icon i {
            line-height: 70px;
            font-size: 30px
        }

        .carousel {
            width: 650px;
            margin: 0 auto;
            padding-bottom: 50px;
        }

        .carousel .carousel-item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 340px;
        }

        .carousel .carousel-item a {
            color: #eb7245;
        }

        .carousel .img-box {
            width: 145px;
            height: 145px;
            margin: 0 auto;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 30px 0 10px;
        }

        .carousel .overview {
            text-align: center;
            padding-bottom: 5px;
        }

        .carousel .overview b {
            color: #333;
            font-size: 15px;
            text-transform: uppercase;
            display: block;
            padding-bottom: 5px;
        }

        .carousel .star-rating i {
            font-size: 18px;
            color: #ffdc12;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #999;
            text-shadow: none;
            top: 4px;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 20px;
            margin-right: 2px;
        }

        .carousel-control-prev {
            left: auto;
            right: 40px;
        }

        .carousel-control-next i {
            margin-right: -2px;
        }

        .carousel .carousel-indicators {
            bottom: 15px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 11px;
            height: 11px;
            margin: 1px 5px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: none;
        }

        .carousel-indicators li.active {
            background: #888;
        }

        /* Change navbar styling on small viewports */
        @media (max-width: 991.98px) {
            .navbar {
                background: #fff;
                top: 0;

            }

            .top-bar {
                display: none;
            }

            .navbar .nav-link:hover,
            .navbar .nav-link:focus {
                color: black;
                text-shadow: none;
            }

            .navbar li:hover {
                border-bottom: none;
            }

            .navbar .navbar-brand,
            .navbar .nav-link {
                color: #555;
                margin-left: 20px;
            }

            .testinomial {
                display: none;
            }

            .banner_section {
                background-position: top;
                background-size: cover;
                position: relative;
                width: 100%;
                height: 62vh;

            }

            .banner_title {
                margin: 0;
                position: absolute;
                top: 38%;
                left: 0%;
                transform: translate(0, -50%);
            }


        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <header class="header">

        <!-- top header  -->
        <div class="top-bar" style="background-color:#979b9d1f;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                        <p style="padding-top:8px;" class="top_contact">Contact us on 6391770011, 6391770022, 9235441140
                            &nbsp; or &nbsp; rknetralayaeye@gmail.com</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end justify-content-between">
                            <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg fixed-top py-3" id="header">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">
                    <img src="{{ asset('rk_logo.png') }}" alt="" width="50" height="30"
                        class="mx-2 d-inline-block align-text-top"><span style="font-size:25px;"> RK
                        Netralaya</span></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto mx-2">
                        <li class="nav-item active"><a href="{{ route('home') }}"
                                class="nav-link text-uppercase font-weight-bold">Home <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="{{ route('about') }}"
                                class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="{{ route('doctors') }}"
                                class="nav-link text-uppercase font-weight-bold">Doctors</a></li>
                        <li class="nav-item"><a href="{{ route('gallery') }}"
                                class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                        <li class="nav-item"><a href="{{ route('blogs') }}"
                                class="nav-link text-uppercase font-weight-bold">Blogs</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}"
                                class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        <li class="nav-item"><a href="{{ route('service') }}"
                                class="nav-link text-uppercase font-weight-bold">Service</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- banner section  -->
    <section class="banner_section">
        <div class="container">
            <div class="row " style="position: relative;height:100vh;">
                <div class="col-md-5 banner_title">
                    <h5 class="banner_smltext">Take steps to make your eyes safer</h5>
                    <h1 style="font-weight:600;">Vision for life, Care your Eyes</h1>
                </div>
                <div class="col-md-5"></div>

            </div>
        </div>
    </section>


    <!-- Doctors modal -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button> -->

    <!-- Modal1 -->
  
    <div class="modal fade bd-example-modal-lg" id="doctormodal1" tabindex="-1" role="dialog" aria-labelledby="doctormodal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0" style="height:60vh;">
                                                    <img src="{{asset('storage/doc_img/RK OJHA.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5" style="height:60vh; overflow:scroll;">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. Jatin S. Zanzarukiya</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> </li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 5 years</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> jatin@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4 mb-sm-5">
                                                <div>
                                                    <span class="section-title text-dark mb-3 mb-sm-4">About &nbsp;</span><span class="modl_section-name">Dr. Jatin S. Zanzarukiya </span>
                                                    <p>Dr Jatin S. Zanzarukiya has a well settled carrier in the field of opthalmology with working experience in well known institutes of India having special intreset in cataract(Phacoemulsification/BICS/ECCE) and other auterior segment sergeries with work experience of more than 5 years </p>
                                                    <p class="mb-0"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-2 mb-sm-3">
                                                        <div class="mb-2">
                                                            <span class="modl_section-title text-dark mb-3 mb-sm-4">Professional Qualification :-</span>
                                                            <p class="mx-2">MBBS, DOMS, DNB.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12 mb-4 mb-sm-5">
                                                        <div class="mb-4 mb-sm-5">
                                                            <span class="modl_section-title text-dark mb-3 mb-sm-4">Previous attachment :-</span>
                                                            <ol class="mx-5">
                                                                <li>President doctor</li>
                                                                <li>- Maulana Azad Medical College (MAMC), New Delhi.</li>
                                                                <li>- H.V. Desai Eye Hospital, Pune</li>
                                                            </ol>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2  -->
    <div class="modal fade bd-example-modal-lg" id="doctormodal2" tabindex="-1" role="dialog" aria-labelledby="doctormodal2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('storage/doc_img/Dr ATUL SAHU.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">DR. ATUL KUMAR SAHU</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> VR consultant</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 10 Years</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> edith@mail.com</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> www.example.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4 mb-sm-5">
                                <div>
                                    <span class="section-title text-dark mb-3 mb-sm-4">About &nbsp;</span><span class="modl_section-name">DR. ATUL KUMAR SAHU ,</span>
                                    <p style="font-size:18px;">WORK EXPERIENCE:</p>
                                    <p>Currently working as VR consultant at RK Netralaya Varanasi since August 2014.</p>
                                    <div class="my-3">
                                        <p class="text-dark" style="font-size:17px; font-family:serif">Worked at Dr Agarwal's Eye Hospital from April 2012 to August 2014</p>

                                        <p>-Vitreo-Retina Consultant- Dr Agarwal's Eye Hospital, Secunderabad (AP)</p>
                                        <p>-Visiting Surgeon - Dr Agarwal’s Eye Hospital, Madurai & Cuttack.</p>
                                    </div>

                                    <div class="my-3">
                                        <p class="text-dark" style="font-size:17px; font-family:serif;">Worked at L.V. Prasad Eye Institute, Vijayawada from Feb 2011 to March 2012.</p>

                                        <p>-Consultant & Incharge for Vitreo -Retinal services</p>
                                        <p>-Incharge of Operation Theatre. </p>
                                        <p>-Incharge of Hospital infection Control Committee(HICC).</p>
                                    </div>

                                    <div class="my-3">
                                        <p class="text-dark" style="font-size:17px; font-family:serif;">Worked at L.V. Prasad Eye Institute, Hyderabad from July to Dec 2011</p>

                                        <p>-Clinical Associate</p>
                                    </div>
                                    <div class="my-3">
                                        <p>Experienced with various protocols of Hospital infection Control Committee(HICC) &
                                            National Accreditation Board of Hospitals(NABH).</p>

                                    </div>
                                    <div class="my-3">
                                        <span class="modl_section-name">Surgical Experience:</span>
                                        <p> Till date have performed approx 5500 Vitrectomy
                                            Experienced in all kind of Intraocular surgeries</p>
                                        <p> Vitreo-Retinal surgeries - Macular hole, ERM, Diabetic TRD, Rheg RD, Scleral
                                            buckling, ROP vitrectomy, Endophthalmitis management.</p>
                                        <p>Trauma & Medicolegal cases – IOFB, Complex RD with advanced PVR, Scleral
                                            tear repair, Corneal tear repair, Traumatic cataract, Scleral Fixated IOL</p>
                                        <p> Anterior segment surgeries – Glued IOL, Phacoemulsification, SICS, ECCE,
                                            Trabeculectomy with releasable sutures, Pterygium excision+CLAG
                                        </p>
                                    </div>
                                    <div class="my-3">
                                        <span class="modl_section-name">Medical Experience:</span>
                                        <p> 14yrs of Post PG experience
                                            Retina & Vitreous(8yrs), Uveitis & Scleral inflammatory diseases(4y r), Neuro-ophthalmology(3yr), Comprehensive ophthalmology </p>
                                    </div>

                                    <div class="my-3">
                                        <span class="modl_section-name">Area of Interest:</span>
                                        <p>Immunosupressive Therapy, Trauma & Medicolegal issues,
                                            Combined surgeries – Buckle+Vit, Lensectomy+SFIOL/GLUED IOL, Phaco+Vit,
                                            Phaco+Intravitreal implant/inj.
                                            Research in all trials related to Retina.
                                        </p>
                                    </div>
                                    <div class="my-3">
                                        <span class="modl_section-name">ACADEMIC QUALIFICATIONS</span>
                                        <ul class="mx-3 my-3 modal_list" type="circle">
                                            <li class="text-dark"><b>Fellowship (Retina & Vitreous) :</b> <br>
                                                <b> Institution:</b> <span> Smt. Kanuri Santhamma Retina Vitreous Centre
                                                    L. V. Prasad Eye Institute , Hyderabad. INDIA</span>
                                            </li>
                                            <li class="text-dark"><b>MS(Ophthalmology) :</b> <br>
                                                <b>University:</b> <span> Maulana Azad Medical College, Delhi University. INDIA</span><br>
                                                <b> Institution:</b><span> Guru Nanak Eye Centre</span>
                                            </li>
                                            <li class="text-dark"><b>RCS (Glasgow) :</b><br>
                                                <b> University:</b><span> Royal College of Surgeons & Physicians of Glasgow, UK</span>
                                            </li>
                                            <li class="text-dark"><b>MBBS :</b><br>
                                                <b> University:</b><span> King George's Medical University, Lucknow INDIA</span><br>
                                                <b> Accolades of Graduation:</b><span> Obtained honours in Anatomy, Microbiology, Pathology,
                                                    Pharmacology, Ophthalmology, General Surgery, Gynecology and Obstetrics</span>
                                            </li>

                                        </ul>
                                        <ol class="my-2 modal_list mx-3">
                                            <span class="modl_section-name">PUBLICATIONS:</span>
                                            <li> <b>Excyclotorsion in Congenital fibrosis of extraocular muscles :</b> A case report. Pandey
                                                PK, Shroff D, Kaur N, Garg D ,Sahu A. Journal of Pediatric Ophthalmology and
                                                Strabismus 2005 Jul;31(7): 1457-58 July/august 2008/Vol 45 • no 4 PMID: 18705623</li>

                                            <li> <b>Letter to the Editor “Effect of Ruboxistaurin on the Visual Acuity Decline
                                                    Associated with Long-standing Diabetic Macular Edema”</b> Atul Kumar Sahu, Ajit
                                                Babu Majj <b>IOVS</b> 51(12):6890 (2010) PMID: 21123772
                                            </li>
                                            <li>
                                                <b> Letter to the Editor “Intravitreal ranibizumab, intravitreal ranibizumab with
                                                    PDT, and intravitreal triamcinolone with PDT for the treatment of retinal
                                                    angiomatous proliferation.”</b> Atul Kumar Sahu, Raja Narayanan <b>Retina</b> 30(6):981
                                                (2010) PMID: 20531149
                                            </li>
                                            <li><b> Hang-Back Muscle Recession Technique and its Modifications.</b> Kamlesh, Rahul
                                                Bhola, Sumit Monga, Atul Kumar Sahu, Charu Khurana, Hari N. Prasad in Surgical
                                                ophthalmology section of <b>DOS Times</b> 2006 Oct, Vol. 12, no. 4</li>
                                        </ol>
                                    </div>
                                    <div class="my-3">
                                        <span class="modl_section-name">PAPER PRESENTATIONS:</span>
                                        <ol class="modal_list mx-3">
                                            <li><b> To Compare the Surgical Outcome of Unilateral Vs Bilateral Lateral Rectus
                                                    Recession in Divergence Excess Type of Small Angle Intermittent Exotropia.</b>
                                                Kamlesh, Atul Kumar Sahu (Presenting Author), Silpi Bhuyan, Anju Rastogi, Prem
                                                Vardhan, Gaurav Goyal. Presented at squint session of the 67th <b>All India
                                                    Ophthalmological Society</b> (AIOS) Annual Conference, Jaipur, February 2009
                                            </li>
                                            <li><b>Augmented Modified Kestenbaum Procedure In Patients Of Infantile Nystagmus
                                                    Syndrome With Face Turn > 20 Deg.</b> Kamlesh, Shilpa Goel, Anju Rastogi, Prem
                                                Vardhan, Atul Kumar Sahu, Sumit Monga. Presented at squint session of the 66th <b>All
                                                    India Ophthalmological Society (AIOS)</b> Annual Conference, Bangalore, February
                                                2008.
                                            </li>
                                        </ol>
                                        <ul class="modal_list mx-3">
                                            <span class="modl_section-name">POSTER PRESENTATIONS:</span>
                                            <li><b>Surgical outcomes Of Modified Hang-Back recession (MHBR) With Vertical
                                                    Transposition(VT) In Comitant Horizontal Deviations with Vertical
                                                    Incomitance.</b> Kamlesh, Atul Kumar Sahu (Presenting Author), Anju Rastogi, Prem
                                                Vardhan, Silpi Bhuyan, Gaurav Goyal. Presented at 67th <b>All India Ophthalmological
                                                    Society</b> (AIOS) Annual Conference, Jaipur, February 2009.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal3  -->
    <div class="modal fade bd-example-modal-lg" id="doctormodal3" tabindex="-1" role="dialog" aria-labelledby="doctormodal3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('storage/doc_img/Dr sony sahu.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. SONY SAHU </h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span>a Genaral Physician </li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> Vast Experience as a Genaral Physician in treating Infectious diseases,multisystem diseases.</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> sony@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div>
                                        <span class="section-title text-dark mb-3 mb-sm-4">About &nbsp;</span><span class="modl_section-name"> Dr SONY SAHU </span>
                                        <p>Dr SONY SAHU has a vast Experience as a Genaral Physician in treating Infectious diseases,multisystem diseases.
                                            Metabolic diseases like Hypertension,Diabetes mellitus,Obesity,Dyslipidemia,Heart related problems.
                                            Endocrine disorder like Hypothyroidism,Hyperthyroidism,PCOD,Menstrual related issues.
                                            Geriateric medical problem(50 above age)early kidney,heart,bones,falls,memory,mood and wellbeing.
                                        </p>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 mb-sm-3">
                                            <div class="mb-2">
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Professional Qualification :-</span>
                                                <p class="mx-2">MBBS, DNB(HYDERABAD),PGDGM(Geriateric Medicine),PGDDM(Diabetes),
                                                    Clinical Cardiology(Apollo,Delhi)

                                                    Completed MBBS in 2009 and Post graduation from Prestigious institute of Hyderabad KIMS in 2013.
                                                    Worked in BHU in Centre of Excellence NACO as Senior Research fellow and Geriateric Medicine(BHU) </p>
                                            </div>
                                            <!-- <div>
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Education</span>
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                                <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 mb-sm-5">
                                            <div>
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Special interest :–</span>
                                                <p>Treating all multisystem complications of Diabetes and controlling it especially in Geriaterics.
                                                    RESEARCH in various trial undergoing presently under hospital for various diseases.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal4  -->
    <div class="modal fade bd-example-modal-lg" id="doctormodal4" tabindex="-1" role="dialog" aria-labelledby="doctormodal4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('storage/doc_img/Dr VANDANA YADAV.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. VANDANA YADAV</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span>Consultant- R.K. Netralaya, Varanasi.</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 11 Years in the field with different hospital with different positions with more than 15000 surgeries</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> vandana@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div>
                                        <span class="section-title text-dark mb-3 mb-sm-4">About &nbsp;</span><span class="modl_section-name"> VANDANA YADAV,</span>
                                        <p>Dr Vandana Yadav has a prolific carrier in the field of ophthalmology. She has worked with renowned ophthalmic institute of India like Sankar Eye Hospital to Aravind eye hospital. She has a special interest with advanced Glaucoma surgeries, topical phacoemulsification and performing one of the complex surgeries of anterior segment. Dr Vandana Yadav has a experience of 11 years in the field with different hospital with different positions with more than 15000 surgeries.
                                        </p>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 mb-sm-3">
                                            <div class="mb-2">
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Professions Qualification :-</span>
                                                <span class="text-dark mx-2">MBBS, DOMS, FIGO, FAICO (GLAUCOMA) Specialist for Glaucoma & Cataract</span>
                                            </div>
                                            <!-- <div>
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Education</span>
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                                <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 mb-sm-5">
                                            <div class="mb-4 mb-sm-5">
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Previous attachment :-</span>
                                                <ol class="mx-5">
                                                    <li>Senior Resident- ESI Post graduate institute, Basaidarapur, New Delhi</li>
                                                    <li>Consultant- ESI Jhilmil, New Delhi</li>
                                                    <li>Consultant- EYE Q Group of Hospitals- Sirsa, Fatehabad.</li>
                                                    <li>Consultant- R.K. Netralaya, Varanasi.</li>
                                                </ol>

                                            </div>
                                            <div>
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Professional achievement :–</span>
                                                <p>Faculty for the glaucoma and course co-ordinator for all AIOS. Conducted live surgeries session for UPOS in 2021. Dr Vandana has association with many ophthalmic society eg Ail India, Delhi, Haryana, UP ophthalmic society.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal5  -->
    <div class="modal fade bd-example-modal-lg" id="doctormodal5" tabindex="-1" role="dialog" aria-labelledby="doctormodal5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <img src="{{asset('storage/doc_img/RK OJHA.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. Jatin S. Zanzarukiya</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> </li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 5 years</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> jatin@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div>
                                        <span class="section-title text-dark mb-3 mb-sm-4">About &nbsp;</span><span class="modl_section-name">Dr. Jatin S. Zanzarukiya </span>
                                        <p>Dr Jatin S. Zanzarukiya has a well settled carrier in the field of opthalmology with working experience in well known institutes of India having special intreset in cataract(Phacoemulsification/BICS/ECCE) and other auterior segment sergeries with work experience of more than 5 years </p>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-2 mb-sm-3">
                                            <div class="mb-2">
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Professional Qualification :-</span>
                                                <p class="mx-2">MBBS, DOMS, DNB.
                                            </div>
                                            <!-- <div>
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Education</span>
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                                <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 mb-4 mb-sm-5">
                                            <div class="mb-4 mb-sm-5">
                                                <span class="modl_section-title text-dark mb-3 mb-sm-4">Previous attachment :-</span>
                                                <ol class="mx-5">
                                                    <li>President doctor</li>
                                                    <li>- Maulana Azad Medical College (MAMC), New Delhi.</li>
                                                    <li>- H.V. Desai Eye Hospital, Pune</li>
                                                </ol>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Doctors  -->
    <section class="team text-center py-5">
        <div class="container">
            <h1 class="section_heading text-center">OUR DOCTORS</h1>
            <p class="heading_p" style="color:black;text-align:center;">Clear Your Vision, Clear Your Goal</p>
            <div class="row d-flex justify-content-center">

                <div class="col-md-3 col-lg-3">
                    <a data-toggle="modal" data-target="#doctormodal4">
                        <div class="img-block mb-5">
                            <img src="{{asset('storage/doc_img/Dr VANDANA YADAV.jpeg')}}" class="permanent_doc_img img-fluid img-thumbnail rounded-circle" alt="image1">
                            <div class="content mt-2">
                                <h4>VANDANA YADAV</h4>
                                <p class="text-muted">MBBS, DOMS, FIGO, FAICO (GLAUCOMA) Specialist for Glaucoma & Cataract.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 ">
                    <a data-toggle="modal" data-target="#doctormodal2">
                        <div class="img-block mb-5">
                            <img src="{{asset('storage/doc_img/Dr ATUL SAHU.jpeg')}}" class="permanent_doc_img img-fluid  img-thumbnail rounded-circle" alt="image1">
                            <div class="content mt-2">
                                <h4>DR. ATUL KUMAR SAHU</h4>
                                <p class="text-muted">MBBS (KGMC, Lucknow), MS, (MAMC, Delhi), Fellowship Vitreo Retina (L V Prasad Eye Institute, Hyderabad), FICO (Glasgow, UK), Vitreo Retinal Surgeon</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3">
                    <a data-toggle="modal" data-target="#doctormodal3">
                        <div class="img-block mb-5">
                            <img src="{{asset('storage/doc_img/Dr sony sahu.jpeg')}}" class="permanent_doc_img img-fluid  img-thumbnail rounded-circle" alt="image1">
                            <div class="content mt-2">
                                <h4>DR. SONY SAHU</h4>
                                <p class="text-muted">MBBS, DNB (Faimily Medicine) KIMS Hyderabad, PGDHs (Diabetology)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-lg-3">
                    <a data-toggle="modal" data-target="#doctormodal5">
                        <div class="img-block mb-5">
                            <img src="{{asset('storage/doc_img/RK OJHA.jpeg')}}" class="permanent_doc_img img-fluid  img-thumbnail rounded-circle" alt="image1">
                            <div class="content mt-2">
                                <h4>Dr. Jatin S. Zanzarukiya </h4>
                                <p class="text-muted">MBBS , DO, DNB</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <!-- visiting doctors  -->
    <section class="bg-light-blue pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mb-3 mb-md-0">
                    <span class="h2 d-block">Our Visiting Doctor's</span>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card mb-3">
                                <img class="card-img-top doc_img" src="{{asset('storage/doc_img/dr_mitesh.jpg')}}" height="245px" alt="Dr. Mitesh">
                                <div class="card-body visiting_doc py-3">
                                    <h5 class="mb-0 ">DR.MITESH TANSUKHLAL JAIN</h5>
                                    <span>MBBS, DNB, FCPS, Specialist for Cornea and Anterior Segment, Lasik Laser/Contoura Vision Lasik Laser, PRK, Optical PK</span>
                                </div>
                                <div class="card-footer pt-0 border-top-0">
                                    <a href="#">email@email.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card mb-3">
                                <img class="card-img-top doc_img" src="{{asset('storage/doc_img/AKSHAY NAIR.webp')}}" height="245px" alt="Noel Flantier">
                                <div class="card-body visiting_doc py-3">
                                    <h5 class="mb-0">DR. AKSHAY GOPINATHAN NAIR</h5>
                                    <span>MBBS, DNB, Ophthalmic Plastic Surgery & Ocular Oncology, Fellow L.V. Prasad Eye Institute, Hyderabad, India ICO Fellow, Oculofacial Aesthetic Surgery, New York Eye & Ear Infirmary of Mount Sinai, NY, USA</span>
                                </div>
                                <div class="card-footer pt-0 border-top-0">
                                    <a href="#">email@email.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card mb-3">
                                <img class="card-img-top doc_img" src="{{asset('storage/doc_img/dr_mansi_oza.jpg')}}" height="245px" alt="Jamie Doe">
                                <div class="card-body visiting_doc py-3">
                                    <h5 class="mb-0">DR. MANSI OZA</h5>
                                    <span>DR. MANSI OZA</span>
                                </div>
                                <div class="card-footer pt-0 border-top-0">
                                    <a href="#">email@email.com </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section  -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 align-self-center">
                    <div class="about_img"><img
                            src="https://midlandhealthcare.org/wp-content/uploads/2021/06/Ophthalmology.jpg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="about_content">
                        <h1 class="section_heading">About Us</h1>
                        <p> R. K. Netralaya was established in Nov’1989 by Dr. R. K. Ojha. Dr. R. K. Ojha, MBBS, MS
                            (BHU) (phaco surgeon, glaucoma) started with very basic facilities at Motijheel,
                            Mahmoorganj, Varanasi. In 2009 he established a fully equipped super-specialty eye hospital
                            at Dayal Enclave, Mahmoorganj, Varanasi. With his passion for modernization and the uses of
                            the latest technology for providing quality services. He had brought the first Phaco Machine
                            to Varanasi (Eastern UP) in 1995, In 2012 he installed the first Wavelight Ex500 Lasik Laser
                            machine which was the first in UP. The hospital is having all faculty coming from BHU or
                            AIIMS, New Delhi.
                            R. K. Netralaya acquired ND-Yag Laser from NIDEK and then our list of high-tech equipment
                            became longer and longer. Right now we are proud to have a high-tech eye center for the
                            advance eye care. We are operating retina surgeries with the highly advanced Zeiss Lumera
                            Microscope. We are doing cataract surgeries with third generation phacoOzil Infiniti
                            machine. We are having latest technology for OCT, HFA, NMFA, ORBSCAN, B-SCAN, OCCUSCAN, NCT,
                            AR, etc machine.
                        </p>
                        <a type="button" href="{{ route('about') }}" class="btn btn-primary text-white">Know
                            More</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- appoitment section  -->
    <section class="py-5" style="background-color:#8382801f;">
        <div class="container">
            <div class="row">
                <div class="container">
                    <h1 class="section_heading text-center">Treat Yourself With Best</h1>
                    <!-- <p class="heading_p" style="color:black;text-align:center;"></p> -->
                    <div class="contact__wrapper shadow-lg mt-n9">
                        <div class="row no-gutters">
                            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                                <h2 class="color--white mb-5">Appointment Now</h2>

                                <ul class="contact-info__list list-style--none position-relative z-index-101">
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fa fa-envelope"></i></span>
                                        rknetralayaeye@gmail.com
                                    </li>
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fa fa-phone"></i></span> 6391770011,
                                        6391770022, 9235441140
                                    </li>
                                    <li class="mb-4 pl-4">
                                        <span class="position-absolute"><i class="fa fa-map-marker"></i></span>Dayal
                                        Enclave, D-63/B-10 A-1, Mahmoorganj Rd,
                                        <br> Near Ksheer Segar Mahmoorganj,
                                        <br>Mahmoorganj, Varanasi, Uttar Pradesh 221010
                                        <div class="mt-3">
                                            <a href="https://www.google.com/maps" target="_blank"
                                                class="text-link link--right-icon text-white">Get directions <i
                                                    class="link__icon fa fa-directions"></i></a>
                                        </div>
                                    </li>
                                </ul>

                                <figure class="figure position-absolute m-0 opacity-06 z-index-100"
                                    style="bottom:0; right: 10px">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="444px" height="626px">
                                        <defs>
                                            <linearGradient id="PSgrad_1" x1="0%" x2="81.915%"
                                                y1="57.358%" y2="0%">
                                                <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1">
                                                </stop>
                                                <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0">
                                                </stop>
                                            </linearGradient>

                                        </defs>
                                        <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)"
                                            d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z">
                                        </path>
                                        <path fill="url(#PSgrad_1)"
                                            d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z">
                                        </path>
                                    </svg>
                                </figure>
                            </div>

                            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                                <form action="/appointment" method="POST" class="contact-form form-validate"
                                    novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label class="required-field" for="firstName">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    name="name">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone"
                                                    name="phone">
                                            </div>
                                           
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label class="required-field" for="email">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label class="required-field" for="message">Appointment Date</label>
                                                <input type="date" class="form-control" id="date"
                                                    name="ap_date">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label class="required-field" for="message">How can we help?</label>
                                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mb-3">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- End Contact Form Wrapper -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- gallery section  -->




    <!-- services section  -->
    <section class="section services-section" id="services">
        <div class="container">
            <h1 class="section_heading text-center">Our Services</h1>
            <p class="heading_p" style="color:black;text-align:center;">Clear Your Vision, Clear Your Goal</p>
            <div class="row">
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Unique design</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Different Layout</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Make it Simple</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Responsiveness</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Testing for Perfection</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
                <!-- feaure box -->
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Advanced Options</h5>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites.</p>
                        </div>
                    </div>
                </div>
                <!-- / -->
            </div>
        </div>
    </section>

    <!-- emergency section  -->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <img src="{{ asset('emrgncy2.svg') }}">
            </div>
            <div class="row d-flex justify-content-center align-items-center" style="margin-top: -15%;">
                <div class="col-md-8  text-primary">
                    <h1 style=" text-align:center;" style="top:-20px;">Emergency Number<h1>
                            <h1 class="text-center" style="font-size:60px;"> 7505075050</h1>
                            <p class="text-dark text-center" style="font-size:20px;">We provide 24/7 customer support.
                                Please feel free to contact us
                                for emergency case.</p>
                </div>
            </div>
            <div class="row" style="margin-top: -11%;">
                <img src="{{ asset('emrgncy1.svg') }}">
            </div>
        </div>

    </section>
    <!-- blog section  -->
    <section class="py-5">
        <h1 class="section_heading text-center">Latest Blogs</h1>
        <div class="article-list">
            <div class="container">
                <div class="intro">
                    <p class="text-center">Improved Vision for An Improved Life </p>
                </div>
                <div class="row articles d-flex">
                @foreach ($blog as $blogs)  
                    <div class="col-sm-4 col-md-4 item"><a href="#"><img class="img-fluid"
                                src="{{ asset('blogs_img/'. $blogs->images) }}"></a>
                        <h3 class="name">{{ $blogs->title }}</h3>
                        <p class="description">{{ $blogs->short_description}}</p><a href="#" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                @endforeach

                </div>

                <div class="row my-3 d-flex justify-content-end align-items-center">
                    <div class="col-md-2 col-sm-2">
                        <a type="button" class="btn btn-primary " href="{{ route('blogs') }}">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- test  -->

    <!-- testinomial  -->
    <section class="testinomial py-3" style="background-color:#8382801f;">
        <h1 class="section_heading text-center">People are saying</h1>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img-box"><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbiFmTOTEX12LtjOlWdc_eO7tSsf2oiBsWlwrGrJPQxKeX6TtMj_3gPUIc1hxwqlipY94&usqp=CAU""
                            alt=""></div>
                    <p class=" testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia.
                        Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus
                        risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget
                        rutrum.</p>
                    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-box"><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbiFmTOTEX12LtjOlWdc_eO7tSsf2oiBsWlwrGrJPQxKeX6TtMj_3gPUIc1hxwqlipY94&usqp=CAU""
                            alt=""></div>
                    <p class=" testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                        varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.
                        Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.
                    </p>
                    <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="img-box"><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbiFmTOTEX12LtjOlWdc_eO7tSsf2oiBsWlwrGrJPQxKeX6TtMj_3gPUIc1hxwqlipY94&usqp=CAU""
                            alt=""></div>
                    <p class=" testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a
                        mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis.
                        Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor
                        velit.</p>
                    <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>

    <!-- testinomial 2  -->

    @include('frontend.include.footer')
    <script>
        $(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>

</body>

</html>
