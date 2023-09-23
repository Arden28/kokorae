@extends('layouts.master')

@section('page_title', 'Notre Blog')


@section('content')
<div class="site-section bg-light" id="blog-section">
  <div class="container">
    <div class="row">
      <div class="col-7 mb-4 position-relative text-center mx-auto">
        <h2 class="font-weight-bold text-center">Notre Blog</h2>
        <p>Profitez de nos derniers articles de blogs.</p>
      </div>

    </div>
    <div class="row">


      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_3-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_5-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
        <div class="blog_entry">
          <a href="#"><img src="{{ asset('assets/images/img_h_7-min.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <h3><a href="#">Far far away, behind the word mountains</a></h3>
            <span class="date">April 25, 2019</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p class="more"><a href="#">Continuer la lecture...</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mx-auto">
        <a href="#" class="btn btn-primary btn-block">See All Posts</a>
      </div>
    </div>
  </div>
</div>
@endsection
