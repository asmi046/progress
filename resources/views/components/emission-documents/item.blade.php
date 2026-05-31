@props(['document'])

<article class="emission-document-item">
    <h2 class="emission-document-item__title">{{ $document->title }}</h2>

    @if (!empty($document->description))
        <p class="emission-document-item__description">{{ $document->description }}</p>
    @endif

    <a class="button emission-document-item__button" href="{{ $document->file }}" download>
        Скачать
    </a>
</article>
