@extends('layouts.default', ['title' => 'Meus Kanbans'])

@section('header')
<x-header/>
@endsection

@section('content')
    <div class="AllKanbans-container">
        <div class="AllKanbans-wrapper">
            @if(!empty($data))
            @foreach($data as $kanban)
            <div class="Kanban">{{$kanban->name}}</div>
            @endforeach
            @endif


        </div>
    </div>
@endsection
