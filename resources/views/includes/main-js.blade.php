
<script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
{{-- <script src="{{ asset('assets/js/bootstrap.bundle.js')}}"></script> --}}
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/aos.js')}}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.js')}}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>

<script>
$(document).ready(function() {
    var siteNav = $('.site-nav');
    var heroSection = $('#hero'); // Change to your actual hero section selector

    var hasHero = heroSection.length > 0;

    var heroOffset = hasHero ? heroSection.offset().top + heroSection.outerHeight() : 0;

    $(window).scroll(function() {
        var scrollPosition = $(window).scrollTop();

        if ((hasHero && scrollPosition > heroOffset) || !hasHero) {
            siteNav.addClass('sticky');
        } else {
            siteNav.removeClass('sticky');
        }
    });
});

</script>

<!-- Stripe JS -->
@livewireScripts

@yield('scripts')
