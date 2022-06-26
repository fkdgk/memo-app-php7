<tr @if($id) data-id={{$id}} @endif onClick='location.href="{{$href}}"' @if($hover) style="cursor: pointer;" @endif class=' @if($session === $id) table-success @endif ' data-session="{{$session}}" >
    {{ $slot }}
</tr>