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
                    <swiper-container class="product-service-detail__swiper js-product-gallery-swiper" init="false">
                        @if ($productService->img)
                            <swiper-slide class="product-service-detail__slide">
                                <img class="product-service-detail__image" src="{{ Storage::url($productService->img) }}"
                                    alt="{{ $productService->title ?? '' }}">
                            </swiper-slide>
                        @endif

                        @if ($productService->galery)
                            @foreach ($productService->galery as $image)
                                <swiper-slide class="product-service-detail__slide">
                                    <img class="product-service-detail__image" src="{{ Storage::url($image['img']) }}"
                                        alt="{{ $productService->title ?? '' }}">
                                </swiper-slide>
                            @endforeach
                        @endif

                    </swiper-container>

                </div>

                <div class="product-service-detail__content text_styles">
                    {!! $productService->description ?? '' !!}
                    @if ($productService->sertificates)
                        @foreach ($productService->sertificates as $certificate)
                            <x-a-icon href="{{ Storage::url($certificate['file']) }}"
                                icon="doc_pdf">{{ $certificate['title'] }}</x-a-icon>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
