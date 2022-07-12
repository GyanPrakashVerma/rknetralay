@include('frontend.include.header')

<section class="gallery_bnr">
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center" style="padding-top:200px">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:transparent!important;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                style="font-size:18px;text-decoration:none;color:black;font-weight:bold;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;color:white;">Our
                            Doctors</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" /> -->

<section class="py-5" style="background-color:#8382801f;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-doctor1" role="tab"
                            aria-controls="nav-doctor1" aria-selected="true">DR. VANDANA YADAV</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-doctor2" role="tab"
                            aria-controls="nav-doctor2" aria-selected="false">DR. SONY SAHU</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-doctor3" role="tab"
                            aria-controls="nav-doctor3" aria-selected="false">DR. ATUL KUMAR SAHU</a>

                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-doctor4" role="tab"
                            aria-controls="nav-doctor4" aria-selected="false">Dr. Jatin S. Zanzarukiya </a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-doctor1" role="tabpanel" aria-labelledby="nav-doctor1">
                        <div class="container px-5">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0" style="height:100vh;">
                                                    <img src="{{asset('storage/doc_img/Dr VANDANA YADAV.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5" style="height:100vh; overflow:scroll;">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. VANDANA YADAV</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span>Consultant- R.K. Netralaya, Varanasi.</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 11 Years in the field with different hospital with different positions with more than 15000 surgeries</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> vandana@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>

                                                    <div class="col-lg-12 mb-4 mb-sm-5">
                                                        <div>
                                                            <span class="section-title text-dark mb-3 mb-sm-4">About</span><span class="modl_section-name"> VANDANA YADAV,</span>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="nav-doctor2" role="tabpanel" aria-labelledby="nav-doctor2">
                        <div class="container px-5">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0" style="height:100vh;">
                                                    <img src="{{asset('storage/doc_img/Dr sony sahu.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5" style="height:100vh; overflow:scroll;">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. SONY SAHU </h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span>a Genaral Physician </li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> Vast Experience as a Genaral Physician in treating Infectious diseases,multisystem diseases.</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> sony@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>

                                                    <div class="col-lg-12 mb-4 mb-sm-5">
                                                        <div>
                                                            <span class="section-title text-dark mb-3 mb-sm-4">About</span><span class="modl_section-name"> Dr SONY SAHU </span>
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
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-doctor3" role="tabpanel" aria-labelledby="nav-doctor3">
                        <div class="container px-5">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0" style="height:100vh;">
                                                    <img src="{{asset('storage/doc_img/Dr ATUL SAHU.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-xl-10" style="height:100vh; overflow:scroll;">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">DR. ATUL KUMAR SAHU</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> VR consultant</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 10 Years</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> atul@mail.com</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> www.example.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>
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
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="nav-doctor4" role="tabpanel" aria-labelledby="nav-doctor4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="card card-style1 border-0">
                                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 mb-4 mb-lg-0" style="height:100vh;">
                                                    <img src="{{asset('storage/doc_img/RK OJHA.jpeg')}}" width="100%" alt="...">
                                                </div>
                                                <div class="col-lg-6 px-5" style="height:100vh; overflow:scroll;">
                                                    <div class="bg-light d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                        <h3 class="h2 text-dark mb-0">Dr. Jatin S. Zanzarukiya</h3>
                                                    </div>
                                                    <ul class="list-unstyled mb-1-9">
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> </li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 5 years</li>
                                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> jatin@mail.com</li>
                                                        <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                                    </ul>

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
                                            </div>
                                        </div>
                                    </div>

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


@include('frontend.include.footer')
