<div wire:loading.delay>
    {{-- https://css-loaders.com/progress/ --}}
    @once
        @push('css')
<style>
/* HTML: <div class="loader"></div> */
.loader {
  width: 55px;
  aspect-ratio: 1;
  --g1:conic-gradient(from  90deg at top    3px left  3px,#0000 90deg,#fff 0);
  --g2:conic-gradient(from -90deg at bottom 3px right 3px,#0000 90deg,#fff 0);
  background:
    var(--g1),var(--g1),var(--g1),var(--g1),
    var(--g2),var(--g2),var(--g2),var(--g2);
  background-position: 0 0,100% 0,100% 100%,0 100%;
  background-size: 25px 25px;
  background-repeat: no-repeat;
  animation: l11 1.5s infinite;
}
@keyframes l11 {
  0%   {background-size:35px 15px,15px 15px,15px 35px,35px 35px}
  25%  {background-size:35px 35px,15px 35px,15px 15px,35px 15px}
  50%  {background-size:15px 35px,35px 35px,35px 15px,15px 15px}
  75%  {background-size:15px 15px,35px 15px,35px 35px,15px 35px}
  100% {background-size:35px 15px,15px 15px,15px 35px,35px 35px}
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


