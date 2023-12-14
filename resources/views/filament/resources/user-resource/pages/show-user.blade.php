@php
    $data = $this->getData();
@endphp

<x-filament::page>
    <x-filament::card>
        <h1>{{$data['name']}}</h1>
        <h1>{{$data['roles'][0]['name']}}</h1>
    </x-filament::card>
</x-filament::page>
