@extends('layouts.app')

@section('content')
<x-row.row center=true>
    <x-col.col class='col-xl-4 col-md-5'>
        
        {{-- Card --}}
        <x-card.card class='mb-5'>

            <x-alert.alert :alert='["warning","γγ£γ¨π²π¦","γγδΈεΊ¦ζδ½γγγη΄γγ¦γΏγ¦γ­οΌ"]' />
            
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

