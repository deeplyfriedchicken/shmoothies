@extends('master')
@section('title', 'Shmoothies | '.$blog[0]->blog_title)
@section('single', 'single')
@section('main')
            <section class="contents-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="contents-inner clearfix">
                                <article class="blog-post col-md-12">
                                    <header>
                                        <h3><a href="#">{{ $blog[0]->blog_title }}</a></h3>
                                        <div class="meta">
                                            <span><time datetime="{{ $blog[0]->date_posted }}">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $blog[0]->date_posted)->format('F j, Y') }}</time></span>
                                            <span>{{ $blog[0]->blog_views }} Views</span>
                                            <span><a href="#">{{ $blog[0]->blog_shares }} Shares</a></span>
                                        </div><!-- /meta -->
                                        <figure>
                                            <img src="{{ URL::asset('img/blog_covers/'.$blog[0]->media_url)  }}" alt="{{ $blog[0]->blog_title }}">
                                        </figure>
                                    </header>
                                    <div class="post-content">
                                        {!! $blog[0]->content !!}
                                    </div><!-- /post-content -->
                                    <div class="post-share clearfix">
                                        <p class="counter"><span>{{ $blog[0]->blog_shares }}</span>Shares</p>
                                        <ul class="social-icons style2">
                                            <li><a href="#"><i class="fa fa-facebook"></i>Like</a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
                                            <li><a href="#"><i class="fa fa-reddit"></i>Submit</a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i>Pin It</a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i>Email</a></li>
                                            <li><a href="#"><i class="fa fa-link"></i>link</a></li>
                                        </ul>
                                    </div><!-- /post-share -->
                                    <div class="post-meta">
                                        <p class="author">By: <a href="#">{{ $author[0]->first_name }} {{ $author[0]->last_name }}</a></p>
                                        <div class="post-tags">
                                            Tags:
                                            <ul>
                                                @foreach($tags as $tag)
                                                  <li>{{ ucwords($tag->tag) }}</li>
                                                @endforeach
                                            </ul>
                                        </div><!-- /post-tags -->
                                    </div><!-- /post-meta -->
                                    <div class="post-author">
                                        <figure class="avatar">
                                            <img src="{{ URL::asset('img/profile_pictures/'.$author[0]->image_url) }}" alt="{{ $author[0]->first_name." ".$author[0]->last_name  }} | Shmoothies Author">
                                        </figure>
                                        <div class="author-details">
                                            <h2>{{ $author[0]->first_name }} {{ $author[0]->last_name }}</h2>
                                            <p>{{ $author[0]->description }}</p>
                                            <ul class="social-icons small">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- /author-details -->
                                    </div><!-- /post-author -->
                                    <div class="related-posts">
                                        <h6>YOU MIGHT ALSO LIKE</h6>
                                        <div class="row">
                                          @foreach($latest as $blog)
                                            @if($loop->index == 2)
                                              @break
                                            @endif
                                            <article class="blog-post col-md-4">
                                                <header>
                                                    <figure>
                                                        <img src="{{ URL::asset('img/blog_covers/'.$blog->media_url) }}" alt="{{ $blog->blog_title }}">
                                                    </figure>
                                                    <h3><a href="/section/{{ $blog->blog_category }}/{{ $blog->blog_url }}">{{ $blog->blog_title }}</a></h3>
                                                    <div class="meta">
                                                        <span>{{ $blog->blog_category }}</span>
                                                        <span><time datetime="{{ $blog->date_posted }}">{{ $blog->date_posted->format('F j, Y') }}</time></span>
                                                    </div><!-- /meta -->
                                                </header>
                                            </article>
                                            @endforeach
                                        </div><!-- /row -->
                                    </div><!-- /related-posts -->
                                    <div class="post-comments">
                                        {{-- <h6>2 Comments</h6>
                                        <ul class="comments-list">
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure>
                                                        <img src="img/misc/comment-avatar.png" alt="Maverick">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author"><a href="#">John Doe</a></h4>
                                                        <div class="comment-meta">
                                                            <time datetime="2015-03-05 16:20">March 5, 2015 at 4:20pm</time>
                                                            <a href="#" class="reply-link">Reply</a>
                                                        </div><!-- /comment-meta -->
                                                        <p>This is a comment made by someone. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae accumsan nisl. Donec at laoreet sapien, eget facilisis velit.</p>
                                                    </div><!-- /comment-content -->
                                                </div><!-- /comment-body -->
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <figure>
                                                        <img src="img/misc/comment-avatar.png" alt="Maverick">
                                                    </figure>
                                                    <div class="comment-content">
                                                        <h4 class="comment-author"><a href="#">John Doe</a></h4>
                                                        <div class="comment-meta">
                                                            <time datetime="2015-03-05 16:20">March 5, 2015 at 4:20pm</time>
                                                            <a href="#" class="reply-link">Reply</a>
                                                        </div><!-- /comment-meta -->
                                                        <p>This is a comment made by someone. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae accumsan nisl. Donec at laoreet sapien, eget facilisis velit.</p>
                                                    </div><!-- /comment-content -->
                                                </div><!-- /comment-body -->
                                            </li>
                                        </ul>
                                        <div class="comment-form-container">
                                            <h6>Leave A Reply</h6>
                                            <form action="#" class="comment-form maverick-form">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="comment-name">Name</label>
                                                        <input type="text" name="comment-name" id="comment-name" required>
                                                    </div><!-- /col-md-4 -->
                                                    <div class="col-md-4">
                                                        <label for="comment-email">Email</label>
                                                        <input type="email" name="comment-email" id="comment-email" required>
                                                    </div><!-- /col-md-4 -->
                                                    <div class="col-md-4">
                                                        <label for="comment-website">Website</label>
                                                        <input type="url" name="comment-website" id="comment-website">
                                                    </div><!-- /col-md-4 -->
                                                    <div class="col-md-12">
                                                        <label for="comment-message">Comment</label>
                                                        <textarea name="comment-message" id="comment-message" rows="7" required></textarea>
                                                    </div><!-- /col-md-12 -->
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Post Comment">
                                                    </div><!-- /col-md-12 -->
                                                </div><!-- /row -->
                                            </form>
                                        </div><!-- comment-form-container --> --}}
                                    </div><!-- /post-comments -->
                                </article>
                            </div><!-- /contents-inner -->
                        </div><!-- /col-md-8 -->
@endsection
