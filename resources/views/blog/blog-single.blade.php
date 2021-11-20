<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from doccure-html.dreamguystech.com/template/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 06:31:24 GMT -->

<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
@include('blog.layouts.partials.css')
</head>

<body>
    <div class="main-wrapper">
@include('blog.layouts.parts.header')
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Blog Details</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-view">
                            <div class="blog blog-single-post">
                                <div class="blog-image">
                                    @php
                                        $post_type = json_decode($singlepost -> featured)
                                    @endphp

                                    @if ($post_type -> format == 'image')
                                        
                                    

                                    <a href="javascript:void(0);"><img alt="" src="{{ URL::to('')}}/media/post/{{$post_type -> image}}" class="img-fluid"></a>


                                    @endif



                                </div>
                                <h3 class="blog-title">{{ $singlepost -> title}}</h3>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li>
                                                <div class="post-author">
                                                    <a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-02.jpg" alt="Post Author"> <span>@foreach ($singlepost -> users as $userdetail)
                                                        {{ $userdetail -> name}}
                                                    @endforeach</span></a>
                                                </div>
                                            </li>
                                            <li><i class="far fa-calendar"></i>{{date("d F, Y")}}</li>
                                            <li><i class="far fa-comments"></i>{{ $singlepost -> created_at -> diffForHumans()}}</li>
                                            @foreach ($singlepost -> tags as $tagi)
                                                 <li><i class="fa fa-tags"></i>{{ $tagi -> name}}</li>
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                     {!! htmlspecialchars($singlepost -> content)!!}
                                    </p>
                                </div>
                            </div>
                            <div class="card blog-share clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Share the post</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="social-share">
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card author-widget clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">About Author</h4>
                                </div>
                                <div class="card-body">
                                    <div class="about-author">
                                        <div class="about-author-img">
                                            <div class="author-img-wrap">
                                                <a href="doctor-profile.html"><img class="img-fluid rounded-circle" alt="" src="assets/img/doctors/doctor-thumb-02.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <a href="doctor-profile.html" class="blog-author-name">Dr. Darren Elder</a>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card blog-comments clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Comments (12)</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="comments-list">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/patients/patient4.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <span class="blog-author-name">Michelle Fairfax</span>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <p class="blog-date">Dec 6, 2017</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="comments-list reply">
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/patients/patient5.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <span class="comment-by">
                                                                <span class="blog-author-name">Gina Moore</span>
                                                            </span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <p class="blog-date">Dec 6, 2017</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/patients/patient3.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <span class="comment-by">
                                                                <span class="blog-author-name">Carl Kelly</span>
                                                            </span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <p class="blog-date">December 7, 2017</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/patients/patient6.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <span class="blog-author-name">Elsie Gilley</span>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <p class="blog-date">December 11, 2017</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/patients/patient7.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <span class="blog-author-name">Joan Gardner</span>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <p class="blog-date">December 13, 2017</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card new-comment clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Leave Comment</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <textarea rows="4" class="form-control"></textarea>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


{{-- sidebar --}}
@include('blog.layouts.parts.sidebar')
                </div>
            </div>
        </div>
@include('blog.layouts.parts.footer')
    </div>
@include('blog.layouts.partials.js')
</body>
<!-- Mirrored from doccure-html.dreamguystech.com/template/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 06:31:32 GMT -->

</html>