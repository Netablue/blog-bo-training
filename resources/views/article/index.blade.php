@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center m-2 display-5">Articles</h1>
        <table class="table table-hover">
            <thead>
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>               
                @foreach ($articles as $article)
                    <tr class="table-active">                        
                        <td> {{ $article->id}} </td>
                        <td> {{ $article->title}} </td>
                        <td> {{ $article->created_at}} </td>
                        <td class="d-flex"> 
                            <a href="#" class="btn btn-info mx-3">Edit</a> 
                            <a href="#" class="btn btn-delete mx-3">Delete</a> 
                        </td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
        <div class="text-center" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                {{ $articles->links('override.pagination') }}
            </div>
        </div>
    </div>
    
@endsection