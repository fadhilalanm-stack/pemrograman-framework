@props(['tipe' => 'info'])
@php
    $warna = ['sukses' => '#d4edda', 'bahaya' => '#f8d7da', 'info' => '#d1ecf1'][$tipe] ?? '#d1ecf1';
@endphp
<div {{ $attributes->merge(['class' => "alert alert-$tipe", 'style' => "padding:10px; margin:10px 0; background:$warna"]) }}>
    {{ $slot }}
</div>