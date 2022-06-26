@extends('layouts.app')

@section('content')
<x-row.row>
    <x-col.col>
        <x-card.card>
            {{ $post }}
        </x-card.card>
    </x-col.col>
</x-row.row>
@endsection
