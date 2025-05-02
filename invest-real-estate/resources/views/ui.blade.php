@extends('layouts.app')

@section('content')


    @include('partials.site.header')

    <section class="pt-100">
        <div class="container">
            <div class="h3 pb-60">
                Cards
            </div>
            <div>
                <!-- карточка продукта -->
                <!-- обязательные поля название и ссылка, наличие -->
                <!-- могут быть либо характеристики либо текст -->
                <!-- если карточка будет в слайдере slide="true"-->
                <!-- если карточка будет горизонтальной hor="false"-->
                <x-card.advantages
                    title="Продумано"
                    description="Инвестиции&nbsp;распределены
в&nbsp;4-х странах: Индонезия, Тайланд, Грузия, Азербайджан"
                    slide="false"
                />



                <!-- карточка новости -->
                <!-- обязательные поля название и ссылка -->
                <!-- если карточка будет в слайдере slide="true"-->
{{--                <div style="width: 1100px; height: 466px" class="news-block__slider mb-60 mt-60">--}}
{{--                    <div class="swiper-wrapper news-block__slider-wrap">--}}
{{--                        @for ($i = 0; $i < 2; $i++)--}}
{{--                            <div class="swiper-slide news-block__slide">--}}
{{--                                <!-- карточка новости -->--}}
{{--                                <x-card.news--}}
{{--                                    img="{{ 'images/news1.png' }}"--}}
{{--                                    title="Заголовок"--}}
{{--                                    date="20.03.2024"--}}
{{--                                    text="Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более."--}}
{{--                                    link="/news-detail"--}}
{{--                                    slide="true"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                        @endfor--}}
{{--                    </div>--}}
{{--                    @php--}}
{{--                        $page = ['page' => '3', 'last' => '2'];--}}
{{--                    @endphp--}}
{{--                </div>--}}
{{--                <!-- карточка услуги -->--}}
{{--                <!-- обязательные поля название и ссылка -->--}}
{{--                <div style="width: 1100px; height: 451px" class="work-section__slider">--}}
{{--                    <div class="swiper-wrapper work-section__slides">--}}
{{--                        @for ($i = 0; $i < 2; $i++)--}}
{{--                            <div class="swiper-slide work-section__slide">--}}
{{--                                <x-card.servise--}}
{{--                                    img="{{'images/printer.png'}}"--}}
{{--                                    link="/"--}}
{{--                                    slide="true"--}}
{{--                                    title="Заголовок услуги"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                        @endfor--}}
{{--                    </div>--}}

{{--                    @php--}}
{{--                        $page = ['page' => '3', 'last' => '2'];--}}
{{--                    @endphp--}}
{{--                </div>--}}
{{--                <!-- карточка отзыва -->--}}
{{--                <!-- обязательные поля название, текст, дата  -->--}}
{{--                <!-- если карточка будет в слайдере slide="true"-->--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>


