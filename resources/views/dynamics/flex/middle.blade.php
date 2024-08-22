{{-- 내부 div: 수직 및 수평 중앙 정렬 --}}
<div {{$attributes->merge([
        'class' => "d-flex flex-column justify-content-center align-items-center text-center",
        'style' => "min-height: 100vh;"])
    }}>

    {{$slot}}

</div>
