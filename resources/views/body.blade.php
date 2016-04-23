<!DOCTYPE html>
<html>
<head>
    <base href="{{ URL::to('/') }}"/>
    <title>ГЕОАС</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Construction, Renovation" />
    <meta name="description" content="Responsive Construction Renovation Template" />
    <!--slider revolution-->
    {!! HTML::style('rs-plugin/css/settings.css',['media'=>'screen']) !!}
    <!--style-->

    {!! HTML::script('js/jquery-1.11.3.min.js') !!}

    {!! HTML::style('//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900') !!}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,cyrillic') !!}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Open+Sans:400,300,700') !!}
    {!! HTML::style('style/reset.css') !!}
    {!! HTML::style('style/bootstrap.min.css') !!}

    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/zabuto_calendar.min.js') !!}

    {!! HTML::style('style/superfish.css') !!}
    {!! HTML::style('style/jquery.qtip.css') !!}
    {!! HTML::style('style/jquery.qtip.css') !!}
    {!! HTML::style('style/style.css') !!}
    {!! HTML::style('style/animations.css') !!}
    {!! HTML::style('style/responsive.css') !!}
    {!! HTML::style('style/odometer-theme-default.css') !!}
    {!! HTML::style('fonts/streamline-small/styles.css') !!}
    {!! HTML::style('fonts/streamline-large/styles.css') !!}

    {!! HTML::script('js/zabuto_calendar.min.js') !!}

    {!! HTML::style('fonts/template/styles.css') !!}
    {!! HTML::style('fonts/social/styles.css') !!}

    <script>
        $(document).ready(function(){
            $("#my-calendar").zabuto_calendar({
                language: "ru",
                today: true,
                cell_border: true,
            });
        });
    </script>
