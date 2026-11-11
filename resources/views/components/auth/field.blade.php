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
    <label for="{{ $name }}" class="mb-[7px] block text-[12px] font-normal leading-[18px] text-mediacat-label">
        {{ $label }}
    </label>

    <div class="relative">
        <span class="pointer-events-none absolute inset-y-0 left-[16px] flex items-center text-mediacat-faint">
            @if ($icon === 'lock')
                <x-icons.lock class="size-[24px]" />
            @else
                <x-icons.mail class="size-[24px]" />
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
            class="auth-input h-[41px] w-full rounded-[10px] border border-mediacat-border bg-white pl-[59px] pr-3 text-[12px] font-normal text-[#404040] outline-none transition placeholder:font-normal placeholder:text-mediacat-muted focus:border-mediacat focus:ring-2 focus:ring-mediacat/25"
        >
    </div>

    @if ($required)
        <p id="{{ $name }}-error" data-error-for="{{ $name }}" class="auth-error" hidden></p>
    @endif
</div>
