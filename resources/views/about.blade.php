@extends("layout.master")
@section("title","About")
@section("page-content")


  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
        <h2>
          About Spering Company
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you
        </p>
        <a href="">
          Read More
        </a>

        <h>ABOUT PAGE</h>
<p>
message:{{$message}}
Your number:{{$Number}}
</p>
      </div>
    </div>
  </section>

  <!-- end about section -->

 

@endsection



