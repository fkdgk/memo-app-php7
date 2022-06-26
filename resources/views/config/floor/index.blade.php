@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-4 col-md-5'>

        {{-- HOMEへ戻る --}}
        <x-button.home-link />
        
        {{-- Card --}}
        <x-card.card title='階の編集と削除' class='mb-5'>

            {{-- Form --}}
            <x-form.form submit='更新' route='config.floor.update'>
                <x-form.form-group>
                    @foreach ($floors as $floor)
                    {{-- FormItem --}}
                        <x-form.input-group class='mb-2 d-flex'>
                            <x-form.text :value='$floor' name='floors[]' margin=0 />
                            <x-button.button name='削除' color='outline-danger' type='button' onclick="deleteFloor('{{$floor}}');" />
                        </x-form.input-group>
                    @endforeach
                </x-form.form-group>
            </x-form.form>
        </x-card.card>    
    </x-col.col>
    
</x-row.row>

{{-- 削除用フォーム --}}
{{ Form::open(['route'=>'config.floor.delete','id'=>'delete-form','class'=>'d-none']) }}
{{ Form::text('name',null,['id'=>'delete-target']) }}
{{ Form::submit('delete') }}
{{ Form::close() }}


@endsection

@section('script')
<script>
    /* 削除用スクリプト */
    const deleteFormElm = document.getElementById('delete-form');
    const addFormElm = document.getElementById('delete-target');
    const deleteMessage = 'を削除しますか？';
    const deleteFloor = (target) => {
        if(window.confirm(`【${target}】${deleteMessage}`)){
            addFormElm.value = target;
            deleteFormElm.submit();
        }
        return false;
    }
</script>
@endsection