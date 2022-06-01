@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-orange-500 text-md font-semibold leading-5 text-orange-500 focus:outline-none focus:border-orange-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold leading-5 text-white hover:text-orange-700 hover:border-orange-300 focus:outline-none focus:text-orange-700 focus:border-orange-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
