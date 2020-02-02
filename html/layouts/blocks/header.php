<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

use Joomla\CMS\Factory;

$doc = Factory::getDocument() ;
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header.css' );
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header2.css' );
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header-social-dropdown.css' );
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header-header-bottomline.css' );
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header-header-bottomline-menu-outer.css' );
$doc->addStyleSheet( '/templates/rosetka/css/layouts.block.header-header-bottomline-header-search.css' );



?>
<div class="app-rz-header">
    <div class="preloader" hidden=""></div>
    <header class="header">
        <div class="layout">
            <div class="header-topline">
                <div class="header-phones">
                    <svg aria-hidden="true" class="header-phones__icon" height="12" width="12">
                        <use xlink:href="#icon-phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg><!---->
                    <button class="header-phones__button" type="button"><span class="link-dashed">(044) 537-02-22</span>
                        <svg aria-hidden="true" class="header-phones__button-icon" height="7" width="13">
                            <use xlink:href="#icon-chevron-down" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </button><!----></div>
                <ul class="header-topline__links">
                    <li class="header-topline__links-item"><a href="https://rozetka.com.ua/contacts/">Контакты</a></li>
                </ul>
                <ul class="header-topline__language js-rz-lang"><!----><!----><!---->
                    <li class="header-topline__language-item"><!----><span
                                class="header-topline__language-item_state_active"> RU </span><!----></li>
                    <li class="header-topline__language-item"><!----><a href="/ua/">UA</a><!----></li><!----></ul>
                <div class="js-rz-city">
                    <div class="header-cities"><span class="header-cities__label">Город</span><!----><!----><a
                                class="header-cities__link link-dashed"> Киев </a><!----></div>
                </div><!---->
                <div class="header-topline__user js-rz-auth">
                    <div class="header-topline__user-wrapper">
                        <p class="header-topline__user-text"><span class="header-topline__user-label"> Здравствуйте, <svg
                                        class="header-topline__user-icon" height="14" width="15"><use
                                            xlink:href="#icon-user"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span><!----><!----><a
                                    class="header-topline__user-link link-dashed"
                                    href="https://my.rozetka.com.ua/profile/personal-information"> Олег Николайчук </a>
                            <!----></p><!---->
                        <div class="header-dropdown header-dropdown_type_links">
                            <ul class="header-dropdown__links"><!---->
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/personal-information/"> Личные
                                        данные
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/my-cards/"> Мои банковские карты
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/wishlists/"> Списки желаний
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/cart/"> Корзина
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/waitlist/"> Лист ожидания
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/account/#list"> Мои заказы
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/reviews/"> Мои отзывы
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/recently-viewed/"> Просмотренные
                                        товары
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/subscribes/"> Рассылки
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/promotions/"> Участие в акциях
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/clubs/"> Мои клубы
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/market/message/"> Моя переписка
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a
                                            href="https://my.rozetka.com.ua/profile/bonus/"> Мой бонусный счет
                                        <svg class="header-dropdown__list-arrow" height="13" width="7">
                                            <use xlink:href="#icon-chevron-left"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a></li>
                                <li class="header-dropdown__list-item"><a href="https://my.rozetka.com.ua/signout/">
                                        Выход </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-dropdown social-dropdown" style="display: none"><p
                                class="social-dropdown__title">Свяжите аккаунт с соцсетями</p>
                        <div class="social-dropdown__buttons"><a
                                    class="button auth-modal__social-button auth-modal__social-button_type_facebook"><i
                                        class="auth-modal__social-icon auth-modal__social-icon_type_facebook">
                                    <svg height="19" width="11">
                                        <use xlink:href="#icon-facebook"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </i>Facebook </a><a
                                    class="button auth-modal__social-button auth-modal__social-button_type_google"><i
                                        class="auth-modal__social-icon">
                                    <svg height="18" width="18">
                                        <use xlink:href="#icon-google-colored"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </i>Google </a></div>
                        <p class="social-dropdown__caption"> Мы не передаем никаких данных соцсетям и не постим ничего у
                            вас на стене </p>
                        <div class="social-dropdown__bottom"><a>Закрыть</a></div>
                    </div><!---->
                    <app-auto-sign-out _nghost-c18="">
                        <modal-window _ngcontent-c18="" blockresistance="true" ignoreoverlayclick="true">
                            <!----></modal-window>
                    </app-auto-sign-out>
                </div><!----></div>
            <div class="header-bottomline"><!----><a apprzroute="" class="header__logo"
                                                     href="https://rozetka.com.ua"><img
                            src="https://xl-static.rozetka.com.ua/assets/img/design/logo_n.svg"
                            alt="Интернет магазин Rozetka.ua - №1" title="Интернет магазин Rozetka.ua - №1"></a>
                <div class="menu-outer js-rz-fat-menu">
                    <button class="menu-toggler" aria-label="Каталог товаров">
                        <svg aria-hidden="true" class="menu-toggler__icon" height="24" width="24">
                            <use xlink:href="#icon-catalog" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                        <span class="menu-toggler__text">Каталог товаров</span></button>
                    <fat-menu>
                        <div class="menu-wrapper menu-wrapper_state_animated">
                            <ul class="menu-categories"><!---->
                                <li class="menu-categories__item menu-categories__item_state_hovered"><a apprzroute=""
                                                                                                         class="menu-categories__link js-menu-categories__link menu-categories__link_state_hovered"
                                                                                                         href="https://rozetka.com.ua/computers-notebooks/c80253/"
                                                                                                         target=""><span
                                                class="menu-categories__icon"><svg height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-2416"></use></svg></span>Ноутбуки и
                                        компьютеры<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/notebooks/c80004/"> Ноутбуки </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tablets/c130309/"> Планшеты </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/videocards/c80087/">
                                                        Видеокарты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/hdd/c80084/"> Жесткие диски и
                                                        дисковые массивы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/monitors/c80089/">
                                                        Мониторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/computers/c80095/"> Компьютеры,
                                                        неттопы, моноблоки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/processors/c80083/">
                                                        Процессоры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/ssd/c80109/"> SSD </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/printers-mfu/c80007/">
                                                        МФУ/Принтеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/memory/c80081/"> Память </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/motherboards/c80082/">
                                                        Материнские платы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/mouses/c80172/"> Мыши </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/routers/c80193/">
                                                        Маршрутизаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/speakers/c80100/"> Акустические
                                                        системы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/keyboards/c80171/">
                                                        Клавиатуры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/psu/c80086/"> Блоки
                                                        питания </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/cases/c80090/"> Корпуса </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/projector/c80012/"> Проекторы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/usb-flash-memory/c80045/"> Флеш
                                                        память USB </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/ups/c80108/"> Источники
                                                        бесперебойного питания </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://hard.rozetka.com.ua/coolers/c80099/"> Системы
                                                        охлаждения </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/consoles/c80020/"> Игровые консоли и
                                                        детские приставки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/notebook-bags/c80036/"> Сумки,
                                                        рюкзаки и чехлы для ноутбуков </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/stabilizers/c144719/"> Стабилизаторы
                                                        напряжения </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/notebooks/c80004/">Ноутбуки</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=asus/">
                                                                        Asus </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=acer/">
                                                                        Acer </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=hp-hewlett-packard/">
                                                                        HP (Hewlett Packard) </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=lenovo/">
                                                                        Lenovo </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=dell/">
                                                                        Dell </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebooks/c80004/filter/producer=apple/">
                                                                        Apple </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/computers-notebooks-accessories/c80256/">Аксессуары
                                                                для ноутбуков и ПК</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/usb-flash-memory/c80045/">
                                                                        Флеш память USB </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebook-bags/c80036/">
                                                                        Сумки и рюкзаки для ноутбуков </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/notebook_stands/c183690/">
                                                                        Подставки и столики для ноутбуков </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/web_cameras/c180143/">
                                                                        Веб-камеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/universalnye-mobilnye-batarei/c387969/40239=72874/">
                                                                        Универсальные мобильные батареи для
                                                                        ноутбуков </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tv-cables/c80073/">
                                                                        Кабели и переходники </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tablets/c130309/">Планшеты</a>
                                                            <!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/aksessuary-dlya-planshetov/c108714/">Аксессуары
                                                                к планшетам</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tablet_covers/c305219/">
                                                                        Чехлы и клавиатуры для планшетов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/protect_skin/c146202/23448=72894/">
                                                                        Защитные пленки и стекла </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/grafic-tablets/c83199/">Графические
                                                                планшеты</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/e-books/c80023/">Электронные
                                                                книги</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ereader_accessories/c195851/">
                                                                        Аксессуары для электронных книг </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://hard.rozetka.com.ua/">Комплектующие</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/videocards/c80087/">
                                                                        Видеокарты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/hdd/c80084/">
                                                                        Жесткие диски и дисковые массивы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/processors/c80083/">
                                                                        Процессоры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/ssd/c80109/">
                                                                        SSD </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/memory/c80081/">
                                                                        Память </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/motherboards/c80082/">
                                                                        Материнские платы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/psu/c80086/">
                                                                        Блоки питания </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/cases/c80090/">
                                                                        Корпуса </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/ups/c80108/">
                                                                        Источники бесперебойного питания </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/coolers/c80099/">
                                                                        Системы охлаждения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stabilizers/c144719/">
                                                                        Стабилизаторы напряжения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/optical-drives/c80085/">
                                                                        Оптические приводы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/soundcards/c80088/">
                                                                        Звуковые карты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://hard.rozetka.com.ua/computers/c80095/">Компьютеры</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/monitors/c80089/">
                                                                        Мониторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/computers/c80095/">
                                                                        Компьютеры, неттопы, моноблоки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/mouses/c80172/">
                                                                        Мыши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/keyboards/c80171/">
                                                                        Клавиатуры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grafic-tablets/c83199/">
                                                                        Графические планшеты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/keybords-kit/c80174/">
                                                                        Комплект: клавиатура + мышь </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nas/c80199/">
                                                                        Сетевые хранилища (NAS) </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/servernoe-oborudovanie/c4630100/">Серверное
                                                                оборудование</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/office-equipment/c80254/">Оргтехника</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/printers-mfu/c80007/">
                                                                        МФУ/Принтеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector/c80012/">
                                                                        Проекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/original-cartridge/c80024/">
                                                                        Оригинальные расходные материалы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/SNPC/c81224/">
                                                                        Совместимые расходные материалы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/office-phones/c80029/">
                                                                        Телефонные аппараты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/interaktivnoe-oborudovanie/c4643064/">Интерактивное
                                                                оборудование</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://soft.rozetka.com.ua/">Программное
                                                                обеспечение</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/os/c80063/">
                                                                        Операционные системы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/ofisnye-prilojeniya/c80064/">
                                                                        Офисные приложения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/antivirus/c80062/">
                                                                        Антивирусы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/game-zone/c80261/">Товары
                                                                для геймеров</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/consoles/c80020/">
                                                                        Игровые консоли и приставки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/djoysticks/c80173/">
                                                                        Джойстики и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/games/c80066/">
                                                                        Игры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/gaming-surfaces/c80112/">
                                                                        Игровые поверхности </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/network-equipment/c80111/">Сетевое
                                                                оборудование</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/patch-kordi/c4631572/">
                                                                        Патч-корды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/routers/c80193/">
                                                                        Маршрутизаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ip_cam/c156790/">
                                                                        IP-камеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/switches/c80194/">
                                                                        Коммутаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/wireless-access-points/c80195/">
                                                                        Беспроводные точки доступа </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/161019_sp_intel.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/28/28568.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/tovary-samsung/c4629830/"
                                                                title="Samsung"><img
                                                                    src="https://i1.rozetka.ua/producers/8/8823.png"
                                                                    alt="Samsung"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/lenovo/?section_id=80253"
                                                                title="Lenovo"><img
                                                                    src="https://i2.rozetka.ua/producers/23/23951.png"
                                                                    alt="Lenovo"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/asus/?section_id=80253"
                                                                title="Asus"><img
                                                                    src="https://i2.rozetka.ua/producers/8/8893.png"
                                                                    alt="Asus"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/acer/"
                                                                title="Acer"><img
                                                                    src="https://i2.rozetka.ua/producers/21/21471.jpg"
                                                                    alt="Acer"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/telefony-tv-i-ehlektronika/c4627949/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-3361"></use></svg></span>Смартфоны, ТВ и
                                        электроника<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/mobile-phones/c80003/filter/">
                                                        Мобильные телефоны </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/all-tv/c80037/"> Телевизоры </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/photo/c80001/"> Фотоаппараты </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/headphones/c80027/"> Наушники </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/universalnye-mobilnye-batarei/c387969/40239=72869/">
                                                        Универсальные мобильные батареи </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/memory-cards/c80044/"> Карты
                                                        памяти </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/video/c80002/"> Видеокамеры </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/e-books/c80023/"> Электронные
                                                        книги </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/vdr/c153617/">
                                                        Видеорегистраторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tv-mounts-stands/c80071/">
                                                        Подставки, крепления для ТВ </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/muzykalnye-tsentry-i-magnitoly/c224329/">
                                                        Музыкальные центры и магнитолы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/home-theaters/c84535/"> Домашние
                                                        кинотеатры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/dvd-hd-players/c80011/">
                                                        Blu-ray/DVD/HD/-медиаплееры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/mp3-pmp/c80016/"> MP3-плееры </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tv-cables/c80073/"> Кабели и
                                                        переходники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lens/c80060/"> Объективы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/gps-navigators/c80047/"> GPS
                                                        навигаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/monopody-dlia-selfi-i-aksessuary/c4625067/">
                                                        Моноподы для селфи и аксессуары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/baterries/c654239/"> Аккумуляторы и
                                                        батарейки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/mobile-cases/c146229/"> Чехлы для
                                                        мобильных телефонов </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/av_receivers/c283322/">
                                                        AV-ресиверы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hi-fi_speakers/c451989/"> Акустика
                                                        Hi-Fi </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/protect_skin/c146202/23448=mobile/">
                                                        Защитные пленки и стекла </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tv_antennas/c165692/"> ТВ-антенны и
                                                        ресиверы </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/mobile-phones/c80003/">Телефоны</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mobile-phones/c80003/preset=smartfon/">
                                                                        Смартфоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mobile-phones/c80003/preset=mob-phones/">
                                                                        Кнопочные телефоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/office-phones/c80029/">
                                                                        Офисные телефоны </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/mobile-smart-accessories/c80263/">Аксессуары
                                                                для мобильных телефонов</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/universalnye-mobilnye-batarei/c387969/40239=72869/">
                                                                        Универсальные мобильные батареи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/memory-cards/c80044/">
                                                                        Карты памяти </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mobile-cases/c146229/">
                                                                        Чехлы для мобильных телефонов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/protect_skin/c146202/23448=mobile/">
                                                                        Защитные пленки и стекла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/monopody-dlia-selfi-i-aksessuary/c4625067/">
                                                                        Моноподы для селфи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/headphones/c80027/21078=2726;23143=yes/">
                                                                        Гарнитуры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/3d_glasses/c131143/">
                                                                        3D и VR очки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/autoholders/c147913/29385=33065/">
                                                                        Держатели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/data_cable/c146539/">
                                                                        Кабели синхронизации </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/headsets/c80032/">
                                                                        Гарнитуры Bluetooth </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mobilnaya-svyaz-i-internet/c4626529/">
                                                                        Мобильная связь и интернет </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tv/c80015/">Телевизоры и
                                                                аксессуары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/all-tv/c80037/">
                                                                        Телевизоры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tv-mounts-stands/c80071/">
                                                                        Подставки, крепления для ТВ </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tv-cables/c80073/">
                                                                        Кабели и переходники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tv_antennas/c165692/">
                                                                        ТВ-антенны и ресиверы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/universal-remote-control/c80070/">
                                                                        Универсальные пульты ДУ </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tv_webcam/c221177/">
                                                                        Аксессуары для ТВ </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/foto-i-video/c4628124/">Фото
                                                                и видео</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/photo/c80001/">
                                                                        Фотоаппараты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/video/c80002/">
                                                                        Видеокамеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lens/c80060/">
                                                                        Объективы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ekshn-kameri-i-aksessuari/c4630489/">
                                                                        Экшн-камеры и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/baterries/c654239/">
                                                                        Аккумуляторы и батарейки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tripods/c80075/">
                                                                        Штативы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/zaryadnye-ustroystva-dlya-foto-i-videokamer/c83878/">
                                                                        Зарядные устройства </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/flashes/c80061/">
                                                                        Вспышки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/akkumulyatory-dlya-foto-i-videokamer/c83868/">
                                                                        Аккумуляторы для фото- и видеокамер </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/studijnoe-oborudovanie/c4625234/">
                                                                        Студийное оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cases-photo/c80041/">
                                                                        Сумки и чехлы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/2628092/c2628092/">Аудио и
                                                                домашние кинотеатры</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector/c80012/">
                                                                        Проекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dvd-hd-players/c80011/">
                                                                        DVD/HD-медиаплееры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/muzykalnye-tsentry-i-magnitoly/c224329/">
                                                                        Музыкальные центры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/home-theaters/c84535/">
                                                                        Домашние кинотеатры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/loudspeakers/c297932/">
                                                                        Активные акустические системы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector-screens/c80021/">
                                                                        Экраны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hi-fi_speakers/c451989/">
                                                                        Акустика Hi-Fi </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/av_receivers/c283322/">
                                                                        AV-ресиверы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/uslugi/c153670/">Услуги</a>
                                                            <!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/portativnaya-ehlektronika/c4627865/">Портативная
                                                                электроника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tablets/c130309/">
                                                                        Планшеты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/headphones/c80027/">
                                                                        Наушники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/e-books/c80023/">
                                                                        Электронные книги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/smartwatch/c651392/">
                                                                        Смарт-часы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fitnes-trekery/c4627554/">
                                                                        Фитнес-браслеты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mp3-pmp/c80016/">
                                                                        MP3-плееры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dictophones/c80022/">
                                                                        Диктофоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sport_watch/c250809/">
                                                                        Спортивные часы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aksessuary-dlya-planshetov/c108714/">
                                                                        Аксессуары для планшетов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/velokompyutery/c268129/">
                                                                        Велокомпьютеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/speakers/c80100/35704=45344/">
                                                                        Портативная акустика </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://hard.rozetka.com.ua/hdd/c80084/22680=external/">
                                                                        Внешние жесткие диски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/gadzhety-i-podarki/c80017/">
                                                                        Гаджеты и подарки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/280596/c280596/">Автоэлектроника</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vdr/c153617/">
                                                                        Видеорегистраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/gps-navigators/c80047/">
                                                                        GPS навигаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/273291/c273291/">
                                                                        Автозвук </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/car_alarms/c278818/">
                                                                        Автосигнализации </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/galaxy_a51_100120_novinki.html"><img
                                                                alt="" src="https://i1.rozetka.ua/fatmenu/29/29072.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/tovary-samsung/c4629830/"
                                                                title="Samsung"><img
                                                                    src="https://i1.rozetka.ua/producers/8/8823.png"
                                                                    alt="Samsung"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/apple/c4627486/"
                                                                title="Apple"><img
                                                                    src="https://i2.rozetka.ua/producers/8/8935.png"
                                                                    alt="Apple"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/search/?text=huawei&amp;producer=511&amp;p=1"
                                                                title="Huawei"><img
                                                                    src="https://i1.rozetka.ua/producers/26/26054.png"
                                                                    alt="Huawei"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/lg/"
                                                                title="LG Electronics"><img
                                                                    src="https://i1.rozetka.ua/producers/8/8921.png"
                                                                    alt="LG Electronics"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://bt.rozetka.com.ua/" target=""><span
                                                class="menu-categories__icon"><svg height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-4306"></use></svg></span>Бытовая техника
                                        <!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/refrigerators/c80125/">
                                                        Холодильники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/washing_machines/c80124/">
                                                        Стиральные машины </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/air_conditioners/c80133/">
                                                        Кондиционеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/multivarki/c112986/">
                                                        Мультиварки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/vacuum_cleaners/c80158/">
                                                        Пылесосы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/boilers/c80131/"> Бойлеры </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/freezers/c80203/"> Морозильные
                                                        камеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/ovens/c80141/"> Встраиваемые
                                                        духовые шкафы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/news-articles-promotions/promotions/bundlebt.html">
                                                        Готовые комплекты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/heat_convectors/c80252/">
                                                        Конвекторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/extractor_fans/c80140/">
                                                        Вытяжки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/cookers/c80122/filter/">
                                                        Плиты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/dishwashers/c80123/">
                                                        Посудомоечные машины </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/microwaves/c80162/">
                                                        Микроволновые печи </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/blenders/c80155/"> Блендеры </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/irons/c80161/"> Утюги и
                                                        гладильные системы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/humidifiers/c80130/"> Увлажнители
                                                        воздуха </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/electric_hobs/c80225/"> Варочные
                                                        поверхности электрические </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/sewing_machines/c80159/"> Швейная
                                                        техника </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/meat_choppers/c80176/">
                                                        Мясорубки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/gas_hobs/c80224/"> Варочные
                                                        поверхности газовые </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/coffee_machines/c80164/">
                                                        Кофеварки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/kotly-gazovye/c117206/"> Котлы
                                                        газовые </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/hairclippers/c81229/"> Машинки
                                                        для стрижки и триммеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/electric_kettles/c80160/">
                                                        Электрочайники </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/bigbt/c80080/">Крупная
                                                                бытовая техника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/washing_machines/c80124/">
                                                                        Стиральные машины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/refrigerators/c80125/">
                                                                        Холодильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/freezers/c80203/">
                                                                        Морозильные камеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/cookers/c80122/">
                                                                        Плиты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/dishwashers/c80123/">
                                                                        Посудомоечные машины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/drying_machines/c80222/">
                                                                        Сушильные автоматы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/builtin/c80078/">Встраиваемая
                                                                техника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hobs/c80137/">
                                                                        Варочные поверхности </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/ovens/c80141/">
                                                                        Духовые шкафы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/extractor_fans/c80140/">
                                                                        Вытяжки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/news-articles-promotions/promotions/bundlebt.html#section=80141">
                                                                        Готовые комплекты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/climate/c80079/">Климатическая
                                                                техника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/heaters/c80192/">
                                                                        Обогреватели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/boilers/c80131/">
                                                                        Бойлеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/humidifiers/c80130/">
                                                                        Увлажнители воздуха </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kotly-gazovye/c117206/">
                                                                        Котлы газовые </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kotly-elektricheskie/c155960/">
                                                                        Котлы электрические </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kotly-tverdotoplivnye/c232175/">
                                                                        Котлы твердотопливные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/vodonagrevateli/c82795/">
                                                                        Водонагреватели (проточные) </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/air_cleaners/c80128/">
                                                                        Очистители воздуха </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/klimaticheskie-kompleksy/c238247/">
                                                                        Климатические комплексы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/osushiteli-vozduha/c388104/">
                                                                        Осушители воздуха </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/air_conditioners/c80133/">
                                                                        Кондиционеры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/tehnika-dlya-kuhni/c435974/">Кухня</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/multivarki/c112986/">
                                                                        Мультиварки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/microwaves/c80162/">
                                                                        Микроволновые печи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/coffee_machines/c80164/">
                                                                        Кофеварки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/blenders/c80155/">
                                                                        Блендеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/electric_kettles/c80160/">
                                                                        Электрочайники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/meat_choppers/c80176/">
                                                                        Мясорубки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/squeezers/c80153/">
                                                                        Соковыжималки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/grills/c81235/">
                                                                        Грили и электрошашлычницы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kitchen_machines/c80163/">
                                                                        Кухонные комбайны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/sandwich_makers/c80180/">
                                                                        Бутербродницы и вафельницы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/breadmakers/c80154/">
                                                                        Хлебопечки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/mixers/c80156/">
                                                                        Миксеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/toasters/c80145/">
                                                                        Тостеры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/bathroom/c80106/">Сантехника
                                                                и ванная комната</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/boilers/c80131/">
                                                                        Бойлеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/mixer_taps/c80706/">
                                                                        Смесители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/vanny/c116902/">
                                                                        Ванны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/">
                                                                        Кухонные мойки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/gidromassajnye-vanny/c110262/">
                                                                        Гидромассажные боксы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/unitazy/c126964/">
                                                                        Унитазы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/dushevye-garnitury/c116943/">
                                                                        Душевые гарнитуры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/435964/c435964/">Уход и
                                                                уборка</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/vacuum_cleaners/c80158/">
                                                                        Пылесосы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shveynaya-teznika-i-aksessuari/c4629564/">
                                                                        Швейная техника и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/irons/c80161/">
                                                                        Утюги и гладильные системы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/steam_cleaners/c80151/">
                                                                        Пароочистители </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/bytovaya-himiya/c4429255/">Бытовая
                                                                химия</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-stirki/c4625084/">
                                                                        Средства для стирки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-posudy/c4625091/">
                                                                        Средства для мытья посуды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-uborki/c4625077/">
                                                                        Средства для уборки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-tehniki/c4625098/">
                                                                        Средства по уходу за техникой </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/435969/c435969/">Для
                                                                красоты и здоровья</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairclippers/c81229/">
                                                                        Машинки для стрижки и триммеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairdressing/c81231/">
                                                                        Приборы для укладки волос </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/epilators_female_shavers/c81225/">
                                                                        Эпиляторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/252133/c252133/">
                                                                        Фотоэпиляторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/men_electric_shavers/c81226/">
                                                                        Электробритвы для мужчин </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairdryers/c81227/">
                                                                        Фены </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/tonometry/c2635172/">
                                                                        Тонометры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/zubnye-schetki-i-irrigatory/c437994/">
                                                                        Зубные щетки и ирригаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/floor_scales/c81232/">
                                                                        Весы напольные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/ingalyatory/c2776042/">
                                                                        Ингаляторы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/filtry-dlya-vody/c149287/">Фильтры
                                                                для воды</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/130119_sp_candy.html"><img
                                                                alt="" src="https://i1.rozetka.ua/fatmenu/28/28939.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li><!---->
                                                    <li class="menu__main-brand"><a href="https://rozetka.com.ua/bosch/"
                                                                                    title="Bosch"><img
                                                                    src="https://i1.rozetka.ua/producers/8/8879.png"
                                                                    alt="Bosch"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/siemens/"
                                                                title="Siemens"><img
                                                                    src="https://i2.rozetka.ua/producers/27/27386.png"
                                                                    alt="Siemens"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/philips/?section_id=80025"
                                                                title="Philips"><img
                                                                    src="https://i2.rozetka.ua/producers/8/8837.png"
                                                                    alt="Philips"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/tovary-samsung/c4629830/"
                                                                title="Samsung"><img
                                                                    src="https://i1.rozetka.ua/producers/8/8823.png"
                                                                    alt="Samsung"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/tovary-dlya-doma/c2394287/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-5300"></use></svg></span>Товары для дома
                                        <!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ofisnye-kresla-i-stulya/c154072/">
                                                        Офисные кресла и стулья </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/mattress/c177055/"> Матрасы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/bed_linen/c169827/"> Постельное
                                                        белье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lamps/c230135/"> Лампы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sredstva-dlya-stirki/c4625084/">
                                                        Средства для стирки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/videonablyudenie/c237067/">
                                                        Комплекты видеонаблюдения </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lestnitsy-stremyanki-podmosti/c157092/">
                                                        Лестницы, стремянки, подмости </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/skovorody/c4626754/"> Сковороды </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/blankets/c169825/"> Одеяла </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pillows/c169826/"> Подушки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/alarm/c235355/"> Комплекты
                                                        сигнализаций </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/e_fireplaces/c157120/">
                                                        Электрокамины </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cloth_drying/c185696/"> Сушки для
                                                        одежды </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pressboards/c185692/"> Гладильные
                                                        доски </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kompyuternye-stoly/c155285/">
                                                        Компьютерные столы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/nabory-posudy/c4626766/"> Наборы
                                                        посуды для приготовления пищи </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/warm_floor/c200643/"> Тёплый
                                                        пол </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/bra-i-nastennye-svetilniki/c105282/">
                                                        Умные светильники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sredstva-dlya-posudy/c4625091/">
                                                        Средства для мытья посуды </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/food_for_dogs/c1461202/"> Корма для
                                                        собак </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/matress_pad/c177612/"> Наматрасники
                                                        и подматрасники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/stolovie-servizy/c4626933/">
                                                        Столовые сервизы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/video_intercoms/c259633/">
                                                        Видеодомофоны </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hoziaistvenniy-inventar/c3547641/">
                                                        Хозяйственный инвентарь </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/decoration_for_home/c375695/">Декор
                                                                для дома</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/mebel/c152458/">Мебель</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kresla/c4657815/">
                                                                        Кресла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kompyuternye-stoly/c155285/">
                                                                        Компьютерные столы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ergonomika-rabochego-mesta/c4630662/">
                                                                        Эргономика рабочего места </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stulya/c4658857/">
                                                                        Стулья и табуреты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/beskarkasnaya-mebel/c154006/">
                                                                        Бескаркасная мебель </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadovaya-mebelj/c3130405/">
                                                                        Садовая мебель </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/home_textile/c169823/">Домашний
                                                                текстиль</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bed_linen/c169827/">
                                                                        Постельное белье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mattress/c177055/">
                                                                        Матрасы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/blankets/c169825/">
                                                                        Одеяла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pillows/c169826/">
                                                                        Подушки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/matress_pad/c177612/">
                                                                        Наматрасники и подматрасники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/plaids/c173644/">
                                                                        Пледы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/towels/c169829/">
                                                                        Полотенца </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/covers/c173873/">
                                                                        Покрывала </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sistemy-okhrany-i-bezopasnosti/c4628117/">Системы
                                                                охраны и безопасности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/videonablyudenie/c237067/">
                                                                        Комплекты видеонаблюдения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/alarm/c235355/">
                                                                        Комплекты сигнализаций </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/video_intercoms/c259633/">
                                                                        Видеодомофоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stabilizers/c144719/">
                                                                        Стабилизаторы напряжения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/invertory/c4625577/">
                                                                        Инверторы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/posuda-dlia-kuhni/c4626594/">Посуда</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/prigotovlenie-pishi/c4626599/">
                                                                        Для приготовления пищи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/servirovka-stola/c4626609/">
                                                                        Посуда для сервировки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kuhonnye-prinadlejnosti/c4626604/">
                                                                        Кухонные аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nozhi-nozhici-toporiki/c4626619/">
                                                                        Кухонные ножи и принадлежности </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hranenie-produktov/c4626614/">
                                                                        Хранение и упаковка </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hoziaistvenniy-inventar/c3547641/">Инвентарь
                                                                для дома и офиса</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/inventar-dlia-doma-i-ofisa/c3647328/">
                                                                        Стирка и глажка </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/instrymenty-dlia-uborki/c4629256/">
                                                                        Инструменты для уборки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/yhod-i-hranenie-odejdy-i-obyvi/c4629263/">
                                                                        Хранение и организация пространства </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vedra-i-korzini/c4653402/">
                                                                        Ведра и корзины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hoziaystvennie-tovary/c4394353/">
                                                                        Хозяйственные товары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lestnitsy-stremyanki-podmosti/c157092/">
                                                                        Лестницы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hoziaystvennie-tovary/c4394353/">Хозяйственные
                                                                товары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pakety-dlia-musora/c4581462/">
                                                                        Пакеты для мусора </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/perchatki/c4581483/">
                                                                        Перчатки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/bytovaya-himiya/c4429255/">Бытовая
                                                                химия</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-stirki/c4625084/">
                                                                        Средства для стирки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-posudy/c4625091/">
                                                                        Средства для мытья посуды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-uborki/c4625077/">
                                                                        Средства для уборки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kaminy-pechi-sauny/c152463/">Камины,
                                                                печи, сауны</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/osveshchenie-dlia-doma/c230134/">Освещение</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lamps/c230135/">
                                                                        Лампочки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/nastolnye-lampy/c105280/">
                                                                        Настольные лампы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/lyustry/c105278/">
                                                                        Люстры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ulichnoe-osveschenie/c241315/">
                                                                        Уличное освещение </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bra-i-nastennye-svetilniki/c105282/">
                                                                        Настенные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/potolochnye-svetilniki/c105279/">
                                                                        Потолочные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/tochechnye-svetilniki/c105283/">
                                                                        Точечные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/led_decoration/c1767552/">
                                                                        Светодиодные гирлянды </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/kontrolno-izmeritelnye-pribory/c3487833/">Счетчики</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/avtomaty-zaschity-ot-perepadov-napryajeniya/c3502659/">
                                                                        Защита от перепадов напряжения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-vody/c3488218/">
                                                                        Счётчики воды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-gaza/c3846575/">
                                                                        Счётчики газа </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-elektroenergii/c3846596/">
                                                                        Счётчики электроэнергии </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/chasy/c91450/">Часы</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/91456/c91456/">
                                                                        Настенные часы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/nastolnye-chasy/c91458/">
                                                                        Настольные часы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/napolnye-chasy/c96814/">
                                                                        Напольные часы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/kovrovye-izdeliya/c142254/">Ковры</a>
                                                            <!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/zootovary/c3520929/">Товары
                                                                для животных</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/korma-dlya-zhivotnykh/c4627872/">
                                                                        Корма </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fillers_for_toilets/c2336637/">
                                                                        Наполнители для туалетов </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/vanish_sale_30120.html"><img
                                                                alt="" src="https://i1.rozetka.ua/fatmenu/29/29030.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/instrumenty-i-avtotovary/c4627858/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-6700"></use></svg></span>Инструменты и
                                        автотовары<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/avtoshiny/c4330821/"> Автошины </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/generators/c152564/">
                                                        Генераторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/svarochnoe-oborudovanie/c152563/">
                                                        Сварочное оборудование </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/vdr/c153617/">
                                                        Видеорегистраторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tool_kits/c298224/"> Наборы
                                                        инструментов </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/motor_oil/c1527297/"> Автомасла </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/shurupoverty-i-elektrootvertki/c152499/">
                                                        Шуруповерты и электроотвертки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sanders/c152503/"> Болгарки </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rock_drills/c153621/">
                                                        Перфораторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cleaners/c155534/"> Универсальные
                                                        мойки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/gps-navigators/c80047/"> GPS
                                                        навигаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/drills/c152496/"> Дрели и
                                                        миксеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/betonomeshalki/c165907/">
                                                        Бетономешалки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/jigsaws/c152505/">
                                                        Электролобзики </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/car_compressors/c278510/">
                                                        Автокомпрессоры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pily-i-plitkorezy/c152560/"> Пилы и
                                                        плиткорезы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/shtatnye-golovnye-ustroystva/c166828/">
                                                        Головные устройства </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/compressors/c162118/">
                                                        Компрессоры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/izmeritelnaya-tehnika/c162285/">
                                                        Измерительная техника </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kraskopulty/c154981/">
                                                        Краскопульты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/dremels/c174726/">
                                                        Многофункциональные инструменты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/avtoprinadlejnosti/c2769487/">
                                                        Автопринадлежности </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/klyuchi-semniki/c2798782/"> Ключи,
                                                        съемники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/frezery/c154195/"> Фрезеры </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tools/c152460/">Инструменты</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shurupoverty-i-elektrootvertki/c152499/">
                                                                        Шуруповерты и электроотвертки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sanders/c152503/">
                                                                        Болгарки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rock_drills/c153621/">
                                                                        Перфораторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/drills/c152496/">
                                                                        Дрели и миксеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pily-i-plitkorezy/c152560/">
                                                                        Пилы и плиткорезы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kraskopulty/c154981/">
                                                                        Краскопульты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/jigsaws/c152505/">
                                                                        Электролобзики </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/izmeritelnaya-tehnika/c162285/">
                                                                        Измерительная техника </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/frezery/c154195/">
                                                                        Фрезеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dremels/c174726/">
                                                                        Многофункциональные инструменты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/gluegun/c200468/">
                                                                        Клеевые пистолеты и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/elektrorubanki/c152562/">
                                                                        Электрорубанки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stroitelnye-feny/c153965/">
                                                                        Строительные фены </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/3510436/c3510436/">Расходные
                                                                материалы и принадлежности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sverla/c3510506/">
                                                                        Сверла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/diski/c3510548/">
                                                                        Диски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bity/c3510520/">
                                                                        Биты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bury/c3510534/">
                                                                        Буры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pilnye-polotna/c3510562/">
                                                                        Пильные полотна </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/frezy/c3510569/">
                                                                        Фрезы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/equipment/c161187/">Оборудование</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/svarochnoe-oborudovanie/c152563/">
                                                                        Сварочное оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/generators/c152564/">
                                                                        Генераторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stabilizatori-napryageniya/c4649424/">
                                                                        Стабилизаторы напряжения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cleaners/c155534/">
                                                                        Универсальные мойки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/betonomeshalki/c165907/">
                                                                        Бетономешалки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/compressors/c162118/">
                                                                        Компрессоры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/teplovie-pushki/c4656228/">
                                                                        Тепловые пушки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grinders/c154219/">
                                                                        Точильные станки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lifting_equipment/c1742727/">
                                                                        Грузоподъемное оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/invertory/c4625577/">
                                                                        Инверторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/promyshlennie-pylesosy/c155307/">
                                                                        Промышленные пылесосы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hand_tools/c3423154/">Ручной
                                                                инструмент</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tool_kits/c298224/">
                                                                        Наборы инструментов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tool_storage/c187716/">
                                                                        Ящики и сумки для инструментов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/klyuchi-semniki/c2798782/">
                                                                        Ключи, съемники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/otvertki/c2798762/">
                                                                        Отвертки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/izmeritelno-razmetochnyy-instrument/c2798747/">
                                                                        Измерительно-разметочный инструмент </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sharnirno-gubtsevyy-instrument/c2798772/">
                                                                        Шарнирно-губцевый инструмент </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/elektro-montazhnoe-oborudovanie/c3803561/">Электромонтажное
                                                                оборудование</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rozetki-i-vykluchateli/c3803575/">
                                                                        Розетки и выключатели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kabelno-provodnikovaya-produkciya/c3803617/">
                                                                        Кабельно-проводниковая продукция </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/273290/c273290/">Автотовары</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://auto.rozetka.com.ua/shiny/">
                                                                        Шины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vdr/c153617/">
                                                                        Видеорегистраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/motor_oil/c1527297/">
                                                                        Масла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/gps-navigators/c80047/">
                                                                        GPS навигаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/car_compressors/c278510/">
                                                                        Автокомпрессоры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mediareceivers/c275389/">
                                                                        Головные устройства </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/chargers/c155293/">
                                                                        Пускозарядные устройства </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/avtomobilnye-diski/c4624949/">
                                                                        Автомобильные диски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/avtoprinadlejnosti/c2769487/">
                                                                        Автопринадлежности </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/car_alarms/c278818/">
                                                                        Автосигнализации </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tehpomosch/c1735862/">
                                                                        Техпомощь </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/jacks/c329355/">
                                                                        Домкраты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/273291/c273291/">
                                                                        Автоакустика </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/parktronic/c278669/">
                                                                        Парковочные системы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/automotive_chemical/c2659527/">
                                                                        Автохимия </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/transmitters/c130186/">
                                                                        FM-трансмиттеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/care_lamps/c278086/">
                                                                        Автолампы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/car_cosmetics/c279061/">
                                                                        Автокосметика </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/radar_detectors/c153563/">
                                                                        Радар-детекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shtatnye-golovnye-ustroystva/c166828/">
                                                                        Штатные головные устройства </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/deflektory/c4628306/">
                                                                        Дефлекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/avtokrski/c4624962/">
                                                                        Автокраски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/elektrika-i-osveshchenie/c4642680/">
                                                                        Электрооборудование автомобилей </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://cg.rozetka.com.ua/insurance/osago/">Оформить
                                                                ОСАГО</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/sale_160120_aspirig.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/29/29114.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/santekhnika-i-remont/c4628418/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-7806"></use></svg></span>Сантехника и
                                        ремонт<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/vanny/c116902/"> Ванны </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/mixer_taps/c80706/">
                                                        Смесители </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/">
                                                        Кухонные мойки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lamps/c230135/"> Лампы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/87382/c87382/"> Гидромассажные
                                                        боксы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/unitazy/c126964/"> Унитазы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/dushevye-garnitury/c116943/">
                                                        Душевые гарнитуры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/kuhonnye-smesiteli/c2225047/">
                                                        Кухонные смесители </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/installyatsii/c209002/107185-naznachenie=dlya-unitaza/">
                                                        Инсталляции для унитаза </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/showers/c80190/"> Душевые кабины
                                                        и стенки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/163904/c163904/">
                                                        Полотенцесушители </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/radiatory/c228148/">
                                                        Радиаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/rakoviny/c108979/"> Раковины </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/gidromassajnye-vanny/c110262/">
                                                        Гидромассажные ванны </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/paneli-dlya-vann/c117785/">
                                                        Панели для ванн </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/shower_doors/c80191/"> Душевые
                                                        двери и перегородки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/shower_pallets/c80188/"> Душевые
                                                        поддоны </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sanders/c152503/"> Болгарки </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rock_drills/c153621/">
                                                        Перфораторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/generators/c152564/">
                                                        Генераторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/illuminators/c1396567/"> Умные
                                                        светильники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/svetodiodnye-svetilniki/c231000/">
                                                        Светодиодные светильники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/155549/c155549/"> Тумбы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/zerkala/c155550/"> Зеркала </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/vanny-boksy-dushevye/c4628404/">Ванны,
                                                                боксы, душевые</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/vanny/c116902/">
                                                                        Ванны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/87382/c87382/">
                                                                        Гидромассажные боксы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/dushevye-garnitury/c116943/">
                                                                        Душевые гарнитуры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/showers/c80190/">
                                                                        Душевые кабины и стенки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/boilers/c80131/">
                                                                        Бойлеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/paneli-dlya-vann/c117785/">
                                                                        Панели для ванн </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/shower_doors/c80191/">
                                                                        Душевые двери и перегородки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/mojki-smesiteli-sifony/c4628383/">Мойки,
                                                                смесители, сифоны</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/mixer_taps/c80706/">
                                                                        Смесители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kuhonnye-moyki/c113805/">
                                                                        Кухонные мойки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/kuhonnye-smesiteli/c2225047/">
                                                                        Кухонные смесители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/sifony/c124819/">
                                                                        Сифоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/sistemy-obratnogo-osmosa/c196458/">
                                                                        Системы обратного осмоса </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/keramika/c117101/">Керамика</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/unitazy/c126964/">
                                                                        Унитазы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/rakoviny/c108979/">
                                                                        Раковины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/sushilki-dlya-ruk/c238747/">
                                                                        Сушилки для рук </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bide/c126965/">
                                                                        Биде </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bachki-dlya-unitaza/c126963/">
                                                                        Бачки для унитаза </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bumagoderjateli-i-polochki/c238751/">
                                                                        Бумагодержатели и полочки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/ingenernaya-santehnika/c4629728/">Инженерная
                                                                сантехника</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/installyatsionnye-sistemy/c208242/">Инсталляции
                                                                и комплектующие</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/installyatsii/c209002/107185-naznachenie=dlya-unitaza/">
                                                                        Инсталляции для унитаза </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/installyatsii/c209002/107185-naznachenie=dlya-bide/">
                                                                        Инсталляции для биде </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/knopki-dlya-smyva/c209003/">
                                                                        Кнопки для смыва </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/polotencesushiteli-i-radiatory/c4628411/">Полотенцесушители
                                                                и радиаторы</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/163904/c163904/">
                                                                        Полотенцесушители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/radiatory/c228148/">
                                                                        Радиаторы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tools/c152460/">Инструменты</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sanders/c152503/">
                                                                        Болгарки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rock_drills/c153621/">
                                                                        Перфораторы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/3510436/c3510436/">Расходные
                                                                материалы и принадлежности</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/equipment/c161187/">Оборудование</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/generators/c152564/">
                                                                        Генераторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/svarochnoe-oborudovanie/c152563/">
                                                                        Сварочное оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/promyshlennie-pylesosy/c155307/">
                                                                        Промышленные пылесосы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hand_tools/c3423154/">Ручной
                                                                инструмент</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tool_kits/c298224/">
                                                                        Наборы инструментов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/klyuchi-semniki/c2798782/">
                                                                        Ключи, съемники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tool_storage/c187716/">
                                                                        Ящики и сумки для инструментов </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/elektro-montazhnoe-oborudovanie/c3803561/">Электромонтажное
                                                                оборудование</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/osveschenie-interera/c105277/">Освещение</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/lyustry/c105278/">
                                                                        Люстры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/potolochnye-svetilniki/c105279/">
                                                                        Настенно-потолочные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/tochechnye-svetilniki/c105283/">
                                                                        Точечные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bra-i-nastennye-svetilniki/c105282/">
                                                                        Бра и настенные светильники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/nastolnye-lampy/c105280/">
                                                                        Настольные лампы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/torshery/c105281/">
                                                                        Торшеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/bra-i-nastennye-svetilniki/c105282/51030=111730/">
                                                                        Светильники для ванной </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/nastolnye-lampy/c105280/filter/106954=detskie/">
                                                                        Детские настольные лампы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ulichnoe-osveschenie/c241315/">
                                                                        Уличное освещение </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lamps/c230135/">
                                                                        Лампочки и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/173974/c173974/">
                                                                        Офисно -промышленное освещение </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/kontrolno-izmeritelnye-pribory/c3487833/">Счетчики</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/avtomaty-zaschity-ot-perepadov-napryajeniya/c3502659/">
                                                                        Защита от перепадов напряжения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-vody/c3488218/">
                                                                        Счётчики воды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-gaza/c3846575/">
                                                                        Счётчики газа </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/schetchiki-elektroenergii/c3846596/">
                                                                        Счётчики электроэнергии </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/mebel-dlya-vannoy-komnaty/c155548/">Мебель
                                                                для ванной комнаты</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/155549/c155549/">
                                                                        Тумбы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/zerkala/c155550/">
                                                                        Зеркала </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/penaly/c155551/">
                                                                        Пеналы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/warm_floor/c200643/">Теплый
                                                                пол</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/stroitelnie-materiali/c4639424/">Строительные
                                                                материалы</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/krovlya/c4625614/">
                                                                        Кровля и водосток </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/santekhnika_161219_op_ch.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/29/29009.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/dacha-sad-ogorod/c2394297/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-8261"></use></svg></span>Дача, сад и
                                        огород<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/trimmers/c155089/"> Триммеры и
                                                        мотокосы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/chainsaws/c155515/"> Цепные
                                                        пилы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pumps/c155952/"> Насосы и помпы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/grass_cutters/c155072/">
                                                        Газонокосилки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sprayers/c156378/">
                                                        Опрыскиватели </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/snegouborochnaya-tehnika-i-inventar/c4634049/">
                                                        Снегоуборочная техника и инвентарь </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kulivatory-i-motobloki/c155824/">
                                                        Культиваторы и мотоблоки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hoses/c153657/"> Шланги </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ruchnoy-sadovyy-instrument/c155018/">
                                                        Ручной садовый инструмент </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sadoviy-inventar/c4625304/"> Садовый
                                                        инвентарь </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/food_for_dogs/c1461202/"> Корма для
                                                        собак </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/food_for_cats/c1461212/"> Корма для
                                                        кошек </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tachki/c157096/"> Тачки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/semena-gazonnyh-trav/c2117557/">
                                                        Семена газонных трав </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/garden_accessories/c202284/">
                                                        Аксессуары для садовой техники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ulichnoe-osveschenie/c241315/">
                                                        Уличное освещение </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sadovye-izmelchiteli/c155489/">
                                                        Садовые измельчители </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/blowers/c156363/"> Воздуходувы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kustorezy/c155467/"> Кусторезы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/emkosti/c3584027/"> Емкости </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/teplitsy/c2121177/"> Теплицы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/udobreniya/c2117562/">
                                                        Удобрения </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sprinklers/c153660/"> Оросители </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/filtry/c3441389/"> Фильтры </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/garden_tech/c152459/">Садовая
                                                                техника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/trimmers/c155089/">
                                                                        Триммеры и мотокосы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/chainsaws/c155515/">
                                                                        Цепные пилы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grass_cutters/c155072/">
                                                                        Газонокосилки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kulivatory-i-motobloki/c155824/">
                                                                        Культиваторы и мотоблоки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/blowers/c156363/">
                                                                        Воздуходувы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/garden_accessories/c202284/">
                                                                        Аксессуары для садовой техники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadovye-izmelchiteli/c155489/">
                                                                        Садовые измельчители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dvigateli-/c4627045/">
                                                                        Двигатели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/snegouborochnaya-tehnika-i-inventar/c4634049/">
                                                                        Снегоуборочная техника и инвентарь </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sistemy-poliva/c152462/">Системы
                                                                полива</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pumps/c155952/">
                                                                        Насосы и помпы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hoses/c153657/">
                                                                        Шланги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konnektory/c153658/">
                                                                        Коннекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sprinklers/c153660/">
                                                                        Оросители </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nasadki/c153659/">
                                                                        Насадки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kaminy-pechi-sauny/c152463/">Камины,
                                                                печи, сауны</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sadoviy-inventar/c4625304/">Садовый
                                                                инвентарь</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sprayers/c156378/">
                                                                        Опрыскиватели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/garden_implements/c2110432/">
                                                                        Садовые принадлежности </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ruchnoy-sadovyy-instrument/c155018/">
                                                                        Ручной садовый инструмент </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tachki/c157096/">
                                                                        Тачки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kustorezy/c155467/">
                                                                        Кусторезы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/teplitsy/c2121177/">
                                                                        Теплицы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/covering_materials/c2121182/">
                                                                        Сетки и укрывные материалы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aeratory/c155480/">
                                                                        Аэраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konnektory/c153658/">
                                                                        Коннекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadovye-ograjdeniya/c2551592/">
                                                                        Садовые ограждения </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/semena/c4639192/">Семена и
                                                                удобрения</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/semena-ovoschey/c2117537/">
                                                                        Семена овощей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/semena-gazonnyh-trav/c2117557/">
                                                                        Семена газонных трав </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/semena-tsvetov/c2117592/">
                                                                        Семена цветов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/semena-pryanyh-i-zelenyh-kultur/c2121127/">
                                                                        Семена пряных и зеленых культур </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/substrati-i-grunti-dlia-rastenij/c4634409/">
                                                                        Субстраты и грунты для растений </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/udobreniya/c2117562/">
                                                                        Удобрения </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sagentsi/c4638559/">Саженцы</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sagentsi-roz/c4638567/">
                                                                        Саженцы роз </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sagentsi-derevev/c4638879/">
                                                                        Саженцы деревьев </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/ulichnoe-osveschenie/c241315/">Уличное
                                                                освещение</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sadovaya-mebelj-i-dekor/c4627879/">Садовая
                                                                мебель и декор</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadovye-kacheli/c91291/">
                                                                        Качели </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadovye-pavilony/c91290/">
                                                                        Садовые павильоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sadoviy-decor/c4625415/">
                                                                        Садовый декор </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shezlongi/c4625403/">
                                                                        Шезлонги </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/korma-dlya-zhivotnykh/c4627872/">Корма
                                                                для животных</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/food_for_dogs/c1461202/">
                                                                        Корма для собак </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/food_for_cats/c1461212/">
                                                                        Корма для кошек </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/food_for_birds/c3246797/">
                                                                        Корма для птиц </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/korma-dlya-gryzunov/c3501231/">
                                                                        Корма для грызунов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/korma-dlia-ryb/c3429664/">
                                                                        Корма для рыб </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/uhod-i-gigiena/c3504864/">Уход
                                                                за питомцем</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/posuda-dlya-jivotnyh/c2183122/">
                                                                        Посуда для животных </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/toys_for_pets/c3439219/">
                                                                        Игрушки для животных </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fillers_for_toilets/c2336637/">
                                                                        Наполнители туалетов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/povodki-dlia-sobak/c3985679/">
                                                                        Поводки для животных </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/inventar-dlia-doma-i-ofisa/c3647328/">Инвентарь
                                                                для дома</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/flowerpots/c245547/">
                                                                        Вазоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lestnitsy-stremyanki-podmosti/c157092/">
                                                                        Лестницы, стремянки, подмости </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pressboards/c185692/">
                                                                        Гладильные доски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hoziaistvenniy-inventar/c3547641/">
                                                                        Для уборки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konteyneri-dlya-hraneniya/c4652702/">
                                                                        Контейнеры для хранения </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/sale_240919_kentavr.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/28/28680.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/sport-i-uvlecheniya/c4627893/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-9017"></use></svg></span>Спорт и увлечения
                                        <!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/bicycles/c83884/"> Велосипеды </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/palatki-i-aksessuary/c82412/">
                                                        Палатки и аксессуары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tourizm-freezers/c82682/">
                                                        Термопродукция </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/knives/c87073/"> Ножи </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/protein/c273294/"> Протеин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/boats_and_stuff/c86167/"> Лодки </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/fonari-i-aksessuary/c85432/"> Фонари
                                                        и аксессуары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rucksacks/c82445/"> Рюкзаки и
                                                        гермомешки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/furniture/c82672/"> Складная
                                                        мебель </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/naduvnaya-mebel-i-aksessuary/c83646/">
                                                        Надувная мебель и аксессуары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/misc-detectors/c100957/">
                                                        Металлоискатели </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/thermal_wear/c100209/">
                                                        Термобелье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/treadmills/c132896/"> Беговые
                                                        дорожки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/walkie-talkie/c84018/"> Рации </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/synthesizers/c286764/">
                                                        Синтезаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/dorojnye-sumki-i-chemodany/c90423/">
                                                        Дорожные сумки и чемоданы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/orbitrecks/c135306/"> Орбитреки </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/telescopes/c89847/"> Телескопы </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/digital_pianos/c284868/">
                                                        Сценические и цифровые пианино </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/klassicheskie-i-akusticheskie-gitary/c267256/">
                                                        Классические и акустические гитары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kids-microscopes/c196825/">
                                                        Микроскопы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rods/c85169/"> Удилища </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/multitools/c85359/">
                                                        Мультиинструменты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/binoculars/c83917/"> Бинокли </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/trenazhery-i-fitnes/c4627886/">Тренажеры
                                                                и фитнес</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/treadmills/c132896/">
                                                                        Беговые дорожки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/orbitrecks/c135306/">
                                                                        Орбитреки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fitness_accessories/c219275/">
                                                                        Аксессуары для фитнеса </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/exrecise_bikes/c133215/">
                                                                        Велотренажеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ganteli-diski-grify-zamki/c146633/">
                                                                        Гантели, диски, грифы, замки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shvedskie-stenki-i-turniki/c4627977/">
                                                                        Шведские стенки и турники </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sportivnoe-pitanie/c273292/">Спортивное
                                                                питание</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/protein/c273294/">
                                                                        Протеин </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vitamins/c274789/">
                                                                        Витамины </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aminoacid/c273295/">
                                                                        Аминокислоты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/velosipedy-i-aksessuary/c83882/">Велосипеды
                                                                и аксессуары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bicycles/c83884/">
                                                                        Велосипеды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aksessuary-dlya-velosipedov/c269513/">
                                                                        Аксессуары для велосипедов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/zapchasti-dlia-velosipedov/c4625505/">
                                                                        Комплектующие для велосипедов </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/box/c4625433/">Бокс и
                                                                единоборства</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/diving/c83033/">Товары для
                                                                дайвинга</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/4624907/c4624907/">Спортивные
                                                                аксессуары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/nastoljnye-igry-i-golovolomki/c98280/">Настольные
                                                                игры</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/zhivopis-i-grafika/c4034476/">Живопись
                                                                и графика</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/fishing/c84703/">Рыбалка</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/boats_and_stuff/c86167/">
                                                                        Лодки и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rods/c85169/">
                                                                        Удилища </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/reels/c84712/">
                                                                        Катушки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tourizm/c82411/">Туризм и
                                                                кемпинг</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/palatki-i-aksessuary/c82412/">
                                                                        Палатки и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rucksacks/c82445/">
                                                                        Рюкзаки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/furniture/c82672/">
                                                                        Складная мебель </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/naduvnaya-mebel-i-aksessuary/c83646/">
                                                                        Надувная мебель и аксессуары </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/aksessuary-dlia-otdiha-i-turizma/c83916/">Аксессуары
                                                                для активного отдыха</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tourizm-freezers/c82682/">
                                                                        Термопродукция </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/walkie-talkie/c84018/">
                                                                        Рации </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/knives/c87073/">
                                                                        Ножи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/multitools/c85359/">
                                                                        Мультиинструменты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://hunter.rozetka.com.ua/">Спортивная
                                                                стрельба</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pnevmaticheskoe-orugie/c4658132/">
                                                                        Пневматика </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/takticheskoe-snaryagenie/c4658540/">
                                                                        Снаряжение </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/takticheskaya-odezhda-i-obmundirovanie/c4628145/">
                                                                        Тактическая одежда </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/fitness_clothing/c1285358/">Одежда
                                                                для активного отдыха</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/thermal_wear/c100209/">
                                                                        Термобелье </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/igrovye-vidy-sporta/c4624893/">Игровые
                                                                виды спорта</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/balls/c82790/"> Мячи
                                                                        для командных игр </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bats/c81496/">
                                                                        Ракетки для настольного тенниса </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/badminton-i-spidminton/c234047/">
                                                                        Бадминтон и спидминтон </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/swimming_goods/c330635/">Бассейн
                                                                и аквафитнес</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lasty-dlya-basseyna/c330660/">
                                                                        Ласты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aksessuary-dlya-plavaniya/c357735/">
                                                                        Аксессуары для бассейна и аквафитнеса </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/radiomodels/c81499/">Радиоуправляемые
                                                                модели</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/quadrocopters/c1124685/">
                                                                        Квадрокоптеры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/musical_instruments/c267255/">Музыкальные
                                                                инструменты</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/297207/c297207/">
                                                                        Гитары и оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/udarnye-instrumenty/c295852/">
                                                                        Ударные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/duhovye-instrumenty/c296831/">
                                                                        Духовые </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/optics/c203883/">Оптика</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/telescopes/c89847/">
                                                                        Телескопы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids-microscopes/c196825/">
                                                                        Микроскопы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/elektrotransport/c4625901/">Электротранспорт</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/giroskuteri/c4657346/">
                                                                        Гироскутеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/girobordi/c4657340/">
                                                                        Гироборды </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/zimnie-vidy-sporta/c116671/">Зимние
                                                                виды спорта</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/fitlogic_deliv_150120.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/29/29023.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/shoes_clothes/c1162030/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-10515"></use></svg></span>Одежда, обувь и
                                        украшения<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/jenskaja-odejda-obuv-i-aksessuary/c2337947/">
                                                        Женщинам </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/mujskaja-odejda-obuv-i-aksessuary/c2337942/">
                                                        Мужчинам </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/detskaja-odejda-obuv-i-aksessuary/c2028477/">
                                                        Детям </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/women_shoes/c721659/"> Женская
                                                        обувь </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/1162060/c1162060/"> Одежда для
                                                        женщин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/women_underwear/c2336782/"> Женское
                                                        нижнее белье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/genskie-chulochno-nosochnie-izdeliya/c4637551/">
                                                        Чулочно-носочные изделия </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/thermal_wear/c100209/22667=women/">
                                                        Женское термобелье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sumki/c4630220/52257=117387,117397/">
                                                        Сумки аксессуары для женщин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/men_shoes/c721654/"> Мужская
                                                        обувь </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/1162070/c1162070/"> Одежда для
                                                        мужчин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/outerwear/c1136470/"> Верхняя одежда
                                                        для мужчин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/thermal_wear/c100209/22667=men/">
                                                        Мужское термобелье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/noski-i-getry/c4637703/"> Носки
                                                        мужские </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sumki/c4630220/52257=117392,117397/">
                                                        Сумки и аксессуары для мужчин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/baby_clothing/c1230990/"> Одежда для
                                                        малышей </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/boys_clothing/c1290392/"> Одежда для
                                                        мальчиков </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/girls_clothing/c1285573/"> Одежда
                                                        для девочек </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kids_boys_shoes/c721669/"> Обувь для
                                                        мальчиков </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kids_girls_shoes/c721664/"> Обувь
                                                        для девочек </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kids_accessories/c1315537/">
                                                        Аксессуары для детей </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kids-underwear/c4625174/"> Детское
                                                        нижнее белье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/karnavalnye-kostyumy/c189504/">
                                                        Карнавальные костюмы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/school_uniform/c1136460/"> Школьная
                                                        форма </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/1162060/c1162060/">Одежда
                                                                для женщин</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskaya-verhnyaya-odegda/c4637535/">
                                                                        Верхняя одежда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-platya-sarafani-i-yubki/c4637599/">
                                                                        Платья, сарафаны и юбки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-kofti-svitera-i-kardigani/c4637631/">
                                                                        Джемперы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-futbolki-i-mayki/c4637607/">
                                                                        Футболки и майки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-bluzi-i-rubashki/c4637567/">
                                                                        Блузки и рубашки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-bryuki-shorti-i-losini/c4637615/">
                                                                        Джинсы, брюки, шорты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/women_underwear/c2336782/">
                                                                        Нижнее белье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskaya-sportivnaya-odegda/c4637623/">
                                                                        Одежда для фитнеса и спорта </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskaya-nochnaya-i-domashnyaya-odegda/c4637543/">
                                                                        Ночная и домашняя одежда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-chulochno-nosochnie-izdeliya/c4637551/">
                                                                        Чулочно-носочные изделия </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kupalniki-i-pliazhnaya-odezhda/c3496597/">
                                                                        Купальники и пляжная одежда </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/women_shoes/c721659/">Женская
                                                                обувь</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskaya-sportivnaya-obuv/c4634713/">
                                                                        Кроссовки и кеды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-botinki-botiloni/c4634785/">
                                                                        Ботинки и ботильоны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-tufli-baletki/c4634737/">
                                                                        Туфли и балетки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-sapogi-uggi/c4634777/">
                                                                        Сапоги, угги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-sbo-vetnamki-tapochki/c4634721/">
                                                                        Шлепанцы, сабо </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/genskie-komnatnie-tapochki/c4634769/">
                                                                        Комнатная обувь </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/naruchnye-chasy/c91451/filter/tip-103100=zhenskie/">Женские
                                                                часы</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/accessories/c1321132/52257=117387/">Женские
                                                                сумки</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sumki/c4630220/52257=117387,117397/">Аксессуары
                                                                для женщин</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/promo/stock/?section_id=1162030">Последний
                                                                размер</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/1162070/c1162070/">Одежда
                                                                для мужчин</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/outerwear/c1136470/">
                                                                        Верхняя одежда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-kofti-svitera-i-kardigani/c4637743/">
                                                                        Толстовки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-rubashki/c4637823/">
                                                                        Рубашки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-futbolki/c4637839/">
                                                                        Футболки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-bryuki/c4638039/">
                                                                        Джинсы и брюки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nijnee-bele-dlya-mujchin/c2349087/">
                                                                        Нижнее белье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/noski-i-getry/c4637703/">
                                                                        Носки и следы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/thermal_wear/c100209/22667=men/">
                                                                        Термобелье мужское </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/plyajnye-shorty-i-plavki/c3040770/">
                                                                        Плавки и шорты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskaya-sportivnaya-odegda/c4637687/">
                                                                        Спортивная одежда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskaya-nochnaya-i-domashnyaya-odegda/c4637759/">
                                                                        Ночная и домашняя одежда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/1087699/c1087699/">
                                                                        Одежда для охоты и рыбалки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/men_shoes/c721654/">Мужская
                                                                обувь</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-botinki-sapogi/c4634809/">
                                                                        Ботинки и сапоги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskaya-sportivnaya-obuv/c4634801/">
                                                                        Кроссовки и кеды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-tufli/c4634833/">
                                                                        Туфли </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugskie-vetnamki-shlepantsi-sabo/c4634817/">
                                                                        Шлепанцы, сабо </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mugsike-komnatnie-tapochki/c4634857/">
                                                                        Комнатная обувь </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/naruchnye-chasy/c91451/filter/tip-103100=muzhskie/">Наручные
                                                                часы мужские</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/accessories/c1321132/52257=117392/">Мужские
                                                                сумки</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sumki/c4630220/52257=117397,117392/">Аксессуары
                                                                для мужчин</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/detskaya-odegda/c4633561/">Детская
                                                                одежда</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/baby_clothing/c1230990/">
                                                                        Одежда для малышей 0-3 лет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/boys_clothing/c1290392/">
                                                                        Одежда для мальчиков 3-16 лет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/girls_clothing/c1285573/">
                                                                        Одежда для девочек 3-16 лет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids_thermal_wear/c1658277/">
                                                                        Детское термобелье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school_uniform/c1136460/">
                                                                        Школьная форма </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/karnavalnye-kostyumy/c189504/">
                                                                        Карнавальные костюмы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/detskaya-obuv/c1158130/">Детская
                                                                обувь</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids_girls_shoes/c721664/">
                                                                        Обувь для девочек </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids_boys_shoes/c721669/">
                                                                        Обувь для мальчиков </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kids_accessories/c1315537/">Аксессуары
                                                                для детей</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids_accessories/c1315537/52087=116742,119092,119847,127502,316209/">
                                                                        Шапки, шарфы и перчатки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-noski-i-kolgotki/c4654643/">
                                                                        Носки и колготки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids-underwear/c4625174/">
                                                                        Нижнее белье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school_bags/c163943/">
                                                                        Детские сумки и ранцы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/naruchnye-chasy/c91451/filter/tip-103100=dlya-devochek,dlya-maljchikov/">
                                                                        Детские часы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/jewerly/c723119/">Ювелирные
                                                                украшения</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/jewerly/c723119/">Женские
                                                                ювелирные украшения</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/koljca-yuvelirnye/c4627942/">
                                                                        Кольца </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ser-gi/c724094/">
                                                                        Серьги </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/muzhskie-yuvelirnye-ukrasheniya/c4627907/">Мужские
                                                                ювелирные украшения</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cepi-1/c753709/">
                                                                        Цепи </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/wintershoes_sale_220120.html"><img
                                                                alt="" src="https://i1.rozetka.ua/fatmenu/29/29128.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/newbalance"
                                                                title="New Balance"><img
                                                                    src="https://i2.rozetka.ua/producers/24/24920.png"
                                                                    alt="New Balance"></a></li><!---->
                                                    <li class="menu__main-brand"><a href="https://rozetka.com.ua/nike"
                                                                                    title="Nike"><img
                                                                    src="https://i1.rozetka.ua/producers/27/27570.png"
                                                                    alt="Nike"></a></li><!---->
                                                    <li class="menu__main-brand"><a href="https://rozetka.com.ua/geox"
                                                                                    title="Geox"><img
                                                                    src="https://i1.rozetka.ua/producers/26/26240.png"
                                                                    alt="Geox"></a></li><!---->
                                                    <li class="menu__main-brand"><a href="https://rozetka.com.ua/ecco"
                                                                                    title="ECCO"><img
                                                                    src="https://i1.rozetka.ua/producers/26/26246.png"
                                                                    alt="ECCO"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/parfois"
                                                                title="Parfois"><img
                                                                    src="https://i1.rozetka.ua/producers/24/24928.png"
                                                                    alt="Parfois"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/krasota-i-zdorovje/c4629305/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-12258"></use></svg></span>Красота и
                                        здоровье<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/hairclippers/c81229/"> Машинки
                                                        для стрижки и триммеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/hairdressing/c81231/"> Приборы
                                                        для укладки волос </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/men_electric_shavers/c81226/">
                                                        Электробритвы для мужчин </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/epilators_female_shavers/c81225/">
                                                        Эпиляторы и женские электробритвы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/hairdryers/c81227/"> Фены </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/perfume/c2048522/"> Парфюмерия </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/zubnye-schetki-i-irrigatory/c437994/">
                                                        Зубные щетки и ирригаторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/tonometry/c2635172/">
                                                        Тонометры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/floor_scales/c81232/"> Весы
                                                        напольные </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/foot_bath/c81233/">
                                                        Массажеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hair_care/c2048497/"> Косметика по
                                                        уходу за волосами </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/ingalyatory/c2776042/">
                                                        Ингаляторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sredstva-dlya-britya/c3512690/">
                                                        Средства для бритья </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/252133/c252133/">
                                                        Фотоэпиляторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/pribory-dlya-manikyura-i-pedikyura/c437989/">
                                                        Приборы для маникюра и педикюра </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sceen_care/c2048732/"> Косметика по
                                                        уходу за лицом </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/electric_heating_pads/c81234/">
                                                        Электрические простыни и одеяла </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/eyes_makeup/c2048492/"> Декоративная
                                                        косметика для глаз </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/make_up_acessories/c2048527/">
                                                        Аксессуары </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/body_care/c2048742/"> Косметика по
                                                        уходу за телом </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/uhod-za-polostyu-rta/c2099087/">
                                                        Уход за полостью рта </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/face_makeup/c2048597/"> Декоративная
                                                        косметика для лица </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lips_makeup/c2048592/"> Декоративная
                                                        косметика для губ </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/nails_cosmetics/c2048602/">
                                                        Декоративная косметика для ногтей </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/435969/c435969/">Техника
                                                                для красоты и здоровья</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairclippers/c81229/">
                                                                        Машинки для стрижки и триммеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairdressing/c81231/">
                                                                        Приборы для укладки волос </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/men_electric_shavers/c81226/">
                                                                        Электробритвы для мужчин </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/hairdryers/c81227/">
                                                                        Фены </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/epilators_female_shavers/c81225/">
                                                                        Эпиляторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/zubnye-schetki-i-irrigatory/c437994/">
                                                                        Зубные щетки и ирригаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/tonometry/c2635172/">
                                                                        Тонометры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/floor_scales/c81232/">
                                                                        Весы напольные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/foot_bath/c81233/">
                                                                        Массажеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://bt.rozetka.com.ua/pribory-dlya-manikyura-i-pedikyura/c437989/">
                                                                        Приборы для маникюра и педикюра </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sredstva-dlya-britya/c3512690/">Средства
                                                                для бритья</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-britya/c3512690/filter/64119=251759/">
                                                                        Станки без сменных картриджей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-britya/c3512690/filter/64119=251766/">
                                                                        Сменные картриджи для бритья </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-britya/c3512690/filter/64119=251745/">
                                                                        Средства после бритья </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/seksualnoe-zdorove/c4629824/">Сексуальное
                                                                здоровье</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sredstva-gigieny/c4626569/">Средства
                                                                гигиены</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://apteka.rozetka.com.ua/tovary-medicinskogo-naznacheniya/c4628719/">Товары
                                                                медицинского назначения</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sceen_care/c2048732/">Уход
                                                                за лицом</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/krem-dlya-litsa/c4657262/">
                                                                        Крем </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/maska-dlya-litsa/c4657310/">
                                                                        Маски для лица </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sceen_care/c2048732/">
                                                                        Косметика по уходу за лицом </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstvo-dlya-umivaniya/c4657274/">
                                                                        Средство для умывания </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/patchi/c4657280/">
                                                                        Патчи под глаза </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/body_care/c2048742/">Уход за
                                                                телом</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/body_care/c2048742/">
                                                                        Косметика по уходу за телом </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dezodoranti-i-antiperspiranti/c4657478/">
                                                                        Дезодоранты (антиперспиранты) </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-intimnoy-gigieni/c4657203/">
                                                                        Средства для интимной гигиены </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hands_feet_care/c2048752/">
                                                                        Уход за руками </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/efirnoe-maslo/c4657496/">
                                                                        Эфирные масла </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hair_care/c2048497/">Уход за
                                                                волосами</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shampun/c4657710/">
                                                                        Шампуни </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/maslo-dlya-volos/c4657728/">
                                                                        Масло для волос </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konditsioner-dlya-volos/c4657722/">
                                                                        Кондиционеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nabori-po-uhodu-za-volosami/c4657800/">
                                                                        Наборы по уходу за волосами </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/maska-dlya-volos/c4657734/">
                                                                        Маски для волос </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/perfume/c2048522/">Парфюмерия</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/perfume/c2048522/filter/56387=149627/">
                                                                        Мужские парфумы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/perfume/c2048522/filter/56387=149622/">
                                                                        Женские парфумы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aromati-dlya-doma/c4639408/">
                                                                        Ароматы для дома </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kraski-dlia-volos/c3565580/">Окрашивание
                                                                волос</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kraski-dlia-volos/c3565580/64721=223152,gel-kraska/">
                                                                        Краска для волос </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/uhod-za-polostyu-rta/c2099087/">Уход
                                                                за полостью рта</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/uhod-za-polostyu-rta/c2099087/56447=149907/">
                                                                        Зубная паста </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/uhod-za-polostyu-rta/c2099087/56447=248309/">
                                                                        Зубные щетки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/make_up/c2236222/">Декоративная
                                                                косметика</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nails_cosmetics/c2048602/57732=155447/">
                                                                        Лак для ногтей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nails_cosmetics/c2048602/57732=265319/">
                                                                        Гель-лак </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lips_makeup/c2048592/56227=153927/">
                                                                        Губная помада </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lips_makeup/c2048592/56227=153942/">
                                                                        Блеск для губ </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/eyes_makeup/c2048492/56037=158107/">
                                                                        Тушь для ресниц </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/eyes_makeup/c2048492/56037=158122/">
                                                                        Тени для век </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/eyes_makeup/c2048492/56037=158362%2C173767/">
                                                                        Корректоры, карандаши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/face_makeup/c2048597/57657=266992/">
                                                                        Тональный крем </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/face_makeup/c2048597/57657=153577/">
                                                                        Пудра </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/make_up_acessories/c2048527/">Аксессуары</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/make_up_acessories/c2048527/57952=158672/">
                                                                        Для маникюра </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/make_up_acessories/c2048527/57952=158667/">
                                                                        Для макияжа </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/make_up_acessories/c2048527/57952=268301/">
                                                                        Для волос </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kupanie-i-gigiena/c3973660/">Косметика
                                                                по уходу для детей</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/151119_sale_grace.html"><img
                                                                alt="" src="https://i1.rozetka.ua/fatmenu/29/29100.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/kids/c88468/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-13224"></use></svg></span>Детские товары
                                        <!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/podguzniki-i-pelenanie/c3973646/">
                                                        Подгузники </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/building_kits/c97420/"> Детские
                                                        конструкторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/interactive_toys/c98159/">
                                                        Интерактивные игрушки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/4035302/c4035302/"> Игрушки для
                                                        малышей </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tvorchestvo/c102912/">
                                                        Творчество </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/gaming_kits/c99674/"> Игровые
                                                        наборы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/elektrotransport/c4625901/">
                                                        Электротранспорт </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/detskie-kolyaski/c100389/"> Детские
                                                        коляски </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/detskie-smesi/c2586302/"> Детские
                                                        смеси </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rc_toys/c97422/"> Радиоуправляемые
                                                        игрушки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/dolls/c99392/"> Куклы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/christmas_trees/c248659/">
                                                        Искусcтвенные сосны и ели </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/figures/c99253/"> Игровые
                                                        фигурки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/detskie-avtokresla/c83687/"> Детские
                                                        автокресла </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/detskie-velosipedy/c104132/">
                                                        Детские велосипеды </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/soft_toys/c99051/"> Мягкие
                                                        игрушки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/igrushechnye-mashinki-i-tehnika/c102003/">
                                                        Игрушечные машинки и техника </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/stulchiki-dlya-kormleniya/c100077/">
                                                        Стульчики для кормления </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/k_scooter/c139406/"> Детские
                                                        самокаты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/igrushechnoe-orujie/c104013/">
                                                        Игрушечное оружие </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/avtomobilnye-treki/c102308/">
                                                        Автомобильные треки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/s_centers/c103303/"> Развивающие
                                                        центры, коврики и кресла-качалки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/babymonitors/c146154/">
                                                        Радионяни </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/party-i-molberty/c100194/"> Парты и
                                                        мольберты </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/detskie-igrushki/c4265805/">Игрушки</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/building_kits/c97420/">
                                                                        Детские конструкторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/interactive_toys/c98159/">
                                                                        Интерактивные игрушки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nastoljnye-igry-i-golovolomki/c98280/">
                                                                        Настольные игры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/razvivayuschie-igry/c100784/">
                                                                        Творчество </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/gaming_kits/c99674/">
                                                                        Игровые наборы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rc_toys/c97422/">
                                                                        Радиоуправляемые игрушки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dolls/c99392/">
                                                                        Куклы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/4035302/c4035302/">
                                                                        Игрушки для малышей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/soft_toys/c99051/">
                                                                        Мягкие игрушки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/igrushechnye-mashinki-i-tehnika/c102003/">
                                                                        Игрушечные машинки и техника </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/igrushechnoe-orujie/c104013/">
                                                                        Игрушечное оружие </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/pitanie-i-kormlenie/c3933312/">Детское
                                                                питание</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-smesi/c2586302/">
                                                                        Детские смеси </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stulchiki-dlya-kormleniya/c100077/">
                                                                        Стульчики для кормления </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bottles/c266332/">
                                                                        Бутылочки для кормления и аксессуары </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kid_food_processors/c270128/">
                                                                        Детские кухонные комбайны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-kashi/c2586312/">
                                                                        Детские каши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskoe-pyure/c2586332/">
                                                                        Детское пюре </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskaya-posuda/c267134/">
                                                                        Детская посуда </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pacifiers/c266303/">
                                                                        Пустышки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/visokotehnologichnie-igrushki/c4630656/">Высокотехнологичные
                                                                игрушки</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/progulki-i-aktivniy-otdyh/c3933347/">Прогулки
                                                                и активный отдых</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/elektrotransport/c4625901/">
                                                                        Электротранспорт </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-kolyaski/c100389/">
                                                                        Детские коляски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-avtokresla/c83687/">
                                                                        Детские автокресла </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-velosipedy/c104132/">
                                                                        Детские велосипеды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/k_scooter/c139406/">
                                                                        Детские самокаты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/chudomobili-hodunki-kachalki/c104034/">
                                                                        Чудомобили, ходунки, качалки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/k_roller_skates/c189193/">
                                                                        Роликовые коньки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/kupanie-i-gigiena/c3973660/">Гигиена
                                                                и уход за ребенком</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/podguzniki-i-pelenanie/c3973646/">
                                                                        Подгузники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/napkins/c103310/">
                                                                        Детские салфетки, платочки и полотенца </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pelenki/c2354842/">
                                                                        Пеленки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kosmetika-po-uhody-dlia-detei/c266262/">
                                                                        Косметика по уходу для детей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-vannochki-i-aksessuary/c197325/">
                                                                        Детские ванночки и аксессуары </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/detskaja-odejda-obuv-i-aksessuary/c2028477/">Детская
                                                                одежда, обувь и аксессуары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school_uniform/c1136460/">
                                                                        Школьная форма </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/boys_clothing/c1290392/">
                                                                        Для мальчиков </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/girls_clothing/c1285573/">
                                                                        Для девочек </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/baby_clothing/c1230990/">
                                                                        Для малышей </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/dlya-yunih-modnits/c4630524/">Товары
                                                                для юных модниц</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/detskaya-komnata/c102573/">Детская
                                                                комната</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/babymonitors/c146154/">
                                                                        Радионяни </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/party-i-molberty/c100194/">
                                                                        Парты и мольберты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/manege/c100076/">
                                                                        Манежи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/mobile/c102300/">
                                                                        Мобили </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-krovatki/c101909/">
                                                                        Детские кроватки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskii-tekstil/c4626128/">
                                                                        Детский текстиль </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/razvivayuschie-igry/c100784/">Развитие
                                                                и творчество</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tvorchestvo/c102912/">
                                                                        Творчество </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/s_centers/c103303/">
                                                                        Развивающие центры, коврики, кресла-качалки </a>
                                                                </li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/puzzles/c102848/">
                                                                        Пазлы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-muzykalnye-instrumenty/c102876/">
                                                                        Детские музыкальные инструменты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/literatura/c4005167/">
                                                                        Детские книги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nabory-dlya-nauchnyh-issledovaniy/c102843/">
                                                                        Наборы для научных исследований </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/detskie-kompyutery/c103520/">
                                                                        Детские компьютеры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tovary-dlya-mam/c4265798/">Товары
                                                                для мам</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/breast_pumps/c267223/">
                                                                        Молокоотсосы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kosmetika-po-uhody-dlia-detei/c266262/72578=305354/">
                                                                        Косметика для мам </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/150120_draw_libero.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/28/28988.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/konstruktory-LEGO/c4625535/"
                                                                title="LEGO"><img
                                                                    src="https://i2.rozetka.ua/producers/9/9198.png"
                                                                    alt="LEGO"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/pampers/"
                                                                title="Pampers"><img
                                                                    src="https://i1.rozetka.ua/producers/9/9142.png"
                                                                    alt="Pampers"></a></li><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/huggies/"
                                                                title="Huggies"><img
                                                                    src="https://i1.rozetka.ua/producers/9/9170.png"
                                                                    alt="Huggies"></a></li><!---->
                                                    <li class="menu__main-brand"><a href="https://rozetka.com.ua/winx/"
                                                                                    title="Winx"><img
                                                                    src="https://i1.rozetka.ua/producers/24/24568.png"
                                                                    alt="Winx"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/office-school-books/c4625734/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-14127"></use></svg></span>Канцтовары и
                                        книги<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/school_bags/c163943/"> Школьные
                                                        наборы и ранцы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tetradi-uchenicheskie/c2986072/">
                                                        Тетради ученические </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/school_boxes/c2986086/"> Пеналы
                                                        школьные </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/bumaga-ofisnaya/c2514882/"> Бумага
                                                        офисная </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ruchki/c2560757/"> Ручки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cvetnie-karandashy/c2798827/">
                                                        Цветные карандаши </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/2514847/c2514847/"> Ежедневники,
                                                        планинги, алфавитные книги </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sumki-shkoljnye/c4068649/"> Сумки
                                                        школьные </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/oblozhki-dlia-tetradei-i-uchebnikov/c2798822/">
                                                        Обложки для тетрадей и учебников </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hudojestvennaya-literatura/c4326593/">
                                                        Художественная литература </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sumki-dlya-obuvi/c4628187/"> Сумки
                                                        для обуви </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/">
                                                        Учебники. Научно-методическая литература </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kalkulyatory/c2560887/">
                                                        Калькуляторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/dnevniki/c3563536/"> Дневники </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/knigi-dlya-biznesa/c4620235/"> Книги
                                                        для бизнеса </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kraski/c3495057/"> Краски </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/plastilin/c3425933/"> Пластилин </a>
                                                </li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ruchki-premium/c2560787/"> Ручки
                                                        подарочные и премиум </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cvetnaya-bumaga-i-karton/c3180462/">
                                                        Цветная бумага и картон </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/flomastery/c3552044/">
                                                        Фломастеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/tehnicheskaya-literatura-instruktsii-rukovodstva/c4326663/">
                                                        Техническая литература. Инструкции. Руководства </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/2581722/c2581722/">
                                                        Папки-регистраторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/albomy-dlia-risovaniya/c3302600/">
                                                        Альбомы для рисования </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/2514852/c2514852/"> Блокноты,
                                                        тетради офисные </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/office_and_school/c2460392/">Канцелярские
                                                                принадлежности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bumaga-ofisnaya/c2514882/">
                                                                        Бумага офисная </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ruchki/c2560757/">
                                                                        Ручки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/2514847/c2514847/">
                                                                        Ежедневники, планинги, алфавитные книги </a>
                                                                </li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/2581722/c2581722/">
                                                                        Папки-регистраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cirkuli-i-gotovalni/c3551946/">
                                                                        Циркули и готовальни </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/2514852/c2514852/">
                                                                        Блокноты, тетради офисные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/karandashi/c2560752/">
                                                                        Карандаши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fayly/c2514857/">
                                                                        Файлы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kley/c2560862/">
                                                                        Клей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/korrektory/c2560782/">
                                                                        Корректоры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lotki-dlya-bumag/c2560812/">
                                                                        Лотки для бумаг </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/markery/c2560762/">
                                                                        Маркеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bumaga-dlya-zametok-stikery/c2514902/">
                                                                        Бумага для заметок, стикеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school-lastiki/c3551904/">
                                                                        Ластики </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/steplery-skoby-antisteplery/c2560847/">
                                                                        Степлеры, скобы, антистеплеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kleykie-lenty-i-skotchi/c2560867/">
                                                                        Клейкие ленты и скотчи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konverty/c2514897/">
                                                                        Конверты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/papki-s-faylami/c2595767/">
                                                                        Папки с файлами </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bumaga-dlya-flipchartov/c2514837/">
                                                                        Бумага для флипчартов </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sterjni-grifeli-chernila/c2560767/">
                                                                        Стержни, грифели, чернила </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/uvelichiteljnye-stekla/c4628103/naznachenie-98809=lupa/">
                                                                        Лупы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/school_accessoies/c2460422/">Школьные
                                                                принадлежности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school_bags/c163943/">
                                                                        Школьные наборы и ранцы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tetradi-uchenicheskie/c2986072/">
                                                                        Тетради ученические </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/school_boxes/c2986086/">
                                                                        Пеналы школьные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/oblozhki-dlia-tetradei-i-uchebnikov/c2798822/">
                                                                        Обложки для тетрадей и учебников </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sumki-shkoljnye/c4068649/">
                                                                        Сумки школьные </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/food-containers/c4626836/tip-88276=lanch-boks/">
                                                                        Бутербродницы (ланч-боксы) </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konturnie-karty-i-atlasy/c3816762/">
                                                                        Контурные карты и атласы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lineiki-transportiry-ugolniki/c3551911/">
                                                                        Линейки, транспортиры, угольники </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nozhnici-shkolnie/c2798832/">
                                                                        Ножницы школьные </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/office_accessories/c2460412/">Офисные
                                                                принадлежности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kalkulyatory/c2560887/">
                                                                        Калькуляторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/papki-plastikovye/c2514862/">
                                                                        Папки пластиковые </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/samonabornye-shtampy-kassy-bukv/c2898382/">
                                                                        Самонаборные штампы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/nastolnye-nabory/c2560827/">
                                                                        Настольные наборы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dyrokoly/c2560852/">
                                                                        Дыроколы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bejdzhi-breloki-identifikatory-nastoljnye-tablichki/c2514872/">
                                                                        Бейджи, брелоки-идентификаторы, настольные
                                                                        таблички </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/papki-portfeli-papki-boksy/c2581727/">
                                                                        Папки-портфели, папки-боксы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://cg.rozetka.com.ua/vizitki"> Печать
                                                                        визиток </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/knigi/c4326572/">Книги</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hudojestvennaya-literatura/c4326593/">
                                                                        Художественная литература </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/literatura/c4005167/">
                                                                        Детские книги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/knigi-dlya-biznesa/c4620235/">
                                                                        Книги для бизнеса </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/uchebniki-nauchno-metodicheskaya-literatura/c4326656/">
                                                                        Учебники. Научно-методическая литература </a>
                                                                </li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/religiya-ezoterika/c4625307/">
                                                                        Религия. Эзотерика </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/slovari-spravochniki-entsiklopedii/c4326635/">
                                                                        Словари. Справочники. Энциклопедии </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/books-for-parents/c4626644/">
                                                                        Книги для родителей </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tvorchestvo/c102912/">Творчество</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cvetnie-karandashy/c2798827/">
                                                                        Цветные карандаши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kraski/c3495057/">
                                                                        Краски </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/cvetnaya-bumaga-i-karton/c3180462/">
                                                                        Цветная бумага и картон </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/albomy-dlia-risovaniya/c3302600/">
                                                                        Альбомы для рисования </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/plastilin/c3425933/">
                                                                        Пластилин </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/flomastery/c3552044/">
                                                                        Фломастеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kisti/c3618110/">
                                                                        Кисти </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/molberty-etudniki-palitry/c4114639/">
                                                                        Мольберты, этюдники, палитры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/suvenirnaya-produkciya/c4627311/">Сувенирная
                                                                продукция</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ukrainskie-suveniry/c4628460/">
                                                                        Украинские сувениры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/golovolomki-antistressy/c4627374/">
                                                                        Головоломки, антистрессы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/kite_gopack_240120_skidki.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/29/29079.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/alkoholnie-napitki-i-produkty/c4626923/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-14939"></use></svg></span>Алкогольные
                                        напитки и продукты<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/krepkie-napitki/c4594292/"> Крепкие
                                                        напитки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/vino/c4594285/"> Вино </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/elektronnie-sigarety-batareinie-mody-atomaizery/c4627066/">
                                                        Электронные сигареты, батарейные моды, атомайзеры </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/liquor-vermouth-syrup/c4625409/">
                                                        Ликеры и аперитивы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/koffee/c4625011/"> Кофе </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pivo/c4626589/"> Пиво </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rybnye-konservy-i-moreprodukty/c4628075/">
                                                        Рыбные консервы и морепродукты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/chai/c4625004/"> Чай </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/konfety/c4625025/"> Конфеты и
                                                        сладости </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/voda-soki-napitki/c4625018/"> Вода,
                                                        соки, напитки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/zhidkosti-dlia-elektronnih-sigaret/c4627080/">
                                                        Жидкости для электронных сигарет </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/komplektuyuschie-i-aksessuary-dlia-elektronnih-sigaret/c4627073/">
                                                        Комплектующие и аксессуары для электронных сигарет </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/makaronnie-izdeliia/c4627666/">
                                                        Макаронные изделия </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/rastiteljnoe-maslo/c4627757/">
                                                        Растительное масло </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sousy/c4628019/"> Соусы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sneki/c4627680/"> Снеки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/siropy-i-toppingi/c4626712/"> Сиропы
                                                        и топпинги </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/djemy-i-vareniya/c4626718/"> Джем и
                                                        варенье </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/olivki/c4627799/"> Оливки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/slaboalkogoljnye-napitki/c4628313/">
                                                        Слабоалкогольные напитки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sukhofrukty/c4628537/">
                                                        Сухофрукты </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pripravy-i-specii/c4627764/">
                                                        Приправы и специи </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/komponenty-dlya-zhidkostej/c4628439/">
                                                        Компоненты для жидкостей </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/produkty-dlya-sushi/c4628033/">
                                                        Продукты для суши </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/vino/c4594285/">Вино</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tihoe-vino/c4649052/colour-70004=362655/">
                                                                        Красное </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tihoe-vino/c4649052/colour-70004=362643/">
                                                                        Белое </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tihoe-vino/c4649052/colour-70004=362661/">
                                                                        Розовое </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vino/c4594285/sahar-69758=273144/">
                                                                        Вино сухое </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vino/c4594285/sahar-69758=273123/">
                                                                        Полусладкое вино </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vino/c4594285/sahar-69758=273130/">
                                                                        Вино полусухое </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vino/c4594285/sahar-69758=273116/">
                                                                        Десертное </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shampanskoe-i-igristoe-vino/c4649058/">
                                                                        Игристое шампанское </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/liquor-vermouth-syrup/c4625409/">Ликеры,
                                                                вермуты, сиропы</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/liquor-vermouth-syrup/c4625409/filter/vid-napitka-563ffda139e6e=likery/">
                                                                        Ликеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vermut/c4649064/">
                                                                        Вермуты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/siropy-i-toppingi/c4626712/tip-86998=424558/">
                                                                        Сиропы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/liquor-vermouth-syrup/c4625409/filter/upakovka=nabor/">
                                                                        Наборы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/pivo/c4626589/">Пиво и
                                                                сидр</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/servirovka-stola/c4626609/">Посуда</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bokaly-i-fujery/c4626947/">
                                                                        Бокалы и фужеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/stopki-i-rumki/c4626982/">
                                                                        Стопки и рюмки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/krepkie-napitki/c4594292/">Крепкие
                                                                напитки</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/viski/c4649130/vid175644=blend-blended/">
                                                                        Виски бленд </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/viski/c4649130/vid175644=burbon/">
                                                                        Виски бурбон </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konyak-i-brendi/c4649136/vid175662=konyak/">
                                                                        Коньяк </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/viski/c4649130/vid175644=viski-odnosolodoviy/">
                                                                        Виски односолодовый </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/vodka/c4649154/">
                                                                        Водка </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rom/c4649142/">
                                                                        Ром </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/absent/c4649172/">
                                                                        Абсент </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/tekila-i-meskal/c4649148/">
                                                                        Текила </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konyak-i-brendi/c4649136/vid175662=armanyak/">
                                                                        Арманьяк </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konyak-i-brendi/c4649136/vid175662=brendi/">
                                                                        Бренди </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/chacha/c4649160/">
                                                                        Чача </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/dgin/c4649166/">
                                                                        Джин </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grappa-i-kalvados/c4649178/vid175740=kalvados/">
                                                                        Кальвадос </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/liquor-vermouth-syrup/c4625409/filter/vid-napitka-563ffda139e6e=bitter/">
                                                                        Биттер </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grappa-i-kalvados/c4649178/vid175740=grappa/">
                                                                        Граппа </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/grappa-i-kalvados/c4649178/vid175740=sake/">
                                                                        Саке </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/elektronnie-sigarety-i-aksessuary/c4627052/">Электронные
                                                                сигареты и аксессуары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/elektronnie-sigarety-batareinie-mody-atomaizery/c4627066/">
                                                                        Электронные сигареты, батарейные моды,
                                                                        атомайзеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/komplektuyuschie-i-aksessuary-dlia-elektronnih-sigaret/c4627073/">
                                                                        Комплектующие и аксессуары для электронных
                                                                        сигарет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/zhidkosti-dlia-elektronnih-sigaret/c4627080/">
                                                                        Жидкости для электронных сигарет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/komponenty-dlya-zhidkostej/c4628439/">
                                                                        Компоненты для жидкостей </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/produkty/c4624997/">Продукты</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/konfety/c4625025/">
                                                                        Шоколад и конфеты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/koffee/c4625011/">
                                                                        Кофе </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/chai/c4625004/">
                                                                        Чай </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rybnye-konservy-i-moreprodukty/c4628075/">
                                                                        Рыбные консервы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/voda-soki-napitki/c4625018/">
                                                                        Вода, соки, напитки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rastiteljnoe-maslo/c4627757/">
                                                                        Растительное масло </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sousy/c4628019/">
                                                                        Соусы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/makaronnie-izdeliia/c4627666/">
                                                                        Макаронные изделия </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/drage-ledentsi-pastilki/c4629410/">
                                                                        Драже, леденцы, пастилки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/batonchiki/c4629389/">
                                                                        Батончики </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/olivki/c4627799/">
                                                                        Оливки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sneki/c4627680/">
                                                                        Снеки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/jevatelnaia-rezinka/c4625046/">
                                                                        Жевательная резинка </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/djemy-i-vareniya/c4626718/">
                                                                        Джем и варенье </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/uksus/c4627771/">
                                                                        Уксус </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pripravy-i-specii/c4627764/">
                                                                        Приправы и специи </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/produkty-dlya-sushi/c4628033/">
                                                                        Продукты для суши </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/suhie-zavtraki/c4626916/">
                                                                        Сухие завтраки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kids_nutrition/c2586292/">
                                                                        Детское питание </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/krupy/c4628397/">
                                                                        Крупы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ovoschnaya-konservaciya/c4628061/">
                                                                        Овощная консервация </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/siropy-i-toppingi/c4626712/">
                                                                        Сиропы и топпинги </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fruktovaya-konservaciya/c4628068/">
                                                                        Фруктовая консервация </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/slaboalkogoljnye-napitki/c4628313/">
                                                                        Слабоалкогольные напитки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/khlebcy-i-galety/c4628369/">
                                                                        Хлебцы и галеты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/alcofestival/"><img alt=""
                                                                                                             src="https://i2.rozetka.ua/fatmenu/28/28708.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.com.ua/tovary-dlya-biznesa/c4627851/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-15422"></use></svg></span>Товары для
                                        бизнеса<!----><!---->
                                        <svg class="menu-categories__link-chevron" height="9" width="6">
                                            <use xlink:href="#icon-fat-chevron"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                        </svg>
                                    </a><!---->
                                    <div class="menu__hidden-content" style=""><!---->
                                        <div class="menu__hidden-column menu__hidden-column_color_gray"><p
                                                    class="menu__hidden-title menu__hidden-title_color_gray"> Популярные
                                                категории </p>
                                            <ul class="menu__hidden-list"><!---->
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ofisnye-kresla-i-stulya/c154072/">
                                                        Офисные кресла и стулья </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://soft.rozetka.com.ua/os/c80063/"> Операционные
                                                        системы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/komplekty-videonablyudeniya/c237612/">
                                                        Комплекты видеонаблюдения </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://bt.rozetka.com.ua/seyfy/c163969/"> Сейфы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/lestnitsy-stremyanki-podmosti/c157092/">
                                                        Лестницы, стремянки, подмости </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/komplekty-signalizatsiy/c236220/">
                                                        Комплекты сигнализаций </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://soft.rozetka.com.ua/ofisnye-prilojeniya/c80064/">
                                                        Офисные приложения </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cloth_drying/c185696/"> Сушки для
                                                        одежды </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/pressboards/c185692/"> Гладильные
                                                        доски </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/bumaga-ofisnaya/c2514882/"> Бумага
                                                        офисная </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kompyuternye-stoly/c155285/">
                                                        Компьютерные столы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sredstva-dlya-posudy/c4625091/">
                                                        Средства для мытья посуды </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/skanery-shtrih-kodov/c4625274/">
                                                        Сканеры штрих-кодов </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/hoziaistvenniy-inventar/c3547641">
                                                        Хозяйственный инвентарь </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/sredstva-dlya-uborki/c4625077/">
                                                        Средства для уборки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/ruchki/c2560757/"> Ручки </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/counters_and_currency_detectors/c754404/">
                                                        Счетчики банкнот и детекторы валют </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/2514847/c2514847/"> Ежедневники,
                                                        планинги, алфавитные книги </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/printery-etiketok/c4625268/">
                                                        Принтеры этикеток </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://soft.rozetka.com.ua/servernoe-po/c111389/">
                                                        Серверное ПО </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/kalkulyatory/c2560887/">
                                                        Калькуляторы </a></li>
                                                <li><a apprzroute="" class="menu__link menu__link_background_gray"
                                                       href="https://rozetka.com.ua/cash-box/c4625343/"> Денежные
                                                        ящики </a></li>
                                            </ul>
                                        </div>
                                        <div class="menu__main-cats">
                                            <div class="menu__main-cats-inner"><!----><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/torgovoe-oborudovanie/c4625256/">Торговое
                                                                оборудование и аксессуары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/printery-etiketok/c4625268/">
                                                                        Принтеры этикеток </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/skanery-shtrih-kodov/c4625274/">
                                                                        Сканеры штрих-кода </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/registratory-raschetov/c4625262/vid-73527=315819/">
                                                                        Кассовые аппараты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/registratory-raschetov/c4625262/vid-73527=315825/">
                                                                        Фискальные регистраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/indicators-customer/c4625355/">
                                                                        Индикаторы клиента </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/data-terminal/c4625286/">
                                                                        Терминалы сбора данных </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pos-oborydovanie/c4625280/">
                                                                        POS-оборудование </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/aksessuary-dlia-torgovogo-oborudovaniia/c4625926/">
                                                                        Аксессуары для торгового оборудования </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/rashodnie-materialy-dlia-to/c4625746/">
                                                                        Расходные материалы </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/counters_and_currency_detectors/c754404/">Банковское
                                                                оборудование</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/counters_and_currency_detectors/c754404/52007=116067/">
                                                                        Детекторы валют </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/counters_and_currency_detectors/c754404/52007=116062/">
                                                                        Счетчики банкнот </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/marking-equipment/c4625298/">Маркировочное
                                                                оборудование</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/marking-equipment/c4625298/vid-74361=320493/">
                                                                        Аппликаторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/marking-equipment/c4625298/vid-74361=320517/">
                                                                        Игольчатые пистолеты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/marking-equipment/c4625298/vid-74361=320511/">
                                                                        Нумераторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/etiket-lenta/c4650381/">
                                                                        Этикет-ленты </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/oborudovanie-dlya-salonov-krasoty/c4628425/">Оборудование
                                                                для салонов красоты</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/rasprodaja/c83850/">Уцененные
                                                                товары</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/sistemy-okhrany-i-bezopasnosti/c4628117/">Системы
                                                                охраны и безопасности</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/komplekty-videonablyudeniya/c237612/">
                                                                        Комплекты видеонаблюдения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/komplekty-signalizatsiy/c236220/">
                                                                        Комплекты сигнализаций </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/seyfy/c163969/">Сейфы</a>
                                                            <!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/office-equipment/c80254/">Офисная
                                                                техника</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector/c80012/">
                                                                        Проекторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/office-phones/c80029/">
                                                                        Телефонные аппараты </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/shredders/c132946/">
                                                                        Шредеры </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector-screens/c80021/">
                                                                        Экраны </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/projector_accessories/c147793/">
                                                                        Аксессуары для проекторов </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/inventar-dlia-doma-i-ofisa/c3647328/">Инвентарь
                                                                для дома и офиса</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/inventar-dlia-doma-i-ofisa/c3647328/">
                                                                        Стирка и глажка </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/lestnitsy-stremyanki-podmosti/c157092/">
                                                                        Лестницы, стремянки, подмости </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/instrymenty-dlia-uborki/c4629256/">
                                                                        Инструменты для уборки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/hoziaistvenniy-inventar/c3547641/">
                                                                        Хозяйственный инвентарь </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/flowerpots/c245547/">
                                                                        Вазоны </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://soft.rozetka.com.ua/">Программное
                                                                обеспечение</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/os/c80063/">
                                                                        Операционные системы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/ofisnye-prilojeniya/c80064/">
                                                                        Офисные приложения </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/setj-i-internet/c131141/">
                                                                        Сеть и интернет </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://soft.rozetka.com.ua/buhgalteriya-i-deloproizvodstvo/c100651/">
                                                                        Бухгалтерия и делопроизводство </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/servernoe-oborudovanie/c4630100/">Серверное
                                                                оборудование</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/tipografiya/c4659755/">Типография</a>
                                                            <!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column"><!----><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/mebel/c152458/">Мебель</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ofisnye-kresla-i-stulya/c154072/">
                                                                        Офисные кресла и стулья </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kompyuternye-stoly/c155285/">
                                                                        Компьютерные столы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/ergonomika-rabochego-mesta/c4630662/">
                                                                        Эргономика рабочего места </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://bt.rozetka.com.ua/173974/c173974/">Лампы и
                                                                освещение</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/office_accessories/c2460412/">Канцелярия</a>
                                                            <!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/bumaga-ofisnaya/c2514882/">
                                                                        Бумага офисная </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/2514847/c2514847/">
                                                                        Ежедневники, планинги, алфавитные книги </a>
                                                                </li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kalkulyatory/c2560887/">
                                                                        Калькуляторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/2581722/c2581722/">
                                                                        Папки-регистраторы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/fayly/c2514857/">
                                                                        Файлы </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/kley/c2560862/">
                                                                        Клей </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/korrektory/c2560782/">
                                                                        Корректоры </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/hoziaystvennie-tovary/c4394353/">Хозяйственные
                                                                товары</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/pakety-dlia-musora/c4581462/">
                                                                        Пакеты для мусора </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/perchatki/c4581483/">
                                                                        Перчатки </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/salfetki-dlya-uborki/c4581476/">
                                                                        Салфетки для уборки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/bytovaya-himiya/c4429255/">Бытовая
                                                                химия</a><!----><!---->
                                                            <ul><!---->
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-posudy/c4625091/">
                                                                        Средства для мытья посуды </a></li>
                                                                <li><a apprzroute="" class="menu__link"
                                                                       href="https://rozetka.com.ua/sredstva-dlya-uborki/c4625077/">
                                                                        Средства для уборки </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul><!---->
                                                    <ul class="menu__hidden-list">
                                                        <li><a apprzroute="" class="menu__hidden-title"
                                                               href="https://rozetka.com.ua/vesy/c4625292/">Весоизмерительное
                                                                оборудование</a><!----><!---->
                                                            <ul><!----></ul>
                                                        </li>
                                                    </ul>
                                                </div><!---->
                                                <div class="menu__hidden-column menu__hidden-column_no_padding"><a
                                                            href="https://rozetka.com.ua/news-articles-promotions/promotions/datalogic_141119_skidki.html"><img
                                                                alt="" src="https://i2.rozetka.ua/fatmenu/28/28207.jpg"></a>
                                                </div>
                                            </div>
                                            <div class="menu__main-cats menu__main-cats_type_bottom"><!---->
                                                <ul class="menu__main-brands"><!----><!---->
                                                    <li class="menu__main-brand"><a
                                                                href="https://rozetka.com.ua/producer/rozetka/"
                                                                title="Rozetka"><img
                                                                    src="https://i2.rozetka.ua/producers/26/26193.png"
                                                                    alt="Rozetka"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link menu-categories__item_type_bordered"
                                                                     href="https://rozetka.com.ua/promo/gifttime/"
                                                                     target=""><span class="menu-categories__icon"><svg
                                                    height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-17191"></use></svg></span>Сезон подарков
                                        до -50%<!----><img aria-hidden="true" class="menu-categories__action-icon"
                                                           src="https://i2.rozetka.ua/fatmenu/29/29093.png"><!----></a>
                                    <!----></li>
                                <li class="menu-categories__item"><a apprzroute=""
                                                                     class="menu-categories__link js-menu-categories__link"
                                                                     href="https://rozetka.travel/"
                                                                     target="_blank"><span
                                                class="menu-categories__icon"><svg height="24" width="24"><use
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-fat-17845"></use></svg></span>Туры и отдых
                                        <!----><!----></a><!----></li>
                            </ul>
                        </div>
                    </fat-menu>
                </div>
                <div class="header-search js-app-search-suggest" role="search" _nghost-c7="">
                    <form _ngcontent-c7="" action="" class="search-form ng-untouched ng-pristine ng-valid"
                          novalidate="">
                        <div _ngcontent-c7="" class="search-form__inner">
                            <div _ngcontent-c7="" class="search-form__input-wrapper">
                                <button _ngcontent-c7="" class="search-form__back" type="button"
                                        aria-label="Отменить поиск">
                                    <svg _ngcontent-c7="" height="16" width="16">
                                        <use _ngcontent-c7="" xlink:href="#icon-arrow-down"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </button>
                                <input _ngcontent-c7="" autocomplete="off"
                                       class="search-form__input ng-untouched ng-pristine ng-valid" name="search"
                                       search-input="" type="text" placeholder="Я ищу..."><!----><!---->
                                <button _ngcontent-c7="" class="search-form__microphone" type="button"
                                        aria-label="Голосовой поиск">
                                    <svg _ngcontent-c7="" height="19" width="14">
                                        <use _ngcontent-c7="" xlink:href="#icon-microphone"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </button>
                            </div><!----><!----></div><!---->
                        <button _ngcontent-c7=""
                                class="button button_color_green button_size_medium search-form__submit"> Найти
                        </button>
                    </form>
                </div>
                <ul class="header-actions">
                    <li class="header-actions__item header-actions__item_type_premium">
                        <style>@media screen and (max-width: 1024px) {
                                .header-actions__item_type_premium {
                                    display: none;
                                }
                            }

                            .header-actions__button_type_premium {
                                color: #fff;
                                -webkit-box-direction: normal;
                                -ms-flex-direction: column;
                                flex-direction: column;
                            }</style>
                        <a href="https://rozetka.com.ua/premium/"
                           class="header-actions__button header-actions__button_type_premium">
                            <div style="color:#fff;margin-bottom:4px;">Попробуйте</div>
                            <div class="hub-i-premium-icon"><img src="https://i2.rozetka.ua/images/40/40797.png"
                                                                 style="width: auto;height: auto;max-width: 100%; max-height: 100%;">
                            </div>
                        </a></li>
                    <li class="header-actions__item header-actions__item_type_bonuses js-app-bonuses"><!----></li>
                    <li class="header-actions__item header-actions__item_type_comparison js-app-comparison"
                        _nghost-c8="">
                        <div _ngcontent-c8="" class="header-actions__button-wrapper"><a _ngcontent-c8=""
                                                                                        class="header-actions__button header-actions__button_type_compare header-actions__button_state_active"><i
                                        _ngcontent-c8="" class="header-actions__button-icon">
                                    <svg _ngcontent-c8="" aria-hidden="true" height="40" width="40">
                                        <use _ngcontent-c8="" xlink:href="#icon-header-compare"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg>
                                </i><!----><span _ngcontent-c8="" class="header-actions__button-counter">9</span></a>
                            <!----><!---->
                            <div _ngcontent-c8="" class="header-actions__dropdown header-comparison"><!---->
                                <ul _ngcontent-c8="" class="header-comparison__list">
                                    <li _ngcontent-c8="" class="header-comparison__item"><a _ngcontent-c8=""
                                                                                            class="header-comparison__link"
                                                                                            href="https://rozetka.com.ua/printers-mfu/c80007/comparison/ids=98566930%2C12188779%2C69142310%2C19143201%2C69123188/">
                                            МФУ/Принтеры (5)
                                            <button _ngcontent-c8="" type="button">
                                                <svg _ngcontent-c8="" height="20" width="20">
                                                    <use _ngcontent-c8="" xlink:href="#icon-close-modal"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                </svg>
                                            </button>
                                        </a></li>
                                </ul>
                                <ul _ngcontent-c8="" class="header-comparison__list">
                                    <li _ngcontent-c8="" class="header-comparison__item"><a _ngcontent-c8=""
                                                                                            class="header-comparison__link"
                                                                                            href="https://rozetka.com.ua/accessories_pc/c80114/comparison/ids=96361822/">
                                            Аксессуары для ПК (1)
                                            <button _ngcontent-c8="" type="button">
                                                <svg _ngcontent-c8="" height="20" width="20">
                                                    <use _ngcontent-c8="" xlink:href="#icon-close-modal"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                </svg>
                                            </button>
                                        </a></li>
                                </ul>
                                <ul _ngcontent-c8="" class="header-comparison__list">
                                    <li _ngcontent-c8="" class="header-comparison__item"><a _ngcontent-c8=""
                                                                                            class="header-comparison__link"
                                                                                            href="https://rozetka.com.ua/kastruli-kovshi/c4626760/comparison/ids=57186183%2C106310751%2C106313301/">
                                            Кастрюли, ковши (3)
                                            <button _ngcontent-c8="" type="button">
                                                <svg _ngcontent-c8="" height="20" width="20">
                                                    <use _ngcontent-c8="" xlink:href="#icon-close-modal"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                </svg>
                                            </button>
                                        </a></li>
                                </ul>
                            </div><!----></div>
                    </li>
                    <li class="header-actions__item header-actions__item_type_wish js-app-wishlist">
                        <div class="header-actions__button-wrapper"><a
                                    class="header-actions__button header-actions__button_type_wish header-actions__button_state_active"
                                    href="https://my.rozetka.com.ua/profile/wishlists">
                                <svg aria-hidden="true" height="40" width="40">
                                    <use xlink:href="#icon-heart-empty"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg><!----><span class="header-actions__button-counter">5</span></a><!----></div>
                    </li>
                    <li class="header-actions__item header-actions__item_type_cart">
                        <div class="js-rz-cart" _nghost-c9="">
                            <div _ngcontent-c9="" class="header-actions__button-wrapper"><a _ngcontent-c9=""
                                                                                            class="header-actions__button header-actions__button_type_basket"
                                                                                            href="https://my.rozetka.com.ua/profile/cart">
                                    <svg _ngcontent-c9="" aria-hidden="true" height="40" width="40">
                                        <use _ngcontent-c9="" xlink:href="#icon-header-basket"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                    </svg><!----></a>
                                <div _ngcontent-c9="" class="header-actions__dropdown"><!---->
                                    <div _ngcontent-c9="" class="header-actions__dummy"><!---->
                                        <div _ngcontent-c9=""
                                             class="header-actions__dummy-icon header-actions__dummy-icon_type_cart">
                                            <svg _ngcontent-c9="" height="55" width="65">
                                                <use _ngcontent-c9="" xlink:href="#icon-header-basket"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                            </svg>
                                        </div>
                                        <div _ngcontent-c9=""
                                             class="header-actions__dummy-content header-actions__dummy-content_type_cart">
                                            <p _ngcontent-c9="" class="header-actions__dummy-title"> Ваша корзина
                                                пуста </p>
                                            <p _ngcontent-c9="" class="header-actions__dummy-text"> Добавляйте
                                                понравившиеся товары в корзину </p></div>
                                    </div><!----></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</div>