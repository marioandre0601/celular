@extends('layout')
@section('content')
        
        <h1>Notes</h1>
        <a href="{{ url('notes/create') }}">Add a note</a>
        <ul class="list-group">
           @foreach($notes as $note)
           <li class="list-group-item">
               @if($note->category !=null)
               <span class="label label-info"> {{ $note->category->name}}  </span>
               @else
                <span class="label label-info"> Others </span>    
               @endif
                {{ substr($note->note,0,80) }}...
                <a href=" {{ url('notes/'.$note->id)}}">View note</a> 
           </li>
           @endforeach
            
        </ul>
        {!! $notes->render() !!}
@endsection

    