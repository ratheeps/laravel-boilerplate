@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h3>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="w-25">First Name</td>
                                <td>{{ $user->first_name }}</td>
                            </tr>
                            <tr>
                                <td class="w-25">Last Name</td>
                                <td>{{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <td class="w-25">Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="float-right mt-3">
                                    <a href="{{ route('users.list') }}" class="btn btn-dark">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
