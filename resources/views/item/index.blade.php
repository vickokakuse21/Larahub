@extends('master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1>ini adalah item yang berhasil</h1>
            <a href="/items/create" class="btn btn-primary">Create New Item</a>
                <table class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 40px">Stock</th>
                            <th style="width: 40px">Price</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->description}}
                                </td>
                                <td>
                                    {{$item->price}}
                                </td>
                                <td>
                                    {{$item->stock}}
                                </td>
                                <td>
                                    <a href="/items/{{$item->id}}" class="btn btn-sm btn-info">show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection