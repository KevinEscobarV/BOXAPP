@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-mustard-500 text-md font-semibold leading-5 text-mustard-500 focus:outline-none focus:border-mustard-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-semibold leading-5 text-white hover:text-mustard-700 hover:border-mustard-300 focus:outline-none focus:text-mustard-700 focus:border-mustard-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
