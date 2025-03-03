@props(['active' => false, 'message' => ''])

@php
$classes = 'text-block';
@endphp

<div class="baner">
    <p {{ $attributes->merge(['class' => $classes]) }}> {{ $slot }} </p>
</div>
