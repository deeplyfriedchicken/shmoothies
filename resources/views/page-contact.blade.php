@extends('master')
@section('main')
            <section class="contents-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="heading clearfix">
                                <a href="#">Contact Us</a>
                            </div><!-- /heading -->
                            <div class="contents-inner clearfix">
                                <article class="blog-post col-md-12">
                                    <header>
                                        <figure>
                                            <img src="http://placehold.it/650x433">
                                        </figure>
                                    </header>
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus nibh et congue aliquam. Fusce ipsum tellus, pellentesque a consequat eget, luctus eget nisi. Maecenas tellus elit, mattis eget luctus vitae, mollis quis metus. Ut quis turpis vel quam varius eleifend id id augue. Vestibulum eu arcu feugiat, sodales orci ut, dictum mauris. </p>
                                        <h4>Lorem Ipsum Dolor</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipiscing</a> elit. In cursus nibh et congue aliquam. Fusce ipsum tellus, pellentesque a consequat eget, luctus eget nisi. Maecenas tellus elit, mattis eget luctus vitae, mollis quis metus. Ut quis turpis vel quam varius eleifend id id augue. Vestibulum eu arcu feugiat, sodales orci ut, dictum mauris. Aenean tempus ipsum at nibh tempor feugiat. Nam aliquet velit sit amet cursus et ultricies. Vestibulum ante ipsum primis in faucibus efficitur turpis.</p>
                                        <blockquote>
                                            <p>
                                                Fusce pellentesque, leo nec dignissim condimentum, leo dui elementum felis, sit amet sodales velit est vitae sapien.
                                            </p>
                                        </blockquote>
                                        <p>Vivamus gravida, eros nec volutpat aliquam, neque lacus mollis dolor, nec pretium mauris ante vitae risus. Duis rutrum odio vel accumsan imperdiet. Nulla ac posuere lacus. Quisque sed ipsum vel nisl gravida vulputate. Sed pretium non magna malesuada convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales porta gravida. Fusce pellentesque, leo nec dignissim condimentum, leo dui elementum felis, sit amet sodales velit est vitae sapien. Sed blandit tellus vel nisl porta ultricies. Sed at erat at dolor maximus suscipit vitae ut lacus. In bibendum ullamcorper feugiat. Maecenas enim felis, fermentum non ultrices at, pellentesque ut ipsum. </p>
                                    </div><!-- /post-content -->
                                    <form action="#" class="contact-form maverick-form">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="contact-name">Name</label>
                                                <input type="text" name="contact-name" id="contact-name" required>
                                            </div><!-- /col-md-4 -->
                                            <div class="col-md-4">
                                                <label for="contact-email">Email</label>
                                                <input type="email" name="contact-email" id="contact-email" required>
                                            </div><!-- /col-md-4 -->
                                            <div class="col-md-4">
                                                <label for="contact-subject">Subject</label>
                                                <input type="url" name="contact-subject" id="contact-subject">
                                            </div><!-- /col-md-4 -->
                                            <div class="col-md-12">
                                                <label for="contact-message">Your Message</label>
                                                <textarea name="contact-message" id="contact-message" rows="7" required></textarea>
                                            </div><!-- /col-md-12 -->
                                            <div class="col-md-12">
                                                <input type="submit" value="Send Message">
                                            </div><!-- /col-md-12 -->
                                        </div><!-- /row -->
                                    </form>
                                </article>
                            </div><!-- /contents-inner -->
                        </div><!-- /col-md-8 -->
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="widget widget_customAd">
                                    <img src="img/misc/sidebarAd.jpg" alt="Maverick">
                                </div><!-- /widget -->
                                <div class="widget widget_search">
                                    <form role="search" class="search-form" action="#">
                                        <input type="search" class="search-field" name="s" title="Search for:" placeholder="Search…">
                                        <input type="submit" value="&#xf002;">
                                    </form>
                                </div><!-- /widget -->
                                <div class="widget widget_socials">
                                    <h5>Social Media</h5>
                                    <ul class="social-icons small">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                    </ul>
                                </div><!-- /widget -->
                                <div class="widget widget_latest_posts_entries">
                                    <h5>Latest Posts</h5>
                                    <ul>
                                        <li>
                                           <div class="featured-image">
                                                <img src="img/blog/thumb-1.jpg" alt="Maverik Sidebar">
                                            </div>
                                            <div class="post-content">
                                                <p class="post-title"><a href="#">Great Outdoor Travel Tips For Beginners</a></p>
                                                <span class="category">Travel</span>
                                                <span class="post-date">August 5, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                           <div class="featured-image">
                                                <img src="img/blog/thumb-2.jpg" alt="Maverik Sidebar">
                                            </div>
                                            <div class="post-content">
                                                <p class="post-title"><a href="#">Denim 2015 Fall Exclusives</a></p>
                                                <span class="category">Fashio</span>
                                                <span class="post-date">July 27, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                           <div class="featured-image">
                                                <img src="img/blog/thumb-3.jpg" alt="Maverik Sidebar">
                                            </div>
                                            <div class="post-content">
                                                <p class="post-title"><a href="#">Pacific Goods New Arrivals</a></p>
                                                <span class="category">Fashio</span>
                                                <span class="post-date">July 11, 2015</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- /widget  -->
                                <div class="widget widget_categories">
                                    <h5>Categories</h5>
                                    <ul>
                                        <li><a href="#">Category</a> (3)</li>
                                        <li><a href="#">Category</a> (10)</li>
                                        <li><a href="#">Category</a> (6)</li>
                                        <li><a href="#">Category</a> (2)</li>
                                        <li><a href="#">Category</a> (15)</li>
                                    </ul>
                                </div><!-- /widget -->
                                <div class="widget widget_tag_cloud">
                                    <h5>Tag Cloud</h5>
                                    <div class="tagcloud">
                                        <a href="#">Travel</a>
                                        <a href="#">Fashion</a>
                                        <a href="#">Automative</a>
                                        <a href="#">Music</a>
                                        <a href="#">Music</a>
                                        <a href="#">Automative</a>
                                        <a href="#">Fashion</a>
                                        <a href="#">Travel</a>
                                        <a href="#">Travel</a>
                                        <a href="#">Fashion</a>
                                        <a href="#">Automative</a>
                                        <a href="#">Music</a>
                                    </div>
                                </div><!-- /widget -->
                                <div class="widget widget_text">
                                    <h5>Basic Text</h5>
                                    <div class="textwidget">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                </div><!-- /widget -->
                            </div><!-- /sidebar -->
                        </div><!-- /col-md-4 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>

            <footer id="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_text">
                                <h5>About Us</h5>
                                <div class="textwidget">
                                    <img src="img/logo/logo2.png" alt="Maverick">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <form  class="subscribe-form" action="php/subscribe.php">
                                        <input type="email" class="subscribe-email" name="subscribe-email" placeholder="Sign Up For Our Newsletter">
                                        <input type="submit" value="&#xf101;">
                                        <label class="subscribe-form-result"></label>
                                    </form>
                                </div>
                            </div><!-- /widget -->
                        </div><!-- /col-md-4 -->
                        <div class="col-md-4">
                            <div class="widget widget_latest_posts_entries">
                                <h5>Latest Posts</h5>
                                <ul>
                                    <li>
                                       <div class="featured-image">
                                            <img src="http://placehold.it/90x70">
                                        </div>
                                        <div class="post-content">
                                            <p class="post-title"><a href="#">Great Outdoor Travel Tips For Beginners</a></p>
                                            <span class="category">Travel</span>
                                            <span class="post-date">August 5, 2015</span>
                                        </div>
                                    </li>
                                    <li>
                                       <div class="featured-image">
                                            <img src="http://placehold.it/90x70">
                                        </div>
                                        <div class="post-content">
                                            <p class="post-title"><a href="#">Denim 2015 Fall Exclusives</a></p>
                                            <span class="category">Fashio</span>
                                            <span class="post-date">July 27, 2015</span>
                                        </div>
                                    </li>
                                    <li>
                                       <div class="featured-image">
                                            <img src="http://placehold.it/90x70">
                                        </div>
                                        <div class="post-content">
                                            <p class="post-title"><a href="#">Pacific Goods New Arrivals</a></p>
                                            <span class="category">Fashio</span>
                                            <span class="post-date">July 11, 2015</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /widget -->
                        </div><!-- /col-md-4 -->
                        <div class="col-md-4">
                            <div class="widget widget_categories">
                                <h5>Categories</h5>
                                <ul>
                                    <li><a href="#">Category</a> (3)</li>
                                    <li><a href="#">Category</a> (10)</li>
                                    <li><a href="#">Category</a> (6)</li>
                                    <li><a href="#">Category</a> (2)</li>
                                    <li><a href="#">Category</a> (15)</li>
                                    <li><a href="#">Category</a> (7)</li>
                                </ul>
                            </div><!-- /widget -->
                        </div><!-- /col-md-4 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </footer>

            <div id="bottom-footer">
                <ul class="social-icons small">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#"><i class="fa fa-vine"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                </ul>
                <p class="copyright">Copyright © 2015 Maverick.</p>
            </div><!-- /bottom-footer -->

        </section><!-- /wrapper -->

@endsection
