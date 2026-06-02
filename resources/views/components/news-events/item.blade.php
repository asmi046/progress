@props(['newsEvent'])

<a class="news-event-card" href="{{ route('news-events.show', $newsEvent->slug) }}">
    <span class="news-event-card__image-wrapper">
        <img class="news-event-card__image" src="{{ Storage::url($newsEvent->img) }}" alt="{{ $newsEvent->title }}">
    </span>

    <span class="news-event-card__content">
        <h3 class="news-event-card__title">{{ $newsEvent->title }}</h3>
        <span class="news-event-card__more">Подробнее...</span>
    </span>
</a>
