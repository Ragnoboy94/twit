<button {{ $attributes->merge(['type' => 'submit', 'class' => 'float-end btn btn-outline-primary']) }}>
    {{ $slot }}
</button>
