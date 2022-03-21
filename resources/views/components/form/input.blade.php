@props(['label', 'name', 'placeholder', 'type' => "text"])

<div class="mb-3">
    <label for="name" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="name" placeholder="{{ $placeholder }}" {{
        $attributes(["value"=> old("$name")]) }} />

    @error($name)
    <p class="text-danger text-xs mt-1">{{ $message }}</p>
    @enderror
</div>