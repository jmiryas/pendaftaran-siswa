@props(['label', 'name', 'placeholder'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>

    <textarea name="{{ $name }}" id="{{ $name }}" cols="10" rows="3" placeholder="{{ $placeholder }}"
        class="form-control">{{ old($name) ?? $slot }}</textarea>
</div>