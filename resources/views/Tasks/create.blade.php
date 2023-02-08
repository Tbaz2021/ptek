<x-app-layout>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">






            <!-- Page Content -->
            <main >
                <div class="col-md-12" style="background-color: #5e77a4; color: white ; " >
                    <h1>P4TEK Weekly Tasks ...</h1>
                </div>
               <div style="width: 80%">
                <form class="form-horizontal" role="form" action="{{ route('tasks.store') }}" method="POST">
                 @csrf

        <div class="form-group">
          <label class="control-label col-sm-2" >Name of Complainer:</label>
          <div class="col-sm-6">
            <input type="text" name="name_of_complainer" class="form-control @error('name_of_complainer')
                border-danger
            @enderror" value="{{ old('name_of_complainer') }}">
             <div class="text-danger text-sm">
                @error('name_of_complainer')
                    {{ $message }}
                @enderror
             </div>
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Issue Complained:</label>
            <div class="col-sm-10">
         <textarea name="issue_complained" class="form-control @error('issue_complained')
         border-danger
     @enderror" cols="30" rows="2"></textarea>
               <div class="text-danger text-sm">
                  @error('issue_complained')
                      {{ $message }}
                  @enderror
               </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" >Action Taken:</label>
            <div class="col-sm-10">
                <textarea name="action_taken" class="form-control  @error('action_taken')
                border-danger
            @enderror" cols="30" rows="2"></textarea>
               <div class="text-danger text-sm">
                  @error('action_taken')
                      {{ $message }}
                  @enderror
               </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" >Ticket number:</label>
            <div class="col-sm-2">
                <input type="text" name="ticket_number" class="form-control @error('ticket_number')
                border-danger
            @enderror" value="{{ old('ticket_number') }}">
             <div class="text-danger text-sm">
                @error('ticket_number')
                    {{ $message }}
                @enderror
             </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" >Status:</label>
            <div class="col-sm-2">
                <input type="text" name="status" class="form-control @error('status')
                border-danger
            @enderror" value="{{ old('status') }}">
             <div class="text-danger text-sm">
                @error('status')
                    {{ $message }}
                @enderror
             </div>
            </div>
          </div>
   <div class="row">
    <div class="col-md-4"></div>

    <button type="submit" class="btn btn-block btn-success col-md-5">Save</button>
   </div>

</form>
               </div>
            </main>
        </div>
    </body>
</x-app-layout>


