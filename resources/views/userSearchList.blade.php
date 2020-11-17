
  
          @forelse($users as $user)
           <div class="col-sm-4">
          <div class="well">
            <p style="text-align:left;"><b>{{$user->Name}}</b></p>
            <p style="text-align:left;">{{$user->designation}}</p>
            <p style="text-align:left;">{{$user->department}}</p>
          </div>
          </div>
          @empty
          <p style="text-align:center;">No Data Found</p>
          @endforelse