@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Create User</h3>
                        <hr class="mb-4 mt-1">
                        {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
                        @include('admin.users._form')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-right mt-3">
                                    <a href="{{ route('users.list') }}" class="btn btn-dark">Cancel</a>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
