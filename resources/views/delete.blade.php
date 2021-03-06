
@extends('base')

@section('content')
<style>
    p{
        text-align: center;
    }
    body{
    background: url(3.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }

</style>
<br><br><br>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card text-black bg-light mb-3">
                    <h3>Delete Item?</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <h6 class="mt-2 mb-3">
                                Delete this item {{ $item->name }}? 
                            </h6>
                            
                            <div>
                                <button class="btn btn-danger" type="submit">Delete</button> &nbsp;&nbsp;
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">Cancel</a>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop