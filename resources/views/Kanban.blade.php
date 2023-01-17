@extends('layouts.default', ['title' => 'Kanban'])

<div class="container">
@section('header')
<x-header/>
@endsection


    @section('content')
    <div class="content-container">

        <x-StateBox name="Á FAZER" colortitle='#4361ee'/>
        <x-StateBox name="EM PROGRESSO" colortitle='#f4a259'/>
        <x-StateBox name="TERMINADO" colortitle='#7ae582'/>

    </div>

    @endsection


@section('footer')
<x-footer />
@endsection
</div>
