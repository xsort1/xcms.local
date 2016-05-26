@extends('body')
@section('centerbox')
<div class="container-fluid">

    <div class="inst-video" id="ytplayer">
       <!--  <iframe width="100%" height="550" src="https://www.youtube.com/embed/HuAxVfZasUk?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe> -->
    </div>

    <div class="col-lg-12 inst-square-menu margin-t-25">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="../allevents/categories-gallery.php">
                        <div class="menu block-1">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/photo.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Фото</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="../allevents/categories-gallery.php" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="../allevents/video.php">
                        <div class="menu block-2 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/video.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Видео</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="../allevents/video.php" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="../allevents/plan.php">
                        <div class="menu block-3 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/plan.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>План зала</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="../allevents/plan.php" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="../allevents/menu.php">
                        <div class="menu block-4 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/menu.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Меню</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="../allevents/menu.php" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="javascript:void(0)">
                        <div class="menu block-5 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/actii.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Акции</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="javascript:void(0)" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="javascript:void(0)">
                        <div class="menu block-6 xs-margin-menu">
                            <div class="main-menu-image" style="background: url(images/inst-menu-photo/interier.png);"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>Интерьер</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            <a href="javascript:void(0)" class="main-menu-button"><span>Подробнее</span></a>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-12 inst-description margin-t-50 text-center">
        <h2 class="inst-title text-center rowed">{{$product->name}}</h2>
        <div class="col-lg-8 col-lg-offset-2 margin-t-25 text-center inst-description-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quam amet odit eum doloremque cupiditate, accusamus repellendus expedita doloribus ex! Aut veniam inventore quia optio, consequatur rem dicta dolorum officiis autem at asperiores minima obcaecati qui perspiciatis, quisquam neque alias porro iure a! Qui architecto eos adipisci ipsam eligendi consectetur? Laborum, voluptatibus praesentium inventore animi consequuntur consequatur reprehenderit assumenda, similique impedit dolorem omnis eveniet totam cum architecto illo nemo officia. Dicta ex est praesentium, assumenda et maxime, reiciendis enim sapiente vel distinctio itaque, labore repudiandae voluptatum dolorem quis rem laboriosam amet pariatur temporibus fugiat. Esse ea omnis, at autem aut.
        </div>


        <div class="col-lg-12 inst-social text-center margin-t-25">
            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" data-counter=""></div>
        </div>
    </div>
    <div class="col-lg-12 margin-t-50 inst-map">
        <div class="row">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=28.85437846183777%2C47.039721515551776%2C28.86635184288025%2C47.044196031419304&amp;layer=mapnik&amp;marker=47.04195882039511%2C28.86036515235901"></iframe>
            <br/>
        </div>
    </div>

    <div class="col-lg-12  inst-pub hidden-xs">
        <div class="row">
            <div class="col-md-6 margin-t-25">
                <div class="row">
                    <div class="banner inst-pub-big" style="background:url(img/public/third-pub.png)"></div>
                    <div class="banner inst-pub-small pull-right" style="background:url(img/public/ad.jpg)"></div>
                </div>
            </div>
            <div class="col-md-6 margin-t-25">
                <div class="row">
                    <div class="banner inst-pub-small" style="background:url(img/public/ad.jpg)"></div>
                    <div class="banner inst-pub-big pull-right" style="background:url(img/public/third-pub.png)"></div>
                </div>
            </div>
        </div>
    </div>
</div>   
@stop