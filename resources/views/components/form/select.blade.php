<?php
    /* multipleのときはnameに[]をつける */
    $formName = $name;
    $multiple ? $formName = $name.'[]' : false;

    /* optionのkeyをvalueと同じにしたい場合 */
    $selectOption = $options;
    $array = [];
    foreach ($options as $option) {
        $array[$option] = $option;
    }
    $onlyValue ? $selectOption = $array : false;

?>

<x-form.wrap>
    <x-form.label :label='$label' name='{{$name}}' />
    {{ Form::select($formName, $selectOption, $value, [
        'class' => 'form-control ' . $class,
        'multiple' => $multiple,
    ])}}
</x-form.wrap>
