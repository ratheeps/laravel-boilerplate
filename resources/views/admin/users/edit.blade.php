@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit {{ $user->first_name }} {{ $user->last_name }}</h3>
                        <hr class="mb-4 mt-1">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}
                        @include('admin.users._form')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-right mt-3">
                                    <a href="{{ route('users.list') }}" class="btn btn-dark">Cancel</a>
                                    <button type="submit" class="btn btn-success">Update</button>
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
