@extends('app')
@section('title', 'Dashboard')
@section('content')

    <div class="main">
        <form action="/save" method="post">
            @csrf
            <label for="task">Task</label>
            <textarea name="task" id="" cols="30" rows="3" class="form-input"></textarea>
            <label form="datetime_start">Start</label>
            <input type="date" name="" id="datetime_start" class="form">
            <label form="datetime_end">End</label>
            <input type="date" name="" id="datetime_end" class="form">
            <label form="note">Note</label>
            <textarea name="note" id="note" cols="30" rows="3" class="form-input"></textarea>
            <button type="submit" class="form-button">Create</button>
        </form>

    </div>

@endsection