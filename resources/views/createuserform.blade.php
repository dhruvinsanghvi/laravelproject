<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                font-weight: 100;
                font-family: 'Lato';
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
               
               <h1>Create User</h1>

                 <form method="post" action="createuser"> 
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <input type="text" name="name" placeholder="Full Name" class="form-control"><br/><br/>

                   <select name="batch" class="form-control">
                      <option value="">Select Batch</option>
                      <?php  for($i='1999';$i<'2017';$i++){ ?>
                      <option><?php echo $i ?></option>
                      <?php }  ?> 
                    </select><br/><br/>

                    <select name="course" class="form-control">
                       <option value="">Select Course</option>
                       <option>MBA</option>
                       <option>MCA</option>
                       <option>BE</option> 
                    </select><br/><br/>

                    <select name="gender" class="form-control">
                       <option value="">Select Gender</option>
                       <option value="1">Male</option>
                       <option value="2">Female</option>
                    </select><br/><br/>
                    
                    <input type="submit" name="submit" class="btn btn-primary">


                 </form>   




                
            </div>
        </div>
    </body>
</html>
