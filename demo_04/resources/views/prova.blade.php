@extends('layouts.app')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')
    <p>This is my body content.</p>
    @if (count($heroes))
        <p>presente</p>
    @else
        <p>non presente</p>
    @endif

    @if (count($heroes))
    <ul>
        @foreach($heroes as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
    @endif
@endsection