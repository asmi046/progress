@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">Товары и услуги</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Товары и услуги"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">
            <div class="product-services-grid">
                @foreach ($productServices as $item)
                    <x-product-services.item :product-service="$item"></x-product-services.item>
                @endforeach
            </div>
        </div>
    </section>
@endsection
