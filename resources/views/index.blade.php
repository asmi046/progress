@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section id="clinic-header" class="clinic-header">
        <div class="container">
            <div class="clinic-header__inner">
                <a class="clinic-header__logo" href="{{ url('/') }}" aria-label="На главную">
                    <img src="{{ asset('img/logo.png') }}" alt="ЗАО Прогресс">
                </a>

                <div class="clinic-header__menu">
                    <x-menues.puncts></x-menues.puncts>
                </div>

                <div class="clinic-header__contacts">
                    <a class="clinic-header__phone" href="tel:+74712343090">+7 (4712) 34-30-90</a>
                    <a class="clinic-header__email" href="mailto:info@progress-apk.ru">info@progress-apk.ru</a>
                </div>
            </div>
        </div>
    </section>

    <section id="main-swiper" class="main-swiper">

        <swiper-container class="main-swiper__slider js-main-swiper" init="false">

            <swiper-slide class="main-swiper__slide">
                <div class="container">
                    <img class="main-swiper__image" src="{{ asset('img/b1_main.webp') }}"
                        alt="ЗАО Прогресс - Точные технологии">
                    <div class="container main-swiper__content-wrap">
                        <div class="main-swiper__content">
                            <h1 class="main-swiper__title">ЗАО "ПРОГРЕСС"</h1>
                            <p class="main-swiper__subtitle">Точные технологии. Высокие стандарты. Уверенный результат.</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide class="main-swiper__slide">
                <div class="container">
                    <img class="main-swiper__image" src="{{ asset('img/b2_main.webp') }}"
                        alt="ЗАО Прогресс - Высокие стандарты">
                    <div class="container main-swiper__content-wrap">
                        <div class="main-swiper__content">
                            <p class="main-swiper__title">ЗАО "ПРОГРЕСС"</p>
                            <p class="main-swiper__subtitle">Точные технологии. Высокие стандарты. Уверенный результат.</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
    </section>

    <section id="about-company" class="about-company">
        <div class="container">
            <div class="about-company__inner">
                <div class="about-company__row about-company__row--top">
                    <div class="about-company__text-block">
                        <h2 class="about-company__title">Профессионализм, проверенный временем</h2>
                        <hr class="about-company__line">
                        <p class="about-company__text">
                            Мы строим работу на фундаменте, который не зависит от внешних обстоятельств. Опыт,
                            накопленный за годы практики, позволяет нам сохранять баланс между проверенными решениями и
                            внедрением современных подходов. Результат — стабильность, которую ценят партнеры.
                        </p>
                    </div>

                    <div class="about-company__image-block">
                        <img src="{{ asset('img/about_1.webp') }}" alt="Профессионализм, проверенный временем">
                    </div>
                </div>

                <div class="about-company__row about-company__row--bottom">
                    <div class="about-company__image-block">
                        <img src="{{ asset('img/about_2.webp') }}" alt="Технологичность">
                    </div>

                    <div class="about-company__text-block about-company__text-block--gray">
                        <h2 class="about-company__title">Технологичность</h2>
                        <hr class="about-company__line">
                        <p class="about-company__text">
                            Мы строим работу на фундаменте, который не зависит от внешних обстоятельств. Опыт,
                            накопленный за годы практики, позволяет нам сохранять баланс между проверенными решениями и
                            внедрением современных подходов. Результат — стабильность, которую ценят партнеры.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="company-numbers" class="company-numbers">
        <div class="container">
            <h2 class="company-numbers__title">Наша компания в цифрах</h2>

            <div class="company-numbers__grid">
                <div class="company-numbers__card">
                    <p class="company-numbers__value">20+ лет</p>
                    <hr class="company-numbers__line">
                    <p class="company-numbers__label">Непрерывного развития</p>
                </div>

                <div class="company-numbers__card">
                    <p class="company-numbers__value">6 000+</p>
                    <hr class="company-numbers__line">
                    <p class="company-numbers__label">Посевных площадей</p>
                </div>

                <div class="company-numbers__card">
                    <p class="company-numbers__value">70+</p>
                    <hr class="company-numbers__line">
                    <p class="company-numbers__label">Единиц высокопроизводительной техники</p>
                </div>

                <div class="company-numbers__card">
                    <p class="company-numbers__value">100%</p>
                    <hr class="company-numbers__line">
                    <p class="company-numbers__label">Обеспеченность энергоресурсами</p>
                </div>
            </div>
        </div>
    </section>

@endsection
