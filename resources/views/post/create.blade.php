@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-6 col-md-7'>

        <x-button.home-link />

        <x-card.card title='新規作成'>
            <x-form.form route='post.store' submit='新規作成'>
                <x-form.post />
            </x-form.form>
        </x-card.card>
    </x-col.col>
</x-row.row>
@endsection

