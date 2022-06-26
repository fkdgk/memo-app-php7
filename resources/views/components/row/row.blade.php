{{-- 
    prms:name:type:default
    prms:class:str:null
    prms:center:bool:false
--}}
<div class="row {{ $class }} {{ $center ? 'justify-content-center' : '' }}">
    {{ $slot }}
</div>