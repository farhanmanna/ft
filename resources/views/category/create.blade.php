@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category</div>
                <div class="panel-body">
                    {!!  Form::open(array('action' => 'CategoryController@store'))  !!}
                        <div class="form-group">
                            {!! Form::label('name','Name:') !!}
                            {!! Form::text('name',null,['class'=>'form-control','autofocus'])   !!}
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                        
                    {!!  Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
