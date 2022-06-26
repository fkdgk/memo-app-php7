<?php
    /* 階層の洗濯 */
    $config = new App\Models\Config;
    $floors = $config->scopeFloors();

    /* valueの設定 */
    $selectValue = null;
    ($model) ? $selectValue = @$model->floors->pluck("name") : false;

?>

<x-form.text :value='@$model->name' type='text' name='name' label='件名' placeholder='件名…' />
<x-form.select :value='$selectValue' name='floors' :options='$floors' label='階' multiple=true class='' onlyValue=true />
<x-form.text :value='@$model->body' type='textarea' name='body' label='内容' rows='6' placeholder='報告内容、共有事項' />