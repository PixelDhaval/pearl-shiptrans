<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $headTitle;?> | Pearl ShipTrans Pvt Ltd </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
    <meta name="description" content="Pearl Shiptrans Pvt Ltd offers reliable shipping, logistics, and freight services, including stevedoring, vessel agency, chartering, customs clearance, warehousing, road & rail haulage, and more. Ensuring seamless global trade with end-to-end solutions.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php echo ($css3!="" ? $css3   : '<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet"> ')?>
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/insur-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/insur-two-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}">
    <?php echo (isset($css) ? $css   : '')?>
    
    @if($rtlMode == "")
        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/insur.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/insur-responsive.css') }}">
    @endif

        <?php echo (isset($css2) ? $css2   : '')?>

    
</head>