@extends('layouts.admin_app') @section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <div class="card" style="width:100%;">
                            <div class="card-header">
                                <strong>Add items</strong>
                            </div>
                            <div class="card-body card-block">
                                
                                <form action="/admin/add_item/post" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Product Name</label>
                                        </div>
                                        <div class="col-5 col-md-3">
                                            
                                        <input type="text" id="text-input" name="name" placeholder="Product Name" class="form-control"></div>

                                        <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">CPU</label>
                                            </div>
                                            <div class="col-5 col-md-3">
                                                <input type="text" id="text-input" name="cpu" placeholder="CPU-TYPE" class="form-control">
                                            </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="price-input" class=" form-control-label">Price in $</label>
                                        </div>
                                        <div class="col-5 col-md-3">
                                            <input type="number" id="price-input" name="price" placeholder="Enter Price" class="form-control">
                                        </div>
                                                
                                        
    
                                    <div class="col col-md-3">
                                            <label for="price-input" class=" form-control-label">RAM</label>
                                        </div><div class="col-5 col-md-3">
                                            <input type="number" id="price-input" name="ram" placeholder="RAM-IN-GB" class="form-control">
                                        </div></div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="col-5 col-md-3">
                                            <select name="category_id" id="SelectLm" class="form-control-sm form-control">
                                                <option value="0">Please select</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                                <option value="4">Option #4</option>
                                                <option value="5">Option #5</option>
                                            </select>
                                        </div>

                                    <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Screen size</label>
                                            </div><div class="col-5 col-md-3">
                                            
                                        <input type="text" id="text-input" name="screen_size" placeholder="Screen-IN-INCHES" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">Brand</label>
                                    </div>
                                    <div class="col-5 col-md-3">
                                        <select name="brand_id" id="SelectLm" class="form-control-sm form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                        </select>
                                    </div>

                                <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Color</label>
                                        </div><div class="col-5 col-md-3">
                                        
                                    <input type="text" id="text-input" name="color" placeholder="Color" class="form-control">
                                </div>
                            </div>
                                        <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">Inventory</label>
                                        </div>


                                        
                                            <div class="col-5 col-md-3">
                                            <input type="number" id="price-input" name="inventory" placeholder="Inventory #" class="form-control">
                                        </div>
                                        
                                    <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">HARD</label>
                                        </div><div class="col-5 col-md-3">
                                            <input type="text" id="hard_drive" name="hard_drive" placeholder="HARD" class="form-control">
                                        </div></div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="description-input" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-5 col-md-3">
                                            <textarea name="description" id="description-input" rows="6" placeholder="Description..." class="form-control"></textarea>
                                        </div>

                                    <div class="col col-md-3">
                                            <label for="gpu" class=" form-control-label">GPU</label>
                                        </div><div class="col-5 col-md-3">
                                            <input type="text" id="gpu" name="gpu" placeholder="GPU" class="form-control">
                                        </div></div>

                                    
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Product type</label>
                                        </div>
                                        <div class="col col-md-4">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio1" class="form-check-label p-2">
                                                    <input type="radio" id="inline-radio1" name="type" value="new" class="form-check-input">New
                                                </label>
                                                <label for="inline-radio2" class="form-check-label p-2">
                                                    <input type="radio" id="inline-radio2" name="type" value="used_like_new" class="form-check-input">Used like new
                                                </label>
                                                <label for="inline-radio3" class="form-check-label p-2">
                                                    <input type="radio" id="inline-radio3" name="type" value="used" class="form-check-input">Used</label>
                                            </div>
                                        </div>
                                    <div class="col-5 col-md-3">
                                            <input type="file" name="file[] " multiple class="form-control-file">
                                        </div>
                                    
                                        
                                    
                                    </div>
                                        <div class="card-footer">
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                </form>
                            </div>

                        </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection