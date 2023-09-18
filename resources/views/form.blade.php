@extends('layouts.app')

"@section('title', isset($task) ? 'Edit Task' : 'Add Task')"

@section('styles')
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }

</style>
@endsection

@section('content')

<form method="POST"
    action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}">
    @csrf
    @isset($task)
        @method('PUT')
    @endisset
    <div class="mb-4">
        <label for="title" class="block uppercase text-slate-700 mb-2">
            Title
        </label>
        <input text="input" name="title" id="title"
            class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none"
            value="{{ $task->title ?? old('title') }}"/>
        @error('title')
            <p class=" error-message">{{ $message }} </p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="block uppercase text-slate-700 mb-2">
            Description
        </label>
        <textarea name="description" id="description"
            rows="5"
            class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none">
                {{ $task->description ?? old('description') }}
        </textarea>
        @error('description')
            <p class="error-message">{{ $message }} </p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="long_description" class="block uppercase text-slate-700 mb-2">
            Long Description
        </label>
        <textarea name="long_description" id="long_description"
            rows="10"
            class="shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none">
                {{ $task->long_description ?? old('long_description') }}</textarea>
        @error('long_description')
            <p class="error-message">{{ $message }} </p>
        @enderror
    </div>

    <div>
        <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset</button>
    </div>
</form>
@endsection
