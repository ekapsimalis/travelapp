@extends('layouts.master')

@section('title')
    Admin Panel --- Users
@endsection

@section('content')
    <div class="row"></div>
    <nav class="center-align">
        <div class="nav-wrapper grey darken-1">
            <ul class="center">
                <li><a href="{{route('admin')}}">Feedbacks</a></li>
                <li><a href="{{route('admin.createc')}}">Create Country</a></li>
                <li><a href="{{route('admin.createp')}}">Create Place</a></li>
                <li><a href="{{route('admin.users')}}">Users</a></li>
            </ul>
        </div>
    </nav>

    <div class="row"></div>
    <h4 class="center-align">List of users</h4>
    <ul class="collection">
        @foreach ($users as $user)
            @if ($user->type === 'admin')
                <li class="collection-item">
                    <p><strong>{{$user->email}}</strong></p>
                    <small>
                        <a href="{{route('admin.users.delete', $user->id)}}" class="waves-effect waves-light btn-small">Delete</a>
                        <a href="{{route('admin.users.promote', $user->id)}}" class="waves-effect waves-light btn-small disabled">Promote</a>
                        <a href="{{route('admin.users.demote', $user->id)}}" class="waves-effect waves-light btn-small">Demote</a>
                    </small>
                </li>
            @else
                <li class="collection-item">
                    <p><strong>{{$user->email}}</strong></p>
                    <small>
                        <a href="{{route('admin.users.delete', $user->id)}}" class="waves-effect waves-light btn-small">Delete</a>
                        <a href="{{route('admin.users.promote', $user->id)}}" class="waves-effect waves-light btn-small">Promote</a>
                        <a href="{{route('admin.users.demote', $user->id)}}" class="waves-effect waves-light btn-small disabled">Demote</a>
                    </small>
                </li>
            @endif
        @endforeach
    </ul>

    {{ $users->links() }}
@endsection