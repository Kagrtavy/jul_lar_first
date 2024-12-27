@extends('templates.default')

@section('content')
    <h1>All tasks</h1>
    <div class="panel-body">
        <a href="{{ route('task.create') }}"><i class="fa fa-plus"></i>Create task</a>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($tasks) > 0)
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td>
                                        <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
@endsection