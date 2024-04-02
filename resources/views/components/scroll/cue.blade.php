{{-- ScrollCue Script Component --}}
@once
    @push('scripts')
        <script src="/assets/libs/scrollcue/scrollCue.min.js"></script>
        <script>
            // Your custom JavaScript...
            scrollCue.init(
                {
                    interval:-400,
                    duration:600,
                    percentage:.8
                }
            ),
            scrollCue.update();
        </script>
    @endpush
@endonce

<section {{ $attributes }}>
    {{$slot}}
</section>
