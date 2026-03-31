@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">{{ $page->title }}</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page">
        <div class="container text_styles">
            <div class="page__content">
                {!! $page->description !!}
            </div>
        </div>
    </section>
@endsection
