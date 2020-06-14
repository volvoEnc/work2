@extends('client.layouts.main')
@section('title') F.A.Q @endsection
@section('content')
    <main>
        <div class="container">
            <div id="questions">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#titles" class="nav-link active show" data-toggle="tab">Частые вопросы</a>
                            </li>
                            <li class="nav-item">
                                <a href="#delivery" class="nav-link" data-toggle="tab">Доставка</a>
                            </li>
                            <li class="nav-item">
                                <a href="#pay" class="nav-link" data-toggle="tab">Оплата</a>
                            </li>
                            <li class="nav-item">
                                <a href="#denied" class="nav-link" data-toggle="tab">Возврат и отмена заказа</a>
                            </li>
                            <li class="nav-item">
                                <a href="#answer" class="nav-link" data-toggle="tab">Вопросы и ответы</a>
                            </li>
                            <li class="nav-item">
                                <a href="#reviews" class="nav-link" data-toggle="tab">Отзывы</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="tab-content">
                            <div id="titles" class="tab-pane content-item active show" role="tabpanel">
                                <div class="box">
                                    <p class="title">Заголовки</p>
                                    <p class="description">Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                    </p>
                                    <p class="subtitle">
                                        - lorem
                                    </p>
                                    <p class="subtitle">
                                        - lorem
                                    </p>
                                    <p class="subtitle">
                                        - lorem
                                    </p>
                                    <p class="subtitle last">
                                        - lorem
                                    </p>
                                    <p class="title">Заголовки</p>
                                    <p class="secription">Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                        Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem
                                    </p>
                                </div>
                            </div>
                            <div id="delivery" class="tab-pane content-item" role="tabpanel">
                                <div class="box">
                                    Доставка
                                </div>
                            </div>
                            <div id="pay"  class="tab-pane content-item" role="tabpanel">
                                <div class="box">
                                    Оплата
                                </div>
                            </div>
                            <div id="denied"  class="tab-pane content-item" role="tabpanel">
                                <div class="box">
                                    Возврат и отмена заказа
                                </div>
                            </div>
                            <div id="answer"  class="tab-pane content-item" role="tabpanel">
                                <div class="box">
                                    Вопросы и ответы
                                </div>
                            </div>
                            <div id="reviews"  class="tab-pane content-item" role="tabpanel">
                                <div class="box">
                                    Отзывы
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
