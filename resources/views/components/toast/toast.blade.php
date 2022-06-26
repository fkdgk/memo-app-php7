<?php
    $toast = session('toast');
    $toastTitle = @$toast[0];
    $toastBody  = @$toast[1];
    $toastSub   = @$toast[2];
?>


<div class="position-fixed top-0 end-0 p-3" style="z-index: 5">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>
            <strong class="me-auto" id="toast-title"></strong>
            <small id="toast-sub"></small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" onclick="$('.toast').hide()"></button>
        </div>
        <div class="toast-body" id="toast-body"></div>
    </div>
</div>

<script type="module">
    const addToastText = (elm,text) => {
        var element = document.getElementById(elm)
        element.textContent = text;
    }
    addToastText('toast-title','{{ $toastTitle }}');
    addToastText('toast-sub','{{ $toastSub }}');
    addToastText('toast-body','{{ $toastBody }}');

    @if ($toast)
        $('.toast').show();
    @endif

</script>