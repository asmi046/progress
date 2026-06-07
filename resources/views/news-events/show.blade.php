@extends('layouts.all')

@section('main')

    <section class="section-header">
        <div class="container">
            <h1>{{ $newsEvent->title ?? '' }}</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="{{ $newsEvent->title ?? '' }}"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">


            <div class="product-service-detail">
                <div class="product-service-detail__gallery">
                    <swiper-container class="product-service-detail__swiper js-product-gallery-swiper" init="false">
                        @if ($newsEvent->img)
                            <swiper-slide class="product-service-detail__slide">
                                <img class="product-service-detail__image" src="{{ Storage::url($newsEvent->img) }}"
                                    alt="{{ $newsEvent->title ?? '' }}">
                            </swiper-slide>
                        @endif

                        @if ($newsEvent->galery)
                            @foreach ($newsEvent->galery as $image)
                                <swiper-slide class="product-service-detail__slide">
                                    <img class="product-service-detail__image" src="{{ Storage::url($image['img']) }}"
                                        alt="{{ $newsEvent->title ?? '' }}">
                                </swiper-slide>
                            @endforeach
                        @endif

                    </swiper-container>

                </div>

                <div class="product-service-detail__content text_styles">
                    {!! $newsEvent->description ?? '' !!}
                </div>
            </div>
        </div>
    </section>
@endsection
