@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td> 
                                    <a href="product/{{ $product->id }}/edit" class="btn btn-xs btn-primary">Edit</a>
                                    {!! Form::open(array('method' => 'DELETE','action' => array('ProductController@destroy', $product->id))) !!}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr> 
                            @endforeach 
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
