<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Project</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../app/bower_components/bootstrap/dist/css/bootstrap.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
             
               
            }
            .defaultimg{
                height: 200px;
                width: 200px;
            }

            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
       
               
                

                @foreach ($actions as $value)
                <div class="col-md-3 col-xs-12 text-center">
                     <div class="panel panel-info">
                        <div class="panel-heading">
                             <h3>{{ $value->full_name}}</h3>
                        </div>
                         <div class="panel-body">
                             <img src="../resources/views/default.png" class="img-circle center-block defaultimg">
                         </div>
                         <div class="panel-footer">
                             
                              <h4><strong>Batch</strong>{{ $value->batch }}</h4>
                              <h5>{{ $value->course }}</h5>
                         </div>
                     </div>
               </div>

                @endforeach

             
                 
                 
            
           
           </div>
        </div>
    </body>
</html>
