@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')

<div class="mb-4">
    <a href="{{ route('tasks.create') }}"
        class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">
        + Add New Task
    </a>
</div>

<hr/>

@forelse($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task]) }}"
            @class(['line-through'=> $task->completed])>{{ $task->title }}</a>
    </div>
@empty
    <div>There are no tasks!</div>
@endforelse

@if($task->count())
    <div class="mt-4">
        {{ $tasks->links() }}
    </div>
    @endsection
@endif
