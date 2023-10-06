<div>
    <h3 class="text-center">Show tasks</h3>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">
                    task name
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)


            <tr>
                <td>{{$task->taskname}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
</div>
