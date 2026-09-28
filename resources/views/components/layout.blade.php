@props(['title' => null, 'mode' => null])

<x-layouts.app :title="$title" :mode="$mode" {{ $attributes }}>
    {{ $slot }}

    @isset($scripts)
        <x-slot:scripts>
            {{ $scripts }}
        </x-slot:scripts>
    @endisset

    @isset($styles)
        <x-slot:styles>
            {{ $styles }}
        </x-slot:styles>
    @endisset
</x-layouts.app>