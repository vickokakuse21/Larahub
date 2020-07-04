@extends('master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1>ini adalah item yang berhasil</h1>
            <a href="/pertanyaan/create" class="btn btn-primary">Create New Item</a>
                <table class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pertanyaan as $key => $tanya)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    {{$tanya->judul}}
                                </td>
                                <td>
                                    {{$tanya->isi}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection