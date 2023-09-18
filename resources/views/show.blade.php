@extends('layouts.app')

@section('title', $task->title)

@section('content')
<div class="mb-4 rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">
    <a href="{{ route('tasks.index') }}" class="link">← Go Back to task list</a>
</div>
</div>
<p class="mb-4 text-slate-700">{{ $task->description }}</p>
@isset($task->long_description)
    <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
@endisset
<p class="mb-4 text-sm text-slate-500"> Created:{{ $task->created_at->diffForHumans() }} •
    Updated:{{ $task->updated_at->diffForHumans() }} </p>

<p class="mb-4">
    @if($task->completed)
        <span class="font-medium text-green-500">Completed</span>
    @else
        <span class="font-medium text-red-500">Pending</span>
    @endif
</p>

<div class="flex gap-2">
    <a href="{{ route('tasks.edit', ['task' => $task]) }}"
        class="btn rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">Edit</a>

    <form method="POST"
        action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
        @csrf
        @method('PUT')
        <button type="submit"
            class="btn rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">Mark
            as
            {{ $task->completed ? 'not completed' : 'completed' }}</button>
    </form>

    <form
        action="{{ route('tasks.destroy', ['task' => $task]) }} "
        method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="btn rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">Delete</button>
    </form>
</div>

@endsection()
