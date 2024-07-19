@extends('app')
@section('title', 'Dashboard')
@section('content')
<div class="main">
        <div class="actions">
            <a class="primary-button" href="/create">Add New</a>
        </div>
        <table class="tasks">
            <thead>
                <th>Task</th>
                <th>Date time start</th>
                <th>Date time end</th>
                <th>Note</th>
                <th>Created By</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr> 
                    <td> {{$task->task }}</td>
                    <td> {{$task->datetime_start }}</td>
                    <td> {{$task->datetime_end }}</td>
                    <td> {{$task->note }}</td>
                    <td> {{$task->created_by}}/td>
                </tr>

                @endforeach

            </tbody>
        </table>      
</div>
@endsection