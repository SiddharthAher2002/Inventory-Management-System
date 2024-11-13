@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Add new Menu</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Menu Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Enter menu URL"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="parent_id">Parent Menu</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="0">Top Level (No Parent)</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Menu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection