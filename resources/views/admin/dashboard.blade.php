@extends('layouts.master')


@section('title')
    Dashboard | Lyrics Manager
@endsection


@section('content')
<div class="container-fluid">
    <h1 class="mt-4"> Lyrics Tables </h1>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Song Lyrics</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Song Lyrics</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="#" class="btn btn-success">EDIT</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection