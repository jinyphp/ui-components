{{-- 페이지 중복 사용 충돌을 방지하기 위하여 유일한 키 생성 --}}
@php
    $uid = uniqid(mt_rand(), true);
    // 소수점(.)을 빈 문자열로 대체하여 제거
    $uid = str_replace('.', '', $uid);
@endphp

{{-- 차트 캔버스 생성 --}}
<article>
    <canvas id="myChart-bar-{{$uid}}"></canvas>
</article>

{{-- 스크립트 이중삽입 방지 --}}
@once
    @push('script')
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
        @vite(['resources/js/chart.js'])
    @endpush
@endonce

{{-- 차트생성 자바스크립트 --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const ctx = document.getElementById('myChart-bar-{{$uid}}');

        new Chart(ctx, {
            type: 'bar',
            data: {!! $slot !!},
            options: {
                indexAxis: 'y',
            }
        });
    });
</script>
