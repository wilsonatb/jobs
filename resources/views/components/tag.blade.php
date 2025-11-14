@props(['size' => 'base'])

@php

$classes = "bg-white/10 hover:bg-white/25  rounded-xl font-bold transition-colors duration-300";

    if($size === 'base') {
        $classes .= " px-3 py-1 text-2xs";
    }

    if($size === 'large') {
        $classes .= " px-5 py-1 text-sm";
    }

@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>