</head>
<body>
<div class="site-container">
    <div class="header-top-bar-container clearfix">
        <div class="header-top-bar">
            <ul class="contact-details clearfix">
                <li>
                    <!-- weather widget start --><a href="//nochi.com/weather/moscow-18171"><img src="//w.bookcdn.com/weather/picture/21_18171_1_20_ecf0f1_250_bdc3c7_9da2a6_ffffff_1_2071c9_ffffff_0_3.png?scode=22274&domid=589" /></a><!-- weather widget end -->
                </li>
                <li>
                    info@geoas.ru
                </li>
                <li>
                    {{ Date::now()->format('l H:i') }}
                </li>
            </ul>
            <div class="search-container">
                <a class="template-search" href="#" title="Поиск"></a>
                <form class="search" action="search.html">
                    <input type="text" name="s" placeholder="Поиск..."  class="search-input hint">
                    <fieldset class="search-submit-container">
                        <span class="template-search"></span>
                        <input type="submit" class="search-submit" value="" />
                    </fieldset>
                </form>
            </div>
        </div>
        <a href="#" class="header-toggle template-arrow-up"></a>
    </div>
    <div class="header-container">
        <!--<div class="header-container sticky">-->
        <div class="vertical-align-table column-1-1">
            <div class="header clearfix">
                <div class="logo vertical-align-cell">
                    <h1><a href="{!! URL::to('/') !!}" title="Renovate"><div class="brand-logo"></div></a></h1>
                </div>
                <a href="#" class="mobile-menu-switch vertical-align-cell">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </a>
                <div class="menu-container clearfix vertical-align-cell top-menu">
                    <nav>
                        <ul class="sf-menu">
                            <li>
                                <a href="http://geo-otvet.ru/" title="Геодезическая база знаний - ГЕООТВЕТ" target="_blank">
                                    форум
                                </a>
                            </li>
                            <li>
                                <a href="http://geo-bazar.ru/" title="Доска объявлений геодезического оборудования - Geo-bazar.ru" target="_blank">
                                    доска объявлений
                                </a>

                            </li>
                            <li>
                                <a href="http://geo-tender.ru/" target="_blank" title="Геодезические тендеры - Geo-tender.ru" >
                                    тендер
                                </a>

                            </li>
                            <li>
                                <a href="http://geo-otziv.ru/" title="Подбор геодезического оборудования" target="_blank">
                                    отзыв
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <div class="mobile-menu-container">
                        <div class="mobile-menu-divider"></div>
                        <nav>
                            <ul class="mobile-menu">
                                <li>
                                    <a href="index.html" title="Home">
                                        HOME
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html" title="Services">
                                        SERVICES
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="service_interior_renovation.html" title="Interior Renovation">
                                                Interior Renovation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_design_build.html" title="Design and Build">
                                                Design and Build
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_tiling_painting.html" title="Design and Build">
                                                Tiling and Painting
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_paver_walkways.html" title="Paver Walkways">
                                                Paver Walkways
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_household_repairs.html" title="Household Repairs">
                                                Household Repairs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_solar_systems.html" title="Solar Systems">
                                                Solar Systems
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="projects.html" title="Projects">
                                        PROJECTS
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="project_interior_renovation.html" title="Interior Renovation">
                                                Interior Renovation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="project_garden_renovation.html" title="Garden Renovation">
                                                Garden Renovation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="project_painting.html" title="Painting">
                                                Painting
                                            </a>
                                        </li>
                                        <li>
                                            <a href="project_design_build.html" title="Design and Build">
                                                Design and Build
                                            </a>
                                        </li>
                                        <li>
                                            <a href="project_solar_systems.html" title="Solar Systems">
                                                Solar Systems
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html" title="Pages">
                                        PAGES
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="about.html" title="About">
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html" title="404 Not Found">
                                                404 Not Found
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_interior_renovation.html" title="Single Service">
                                                Single Service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="project_interior_renovation.html" title="Single Project">
                                                Single Project
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="selected">
                                    <a href="blog.html" title="Blog">
                                        BLOG
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="blog.html" title="Blog">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog_left_sidebar.html" title="Blog">
                                                Blog Left Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog_2_columns.html" title="Blog 2 Columns">
                                                Blog 2 Columns
                                            </a>
                                        </li>
                                        <li class="selected">
                                            <a href="post.html" title="Single Post">
                                                Single Post
                                            </a>
                                        </li>
                                        <li>
                                            <a href="search.html?s=ipsum" title="Search Template">
                                                Search Template
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="cost_calculator.html" title="Authors">
                                        COST CALCULATOR
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="contact.html" title="Contact">
                                        CONTACT
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="contact.html" title="Contact Style 1">
                                                Contact Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact_2.html" title="Contact Style 2">
                                                Contact Style 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="theme-page padding-bottom-66">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row full-width padding-top-bottom-50 vertical-align-cell">

            </div>
        </div>
        <div class="clearfix">
            <div class="row margin-top-70">
                <div class="column column-3-4">

                    @yield('centerbox')

                </div>
                <div class="column column-1-4 re-smart-column">
                    <div class="re-smart-column-wrapper sidebar-news">
                        <!--<div class="call-to-action sl-small-wallet banner-right">
                            <a href="javascript:void(0)"><img src="images/banner/catalog.gif" alt="" /></a>
                        </div>-->
                        <h6 class="box-header page-margin-top">Популярные новости</h6>
                        <ul class="blog small margin-top-30 clearfix">
                            @foreach($popular_news as $n)
                                @include('news.partial.latest',['n'=>$n])
                            @endforeach
                        </ul>
                        <h6 class="box-header page-margin-top">Последние новости</h6>
                        <ul class="blog small margin-top-30 clearfix">
                            @foreach($latest_news as $n)
                                @include('news.partial.latest',['n'=>$n])
                            @endforeach
                        </ul>



                        <h6 class="box-header page-margin-top page-margin-bottom">Архивы</h6>
                        <div id="my-calendar"></div>

                        <h6 class="box-header page-margin-top">Теги</h6>
                        <ul class="taxonomies margin-top-30 clearfix">
                            @foreach($tags as $tag)
                                <li><a href="{!!  URL::to('tags/' . $tag->id) !!}" title="{{$tag->tag}}">{{$tag->tag}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row yellow full-width padding-top-bottom-30 own-footer">
        <div class="row">

            <div class="col-md-2">
                <div class="footer-logo">
                    <a href="http://geo-bazar.ru/" title="Доска объявлений геодезического оборудования - Geo-bazar.ru" target="_blank"><img src="images/geo-bazar.png" alt="Доска объявлений геодезического оборудования - Geo-bazar.ru" /></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-logo">
                    <a href="http://geo-otvet.ru/" title="Геодезическая база знаний - ГЕООТВЕТ" target="_blank"><img src="images/geo-otvet.png" alt="Геодезическая база знаний - ГЕООТВЕТ" /></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-logo-main">
                    <a href="{{ URL::to('/') }}" title="ГЕОАС" ><img src="images/logo-geo.png" alt="ГЕОАС" /></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-logo">
                    <a href="http://geo-otziv.ru/" title="Подбор геодезического оборудования" target="_blank"><img src="images/geo-otziv.png" alt="Подбор геодезического оборудования" /></a>
                </div>
            </div>
            <div class="col-md-2"><div class="footer-logo" ><a href="http://geo-tender.ru/" target="_blank" title="Геодезические тендеры - Geo-tender.ru" ><img src="images/geo-tender.png" alt="Геодезические тендеры - Geo-tender.ru" /></a></div></div>


        </div>
    </div>
</div>
<a href="#top" class="scroll-top animated-element template-arrow-up" title="Наверх"></a>
<!--js-->
{!! HTML::script('js/jquery-migrate-1.2.1.min.js') !!}
<!--slider revolution-->
{!! HTML::script('rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! HTML::script('rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
{!! HTML::script('js/jquery.ba-bbq.min.js') !!}
{!! HTML::script('js/jquery-ui-1.11.4.custom.min.js') !!}
{!! HTML::script('js/jquery-ui-1.11.4.custom.min.js') !!}
{!! HTML::script('js/jquery.ui.touch-punch.min.js') !!}
{!! HTML::script('js/jquery.isotope.min.js') !!}
{!! HTML::script('js/jquery.easing.1.3.min.js') !!}
{!! HTML::script('js/jquery.carouFredSel-6.2.1-packed.js') !!}
{!! HTML::script('js/jquery.touchSwipe.min.js') !!}
{!! HTML::script('js/jquery.transit.min.js') !!}
{!! HTML::script('js/jquery.hint.min.js') !!}
{!! HTML::script('js/jquery.costCalculator.min.js') !!}
{!! HTML::script('js/jquery.parallax.min.js') !!}
{!! HTML::script('js/jquery.prettyPhoto.js') !!}
{!! HTML::script('js/jquery.qtip.min.js') !!}
{!! HTML::script('js/jquery.blockUI.min.js') !!}
{!! HTML::script('//maps.google.com/maps/api/js?sensor=false') !!}

{!! HTML::script('js/main.js') !!}
{!! HTML::script('js/odometer.min.js') !!}

</body>
</html>