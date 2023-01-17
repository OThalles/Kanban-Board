@extends('layouts.default', ['title' => 'Kanban'])

<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    <div class="content-container">
    <x-StateBox/>
    </div>

    @endsection


@section('footer')
<x-footer />
@endsection
</div>
