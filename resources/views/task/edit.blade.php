@extends('templates.default')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('task.update', $task->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $task->name) }}" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('task.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
