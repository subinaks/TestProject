
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lilac</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color: #ccc;">

<div class="container text-center">    
  <div class="row" style="width=100%"
   
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
          <div class="panel-heading">
          Search
          </div>

            <div class="panel-body">
        
              <i class="fas fa-search mt-xl-2 mt-2 fa-sm" style="margin-right:-30px;color:#192751"></i>
        <input class="form-control form-control-sm ml-3 pl-4 w-100 mx-auto" style="background:transparent" type="search" placeholder="Search Name/Designation/Department" aria-label="Search" id="searchData">
              </button>     
            </div>
          </div>
        </div>
      </div>
  
      <div class="row" id="users_list" >
        @foreach($users as $user)
        <div class="col-sm-4">
          <div class="well">
            <p style="text-align:left;"><b>{{$user->Name}}</b></p>
            <p style="text-align:left;">{{$user->designation}}</p>
            <p style="text-align:left;">{{$user->department}}</p>
          </div>
          </div> 
          @endforeach
      </div>            
    </div> 
  </div>
</div>


</body>
</html>
<script>
    $('#searchData').on('input', function() {
        var value = $(this).val();
      
        $.ajax({
            url: "{{ URL::to('searchData') }}",
            type: 'GET',
            data: {
                search: value,
        
            },
            success: function(response) {
             
                $('#users_list').html(response);
            }
        });
    });
</script>
