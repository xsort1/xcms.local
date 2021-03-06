@extends('body')
@section('centerbox')
<div class="container-fluid main-menu">
    <div class="row">
        <div class="col-md-9 col-sm-12">
        	@foreach ($data as $category)
        	@if ($category->children->count())
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="{{$category->slug}}">
                        <div class="menu block-1">
                            <div class="main-menu-image" style="background: url(images/main-menu/weeding.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>{{$category->name}}</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">{{$category->description_short}}</span>
                            <a href="{{$category->slug}}" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach

<!-- test-->
<!--
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-2 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/corporative.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Корпоратив </span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-3 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/crest.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Крестины</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-4 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/graduate.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Выпускной</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-5 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/birthday.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>День рожденья</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-6 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/children.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Детские праздники</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-7 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/clubs.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Клубы</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-8 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/restaurant.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Рестораны / Кафе</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="allclubs.php">
                        <div class="menu block-9 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/main-menu/sale.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Акции / скидки</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto ab recusandae, molestiae quasi?</span>
                            <a href="allclubs.php" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                </div>
            </div>
            -->
        </div>
        @include('partials.right-banners')
    </div>
</div>

<div class="row c-block-content c-bg-blue">
    <div class="text-center">
        <h2 class="c-block-title">Рекомендуем</h2>
    </div>
    <div class="container-fluid margin-t-50">
        <div class="recommended-slider">

            <button type="button" class="recommended-next prev-arrow control-slider hidden-xs"></button>
            <div id="recommended">

                <a href="club.php" class="category">
                    <img src="img/public/logo-decadance-club.png" alt="">
                    <h3 class="main-title"><span>Ресторан</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>
                <a href="club.php" class="category">
                    <img src="img/public/logo-krysha-club.png" alt="">
                    <h3 class="main-title"><span>Клуб</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>
                <a href="club.php" class="category">
                    <img src="img/public/logo-rust-club.jpg" alt="">
                    <h3 class="main-title"><span>Ресторан</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>
                <a href="club.php" class="category">
                    <img src="img/public/logo-art-club.png" alt="">
                    <h3 class="main-title"><span>Ресторан</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>
                <a href="club.php" class="category">
                    <img src="img/public/logo-decadance-club.png" alt="">
                    <h3 class="main-title"><span>Клуб</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>

            </div>
            <button type="button" class="recommended-prev next-arrow control-slider hidden-xs"></button>
        </div>
    </div>
</div>

<div class="c-block-content c-block-content-divider">
    <div class="text-center">
        <h2 class="c-block-title font-pink">Афиша</h2></div>
    <div class="container-fluid margin-t-30 ">
        <div class="news-slider">

            <div id="notice-slider">

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="notice-next prev-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

                <div class="col-md-10 col-xs-12" id="notice">

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-1"></div>
                        <div class="notice-link">Кинотеатры</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-2"></div>
                        <div class="notice-link">Театры</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-3"></div>
                        <div class="notice-link">Концерты</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-4"></div>
                        <div class="notice-link">Фестивали и выставки</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-5"></div>
                        <div class="notice-link">Клубы</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-6"></div>
                        <div class="notice-link">Спорт</div>
                    </a>

                    <a href="javascript:void(0)" class="category">
                        <div class="category-img category-7"></div>
                        <div class="notice-link">Развлечения</div>
                    </a>
                </div>

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="notice-prev next-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="c-block-content c-block-content-divider">
    <div class="text-center">
        <h2 class="c-block-title font-pink">Отчеты</h2></div>
    <div class="container-fluid margin-t-30 ">
        <div class="news-slider">

            <div id="report-slider">

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-next prev-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10 col-xs-12" id="report">

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/concert.png" alt="">
                        <span>Концерты</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Спорт</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/theatre.png" alt="">
                        <span>Театры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/cinema.jpg" alt="">
                        <span>Кинотеатры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Развлечения</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/festival.jpg" alt="">
                        <span>Фестивали</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/club.jpg" alt="">
                        <span>Клубы</span>
                    </a>

                </div>

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-prev next-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="c-block-content ">
    <div class="text-center">
        <h2 class="c-block-title font-pink">Новости</h2>
    </div>
    <div class="container-fluid margin-t-50">
        <div class="news-slider">
            <button type="button" class="news-next prev-arrow control-slider hidden-xs"></button>
            <div id="news">

                <div class="category">

                    <a href="detail-news.php" class="bg-img-center news-image" style="background:url(img/news/news.jpg);">

                    </a>
                    <h2><a href="detail-news.php" class="title-more">Lorem ipsum dolor Lorem ipsum dolor.</a></h2>
                    <figure>
                        <span class="text-left">18 февраля 2016</span><span class="pull-right">12:06</span>
                    </figure>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quos?</span>
                    <a href="detail-news.php" class="read-more">Читать далее...<span class="fa fa-angle-double-right"></span></a>
                </div>
                <div class="category">
                    <a href="detail-news.php" class="bg-img-center news-image" style="background:url(img/news/news2.png);"></a>
                    <h2><a href="detail-news.php" class="title-more">Lorem ipsum dolor Lorem ipsum dolor.</a></h2>
                    <figure>
                        <span class="text-left">18 февраля 2016</span><span class="pull-right">12:06</span>
                    </figure>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quos?</span>
                    <a href="detail-news.php" class="read-more">Читать далее...<span class="fa fa-angle-double-right"></span></a>
                </div>
                <div class="category">
                    <a href="detail-news.php" class="bg-img-center news-image" style="background:url(img/news/news3.png);"></a>
                    <h2><a href="detail-news.php" class="title-more">Lorem ipsum dolor Lorem ipsum dolor.</a></h2>
                    <figure>
                        <span class="text-left">18 февраля 2016</span><span class="pull-right">12:06</span>
                    </figure>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quos?</span>
                    <a href="detail-news.php" class="read-more">Читать далее...<span class="fa fa-angle-double-right"></span></a>
                </div>
                <div class="category">
                    <a href="detail-news.php" class="bg-img-center news-image" style="background:url(img/news/news4.png);"></a>
                    <h2><a href="detail-news.php" class="title-more">Lorem ipsum dolor Lorem ipsum dolor.</a></h2>
                    <figure>
                        <span class="text-left">18 февраля 2016</span><span class="pull-right">12:06</span>
                    </figure>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quos?</span>
                    <a href="detail-news.php" class="read-more">Читать далее...<span class="fa fa-angle-double-right"></span></a>
                </div>
                <div class="category">
                    <a href="detail-news.php" class="bg-img-center news-image" style="background:url(img/news/news2.png);"></a>
                    <h2><a href="detail-news.php" class="title-more">Lorem ipsum dolor Lorem ipsum dolor.</a></h2>
                    <figure>
                        <span class="text-left">18 февраля 2016</span><span class="pull-right">12:06</span>
                    </figure>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, quos?</span>
                    <a href="detail-news.php" class="read-more">Читать далее...<span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>
            <button type="button" class="news-prev next-arrow control-slider hidden-xs"></button>
        </div>
    </div>
</div>
@stop