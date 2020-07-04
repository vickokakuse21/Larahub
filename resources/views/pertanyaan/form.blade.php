@extends('master')
@section('content')

<div class="container-fluid">
    <div class="row">
            <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">`New pertanyaan`</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/pertanyaan" method="POST">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter items judul">
                        </div>
                        <div class="form-group">
                            <label for="isi">Description</label>
                            <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
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