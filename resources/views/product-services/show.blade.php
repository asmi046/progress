@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">{{ $productService->title ?? '' }}</h1>
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

        </div>
    </section>
@endsection
