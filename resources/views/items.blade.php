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
                                                        <th class="text-right">Category</th>
                                                        <th class="text-right">Inventory</th>
                                                        <th class="text-right">Price</th>
                                                        <th class="text-right">DELETE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)   
                                                    <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td class="text-right">{{$product->category_id}}</td>
                                                    <td class="text-right">{{$product->inventory}}</td>
                                                    <td class="text-right">{{$product->price}}</td>
                                                    <td class="text-right">
                                                    <a href="/admin/items/delete/{{$product->id}}" class="btn btn-danger text-white">
                                                    <i class="fas fa-trash-alt"></i></a>
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