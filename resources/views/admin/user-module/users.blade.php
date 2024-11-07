@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <table id="userTable" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            responsive: true,
            ajax: {
                url: '{{route("admin.get.users")}}',
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'middle_name', name: 'middle_name' },
                { data: 'email', name: 'email' },
                { data: 'role', name: 'role' },
                {
                    data: 'action',
                    render: function (data, type, row) {
                        let activeText = (row.is_active == '1') ? 'text-success' : 'text-danger';
                        let activeIcon = (row.is_active == '1') ? 'bi-unlock-fill' : 'bi-lock-fill';

                        return `<div class="d-flex gap-2">
                            <a class="text-dark fs-6" href="#"><i class="bi bi-pencil-fill"></i></a> 
                            <a class="text-danger fs-6" href="#"><i class="bi bi-trash-fill"></i></a>
                            <a class="${activeText} fs-6" href="#"><i class="bi ${activeIcon}"></i></a>
                        </div > `;
                    },
                    name: 'action',
                }
            ]
        });
    });
</script>
@endsection