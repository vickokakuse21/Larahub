@extends('master')
@section('content')

<div class="container-fluid">
    <div class="row">
            <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">`New Item`</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/items" method="POST">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter items name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="Stock">Stock</label>
                            <input type="number" class="form-control" id="Stock" name="Stock" placeholder="Stock">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection