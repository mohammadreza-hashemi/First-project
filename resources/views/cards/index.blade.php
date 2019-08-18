@extends('../layout')



@section('content')

<h1>All Cards</h1>

<div>
    @foreach($cards as $cars)
    <li>
        <a href="cards/{{ $cars->id}}">{{ $cars->title }}</a> 
    </li>
   
    @endforeach
    
</div>

@stop