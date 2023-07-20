@extends('maket.skelet')

@section("content")
<div class="row mt-4">
    <div class="col-lg-10">
        <h1>TABLE PAGE</h1>
        
    </div>
    <div class="col-lg-2">
        <a href="{{route("add.taks.page")}}" class="btn btn-primary">Add task</a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Deadline</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Deadline</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($tasks as $task )
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->task}} </td>
                    <td>{{$task->deadline}}</td>
                    <td>
                        <a href="{{route("edit.taks.page", ["id" => $task->id])}}" class="btn btn-success">Edit</a>
                        <a href="{{route("delete.taks.page", ["id"=> $task->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection