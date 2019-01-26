@extends('layouts/sb-admin');

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>id employee</th>
                                <th>name</th>
                                <th>address</th>
                               <th>phone number</th>
                                 <th>action</th>
                                <th>delete</th>

                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($Employee as $Employeelist)
                            <tr class="odd gradeX">
                                <td>{{$Employeelist->employee_id}}</td>
                                <td>{{$Employeelist->employee_name}}</td>
                                <td>{{$Employeelist->employee_address}}</td>
                                 <td>{{$Employeelist->employee_phone_number}}</td>
                                <td>

                                <a class="btn btn-warning" href="/Employee/{{$Employeelist->employee_id}}/edit">edit</a>
                                <a class="btn btn-success" href="/Employee/{{$Employeelist->employee_id}}">show</a>

                                <form  action="/Employee/

                                {{$Employeelist->employee_id}}" method="post">
                                <td>{{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger" > HAPUS</button></td>
                          </form>
                           </td>


                             </tr>
                            @endforeach
                            </tbody>
                        </table>
                       <a class="btn btn-info" href="{{url('Employee/create')}}">tambah data</a>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <div class="row">
@endsection
