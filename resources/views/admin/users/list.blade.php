@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <h3 class="card-title">Users</h3>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Create</a>
                            </div>
                        </div>
                        <hr class="mb-4 mt-1">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th width="180px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.list') }}",
                columns: [
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $(document).on('click', '.delete-btn', function () {
                var id = $(this).data('id');
                var deleteUrl = '{{ route('users.delete', [ 'modelId'=>'ID']) }}';
                deleteUrl = deleteUrl.replace('ID', id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this action!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DB2828',
                    confirmButtonText: 'Yes, Delete!'
                }).then(function (isConfirm) {
                    if (isConfirm.value) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            data: {'_token': '{{ csrf_token() }}'},
                            success: function (result) {
                                var type = result.success ? 'success' : 'warning';
                                var title = result.success ? 'User has been deleted!' : 'Unable to delete!';
                                Swal.fire({
                                    "title": title,
                                    "text": "",
                                    "timer": 5000,
                                    "width": "32rem",
                                    "heightAuto": true,
                                    "padding": "1.25rem",
                                    "showConfirmButton": false,
                                    "showCloseButton": true,
                                    "toast": true,
                                    "icon": type,
                                    "position": "bottom-end"
                                });
                                if (type === 'success') {
                                    table.ajax.reload();
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
