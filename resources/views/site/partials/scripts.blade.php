<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="{{asset('frontend/js/slick.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".list-img").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // arrows: true,
            infinite: true,
            speed: 500,
            arrows: true,
            prevArrow:
                '<div><span class="iconify pr slick-prev" data-icon="icons8:angle-left" data-inline="false"></span></div>',
            nextArrow:
                '<div><span class="iconify ne slick-next" data-icon="icons8:angle-right" data-inline="false"></span></div>',
        });
    });
</script>
@stack('scripts')
