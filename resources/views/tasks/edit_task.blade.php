@extends("maket.skelet")

@section("content")

<h2 class="mt-4">Add task</h2>

<div class="card mt-2">
    <div class="card-body">
        <form action="{{route("update.taks")}}"  method="POST">
            @csrf
            <input type="hidden" name="task_id" value="{{$task->id}}">

            <div class="form-group mb-2">
                <input type="text" placeholder="Enter the task name" name="task" required class="form-control" value="{{$task->task}}">
            </div>
            <div class="form-group mb-2">
                <input type="datetime-local" placeholder="Enter the task deadline" name="date" required class="form-control" value="{{$task->deadline}}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update task</button>
            </div>
        </form>
    </div>   
</div>
@endsection