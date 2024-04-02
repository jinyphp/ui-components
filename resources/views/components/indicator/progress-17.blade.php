<div wire:loading.delay>


    <div style="display: flex;
        justify-content:center;
        align-items:center;
        background-color: rgba(0,0,0,0.3);
        position:fixed; top:0px; left:0px;z-index:9999;
        width:100%;height:100%;">

        <div class="loader"></div>

    </div>
</div>

{{-- https://css-loaders.com/progress/ --}}
@once
    @push('css')
<style>
    .loader {
    width: 120px;
    height: 20px;
        -webkit-mask: radial-gradient(circle closest-side,#000 94%,#0000) left/20% 100%;
        background: linear-gradient(#000 0 0) left/0% 100% no-repeat #ddd;
        animation: l17 2s infinite steps(6);
    }
    @keyframes l17 {
        100% {background-size:120% 100%}
    }
</style>
    @endpush
@endonce


