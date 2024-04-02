<div {{ $attributes->merge(['class' => 'col-12 order-2 order-md-1']) }}>
    <!-- This will be displayed second on mobile and first on desktop -->
    {{$slot}}
</div>
