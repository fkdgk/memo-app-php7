<?php
    $classes = 'd-flex justify-content-center flex-column';
?>

    {{ Form::open([
        'route'=>$route,
        'class'=>$classes,
        'autocomplete'=>'off',
    ])}}

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{$error}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
    
    <div class="">
        {{ $slot }}
    </div>
    
    <div class="py-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary px-5">{{$submit}}</button>
    </div>
{{ Form::close() }}