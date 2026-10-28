{{-- Checkbox ungu "Ingat saya" --}}
@props(['name' => 'remember', 'checked' => true, 'label' => 'Ingat saya'])

<label {{ $attributes->merge(['class' => 'inline-flex cursor-pointer select-none items-center gap-[10px]']) }}>
    <input type="checkbox" name="{{ $name }}" value="1" class="peer sr-only" @checked($checked)>

    <span
        class="grid size-5 shrink-0 place-items-center rounded-[4px] border border-[#cdcdcd] bg-white text-white transition peer-checked:border-medcare-check peer-checked:bg-medcare-check peer-checked:[&>svg]:opacity-100 peer-focus-visible:ring-2 peer-focus-visible:ring-medcare-check/40 peer-focus-visible:ring-offset-2"
    >
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round"
            stroke-linejoin="round" class="size-[13px] opacity-0 transition" aria-hidden="true">
            <path d="m5 12.5 4.5 4.5L19 7" />
        </svg>
    </span>

    <span class="text-[12px] font-normal leading-[15px] text-medcare-label">{{ $label }}</span>
</label>
