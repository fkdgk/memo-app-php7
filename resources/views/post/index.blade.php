@extends('layouts.app')

@section('content')
<x-row.row>
    <x-col.col>
        <x-card.card>
            <x-content.content position='right'>
                <x-button.button name='新規作成' class='px-5' href='{{route("post.create")}}' />
            </x-content.content>
            <x-table.table-content>
                <x-table.thead>
                    <x-table.thead-th width=30 name='No.' />
                    <x-table.thead-th width=40 name='日付' />
                    <x-table.thead-th width=80 name='階' />
                    <x-table.thead-th width=300 name='件名' />
                    <x-table.thead-th width=500 name='内容' />
                </x-table.thead> 
                <x-table.tbody>
                    @foreach ($posts as $post)
                    <x-table.tbody-tr :session='session("update")' :id='$post->id' href='{{route("post.edit", $post)}}' hover=true >
                        <x-table.tbody-td>
                            {{$post->id}}
                        </x-table.tbody-td>

                        <x-table.tbody-td>
                            {{ formatDate($post->created_at)}}
                        </x-table.tbody-td>

                        <x-table.tbody-td overflow=false>
                            @foreach (@$post->floors as $floor)
                                <x-badge.badge name='{{$floor -> name}}' color='secondary' />
                            @endforeach
                        </x-table.tbody-td>

                        <x-table.tbody-td overflow=false>
                            {{$post->name}}
                        </x-table.tbody-td>

                        <x-table.tbody-td overflow=false>
                            {{$post->body}}
                        </x-table.tbody-td>
                    </x-table.tbody-tr>
                    @endforeach
                </x-table.tbody>
            </x-table.table-content>
        </x-card.card>
    </x-col.col>
</x-row.row>
@endsection
