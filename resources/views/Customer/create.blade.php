@extends('layouts/sb-admin')
@section('content')
<form method="POST"
action="/Customer">
{{csrf_field()}}
<input type="text" name="txt_id" /> <br />
<input type="text" name="txt_name" /><br />
<input type="text" name="txt_address" /><br />

<input type="submit"
 name="sbm_save"
 value="save"/>
</form>





<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Forms</h1>
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
                            <form role="form">

                                <div class="form-group">
                                    <label>Text Input with Placeholder</label>
                                    <input class="form-control" placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label>Static Control</label>
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>
                                @foreach ($employee as $employeelist)
                                <form action="{{ route('Employee.update',
                               $employeelist->employee_id) }}" method="post">
                               {{ csrf_field() }}
                               {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label>Employee_Id</label>
                                            <input class="form-control" type="text" name="txt_id" value="{{ $employeelist->employee_id }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="txt_name" value="{{ $employeelist->employee_name }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" name="txt_address" value="{{ $employeelist->employee_address }}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="text" name="txt_phone" value="{{ $employeelist->employee_phone_number }}"/>
                                        </div>
                               @endforeach
                                        <button type="submit" class="btn btn-warning" name="sbm_save" id="sbm_save">Submit</button>
                                    </form>
                            </div>


                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
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
