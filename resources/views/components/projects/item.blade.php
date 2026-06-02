@props(['project'])

<article class="project-card">
    @if (! empty($project->img))
        <div class="project-card__image-wrapper">
            <img class="project-card__image" src="{{ $project->img }}" alt="{{ $project->title }}">
        </div>
    @endif

    <div class="project-card__content">
        <h3 class="project-card__title">{{ $project->title }}</h3>

        @if (! empty($project->description))
            <p class="project-card__description">{{ $project->description }}</p>
        @endif

        <a class="button project-card__button" href="{{ route('projects.show', $project->slug) }}">
            Подробнее...
        </a>
    </div>
</article>