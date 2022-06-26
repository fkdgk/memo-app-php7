<td>
    @if ($overflow)
    <div class="td-div">
        {{$slot}}
    </div>
    @else
    <div style="white-space: initial;">
        {{$slot}}
    </div>
    @endif
</td>