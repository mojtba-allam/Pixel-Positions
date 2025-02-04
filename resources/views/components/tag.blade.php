@props(['size' => 'base', 'tag'])
@php
    $classes = 'font-bold bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-360';
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }
    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>
