@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')
@isset($name)
    <p>My name is: {{ $name }}</p>
@endisset

@forelse($tasks as $task)
    <div>
        <a
            href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a>
    </div>
@empty
    <div>No IDs/div>
@endforelse
@endsection
