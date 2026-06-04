@props(['productService'])

<article class="product-service-card">
    <a class="product-service-card__image-link" href="{{ route('product-services.show', $productService->slug) }}">
        <img class="product-service-card__image" src="{{ Storage::url($productService->img) }}"
            alt="{{ $productService->title }}">
    </a>

    <div class="product-service-card__content">
        <h3 class="product-service-card__title">{{ $productService->title }}</h3>

        <a class="product-service-card__more" href="{{ route('product-services.show', $productService->slug) }}">
            Подробнее...
        </a>
    </div>
</article>
