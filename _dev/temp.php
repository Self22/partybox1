<?php
/*
Template Name: Redclif main
*/
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redcliff - школа английского языка</title>
    <!--		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
    <!--		<link rel="stylesheet" type="text/css" href="css/reset.css">-->
    <!--   	<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Ubuntu:400,700&amp;subset=cyrillic"
          rel="stylesheet">
    <!-- Код тега Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92414532-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5WCT4BZ');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body>
<section class="section-top">
    <input type="checkbox" id="menu-checkbox" style="display: none;">

    <div class="top parallax-window" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>//img/1_bgimg.jpg">


        <nav class="mobile__menu">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo Redcliff"
                                class="logoimg"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="menu-mob" class="nav navbar-nav">
                            <li><a href="#about">О нас</a></li>
                            <li><a href="#how">Как мы учим</a></li>
                            <li><a href="#cont">Контакты</a></li>
                            <li><a href="#"> </a></li>
                            <li class="call call-mob">
                                <a href="tel:+380634940440">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="Call us!"
                                         class="phoneimg">

                                    <p class="phoneno">063 494 04 40</p>
                                </a>
                            </li>
                            <li><a href="#contact_form_pop" id="btn3"
                                   class="fancybox-inline callback_btn hvr-pulse-grow">Обратный звонок</a></li>
                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </nav>
        <div class="topbar">
            <div class="contwidth">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo Redcliff"
                         class="logoimg">
                </div>

                <!--<label for="menu-checkbox" class="menu-btn"></label>-->


                <?php if (have_posts()) : query_posts('p=8');
                    while (have_posts()) : the_post(); ?>


                        <?php the_content(); ?>


                    <? endwhile; endif;
                wp_reset_query(); ?>
                <?php if (have_posts()) : query_posts('p=17');
                    while (have_posts()) : the_post(); ?>


                        <?php the_content(); ?>


                    <? endwhile; endif;
                wp_reset_query(); ?>
                <div class="menu">

                    <ul id="menu" class="menu-points">
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#how">Как мы учим</a></li>
                        <li><a href="#cont">Контакты</a></li>


                        <li class="call">
                            <a href="tel:+38063494044">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="Call us!"
                                     class="phoneimg">

                                <p class="phoneno">063 494 04 40</p>
                            </a>
                        </li>
                        <li class="cb">

                            <a href="#contact_form_pop" id="btn4" class="fancybox-inline callback_btn hvr-pulse-grow">Обратный
                                звонок</a>

                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="contwidth">
            <div class="title">
                <h1>Школа английского языка «Redcliff»</h1>

                <h3 class="subtitle3">Старт обучения в начале апреля!</h3>
                <h4 class="header__discounts">Успей записаться до 5.04 по супер цене 70 грн за урок!</h4>

                <form action="#" id="#">
                    <a href="#contact_form_order" id="btn5" class="fancybox-inline reg_btn hvr-pulse-grow">Получить
                        консультацию</a>
                </form>
            </div>
        </div>

    </div>
    </div>

</section>

<section class="section-advantages" id="about">

    <div class="advantages">
        <div class="contwidth">
            <div class="adv-title">
                <h2>
                    Учить язык лучше всего с нами!
                </h2>
            </div>
            <div class="adv-five">
                <ul class="aful">
                    <li class="afli">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1_1.svg" alt="Эффективная методика"
                             class="afimg">

                        <p class="aftext">Эффективная методика, построенная на комплексе групповых и индивидуальных
                            занятий</p>
                    </li>
                    <li class="afli">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1_2.svg"
                             alt="Персональный образовательный консультант" class="afimg">

                        <p class="aftext">Персональный образовательный консультант выстроит ваш план обучения и будет
                            контролировать его выполнение</p>
                    </li>
                    <li class="afli">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1_3.svg"
                             alt="Cертифицированные преподаватели" class="afimg">

                        <p class="aftext">Ваши уроки будут проводить только сертифицированные преподаватели, вместе с
                            носителями языка</p>
                    </li>
                    <li class="afli">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1_4.svg" alt="Гарантия результата"
                             class="afimg">

                        <p class="aftext">Мы предоставляем официальную гарантию результата</p>
                    </li>
                    <li class="afli">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1_5.svg" alt="Доступность для каждого"
                             class="afimg">

                        <p class="aftext">Доступность для каждого. Стоимость урока 70-90 грн.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="section-img1">

    <div class="img1 parallax-window" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>/img/3_imgbg.jpg">

        <div class="contwidth">
            <div class="img1txt">
                <h1 class="white h1left">Предпродажи
                    стартуют<br> уже сейчас!</h1>
                <a href="#contact_form_order" id="btn6" class="fancybox-inline reg_btn reg_btn-h1left hvr-pulse-grow">Записаться
                    на консультацию</a>
            </div>
        </div>
    </div>

</section>

