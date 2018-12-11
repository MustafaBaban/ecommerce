@extends('layouts.admin_app') @section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <div class="card" style="width:100%;">
                            <div class="card-header">
                                <strong>items</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive table--no-card ">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>                                                       
                                                        <th>name</th>
                                                        <th class="text-right">email</th>
                                                        <th class="text-right">Is admin</th>
                                                        <th class="text-right">Created at</th>
                                                        <th class="text-right">BAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)   
                                                    <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td class="text-right">{{$user->email}}</td>
                                                    <td class="text-right">f</td>
                                                    <td class="text-right">{{$user->created_at}}</td>
                                                    <td class="text-right">
                                                    <a href="/admin/users/ban/{{$user->id}}" class="btn btn-danger text-white">
                                                    <i class="fas fa-ban"></i></a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection