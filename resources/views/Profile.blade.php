@extends('layouts.default', ['title' => 'Kanban'])


<div class="container">
@section('header')
<x-header/>
@endsection

@section('content')
    <div class="profile-container">
        <div class="profile-wrapper">
            <div class="photo-area">
                <img src="https://www.logotipo.pt/wp-content/uploads/2016/10/Evolu%C3%A7%C3%A3o-do-log%C3%B3tipo-da-Google-2016.jpg" class="user-img" alt="">
            </div>
            <div class="user-infos-container">
                <label for="">
                    <img src="{{asset('assets/images/user-icon.png')}}" alt="" class="icon">
                    <div class="user-info">O THALLES É FODA</div>
                </label>
                <label for="">
                    <img src="{{asset('assets/images/id-icon.png')}}" alt="" class="icon">
                    <div class="user-info">#{{$userId}}</div>
                </label>
                <label for="">
                    <img src="{{asset('assets/images/kanban-icon.png')}}" alt="" class="icon">
                    <div class="user-info">Kanbans:
                        @foreach($kanbansCount as $kanbanCount)
                            {{$kanbanCount->kanban_count}}
                        @endforeach
                    </div>
                </label>

                <label for="">
                    <img src="{{asset('assets/images/flag-icon.png')}}" alt="" class="icon">
                    <div class="user-info">Entrou em: {{$registrationDate}}</div>
                </label>

            </div>
        </div>
    </div>
@endsection

</div>
