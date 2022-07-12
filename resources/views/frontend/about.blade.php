@include('frontend.include.header')

<section class="gallery_bnr" >
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center" style="padding-top:200px">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:transparent!important;">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" style="font-size:18px;text-decoration:none;color:black;font-weight:bold;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;color:white;">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About section  -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 align-self-center">
                <div class="about_img"><img src="https://midlandhealthcare.org/wp-content/uploads/2021/06/Ophthalmology.jpg"></div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="about_content">
                    <h1 class="section_heading">About Us</h1>
                    <p> R. K. Netralaya was established in Nov’1989 by Dr. R. K. Ojha. Dr. R. K. Ojha, MBBS, MS (BHU) (phaco surgeon, glaucoma) started with very basic facilities at Motijheel, Mahmoorganj, Varanasi. In 2009 he established a fully equipped super-specialty eye hospital at Dayal Enclave, Mahmoorganj, Varanasi. With his passion for modernization and the uses of the latest technology for providing quality services. He had brought the first Phaco Machine to Varanasi (Eastern UP) in 1995, In 2012 he installed the first Wavelight Ex500 Lasik Laser machine which was the first in UP. The hospital is having all faculty coming from BHU or AIIMS, New Delhi.
                            R. K. Netralaya acquired ND-Yag Laser from NIDEK and then our list of high-tech equipment became longer and longer. Right now we are proud to have a high-tech eye center for the advance eye care. We are operating retina surgeries with the highly advanced Zeiss Lumera Microscope. We are doing cataract surgeries with third generation phacoOzil Infiniti machine. We are having latest technology for OCT, HFA, NMFA, ORBSCAN, B-SCAN, OCCUSCAN, NCT, AR, etc machine.</p>
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
                <p class="heading_p" style="color:black;text-align:center;">Lorem ipsum dolor sit amet.</p>
                <div class="contact__wrapper shadow-lg mt-n9">
                    <div class="row no-gutters">
                        <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                            <h2 class="color--white mb-5">Appointment Now</h2>

                            <ul class="contact-info__list list-style--none position-relative z-index-101">
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fa fa-envelope"></i></span> support@rk netralaya.com
                                </li>
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fa fa-phone"></i></span> (021)-241454-545
                                </li>
                                <li class="mb-4 pl-4">
                                    <span class="position-absolute"><i class="fa fa-map-marker-alt"></i></span> rk netralaya
                                    <br>address : Lorem ipsum dolor sit amet.
                                    <br>address : Lorem ipsum dolor sit amet.


                                    <div class="mt-3">
                                        <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon text-white">Get directions <i class="link__icon fa fa-directions"></i></a>
                                    </div>
                                </li>
                            </ul>

                            <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                                    <defs>
                                        <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                            <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                            <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                        </linearGradient>

                                    </defs>
                                    <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                                    <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                                </svg>
                            </figure>
                        </div>

                        <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                            <form action="#" class="contact-form form-validate" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="message">Appointment Date</label>
                                            <input type="date" class="form-control" id="date" name="ap_date">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="message">How can we help?</label>
                                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
@include('frontend.include.footer')
