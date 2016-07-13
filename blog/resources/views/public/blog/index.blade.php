<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Test Laravel 2 hours </title>

    <!-- Bootstrap core CSS -->
   
    <link href="{{ url('/public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ url('/public/assets/css/custom.css') }}" rel="stylesheet">

    

  
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    <h3> Blog List</h3>
<table class="table table-striped">
<thead>
<tr>
  <th>Title</th>
  <th>Excerpt</th>
  <th>Published Time</th>
  <th>Author's Name</th>
</tr>
</thead>
<tbody>

@if($blogs->isEmpty())
     
     <tr><td colspan='5'>No data found</td></tr>
@else
    
    @foreach($blogs as $blog)
   <tr>
  <td><a href="{{ url('/show') }}/{{$blog->id}}">{{ $blog->title }}</a></td>
 <td><?php echo substr($blog->body,0,100);?></td>
  <td>{{ date('F d, Y h:m', strtotime($blog->published_at)) }}</td>
  <td>{{$blog->user->name}} </td>
  
   </tr>   
   
@endforeach
@endif




  


</tbody>
</table>

        @if (Auth::guest())
            <a href="{{ url('/login') }}" class="btn btn-lg btn-primary btn-block btn-md" >Sign in</a>
        @endif

    </div> <!-- /container -->





    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
        <script>
        $(function(){
            $('#logme').on('click',function(){
               $('#loginform').toggleClass('hide');
            });
           //alert('adf');
        });
        </script>
  </body>
</html>


<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
-->