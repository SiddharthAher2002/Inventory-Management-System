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
    $(document).ready(function(){
        $('#userTable').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            pagination: false,
            ajax:{
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
                    { data: 'role', name: 'role' }
                ]
        });
    });
</script>
@endsection