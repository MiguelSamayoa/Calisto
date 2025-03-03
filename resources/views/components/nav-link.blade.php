@props(['active' => false, 'message' => '', 'route' => ''])

@php
$classes = 'text-block';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="{{ url($route) }}" >
    {{ strtoupper($message) }}
    <div class="hover-line"></div>
</a>
