<main class="py-3">
    <div class="container-fluid">
        <x-alert.alert :alert='session("alert")' />
        {{$slot}}
    </div>
</main>