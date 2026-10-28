{{-- Garis pemisah dengan label di tengah --}}
<div {{ $attributes->merge(['class' => 'flex items-center gap-4']) }}>
    <span class="h-px flex-1 bg-[#dedede]"></span>
    <span class="text-[12px] font-normal leading-none text-medcare-muted">{{ $slot }}</span>
    <span class="h-px flex-1 bg-[#dedede]"></span>
</div>
