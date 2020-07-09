<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-bottom">
        <div class="container">
            <div class="pc-menu">
                <div class='logo'>dostavkalenta.ru</div>
                <div class='katalog'>каталог</div>
                <div class='search-menu'>
                    <form action="">
                        <input type="search" placeholder="Морковь из сыра">
                        <button type="submit"><img src="../header/header-img/lupa.png" alt=""></button>
                    </form>
                </div>
                @auth
                    <a href="{{route('cart')}}" class="button2 button ">Корзина</a>
                    <a href="{{route('profile.show')}}" class="button button3 ">Профиль</a>
                @endauth
                @guest
                    <a href="{{route('login.show')}}" class="button button3 ">Войти</a>
                @endguest
            </div>
            <div class="mobile-menu">
                <div class=" burger-button">
                    <div class="line"></div>
                </div>
                <div class="logo">
                    <a href="#">dostavkalenta.ru</a>
                </div>
                <div class="cart">
                    <img src="../header/header-img/cart.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu_nav">
        <div class="container">
            <div class="links">
                <a class="header-link" href="#">Доставка</a>
                <a class="header-link" href="#">Оплата</a>
                <a class="header-link" href="#">Возврат</a>
            </div>
            <form action="">
                <input type="search" placeholder="поиск в каталоге товаров">
                <button type="submit"><img src="../header/header-img/lupa.png" alt=""></button>
            </form>
            <select>
                <option>Продукты питания</option>
                <option>Для детей</option>
                <option>Для дома и отдыха</option>
                <option>Красота и здоровье</option>
                <option>Для животных</option>
                <option>Товар у кассы</option>
            </select>
            <div class="dropdown-content">
                <div class="categories row">
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown1.png" alt="">
                        <p>Молочные продукты. <br> Яйцо.Сыры</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown2.png" alt="">
                        <p>Овощи.Фрукты. <br> Грибы</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown3.png" alt="">
                        <p>Детское питание</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown4.png" alt="">
                        <p>Крупы.Макароны. <br> Бакалея</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown5.png" alt="">
                        <p>Крупы.Макароны. <br> Бакалея</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown6.png" alt="">
                        <p>Крупы.Макароны. <br> Бакалея</p>
                    </a>
                    <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-12">
                        <img src="../header/header-img/dropdown7.png" alt="">
                        <p>Крупы.Макароны. <br> Бакалея</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav>

        <div class=" nav-menu ">
            <div class="container">
                <ul class="nav-link d-flex">

                    <li>
                        <a class="dropdown" href="{{route('categories.main.index', ['id' => 1])}}">Продукты питания
                        </a>
                        <div class="dropdown-content row no-gutters">
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="{{route('categories.group.index', ['id' => 1])}}" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>


                    </li>

                    <li>
                        <a class="dropdown" href="#">Для животных</a>
                        <div class="dropdown-content row no-gutters">
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>

                    </li>
                    <li>
                        <a class="dropdown" href="#">Для дома и отдыха</a>
                        <div class="dropdown-content row no-gutters">
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>

                    </li>
                    <li>
                        <a class="dropdown" href="#">Для детей</a>
                        <div class="dropdown-content row no-gutters">
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>

                    </li>
                    <li>
                        <a class="dropdown" href="#">Красота и здоровье</a>
                        <div class="dropdown-content row no-gutters">
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>

                    </li>
                    <li>
                        <a class="dropdown" href="#">Товар у кассы</a>
                        <div class="dropdown-content row no-gutters">
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown1.png" alt="">
                                <p>Молочные продукты. <br> Яйцо.Сыры</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown2.png" alt="">
                                <p>Овощи.Фрукты. <br> Грибы</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown3.png" alt="">
                                <p>Детское питание</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown4.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown5.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown6.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                            <a href="#" class="box col-lg-2">
                                <img src="../header/header-img/dropdown7.png" alt="">
                                <p>Крупы.Макароны. <br> Бакалея</p>
                            </a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer>
    <div class="footer-nav">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" box col-lg-3  col-md-4 col-sm-4">
                    <div class="footer-nav_box">
                        <h4>dostavkalenta.ru</h4>
                        <p class="title">сервис по доставке товаров
                            из гипермаркетов lenta</p>
                        <p>@dostavkalenta.ru</p>
                    </div>
                </div>
                <div class="  box col-lg-3 col-md-0 col-sm-0 ">
                    <div class="footer-nav_box box3">
                        <p class="title">Контакты</p>
                        <p class="title" style="margin-bottom: 15px">+7(958)586-87-54</p>
                        <p class="title-gray">go@dostavkalenta.ru</p>
                    </div>
                </div>
                <div class="box col-lg-3 col-md-4 col-sm-4 ">
                    <div class="footer-nav_box">
                        <p class="title">Покупателям</p>
                        <a href="#" class="title-gray">о нашем сервисе</a>
                        <a href="#" class="title-gray">оплата</a>
                        <a href="#" class="title-gray">доставка</a>
                        <a href="{{route('faq')}}" class="title-gray">частые вопросы</a>
                        <a href="#" class="title-gray">политика конфиденциальности</a>
                    </div>
                </div>
                <div class=" box col-lg-3 col-md-4 col-sm-4 ">
                    <div class="footer-nav_box">
                        <p class="title">Профиль</p>
                        <a href="{{route('register.show')}}" class="title-gray">вход/регистрация</a>
                        <br>
                        <a href="{{route('reset.password.step.1')}}" class="title-gray">восстановить пароль</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row footer-bottom_row">
                <div class="col-lg-3 col-sm-6 col-4">
                    <p class="title-gray" style="text-align: left!important;">copyright</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-8">
                    <div class="social d-flex">
                        <a href="#">
                            <img src="../footer/footer-img/whatsapp.png" alt="">
                        </a>
                        <a href="#">
                            <img src="../footer/footer-img/telegram.png" alt="">
                        </a>
                        <a href="#">
                            <img src="../footer/footer-img/vk.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
