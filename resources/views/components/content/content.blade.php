<?php
    switch ($position) {
        case 'left':
            $position = 'start';
            break;

        case 'right':
            $position = 'end';
            break;

        case 'between':
            $position = 'between';
            break;
        
        default:
            $position = 'center';
            break;
    }
?>

<div class="content d-flex justify-content-{{ $position }} {{ $class }}">
    {{ $slot }}
</div>