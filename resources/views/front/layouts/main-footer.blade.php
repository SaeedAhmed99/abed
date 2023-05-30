<!-- Start footer area -->
<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
    <div class="footer-top pt-110 pb-80">
        <div class="container">
            <div class="row">
                <!-- footer-address -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-1">
                    <div class="footer-widget">
                        <h6 class="footer-titel">GET IN TOUCH</h6>
                        <ul class="footer-address">
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset("/assets_front/images/icons/location-2.png") }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>K.A.R.E. CANADA LTD. </span>
                                    <span>7 ST. THOMAS STREET, SUITE 703 
                                        TORONTO, ON M5S 2B7
                                        </span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset("/assets_front/images/icons/phone-3.png") }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>Telephone : +416-513-1200</span>
                                    <span>Fax : +416-987-0626</span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset("/assets_front/images/icons/world.png") }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>Email : info@karecanada.com</span>
                                    <!-- <span>Web :<a href="{{ asset("/assets_front/#") }}" target="_blank"> www.yoursite.com</a></span> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer-latest-news -->
                <div class="col-xl-6 col-lg-5 col-12 order-3 order-lg-2 mt-md-30">
                    <div class="footer-widget middle">
                        <h6 class="footer-titel">LATEST PROPERTIES
                        </h6>
                        <ul class="footer-latest-news">
                            @foreach ($latesthree as $item)
                                <li>
                                    <div class="latest-news-image">
                                        <a href="{{ route('front.properties.details', $item->id) }}"><img src="{{ asset("uploads/books/images/" . $item->image[0]) }}" alt=""></a>
                                    </div>
                                    <div class="latest-news-info">
                                        <h6><a href="{{ url("single-blog.html") }}">{{ $item->name }}</a></h6>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </li> 
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- footer-contact -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 order-2 order-lg-3 mt-sm-30">
                    <div class="footer-widget">
                        <h6 class="footer-titel">QUICK CONTACT</h6>
                        <div class="footer-contact">
                            <p>Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor</p>
                            <form id="contact-form-2" action="https://demo.hasthemes.com/sheltek-preview/sheltek/mail_footer.php" method="post">
                                <input type="email" name="email2" placeholder="Type your E-mail address...">
                                <textarea name="message2" placeholder="Write here..."></textarea>
                                <button type="submit" value="send">Send</button>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p class=>©  <script>
                                document.write(new Date().getFullYear());
                            </script>  </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer area -->