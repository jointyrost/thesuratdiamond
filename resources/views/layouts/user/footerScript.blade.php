<script>
    // Check if user is authenticated and set the user type
    const userType = @json(Auth::check() ? auth()->user()->userType : null);
    // const WHOLESALER_TYPE = @json(config('constants.USER_TYPES.WHOLESALER'));
</script>

<!-- Modernizr -->
<script src="{{ asset('user/assets/js/vendor/modernizr.min.js') }}"></script>
<!-- jQuery (Full version to support AJAX) -->
<script src="{{ asset('user/assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('user/assets/js/newsletter.js') }}"></script>

<!-- Toastr -->
<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
<!-- jQuery Validation -->
<script src="{{asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Popper (Bootstrap 5 compatible) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

{{-- new --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Bootstrap 5 (Only one version of Bootstrap should be included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Other JS Plugins -->
{{-- <script src="{{ asset('user/assets/js/vendor/slick.min.js') }}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-17EgCFhVYlf5O7l8xDtH7ElLk6lLvI3WsH5lB4aR4iqd+a+8LWfY6K4QUMdxfE1fA4KVR57r55bVPwFxINi7Ew==" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('user/assets/js/vendor/js.cookie.js') }}"></script>
<!-- In your main layout (e.g., app.blade.php) -->
@if (!isset($excludeJqueryUI) || !$excludeJqueryUI)
    <script src="{{ asset('user/assets/js/vendor/jquery-ui.min.js') }}"></script>
@endif

<script src="{{ asset('user/assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/sal.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/counterup.js') }}"></script>
<script src="{{ asset('user/assets/js/vendor/waypoints.min.js') }}"></script>

<!-- Custom Scripts -->
<script src="{{ asset('admin/helper.js') }}"></script>
<script src="{{ asset('admin/carts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('user/assets/js/main.js') }}"></script>

<!-- Toastr Notifications -->
<script>
    $(document).ready(function() {
        @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
        @if(Session::has('info'))
            toastr.info('{{ Session::get('info') }}');
        @endif
        @if(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif
    });
</script>

@stack('scripts')
</body>

</html>
