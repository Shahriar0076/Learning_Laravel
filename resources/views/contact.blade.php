@extends('layouts.app')


@section('content')

    <h1>Contact Page </h1>

    <ul>
    
    @if(count($people))
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    @endif
    
    </ul>

@endsection



@section('footer')

    <h1>my footer </h1>

    <!-- <script>
        alert('hoho');
    </script> -->

@endsection