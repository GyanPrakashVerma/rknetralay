<!-- footer area  -->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-10">
                    <div class="subscribe" style="margin-top:-105px;">
                        <form action="{{route('subscribe_store')}}" method="post" style="padding:10px;box-shadow: 0px 0px 10px 1px grey;">@csrf <input type="email" name="email"><input type="submit" value="Subscribe"> </form>
                    </div>
                </div>

                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="{{route('service')}}">Services</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="{{route('blogs')}}">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-contact">
                                <h4>Contact Us</h4>
                                <p> Dayal Enclave, D-63/B-10 A-1, Mahmoorganj Rd,  <br>Near Ksheer Segar Mahmoorganj,<br>Mahmoorganj, Varanasi, Uttar Pradesh 221010<br><br> <strong>Phone:</strong>6391770011, 6391770022, 9235441140<br> <strong>Email: </strong>rknetralayaeye@gmail.com<br> </p>
                            </div>
                            <div class="col-lg-3 col-md-6 footer-info">
                                <h3>About  R. K. Netralaya</h3>
                                <p> R. K. Netralaya was established in Nov’1989 by Dr. R. K. Ojha. In 2009 he established a fully equipped super-specialty eye hospital at Dayal Enclave, Mahmoorganj, Varanasi. With his passion for modernization and the uses of the latest technology for providing quality services. </p>
                                <div class="social-links mt-3"> <a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a> <a href="https://www.linkin.com" class="linkedin"><i class="fa fa-linkedin"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright"> &copy; Copyright <strong><span>wegentumtech</span></strong>. All Rights Reserved </div>
                    <div class="credits"> Designed by <a href="#">Wegentumtech</a> </div>
                </div>
</footer>

