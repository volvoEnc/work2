@extends('client.layouts.main')
@section('title') Профиль @endsection
@section('content')
    <main>
        <section id="profile">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#information" class="nav-link active show" data-toggle="tab">Информация</a>
                    </li>
                    <li class="nav-item">
                        <a href="#my-orders" class="nav-link" data-toggle="tab">Мои заказы</a>
                    </li>
                    <li class="nav-item">
                        <a href="#favorites" class="nav-link" data-toggle="tab">Избранное</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="information" class="tab-pane content-item active show" role="tabpanel">
                        <form action="">
                            <div class="field row">
                                <div class="col-lg-3">
                                    <label for="name">Ваше имя,фамилия</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="name" name="name">
                                </div>
                            </div>
                            <div class="field row">
                                <div class="col-lg-3">
                                    <label for="number">Ваше телефон</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="number" name="number">
                                </div>
                            </div>
                            <div class="field row">
                                <div class="col-lg-3">
                                    <label for="email">Ваше e-mail</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="email" name="email">
                                </div>
                            </div>
                            <div class="field row">
                                <div class="col-lg-3">
                                    <label for="address">Ваше адрес</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="address" name="address">
                                </div>
                            </div>
                        </form>
                        <div class="button-group">
                            <a href="{{route('reset.password.step.1')}}" class="button">Смена пароля</a>
                            <a href="{{route('profile.show')}}" class="button">Сохранить</a>
                        </div>
                    </div>
                    <div id="my-orders" class="tab-pane content-item" role="tabpanel">
                        <div class="row" style="justify-content: center">
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="order row no-gutters">
                                    <div class="left-col col-lg-3  col-md-6 col-sm-6 col-6">
                                        <p>Индификатор заказа: <span>6</span> </p>
                                        <p>Дата заказа: <span>12.12.2012</span> </p>
                                    </div>
                                    <div class="right-col col-lg-3  col-md-6 col-sm-6 col-6">
                                        <p>Статус: <span>В обработке</span> </p>
                                        <p>Цена: <span>2000 р</span> </p>
                                    </div>
                                </div>
                                <div class="order row no-gutters">
                                    <div class="left-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Индификатор заказа: <span>5</span> </p>
                                        <p>Дата заказа: <span>12.12.2012</span> </p>
                                    </div>
                                    <div class="right-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Статус: <span class="soon">Скоро доставим</span> </p>
                                        <p>Цена: <span>2000 р</span> </p>
                                    </div>
                                </div>
                                <div class="order row no-gutters">
                                    <div class="left-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Индификатор заказа: <span>4</span> </p>
                                        <p>Дата заказа: <span>12.12.2012</span> </p>
                                    </div>
                                    <div class="right-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Статус: <span class="delivered">Доставлен</span> </p>
                                        <p>Цена: <span>2000 р</span> </p>
                                    </div>
                                </div>
                                <div class="order row no-gutters">
                                    <div class="left-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Индификатор заказа: <span>3</span> </p>
                                        <p>Дата заказа: <span>12.12.2012</span> </p>
                                    </div>
                                    <div class="right-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Статус: <span class="denied">Отказан</span> </p>
                                        <p>Цена: <span>2000 р</span> </p>
                                    </div>
                                </div>
                                <div class="order row no-gutters">
                                    <div class="left-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Индификатор заказа: <span>2</span> </p>
                                        <p>Дата заказа: <span>12.12.2012</span> </p>
                                    </div>
                                    <div class="right-col col-lg-3 col-md-6 col-sm-6 col-6">
                                        <p>Статус: <span class="delivered">Доставлен</span> </p>
                                        <p>Цена: <span>2000 р</span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <div class="navig">
                                    <button class="btn1">Назад</button>
                                    <button class="btn-number active">1</button>
                                    <button class="btn-number">2</button>
                                    <button class="btn1">Вперед</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="favorites" class="tab-pane content-item" role="tabpanel">
                        <h6 class="section-title">Ваши корзины</h6>
                        <div class="row">
                            <div class="col-lg-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#breakfast" class="nav-link active show" data-toggle="tab">Завтрак</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#lanch" class="nav-link" data-toggle="tab">Обед</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#dinner" class="nav-link" data-toggle="tab">Ужин</a>
                                    </li>
                                </ul>
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="create-box">
                                            <p>Создать подборку</p>
                                            <label for="name">Введите имя</label>
                                            <input type="text">
                                            <div class="links">
                                                <a href="#">Отменить</a>
                                                <a href="#">Создать</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-0 сol-md-6 col-sm-12 col-12">
                                        <select>
                                            <option>Все товары</option>
                                            <option>Завтрак</option>
                                            <option>Обед</option>
                                            <option>Ужин</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="tab-content">
                                    <div id="breakfast" class="tab-pane content-item active show" role="tabpanel">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div id="lanch" class="tab-pane content-item" role="tabpanel">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div id="dinner" class="tab-pane content-item" role="tabpanel">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                                <div class="popular-box row no-gutters">
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <h4 class="first">Сгущенка из грибов</h4>
                                                        <img class="product-img" src="images/popular.png" alt="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-6">
                                                        <div class="box-pc ">
                                                            <div class="popular-footer d-flex">
                                                                <a href="#">
                                                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                </a>
                                                                <p>777.77 рублей</p>
                                                                <div class="checkbox-wrap d-flex align-items-center">
                                                                    <input type="checkbox"  class="checkbox">
                                                                    <span class="checkbox-toggle">

                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-mobile">
                                                            <div class="popular-footer ">
                                                                <h4 class="second">Сгущенка из гриб...</h4>
                                                                <p>777.77 р</p>
                                                                <div class="carts">
                                                                    <a href="#">
                                                                        <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                                                                    </a>

                                                                    <a href="#">
                                                                        <div class="checkbox-wrap d-flex align-items-center">
                                                                            <input type="checkbox"  class="checkbox">
                                                                            <span class="checkbox-toggle">

                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
