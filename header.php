<?php?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- CSS default -->
      <link rel="stylesheet"id="" href="<?php echo get_template_directory_uri ();?>/style.css">
      <script defer src="<?php echo get_template_directory_uri ();?>/script.js"></script>
    <title>Test site Shlyah</title>
  </head>
  <body>
    <!-- header -->

    <header>

        <!-- шапка №1-->
        <article class="main-menu ">
			 <!-- mob version mmenu -->
            <section class="menu-mob-block d-none">
                <section class="mob-menu-block">
                    <img src="<?php the_field('img_menu_mob_logo'); ?>" alt="" width="100px"> 
                    <section class="block-right-menu-mob">
                        <img id="mob-menu-butt-open" src="<?php the_field('img_menu_mob_open'); ?>" alt=""> 
                        <img id="mob-menu-butt-close" class="d-none" src="<?php the_field('img_menu_mob_close'); ?>" alt=""> 
                        <a href="#"><i class="fas fa-search"></i></a>
                        <span>  <?php echo do_shortcode( '[weglot_switcher]' ); ?></span>
                    </section>
                </section>
                <!-- menu mobile full -->
                <section class="mob-menu-full d-none">
                    <section>
                        <ul>
                            <li><a href="#" ><img src="<?php the_field('img_catal_menu_mobile'); ?>" alt="catalog"> <?php the_field('catalog_title'); ?></a></li>
							<li><a href="#" ><img style="padding-right:10px;" src="<?php the_field('img_price_menu_mobile'); ?>" alt=""><?php the_field('price_title'); ?></a></li>
							<li><a href="#" ><img style="padding-right:10px;" src="<?php the_field('img_sert_menu_mobile'); ?>" alt=""><?php the_field('certificate_title'); ?></a></li>
                        </ul>
                        <hr>
                    </section>
                    <section>
                        <ul>
                           <?php wp_nav_menu( [ 
	'theme_location'  => '',
	'menu'            => 'menu_one', 
	'items_wrap' => '%3$s' ] ); ?>
                        </ul>
                        <hr>
                    </section>
                    <section>
                        <ul>
                            <li class="number-menu"><span><i class="fas fa-phone-alt"></i>+38 050 400 07 70</span></li>
                            <p></p>
                            <li><a href=""><button class="callback-menu">Обратный звонок</button></a></li>
                        </ul>
                    </section>
                </section>
            </section>
            <!-- end mob version menu -->
            <ul class="main-menu-ul flex-disp">
                <?php wp_nav_menu( [ 
	'theme_location'  => '',
	'menu'            => 'menu_one', 
	'items_wrap' => '%3$s' ] ); ?>
                <li>
                    <form action="" class="search-inp">
                        <input type="text" placeholder="Поиск товаров">
                        <button><a href="#"><i class="fas fa-search"></i></a></button>
                    </form>
                </li>
                <li class="lang">
                    <?php echo do_shortcode( '[weglot_switcher]' ); ?>
<!--                     <section class="under-lang d-none">
                        <ul>
                            <li>Uk</li>
                            <li>Eng</li>
                            <li>Ru</li>
                        </ul>
                    </section> -->
                </li>
            </ul>
        </article>

        <!-- шапка №2 -->

        <article class="second-menu ">
            <ul class="flex-disp second-menu-ul">
                <li><a href="#"><img src="<?php the_field('logo'); ?>" style="width:100px;"alt="logo"></a></li>
                <li class="catalog">
                    <a href="#" ><button > <img src="<?php the_field('img_catal'); ?>" alt="catalog" class="icon-menu-catalog"> <?php the_field('catalog_title'); ?></button></a>

                    <!-- 1 подменю -->
                    <section class="catalog-under-menu-one ">
                        <ul>
                            <li class="catalog-two">
								<?php wp_nav_menu( [ 
	'theme_location'  => '',
	'menu'            => 'menu_two', 
	'items_wrap' => '%3$s' ] ); ?>
                               <a href="#">Фитинг Латунный </a><i class="fas fa-chevron-right"></i>
                                <!-- 2 подменю-->
                                <section class="catalog-under-menu-two">
                                    <h2>Фитинг латунный</h2>
                                    <hr>
                                    <section class="flex-disp ">
                                        <ul>
                                            <li><a href="#">Врезка в бак</a></li>
                                            <li><a href="#">Врезка трубная</a></li>
                                            <li><a href="#">Заглушка</a></li>
                                            <li><a href="#">Крестовина</a></li>
                                            <li><a href="#">Муфта</a></li>
                                            <li><a href="#">Наконечник-штуцер</a></li>
                                            <li><a href="#">Ниппель</a></li>
                                            <li><a href="#">Переходник</a></li>
                                            <li><a href="#">Разное</a></li>
                                            <li><a href="#">Сгон</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Соединение прямое (американка)</a></li>
                                            <li><a href="#">Соединение угловое (американка)</a></li>
                                            <li><a href="#">Тройник</a></li>
                                            <li><a href="#">Тройник соединительный</a></li>
                                            <li><a href="#">Трубка соединительная</a></li>
                                            <li><a href="#">Уголок переходной</a></li>
                                            <li><a href="#">Уголок проходной</a></li>
                                            <li><a href="#">Уголок соединительный</a></li>
                                            <li><a href="#">Футорка</a></li>
                                        </ul>
                                    </section>

                                </section>
                            <i class="fas fa-chevron-right"></i></li><!--
                            <li><a href="#">Фитинг латунный никелированный </a> <i class="fas fa-chevron-right"></i></li>
                            <li><a href="#">Спецзаказы</a></li> -->
                        </ul>
                    </section>

                </li>
                <li><a href=""><button> <img src="<?php the_field('img_price'); ?>" alt="carbon_blog"> <?php the_field('price_title'); ?></button></a></li>
                <li><a href=""><button><?php the_field('price_title'); ?></button></a></li>
                <li class="number-menu"><span><i class="fas fa-phone-alt"></i><?php the_field('phone_number'); ?></span></li>
                <li><a href=""><button class="callback-menu">Обратный звонок</button></a></li>
            </ul>
        </article>
    </header>

    <!-- main -->

    <main>
