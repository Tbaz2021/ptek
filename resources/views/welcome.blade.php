<x-app-layout>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">






            <!-- Page Content -->
            <main >
                <div class="col-md-12" style="background-color: #5e77a4; color: white ; " >
                    <h1>P4TEK Weekly Tasks ...</h1>
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
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Date/Time</th>
                        <th>Ticket </th>
                        <th>Name of Complainers</th>
                        <th>Issue Complained</th>
                        <th>Status</th>
                        <th >Action Taken</th>
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
                          <td><a  href="{{ route('show',$task) }}" class="btn btn-info btn-sm">View</a></td>
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


