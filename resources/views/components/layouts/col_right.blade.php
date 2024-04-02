<div {{ $attributes->merge(['class' => 'col-12 order-1 order-md-2']) }}>
    <!-- This will be displayed first on mobile and second on desktop -->
    {{$slot}}
</div>
