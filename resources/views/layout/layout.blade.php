<!DOCTYPE html>
<html lang="en">
@php

$css = '<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '"/>';        
$css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-4.css') . '"/>';
$script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
           <script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

<x-head rtlMode='{{ isset($rtlMode) ? $rtlMode : "" }}' headTitle='{{ isset($headTitle) ? $headTitle : "" }}' css='{!! isset($css) ? $css : "" !!}' css2='{!! isset($css2) ? $css2 : "" !!}' css3='{!! isset($css3) ? $css3 : "" !!}'/>

<body class="custom-cursor <?php echo (isset($bodyClass) ? $bodyClass   : '')?>">

    <x-customcursor />

    <x-preloader />

    <div class="page-wrapper">

        <?php 

            if (!isset($header)) {
                ?>
                <x-header/>
                <x-strickyheader/>
                <?php
            }
        ?>

        <?php 

            if (isset($subTitle)) {
                ?>
                <x-pageheader title='{{ isset($title) ? $title : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}' />
                <?php
            }
        ?>

        @yield('content')

        <?php 

            if (!isset($counterone)) {
                ?>
                <x-counterone/>
                <?php
            }
        ?>


        <?php 

            if (!isset($footer)) {
                ?>
                <x-footer/>
                <?php
            }
        ?>

    </div>

    <x-mobilenav />

    <x-searchpopup />

    <x-script script='{!! $script !!}' />

</body>

</html>