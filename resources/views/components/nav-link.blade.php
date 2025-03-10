@props(['active' => false, 'message' => '', 'route' => ''])

@php
$classes = 'text-block';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="{{ url($route) }}" >
    {{ strtoupper($message) }}
    <span class="hover-line"></span>
</a>
