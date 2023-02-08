<x-app-layout>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">






            <!-- Page Content -->
            <main class="">
                <div class="col-md-12" style="background-color: #5e77a4; color: white ; " >
                    <h1>P4TEK Weekly Tasks ... <span class="text-sm ml-12  bg-secondary" style=" padding:4px; border-radius:5px ">Total Users: {{ $usercount->count() }}</span><span class="text-sm ml-12 bg-secondary" style=" padding:4px; border-radius:5px ">Total Tasks: {{ $taskcount->count() }}</span><span class="text-sm ml-12 bg-secondary" style=" padding:4px; border-radius:5px ">Resolved Tasks: {{ $tasksresolved->count() }}</span><span class="text-sm ml-12 bg-secondary" style=" padding:4px; border-radius:5px ">Pending Tasks: {{ $taskspending->count() }}</span></h1>
                </div>
                <form class="ml-2" action="{{ route('search') }}"  method="POST">
                    @csrf
                <input type="text" name="search" id="" value="Ticket Number"><button type="submit" class="ml-1 btn btn-outline-success">Search</button>
            <div class="text-danger text-sm">
            @error('search')
                {{ $message }}
            @enderror
            @if (session('se'))
            {{ session('se') }}
        @endif
            </div>
            </form>
            <div style="text-align: center" class="alert-success text-sm">
                @if (session('status'))
                    {{ session('status') }}
                @endif
            </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Date/Time</th>
                        <th>Ticket </th>
                        <th>Name of Complainers</th>
                        <th>Issue Complained</th>
                        <th>Status</th>
                        <th colspan="3">Action Taken <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm ml-5">Add new</a></th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ( $tasks->count() > 0)
                          @foreach ($tasks as $task )

                        <tr>
                            <td><input type="radio" ></td>
                            <td>{{ $task->created_at }}</td>
                            <td>{{ $task->ticket_num }}</td>
                            <td>{{ $task->name_c}}</td>
                            <td>{{ $task->issue_c }}</td>
                            <td>@if ( $task->status == 'Resolved' )

                                <p class="text-success">{{ $task->status }}</p>
                            @else
                            <p class="text-warning">{{ $task->status }}</p>
                            @endif</td>



                            <td><a  href="{{ route('tasks.show',$task) }}" class="btn btn-info btn-sm">View</a></td>
                            <td><a href="{{ route('tasks.edit',$task) }}" class="btn btn-secondary btn-sm">Edit</a></td>
                            <form action="{{ route('tasks.destroy',$task) }}"  method="POST">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" onclick="confirm('Are you sure')" class="btn btn-danger btn-sm">Del</button></td>
                            </form>

                          </tr>
                          @endforeach
                        @else
                            <p>No tasks Available </p>
                        @endif

                      </tbody>
                      </table>
                      {{ $tasks->links() }}
            </main>

        </div>
    </body>

</x-app-layout>



