{{-- Label + input dengan ikon di sisi kiri (sesuai desain) --}}
@props([
    'label',
    'name',
    'type' => 'text',
    'placeholder' => '',
    'icon' => 'mail',
    'autocomplete' => 'off',
    'value' => null,
    'required' => false,
])

<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <label for="{{ $name }}" class="mb-1 block text-[12px] font-normal leading-[18px] text-medcare-label">
        {{ $label }}
    </label>

    <div class="relative">
        <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-[#c6c6c6]">
            @if ($icon === 'lock')
                <x-icons.lock class="size-[18px]" />
            @else
                <x-icons.mail class="size-[18px]" />
            @endif
        </span>

        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            @if (! is_null($value)) value="{{ $value }}" @endif
            placeholder="{{ $placeholder }}"
            autocomplete="{{ $autocomplete }}"
            @if ($required)
                required
                aria-required="true"
                aria-describedby="{{ $name }}-error"
                data-required-message="{{ $label }} wajib diisi"
            @endif
            class="auth-input h-10 w-full rounded-[8px] border border-medcare-border bg-white pl-[58px] pr-3 text-[12px] font-normal text-[#404040] outline-none transition placeholder:font-normal placeholder:text-medcare-muted focus:border-medcare focus:ring-2 focus:ring-medcare/25"
        >
    </div>

    @if ($required)
        <p id="{{ $name }}-error" data-error-for="{{ $name }}" class="auth-error" hidden></p>
    @endif
</div>
