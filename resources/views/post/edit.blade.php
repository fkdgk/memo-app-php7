@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-6 col-md-7'>
        
        <x-button.home-link />
        
        <x-card.card title='編集'>
            <x-form.form :route='["post.update", $post]' submit='更新'>
                <x-form.post :model='$post' />
            </x-form.form>
        </x-card.card>

    {{-- 削除用フォーム --}}
    <x-content.content position='right'>
        {{ Form::open(['route'=>['post.delete',$post],'class'=>'d-block','id'=>'post-delete']) }}
            <x-button.button type='submit' name='削除' color='outline-danger' class='px-5' size='sm' />
        {{ Form::close() }}
        <script>
            document.getElementById('post-delete').addEventListener('submit', function(e) {
                if(!confirm('削除しますか？')){
                    e.preventDefault();
                }
            });
        </script>
    </x-content.content>

    </x-col.col>
</x-row.row>
@endsection

