@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')

<div>
    <a href="{{ route('tasks.create') }}">New Task</a>
</div>

@isset($name)
    <p>My name is: {{ $name }}</p>
@endisset

@forelse($tasks as $task)
    <div>
        <a
            href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a>
    </div>
@empty
    <div>There are no tasks!</div>
@endforelse

@if($task->count())
    <div>
        {{ $tasks->links() }}
    </div>
    @endsection
@endif
