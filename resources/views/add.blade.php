@extends('layouts.app')
@section('content')
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            Add New Tasks
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input name="task" type="text" class="form-control" placeholder="Task Name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection