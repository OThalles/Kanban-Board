@extends('layouts.default', ['title' => 'Meus Kanbans'])

@section('header')
<x-header/>
@endsection

@section('content')
    <div class="AllKanbans-container">
        <div class="AllKanbans-wrapper">
            {{$data}}
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>
            <div class="Kanban">Lorem ipsum dolor ame sit</div>


        </div>
    </div>
@endsection