<section class="section-whywe">

    <div class="whywe">
        <div class="contwidth">
            <h2>Почему именно Redcliff?</h2>

            <div class="whysub">Redcliff school – это образовательное пространство, созданное в первую очередь для
                получения результата. Мы точно знаем что именно Вам необходимо, чтобы выучить английский язык.
            </div>
            <ul class="whyul">
                <li class="whyli">
                    <div class="whyimg wimg1">50%</div>
                    <p class="whywetxt">Преподаватель</p>
                </li>
                <li class="whyli">
                    <div class="whyimg wimg2">25%</div>
                    <p class="whywetxt">Системность обучения</p>
                </li>
                <li class="whyli">
                    <div class="whyimg wimg3">25%</div>
                    <p class="whywetxt">Контроль успеваемости</p>
                </li>
                <li class="whyli">
                    <div class="whyimg wimg4">100%</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/3_logo.png" alt="" class="whylogo">
                </li>
            </ul>
        </div>
    </div>
    </div>

</section>

<section class="section-howwe" id="how">

    <div class="howwe">
        <div class="contwidth">
            <h2>Как проходит процесс обучения?</h2>

            <ul class="howul">
                <li class="howli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/4_1.jpg" alt="Составляем план"
                         class="howimg">

                    <p class="howsub">Составляем план</p>

                    <p class="howtxt">
                        Детальное тестирование: чтение, письмо, грамматика, разговор

                        Составление персонального учебного плана исходя из ваших целей и задач
                    </p>
                </li>
                <li class="howli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/4_2.jpg" alt="Учимся" class="howimg">

                    <p class="howsub">Учимся</p>

                    <p class="howtxt">
                        Обучение в группе 4-8 человек строго одного уровня

                        Еженедельные ивенты для учащихся: разговорные клубы, английский кинотеатр, выездные мероприятия

                    </p>
                </li>
                <li class="howli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/4_3.jpg" alt="Сложности" class="howimg">

                    <p class="howsub">Сложности</p>

                    <p class="howtxt">
                        На основании еженедельного тестирования пройдённого материала образовательный консультант
                        назначает дополнительные индивидуальные занятия
                    </p>
                </li>
                <li class="howli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/4_4.jpg" alt="Level Up" class="howimg">

                    <p class="howsub">Level Up</p>

                    <p class="howtxt">
                        Финальное тестирование.
                        Получение диплома об окончании обучения.
                    </p>
                </li>
            </ul>

        </div>
    </div>

</section>

<section class="section-img2">

    <div class="img2 parallax-window" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>//img/5_imgbg.jpg">
        <div class="img2txt">
            <h1 class="white">Хватит зубрить самому!<br>
                Учи английский быстро и легко!</h1>

            <form action="#" id="#">
                <a href="#contact_form_order" class="fancybox-inline reg_btn hvr-pulse-grow">Получить план обучения</a>
            </form>
        </div>
    </div>

</section>

<section class="section-contacts" id="cont">

    <div class="contacts">

        <div class="contactinfo">
            <h2 class="h2cont h1left">Как нас найти?</h2>
            <ul class="contul">
                <li class="contli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/6_1.svg" alt="location" class="imgcont1">

                    <p class="conttxt">Киев, ул. Александра Кошица, 4</p>
                </li>
                <li class="contli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/6_2.svg" alt="phone no" class="imgcont2">

                    <p class="conttxt">?
                        067 494 04 40<br>
                        ? 063 494 04 40</p>
                </li>
                <li class="contli">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/6_3.svg" alt="" class="imgcont3">
                    <a href="mailto:redcliffschool@gmail.com"><p class="conttxt">redcliffschool@gmail.com</p></a>
                </li>
            </ul>
            <div class="socials">
                <a href="https://www.facebook.com/Redcliffschool" class="socials-icon"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/Facebook_Color.svg" alt=""></a>
                <a href="https://vk.com/public140652229" class="socials-icon"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/VK_Color.svg" alt=""></a>
                <a href="https://www.instagram.com/redcliffschool" class="socials-icon"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/Instagram_Color_1.png" alt=""></a>
            </div>
        </div>

        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.9029419956837!2d30.644307951053484!3d50.405646398372774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c4557a72f2a5%3A0xf9f97b6f082daf1a!2z0LLRg9C70LjRhtGPINCe0LvQtdC60YHQsNC90LTRgNCwINCa0L7RiNC40YbRjywgNCwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1487418015420"
                width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </div>

</section>

<!--		<script src="js/jquery-2.1.3.min.js"></script>-->
<!--		<script src="js/bootstrap.js"></script>-->
<!--		<script src="js/parallax.min.js"></script>-->
<!--		<script src="js/main.js"></script>-->


<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 859814942;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/859814942/?guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Код тега ремаркетинга ВКонтакте -->
<script
    type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=uW03L/7o4sWPS8buna0qoo6hep5LNwo6IbhK*u6RVHo1Y73srJCYu8IqDLX9*SZi8nQrbApXBvv/WngKvcfX3lMVoKE9r8E3SYOdXZ13RmSisu6z*LBejk7TLKlrR*G/r200BSQHAODak1D2nAwWrHP*hiGrAevlRdM5bOfLY4o-&pixel_id=1000081836';</script>


<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq)return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '690828414345670'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=690828414345670&ev=PageView&noscript=1"
        /></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter42996894 = new Ya.Metrika({
                    id: 42996894,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    ecommerce: "dataLayer"
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/42996894" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
<?php get_footer(); ?>
</html>
