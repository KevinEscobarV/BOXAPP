@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 transition-colors bg-gradient-to-r from-mustard-500 to-red-600 text-white text-white text-white px-3 py-2 rounded-md text-sm font-medium border-b-2'
            : 'flex items-center p-2 hover:bg-mustard-600 hover:text-white transition-colors bg-black text-white px-3 py-2 rounded text-sm font-medium border-b-2 border-opacity-50';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span aria-hidden="true">
        {{ $path }}
    </span>
    <span class="ml-2 text-sm"> {{ $slot }} </span>
</a>
