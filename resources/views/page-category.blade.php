@extends('master')
@section('main')
            <section class="contents-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="heading clearfix">
                                <a href="#">{{ $category }}</a>
                            </div><!-- /heading -->
                            <div class="contents-inner list-view clearfix">
                                @foreach ($blogs as $blog)
                                <article class="blog-post col-md-12">
                                    <aside>
                                        <figure>
                                            <img src="{{ URL::asset('img/blog_covers/'.$blog->media_url)  }}">
                                        </figure>
                                    </aside>
                                    <div class="contents">
                                        <header>
                                            <ul class="categories">
                                                <li><a href="/section/{{ $blog->blog_category }}">{{ $blog->blog_category }}</a></li>
                                            </ul>
                                            <h3><a href="/section/{{ $blog->blog_category }}/{{  $blog->blog_url }}">{{ $blog->blog_title }}</a></h3>
                                            <div class="meta">
                                                <span><time datetime="{{ $blog->date_posted }}">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $blog->date_posted)->format('F j, Y') }}</time></span>
                                                <span>{{ $blog->blog_views }} Views</span>
                                                <span><a href="#">{{  $blog->blog_shares }} Shares</a></span>
                                            </div><!-- /meta -->
                                        </header>
                                        <div class="post-content">
                                            <p>{{ $blog->heading }}</p>
                                        </div><!-- /post-content -->
                                    </div>
                                </article>
                                @endforeach
                            </div><!-- /contents-inner -->
                            <div class="blog-navigation clearfix">
                                <a href="#" class="ajax-load-more">Load More</a>
                            </div><!-- /blog-navigation -->
                        </div><!-- /col-md-8 -->
@endsection
