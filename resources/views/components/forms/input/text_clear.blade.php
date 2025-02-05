{{-- 텍스트 입력 필드에 클리어 버튼을 추가한 컴포넌트 --}}
<div class="position-relative mt-3">
    <input type="text"
        {{ $attributes->merge(['class' => 'form-control bg-image-none text-start']) }}
        oninput="this.nextElementSibling.style.display = this.value ? 'block' : 'none'">
    <button class="btn fs-xl btn-secondary border-0 position-absolute top-0 end-0 mt-1 me-1 search-clear-btn"
        style="flex-shrink:0; width:2.0rem; height:2.0rem; padding:0; display:none; background-color:transparent;"
        wire:click="clear"
        onclick="this.previousElementSibling.value=''; this.style.display='none';"
        aria-label="{{ $attributes->get('aria-label') ?? '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
        </svg>
    </button>
</div>
{{$slot}}
