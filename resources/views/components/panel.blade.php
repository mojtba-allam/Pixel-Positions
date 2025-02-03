@php
    $Classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-500 group  transition-colors duration-300';
@endphp
<div {{ $attributes(['class' => $Classes]) }}>
{{ $slot }}
</div>
