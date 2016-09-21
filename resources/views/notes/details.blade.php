@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">   
        <h2>Create a note</h2>
        
        <p> 
            Categoria:
         @if($note->category)
        <span class="label label-info"> {{ $note->category->name}}  </span>
        @else
        <span class="label label-info"> Others </span>    
        @endif   
        </p>
        <hr>
        {{ $note->note }}
    </div>
</div>

@endsection