{{-- 
<x-table.table>
    <x-table.thead>
        <x-table.thead-th width=30 name='No.' />
    </x-table.thead> 
    <x-table.tbody>
        @foreach ($posts as $post)
            <x-table.tbody-tr>
                <x-table.tbody-td>
                    {{$post->id}}
                </x-table.tbody-td>
        </x-table.tbody-tr>
        @endforeach
    </x-table.tbody>
</x-table.table>
--}}

<div class="table-responsive">
    <table class="table table-sm table-bordered table-hover table-striped" style="table-layout: fixed;">
        {{ $slot }}
    </table>
</div>