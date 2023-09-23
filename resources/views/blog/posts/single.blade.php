@extends('layouts.master')

@section('page_title', 'Commençons à développer votre entreprise')


@section('content')

<div class="site-section">
    <div class="container pt-5 pb-5 mb-5 border-bottom">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-slider owl-single dots-absolute owl-carousel">
          <img src="{{ asset('assets/images/img_h_1-min.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{ asset('assets/images/img_h_2-min.jpg')}}" alt="Image" class="img-fluid">
          <img src="{{ asset('assets/images/img_h_3-min.jpg')}}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
    <div class="container article">
    <div class="row justify-content-center align-items-stretch">

        <article class="col-lg-8 order-lg-2 px-lg-5">
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

        <h3>Even the all-powerful...</h3>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

        <h3>On her way she met a copy</h3>
        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p>And if she hasn’t been rewritten, then they are still using her.
        On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. </p>

        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>

        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.A small river named Duden flows by their place and supplies it with the necessary regelialia.And if she hasn’t been rewritten, then they are still using her.</p>



        <div class="pt-5 categories_tags ">
                <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div>

            <div class="post-single-navigation d-flex align-items-stretch">
                <a href="#" class="mr-auto w-50 pr-4">
                <span class="d-block">Previous Post</span>
                A Mounteering Guide For Beginners
                </a>
                <a href="#" class="ml-auto w-50 text-right pl-4">
                <span class="d-block">Next Post</span>
                12 Creative Designers Share Ideas About Web Design
                </a>
            </div>


            <div class="pt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
                <li class="comment">
                <div class="vcard bio">
                    <img src="{{ asset('assets/images/person_6-min.jpg')}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                    <h3>Irish Smith</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                </div>
                </li>

                <li class="comment">
                <div class="vcard bio">
                    <img src="{{ asset('assets/images/person_5-min.jpg')}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                    <h3>Christine Stewart</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                    <li class="comment">
                    <div class="vcard bio">
                        <img src="{{ asset('assets/images/person_4-min.jpg')}}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Chintan Patel</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                        <li class="comment">
                        <div class="vcard bio">
                            <img src="{{ asset('assets/images/person_3-min.jpg')}}" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                        </div>

                            <ul class="children">
                            <li class="comment">
                                <div class="vcard bio">
                                <img src="{{ asset('assets/images/person_2-min.jpg')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                <h3>Ben Afflick</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
                </li>

                <li class="comment">
                <div class="vcard bio">
                    <img src="{{ asset('assets/images/person_1-min.jpg')}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                </div>
                </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                </div>

                </form>
            </div>
            </div>


        </article>

        <div class="col-md-12 col-lg-1 order-lg-1">
        <div class="share sticky-top">
            <h3>{{ __('Partager') }}</h3>
            <ul class="list-unstyled share-article">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-pinterest"></span></a></li>
            </ul>
        </div>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0 order-lg-3">

        <div class="mb-4">
            <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="{{ asset('assets/images/img_h_5-min.jpg')}}" alt="Image" class="img-fluid rounded">
            </a>
        </div>

        <div class="share floating-block sticky-top">

            <h2 class="mb-3 text-black">Subscribe to Newsletter</h2>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
                <input type="email" class="form-control mb-2" placeholder="Enter email">
                <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
