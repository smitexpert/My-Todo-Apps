@extends('layouts.app')
@section('content')
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <a href="{{ route('add') }}" class="btn btn-success float-right">ADD NEW</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="list-group">
                @foreach ($tasks as $task)
                    <li class="list-group-item">
                        <div class="float-left">
                            {{ $task->task }}
                        </div>
                        <div class="float-right">
                            <a href="{{ route('priority', ['id' => $task->id]) }}" class="btn btn-sm btn-warning">PRIORITY</a>
                            <a href="{{ route('edit', ['id' => $task->id]) }}" class="btn btn-sm btn-primary">EDIT</a>
                            <a href="{{ route('delete', ['id' => $task->id]) }}" class="btn btn-sm btn-danger">DELETE</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection