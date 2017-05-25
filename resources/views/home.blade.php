@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @if(Auth::user()->jabatan == 'ADMIN')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang </div>
                    <div class="panel-body">
                        Hallo Admin!
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Blog index
                    </div>
                <div class="panel-body">
                <table class="table table-bodered table-striped" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->judul}}</td>
                            <td>{{$value->deskripsi}}</td>
                            <td>
                                <a href="{{ url('home/'.$value->id.'/edit')}}" class="btn btn-primary btn-sm">Edit</a>
                                <form method="POST" action="{{ url('/home/'.$value->id) }}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>    
                </table>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        Menu        
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('home/create')}}" class="btn btn-success btn-sm btn-block">Tambah</a><br/>
                    </div>
                </div>
            </div>
    @elseif(Auth::user()->jabatan == 'MEMBER')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang </div>
                    <div class="panel-body">
                        Hallo Member!
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Blog index
                    </div>
                <div class="panel-body">
                <table class="table table-bodered table-striped" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->judul}}</td>
                            <td>{{$value->deskripsi}}</td>
                        </tr>
                    @endforeach
                    </tbody>    
                </table>
                </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $('#table').DataTable();
            });
        </script>
@endsection
