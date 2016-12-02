@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <ul>





                  <h2>{{str_limit($post->title, 45)}}</h2>
                  <p>{{str_limit($post->content, 15)}}</p>
                






  </div>
</div>

@endsection
