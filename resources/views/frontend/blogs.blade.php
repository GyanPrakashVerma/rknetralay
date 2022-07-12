@include('frontend.include.header');



<section class="gallery_bnr">
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center" style="padding-top:200px">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:transparent!important;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"
                                style="font-size:18px;text-decoration:none;color:black;font-weight:bold;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;color:white;">Blogs
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="py-3">
    <h1 class="section_heading text-center">All Blogs</h1>
    {{-- <p class="heading_p" style="color:black;text-align:center;">Lorem ipsum dolor sit amet.</p> --}}
    <div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                @foreach ($blog as $blogs)
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid"
                                    src="{{ asset('blogs_img/'. $blogs->images) }}"
                                   width="100%" height="auto" alt="First slide">
                            </div>
                            <h3><a href="{{ route('blog',$blogs->id) }}">{{$blogs->title}}</a></h3>
                            <p>{{$blogs->short_description}}</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="{{ route('blog',$blogs->id) }}" class="btn btn-outline-secondary">Continue Reading</a>
                            </div>

                        </div>
                    </div>
                    @endforeach 
                </div>
                

                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Post Categories </h2>
                            <ul style="list-style-type: none">
                                @foreach($blog as $blogs)
                                <li><a href="#" style="text-decoration: none">{{ $blogs->category}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                        <span>jun 22, 2018</span>
                                        <div class="img-post">
                                            <img src="https://www.eyeclinicofsandpoint.com/storage/app/media/shutterstock-1565916826-web1-2.jpg"
                                                alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">new rules, more cars, more races</p>
                                        <span>jun 8, 2018</span>
                                        <div class="img-post">
                                            <img src="https://www.eyeclinicofsandpoint.com/storage/app/media/shutterstock-1565916826-web1-2.jpg"
                                                alt="Awesome Image">
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
