@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">Эмиссионные документы</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Эмиссионные документы"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">
            <div class="emission-documents-list">
                @foreach ($documents as $document)
                    <x-emission-documents.item :document="$document"></x-emission-documents.item>
                @endforeach
            </div>
        </div>
    </section>
@endsection
