<div wire:loading.delay>
    {{-- https://css-loaders.com/progress/ --}}
    @once
        @push('css')
<style>
    .loader {
    width: 120px;
    height: 20px;
    -webkit-mask:linear-gradient(90deg,#000 70%,#0000 0) 0/20%;
    background:
    linear-gradient(#000 0 0) 0/0% no-repeat
    #ddd;
    animation: l4 2s infinite steps(6);
    }
    @keyframes l4 {
        100% {background-size:120%}
    }
</style>
        @endpush
    @endonce

    <div style="display: flex;
        justify-content:center;
        align-items:center;
        background-color: rgba(0,0,0,0.3);
        position:fixed; top:0px; left:0px;z-index:9999;
        width:100%;height:100%;">

        <div class="loader"></div>

    </div>
</div>


