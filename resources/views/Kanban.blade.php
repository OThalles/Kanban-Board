@extends('layouts.default', ['title' => 'Kanban'])

<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    <div class="content-container">
        <x-StateBox name="Á FAZER" colortitle='#4361ee' wip=""/>
        <x-StateBox name="EM PROGRESSO" colortitle='#f4a259' wip="3/4"/>
        <x-StateBox name="TERMINADO" colortitle='#7ae582' wip=""/>
    </div>
    @endsection

</div>
