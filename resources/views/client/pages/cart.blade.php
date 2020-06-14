@extends('client.layouts.main')
@section('title') Корзина @endsection
@section('content')
    <main>
        <section id="basket">
            <div class="container">
                <div class="basket-title">
                    <h2 class="section-title">
                        Ваша Корзина
                    </h2>
                    <a class="cleaning-basket" href="#">Очистить корзину</a>
                </div>
                <div class="box">
                    <div class="row" style="padding: 0 15px">
                        <div class="col-lg-12 basket-item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div class="product">
                                        <img src="images/194113.png" alt="продукт">
                                        <p>сгущенка из грибов</p>
                                    </div>
                                </div>

                                <div class=" col-lg-7 col-md-12 product-options justify-content-end">
                                    <div class="row" style="padding: 0 15px">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4  price">
                                            <p class="title">Цена</p>
                                            <p>777.77 р</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 quantity">
                                            <button class="minus">-</button>
                                            <p>10</p>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="total col-lg-4 col-md-4  col-sm-4 col-4">
                                            <p class="title">Итого</p>
                                            <p>1234,5р</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 basket-item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div class="product">
                                        <img src="images/194113.png" alt="продукт">
                                        <p>сгущенка из грибов</p>
                                    </div>
                                </div>

                                <div class=" col-lg-7 col-md-12 product-options justify-content-end">
                                    <div class="row" style="padding: 0 15px">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4  price">
                                            <p class="title">Цена</p>
                                            <p>777.77 р</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 quantity">
                                            <button class="minus">-</button>
                                            <p>10</p>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="total col-lg-4 col-md-4  col-sm-4 col-4">
                                            <p class="title">Итого</p>
                                            <p>1234,5р</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 basket-item">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div class="product">
                                        <img src="images/194113.png" alt="продукт">
                                        <p>сгущенка из грибов</p>
                                    </div>
                                </div>

                                <div class=" col-lg-7 col-md-12 product-options justify-content-end">
                                    <div class="row" style="padding: 0 15px">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4  price">
                                            <p class="title">Цена</p>
                                            <p>777.77 р</p>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 quantity">
                                            <button class="minus">-</button>
                                            <p>10</p>
                                            <button class="plus">+</button>
                                        </div>
                                        <div class="total col-lg-4 col-md-4  col-sm-4 col-4">
                                            <p class="title">Итого</p>
                                            <p>1234,5р</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-3 firts-buttons-group">
                            <a href="#">
                                <img src="images/1.png" alt="">
                            </a>
                            <div class="price">
                                <p>Итого к оплате</p>
                                <p class="num">3000.77 р</p>
                            </div>
                            <a class="share" href="#">
                                <img src="images/2.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 price-block">
                            <div class="price">
                                <p>Итого к оплате</p>
                                <p class="num">3000.77 р</p>
                            </div>
                        </div>
                        <div class="col-lg-3 last-button-group" >
                            <a href="{{route('checkout', ['id' => 2])}}" class="button" >Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
