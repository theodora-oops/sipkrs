<button {{ $attributes->merge([
    'class' => 'px-4 py-2 rounded text-white font-medium transition'
]) }}>
    {{ $slot }}
</button>