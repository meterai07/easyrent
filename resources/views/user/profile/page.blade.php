@extends('user.layout.main', ['page' => 'User Profile'])

@section('title', 'User Profile')

@section('content')

{{-- code here --}}
<h1>
    {{ $user->name }}
</h1>

@endsection