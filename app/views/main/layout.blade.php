<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    MAIN CSS -->
    <link rel="stylesheet" href="https://browse.mymanga.cf/assets/css/material-kit.css">
    <link rel="stylesheet" href="https://browse.mymanga.cf/assets/css/custom.css">
    @yield('meta')
</head>
<body>

@include('main.header', ["current" => $current])

<div class="container main">
    @yield('content')
</div>

@include('main.footer')




<!--   Core JS Files   -->
<script src="https://browse.mymanga.cf/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="https://browse.mymanga.cf/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="https://browse.mymanga.cf/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="https://browse.mymanga.cf/assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="https://browse.mymanga.cf/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://browse.mymanga.cf/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="https://browse.mymanga.cf/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="https://browse.mymanga.cf/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="https://browse.mymanga.cf/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="https://browse.mymanga.cf/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
<!-- Plugins for presentation and navigation  -->
<script src="https://browse.mymanga.cf/assets/demo/modernizr.js" type="text/javascript"></script>
<script src="https://browse.mymanga.cf/assets/demo/vertical-nav.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="https://browse.mymanga.cf/assets/demo/demo.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="https://browse.mymanga.cf/assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });
</script>

<script>
    $(function() {
        $('.paginator-select-page').on('change', function() {
            document.location = $(this).val();
        });
        // Workaround to prevent iOS from zooming the page when clicking the select list:
        $('.paginator-select-page')
            .on('focus', function() {
                if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
                    $(this).css('font-size', '16px');
                }
            })
            .on('blur', function() {
                if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
                    $(this).css('font-size', '');
                }
            })
        ;
    });
</script>

@yield('scripts')

</body>
</html>