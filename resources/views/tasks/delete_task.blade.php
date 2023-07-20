@extends("maket.skelet")

@section("content")

<h2 class="mt-4">Delete task</h2>

<div class="card mt-2">
    <div class="card-body">
        <form action="{{route("delete.taks")}}"  method="POST">
            @csrf
            <input type="hidden" name="task_id" value="{{$task->id}}">
            <p>Do you really want to delete this task?</p>
            <p class="text-danger">{{$task->task}}</p>
                <button class="btn btn-danger">Delete task</button>
            </div>
        </form>
    </div>   
</div>
@endsection