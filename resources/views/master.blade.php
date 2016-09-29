<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="Shmoothies - The College Blog">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel='shortcut icon' href="{{ URL::asset('favicon.png') }}">

        <!-- /Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        <!-- /Font Icons -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


        <!-- /Plugins CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/perfect-scrollbar.min.css') }}">

        <!-- /CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

        <!-- /JS -->
        <script src="{{ URL::asset('js/vendor/modernizr.min.js') }}"></script>
    </head>
    <body class="@yield('single') sticky-nav-on">
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <div class="sticky-nav">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="logo-container">
                          <a href="#">
                              <img src="{{ URL::asset('img/logo/shmoothies-logo3.png') }}" alt="Maverick Logo">
                          </a>
                      </div><!-- /logo-container -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
          </div><!-- /container -->
      </div><!-- /sticky-nav -->
      @if(Session::has('notification'))
      <div class="top-message">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <span class="close-btn"></span>
                      <p>Optional Text Notice Or Message Can Go Here!</p>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
          </div><!-- /container -->
      </div><!-- /top-message -->
      @endif

      <aside id="sideheader">
          <header>
              <div class="logo-container">
                  <a href="#"><img src="{{ URL::asset('img/logo/shmoothies-logo-default.png') }}" alt="Maverick"></a>
              </div><!-- /logo-container -->
              <a href="#" class="sideheader-close-btn">
                  <span></span>
                  <span></span>
              </a>
          </header>
          <div class="widget widget_nav_menu">
              <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/section/smoothies">Smoothies</a></li>
                  <li><a href="/section/desserts">Desserts</a></li>
                  <li><a href="/section/entrées">Entrées</a></li>
                  <li><a href="/section/snacks">Snacks</a></li>
                  <li><a href="/section/music">Music</a></li>
                  <li><a class="netflix" href="/section/netflix">NETFLIX</a></li>
                  <li><a href="/section/reviews">Reviews</a></li>
                  <li><a href="/section/sports">Sports</a></li>
                  <li><a href="/section/technology">Technology</a></li>
                  <li><a href="/section/college">College</a></li>
              </ul>
          </div>
          <div class="widget widget_nav_menu">
              <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Terms</a></li>
              </ul>
          </div>
          <div class="widget widget_socials">
              <ul class="social-icons small">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
              </ul>
          </div>
          {{-- <div class="widget widget_customAd">
              <a href="#">
                  <img src="{{ URL::asset('img/misc/sideheaderAd.jpg') }}" alt="Maverick">
              </a>
          </div> --}}
          <p class="copyright">Copyright © 2016 Shmoothies.</p>
      </aside><!-- /sideheader -->

      <section id="wrapper">

          <div class="top-nav-wrapper">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <a href="#" class="nav-trigger">
                              <span class="bars">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </span>
                          </a>
                          <ul class="top-nav">
                              <li><a href="/"><i class="fa fa-home"></i></a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Contact</a></li>
                              <li><a href="#">Terms</a></li>
                          </ul>
                          <div class="search-container">
                              <a href="#" class="trigger">
                                  <i class="fa fa-search"></i>
                              </a>
                              <form action="#" class="header-search-form">
                                  <div class="input-container">
                                      <input type="search" placeholder="Search..">
                                  </div>
                              </form>
                          </div><!-- /search-container -->
                      </div><!-- /col-md-12 -->
                  </div><!-- /row -->
              </div><!-- /container -->
          </div><!-- /top-nav-wrapper -->
          <header id="main-header">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <nav class="main-nav clearfix">
                              <a href="#" class="mobile-nav-trigger">
                                  <span class="bars">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                  </span>
                              </a>
                              <div class="logo-wrapper">
                                  <a href="#" class="logo">
                                      <img src="{{ URL::asset('img/logo/shmoothies-logo-default.png') }}" alt="Maverick Logo">
                                  </a>
                              </div><!-- /logo-wrapper -->
                              <div class="search-container">
                                  <a href="#" class="trigger">
                                      <i class="fa fa-search"></i>
                                  </a>
                                  <form action="#" class="header-search-form">
                                      <div class="input-container">
                                          <input type="search" placeholder="Search..">
                                      </div>
                                  </form>
                              </div><!-- /search-container -->
                              <ul class="main-nav-items">
                                <li><a href="/">Home</a></li>
                                <li><a href="/section/smoothies">Smoothies</a></li>
                                <li><a href="/section/desserts">Desserts</a></li>
                                <li><a href="/section/entrées">Entrées</a></li>
                                <li><a href="/section/snacks">Snacks</a></li>
                                <li><a href="/section/reviews">Reviews</a></li>
                                <li><a class="netflix" href="/section/netflix">Netflix</a></li>
                                  <li class="has-children">
                                      <a href="#">More</a>
                                      <ul>
                                        <li><a href="/section/music">Music</a></li>
                                        <li><a href="/section/sports">Sports</a></li>
                                        <li><a href="/section/technology">Technology</a></li>
                                        <li><a href="/section/college">College</a></li>
                                      </ul>
                                  </li>
                              </ul>
                              <ul class="social-icons">
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                              </ul>
                          </nav>
                      </div><!-- /col-md-12 -->
                  </div><!-- /row -->
              </div><!-- /container -->
          </header>
      @yield('main')
      <div class="col-md-4">
          <div class="sidebar">
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
                      @foreach($latest as $blog)
                        <li>
                           <div class="featured-image">
                                <img src="{{ URL::asset('img/blog_covers/'.$blog->media_url)  }}" alt="">
                            </div>
                            <div class="post-content">
                                <p class="post-title"><a href="/section/{{ $blog->blog_category }}/{{ $blog->blog_url }}">@if(strlen($blog->blog_title) > 50){{ substr($blog->blog_title, 0, 50) }}...@else{{ $blog->blog_title }}@endif</a></p>
                                <span class="category">{{ ucwords($blog->blog_category) }}</span>
                                <span class="post-date">{{ $blog->date_posted->format('F j, Y') }}</span>
                            </div>
                        </li>
                      @endforeach
                  </ul>
              </div><!-- /widget -->
              <div class="widget widget_categories">
                  <h5>Categories</h5>
                  <ul>
                      @foreach ($category_count as $category)
                      <li><a href="/section/{{ $category->category }}">{{ ucwords($category->category) }}</a> ({{ $category->count }})</li>
                      @endforeach
                  </ul>
              </div><!-- /widget -->
              <div class="widget widget_tag_cloud">
                  <h5>Tag Cloud</h5>
                  <div class="tagcloud">
                      @foreach($tags as $tag)
                        <a href="/tagged/{{ $tag->tag }}">{{ $tag->tag }}</a>
                      @endforeach
                  </div>
              </div><!-- /widget -->
              <div class="widget widget_text">
                  <h5>Hey!</h5>
                  <div class="textwidget">
                      <p>Just your average college kids struggling and baking their way through college.</p>
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
                              <img src="{{ URL::asset('img/logo/shmoothies-light.png') }}" alt="Shmoothies">
                              <p>Just your average college kids struggling and baking their way through college.</p>
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
                              @foreach($latest as $blog)
                              <li>
                                 <div class="featured-image">
                                      <img src="{{ URL::asset('img/blog_covers/'.$blog->media_url)  }}">
                                  </div>
                                  <div class="post-content">
                                      <p class="post-title"><a href="/section/{{ $blog->blog_category }}/{{ $blog->blog_url }}">@if(strlen($blog->blog_title) > 50){{ substr($blog->blog_title, 0, 50) }}...@else{{ $blog->blog_title }}@endif</a></p>
                                      <span class="category">{{ ucwords($blog->blog_category) }}</span>
                                      <span class="post-date">{{ $blog->date_posted->format('F j, Y') }}</span>
                                  </div>
                              </li>
                              @endforeach
                          </ul>
                      </div><!-- /widget -->
                  </div><!-- /col-md-4 -->
                  <div class="col-md-4">
                      <div class="widget widget_categories">
                          <h5>Categories</h5>
                          <ul>
                              @foreach ($category_count as $category)
                              <li><a href="/section/{{ $category->category }}">{{ ucwords($category->category) }}</a> ({{ $category->count }})</li>
                              @endforeach
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
          <p class="copyright">Copyright © 2016 Shmoothies.</p>
      </div><!-- /bottom-footer -->

  </section><!-- /wrapper -->

      <script src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('js/plugins.js') }}"></script>
      <script src="{{ URL::asset('js/main.js') }}"></script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65186134-3', 'auto');
        ga('send', 'pageview');

      </script>
    </body>

</html>
