@include('frontend.include.header')
<section class="gallery_bnr" >
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center" style="padding-top:200px">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:transparent!important;">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" style="font-size:18px;text-decoration:none;color:black;font-weight:bold;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;color:white;">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<section class="section services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, omnis?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- feaure box -->
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Unique design</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
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
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
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
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
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
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
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
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
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
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <!-- / -->
        </div>
    </div>
</section>
@include('frontend.include.footer')
