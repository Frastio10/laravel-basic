@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Hello {{ Auth::user()->name }}</h2>
            <h2>Youre loggged in as user</h2>
        </div>
    </div>
@endsection