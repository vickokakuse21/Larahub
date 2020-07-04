@extends('master')
@section('content')

<div class="container-fluid">
    <div class="row">
            <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">`Edit pertanyaan`</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/pertanyaan/{{$tanya->id}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="text" class="form-control" id="judul" value="{{$tanya->judul}}" name="judul" placeholder="Enter items judul">
                        </div>
                        <div class="form-group">
                            <label for="isi">Description</label>
                            <input type="text" class="form-control" id="isi" value="{{$tanya->isi}}"name="isi" placeholder="isi">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection