<?php
    $classes = 'form-control ' . $class;
?>

<x-form.wrap :margin='$margin'>

    @if($label)
        <x-form.label name='{{$name}}' label='{{$label}}' />
    @endif

    @switch($type)
        @case('textarea')
            {{ Form::textarea($name,$value,[
                    'id'=>$name,
                    'class'=>$classes,
                    'rows'=>$rows,
                    'placeholder'=>$placeholder,
                ])}} 
            @break
        @default
            {{ Form::text($name,$value,[
                'class'=>$classes,
                'id'=>$name,
                'placeholder'=>$placeholder,
            ])}} 
    @endswitch
</x-form.wrap>