@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-4 col-md-5'>

        {{-- HOMEへ戻る --}}
        <x-button.home-link />
        
        {{-- Card --}}
        <x-card.card title='階の新規作成' class='mb-5'>

            {{-- Form --}}
            <x-form.form submit='新規作成' route='config.floor.store'>
                <x-form.input-group class='mb-2 mt-2 d-flex  justify-content-center'>
                    <x-form.text value='' name='floor_name' margin=0 placeholder='...階' />
                </x-form.input-group>
            </x-form.form>

        </x-card.card>
        
    </x-col.col>
</x-row.row>


@endsection