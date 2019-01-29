<!DOCTYPE html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Emplo</title>

     <!-- Bootstrap Core CSS -->
     <link href="{{ asset ('sb-admin-dua/kucing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- MetisMenu CSS -->
     <link href="{{ asset ('sb-admin-dua/kucing/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="{{ asset ('sb-admin-dua/kucing/dist/css/sb-admin-2.css') }}" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="{{ asset ('sb-admin-dua/kucing/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

 </head>

 <body>

     <div id="wrapper">
         <div id="page-wrapper">
             <div class="row">
                 <div class="col-lg-12">
                     <h1 class="page-header">Tambah Data Employee</h1>
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             Basic Form Elements
                         </div>
                         <div class="panel-body">
                             <div class="row">
                                 <div class="col-lg-6">
                                   @if ($errors->any())
                                <div class="alert alert-danger">
                                      <ul>
                                @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                            </div>
                                       @endif

                                 <form method="POST" action="/Employee"> {{ csrf_field() }}
                                         <div class="form-group">
                                             <label>Employee_Id</label>
                                             <input class="form-control" type="text" name="txt_id">
                                         </div>
                                         <div class="form-group">
                                             <label>Name</label>
                                             <input class="form-control" type="text" name="txt_name">
                                         </div>
                                         <div class="form-group">
                                             <label>Address</label>
                                             <textarea class="form-control" rows="3" type="text" name="txt_address"></textarea>
                                         </div>
                                         <div class="form-group">
                                             <label>Phone Number</label>
                                             <input class="form-control" type="text" name="txt_phone">
                                         </div>
                                         <button type="submit" class="btn btn-default" name="sbm_save" id="sbm_save">Submit Button</button>
                                         <button type="reset" class="btn btn-default">Reset Button</button>
                                     </form>
                             </div>
                             <!-- /.row (nested) -->
                         </div>
                         <!-- /.panel-body -->
                     </div>
                     <!-- /.panel -->
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /#page-wrapper -->

     </div>
     <!-- /#wrapper -->

     <!-- jQuery -->


 </body>
 </html>
