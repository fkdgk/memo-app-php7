<?php
    $type  = @$alert[0];
    $title = @$alert[1];
    $body  = @$alert[2];
?>

@if ($alert)
<div class="alert alert-{{$type}} alert-dismissible fade show" role="alert">
    <strong>{{ $title }}</strong>
    @if ($body)
        <div class="pt-2">{{ $body }}</div>
    @endif
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
