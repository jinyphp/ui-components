{{-- https://flatpickr.js.org/examples/ --}}
@php
$flatpickrId = uniqid("_flatpickr_".random_int(0,1000));
@endphp

<input {{ $attributes->merge(['class' => 'form-control']) }}
    id="{{$flatpickrId}}"
    type="text"
    readonly="readonly"/>

{{-- Flatpickr를 초기화하고 설정 --}}
<script>
    flatpickr("#{{$flatpickrId}}", {
            dateFormat: "Y-m-d" // 날짜 형식 지정
    });
</script>
