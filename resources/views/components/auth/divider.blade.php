{{-- Garis pemisah dengan label di tengah (melebar 20px keluar padding kartu, sesuai desain) --}}
<div {{ $attributes->merge(['class' => '-mx-[20px] flex h-5 items-center gap-[16px]']) }}>
    <span class="h-px flex-1 bg-mediacat-muted"></span>
    <span class="text-[12px] font-normal leading-none text-mediacat-faint">{{ $slot }}</span>
    <span class="h-px flex-1 bg-mediacat-muted"></span>
</div>
