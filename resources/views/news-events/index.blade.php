@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">Новости и события</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Новости и события"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">
            <div class="news-events-grid">
                @foreach ($newsEvents as $item)
                    <x-news-events.item :news-event="$item"></x-news-events.item>
                @endforeach
            </div>
        </div>
    </section>
@endsection
