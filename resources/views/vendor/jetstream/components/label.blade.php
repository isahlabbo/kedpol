@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-purple-900']) }}>
    {{ $value ?? $slot }}
</label>
