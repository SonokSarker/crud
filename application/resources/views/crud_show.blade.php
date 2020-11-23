@extends('layouts.app')
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                         <a href="crud_create">Create</a> 
                        {{session('msg')}}
                        <br/>
                        <div class="flex-center position-ref full-height">
                            <table id="customers">
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                                @foreach($crudArr as $crud)
                                    <tr>
                                        <td>{{$crud->id}}</td>
                                        <td>{{$crud->name}}</td>
                                        <td>{{$crud->created_at}}</td>
                                        <td>
                                          <a href="crud_delete/{{$crud->id}}">Delete | </a>
                                          <a href="crud_edit/{{$crud->id}}">Edit | </a> 
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection