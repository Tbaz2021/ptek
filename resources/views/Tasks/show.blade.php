<x-app-layout>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">






            <!-- Page Content -->
            <main >
                <div class="col-md-12" style="background-color: #5e77a4; color: white ; " >
                    <h1>P4TEK Weekly Tasks ...</h1>
                </div>
                <div class="container">
                    <div class="jumbotron">
                        <h6 >Ticket: <span class="text-warning">{{ $task->ticket_num }}</span></h6>
                        <p>Date/Time: <span class="text-info">{{ $task->created_at }}</span></p>
                      <h3>Action Taken</h3>
                      <p>{{ $task->action_taken }}.</p>



                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name of Complainers</th>
                            <th>Issue Complained</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $task->name_c}}</td>
                                <td>{{ $task->issue_c }}</td>
                                <td>@if ( $task->status == 'Resolved' )

                                    <p class="text-success">{{ $task->status }}</p>
                                @else
                                <p class="text-warning">{{ $task->status }}</p>
                                @endif</td>
                    </tbody>
                    </table>
                    </div>


                  </div>

            </main>
        </div>
    </body>
</x-app-layout>


