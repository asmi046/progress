@extends('layouts.all')

@section('main')
    <section class="section-header">
        <div class="container">
            <h1 class="section-header__title">Контакты нашей компании</h1>
        </div>
        <div class="shadow"></div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Контакты нашей компании"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="page page_section">
        <div class="container">
            <div class="page_content contacts_page_section">
                <div class="content">

                    <div class="colls">
                        <div class="col">
                            <h2>Юридическая информация</h2>
                            <p class="label">Наименование:</p>
                            <p class="param mb-10">{{ $contacts['company_name'] }}</p>

                            <p class="label">ИНН:</p>
                            <p class="param mb-10">{{ $contacts['inn'] }}</p>

                            <p class="label">ОГРНИП:</p>
                            <p class="param mb-10">{{ $contacts['ogrn'] }}</p>

                        </div>

                        <div class="col">
                            <h2>Контакты</h2>

                            <p class="param mb-10">Адрес: {{ $contacts['adress'] }}</p>
                            <p class="param mb-10">Режим работы: {!! $contacts['work_time'] !!}</p>
                            <p class="param mb-10">тел. <a class="phone"
                                    href="tel:+7{{ phone_format($contacts['phone']) }}">{{ $contacts['phone'] }}</a></p>

                            <p class="param mb-10">e-mail: <a class="email"
                                    href="mailto:{{ $contacts['email'] }}">{{ $contacts['email'] }}</a></p>
                        </div>
                    </div>

                    @if (filled($contacts['geo']))
                        <h2>Как добраться</h2>
                        <x-map.map-in-page :name="$contacts['site_name']" :geo="$contacts['geo']" :adres="$contacts['adress']"
                            :phone="$contacts['phone']"></x-map.map-in-page>
                    @endif


                </div>
            </div>

        </div>
    </section>
@endsection
