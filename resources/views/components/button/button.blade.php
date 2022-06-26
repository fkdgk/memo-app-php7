{{-- 
$color ---------
primary:default
secondary
success
danger
warning
info
light
dark
link
outline-primary
outline-secondary
outline-success
outline-danger
outline-warning
outline-info
outline-light
outline-dark


$size -----------
sm:default
lg
--}}





<?php
  /* button を a,buttonタグに分岐させる */
  $tag = 'button';
  $href ? $tag = 'a' : false;
?>
<{{$tag}} onclick='{{$onclick}}' id="{{$id}}" type="{{$type}}" class="btn btn-{{$color}} btn-{{$size}} {{$class}}" {!! $href ? 'href="': false  !!}{!!  $href ? $href . '"' : false  !!}>{{$name}}</{{$tag}}>