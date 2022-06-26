@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-4 col-md-5'>
        
        {{-- Card --}}
        <x-card.card class='mb-5'>

            <x-alert.alert :alert='["warning","おっと😲💦","もう一度操作をやり直してみてね！"]' />
            
            <x-button.home-link />

            <x-content.content position='center'>
                <div class="small opacity-25">
                    code:@yield('code')
                </div>
            </x-content.content>
        </x-card.card>
        
    </x-col.col>
    
</x-row.row>
@endsection

