{{-- 요소를 가운데 정렬 배치 합니다.--}}
<div {{$attributes->merge(['class' => 'd-flex justify-content-center'])}}>

    {{$slot}}

</div>
