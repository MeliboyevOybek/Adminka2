@extends("maket.skelet")

@section("content")

<h2 class="mt-4">Add task</h2>

<div class="card mt-2">
    <div class="card-body">
        <form action="{{route("create.taks")}}" method="POST">
            @csrf
            <div class="form-group mb-2">
                <input type="text" placeholder="Enter the task name" name="task" required class="form-control">
            </div>
            <div class="form-group mb-2">
                <input type="datetime-local" placeholder="Enter the task deadline" name="date" required class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Create task</button>
            </div>
        </form>
    </div>   
</div>
@endsection