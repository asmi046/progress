@extends('layouts.all')

@section('main')

    <section class="section-header">
        <div class="container">
            <h1>{{ $productService->title ?? '' }}</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="{{ $productService->title ?? '' }}"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">


            <div class="product-service-detail">
                <div class="product-service-detail__gallery">
                    @if ($productService->galery)
                        <swiper-container class="product-service-detail__swiper js-product-gallery-swiper" init="false">
                            @foreach ($productService->galery as $image)
                                <swiper-slide class="product-service-detail__slide">
                                    <img class="product-service-detail__image" src="{{ Storage::url($image['img']) }}"
                                        alt="{{ $productService->title ?? '' }}">
                                </swiper-slide>
                            @endforeach
                        </swiper-container>
                    @endif
                </div>

                <div class="product-service-detail__content text_styles">
                    {!! $productService->description ?? '' !!}
                </div>
            </div>
            <x-tovar-note></x-tovar-note>
        </div>
    </section>
@endsection
