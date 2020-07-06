@extends('client.layouts.main')
@section('title') Корзина @endsection
@section('content')
    <main>
        <section id="placing">
            <div class="container">
                <div class="title">
                    <h2 class="section-title">
                        Оформить заказ
                    </h2>
                    <p>< Вернуться к заказу</p>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="address">Адрес доставки</label>
                            <input type="text" id="address">
                        </div>
                    </div>
                    <div class="row second-row">
                        <div class="col-lg-4">
                            <p class="select-title">Дата доставки</p>
                            <select name="data" id="data">

                                <option>Чт,28 мая</option>
                                <option>Пт,28 мая</option>
                            </select>
                        </div>
                        <div class="col-lg-6 time">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="select-title">Дата доставки</p>
                                    <select  name="data" id="time1">
                                        <option><span>не позднее </span>           21:00</option>
                                        <option>21:00</option>
                                        <option>22:00</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <select  name="data" id="time2">
                                        <option>21:00</option>
                                        <option>22:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="number">Ваш телефон</label>
                            <input type="text" id="number">
                        </div>
                        <div class="col-lg-3">
                            <label for="email">e-mail</label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Ваше Имя,Фамилия</label>
                            <input type="text" id="name">
                        </div>
                    </div>
                </form>
                <div class="order-info">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <p>Скоро с вами связется наш сотрудник, для <br>
                                подтверждения адреса и прочей шняги.</p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="info-price">
                                <p>Сумма за товары</p>
                                <p>1000,00 р</p>
                            </div>
                            <div class="info-price">
                                <p class="second">Стоимость доставки</p>
                                <p>100 000,00 р</p>
                            </div>
                            <div class="confirmation-order">
                                <div class="total">
                                    <p>Итого к оплате</p>
                                    <p style="font-size: 25px">3000,00 р</p>
                                </div>
                                <a href="#" class="button">Перейти к оплате</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
