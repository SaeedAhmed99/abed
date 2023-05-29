@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Users</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="card-body" style="background-color: white">
            <a class="text-gray btn btn-outline-primary" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Create New User</a>
            <div class="table-responsive">
                <table data-paging='false' class="table text-md-nowrap" id="example1" data-page-length='10'>
                    <div id="alert_user"></div>
                    <thead>
                        <tr>
                            <th class="border-bottom-0">#</th>
                            <th class="border-bottom-0">Name</th>
                            <th class="border-bottom-0">Email</th>
                            <th class="border-bottom-0">Status</th>
                            <th class="border-bottom-0">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="users-table">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration ?? ''}}</td>
                                <td>{{ $user->first_name ?? ''}} {{ $user->last_name ?? ''}}</td>
                                <td>{{ $user->email ?? ''}}</td>
                                <td>
                                    @if ($user->status == 1)
                                        <span class="label text-success">active</span>
                                    @else
                                        <span class="label text-danger">not active</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('backend.users.edit', $user->id) }}" class="btn btn-sm btn-info"
                                        title="edit"><i class="las la-pen"></i></a>
                                    <a style="cursor: pointer;" class="btn btn-danger btn-sm delete-user" user_id="{{ $user->id }}">
                                        <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="load-more-btn mt-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
                <!-- Modal effects -->
                <div class="modal" id="modaldemo8">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Create New User</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div id="alert_model"></div>
                            <div class="modal-body">
                                <form id="create_user" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label >First Name</label>
                                        <input type="text" placeholder="Enter first name" class="form-control" id="first_name" name="first_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label >Last Name</label>
                                        <input type="text" placeholder="Enter last name" class="form-control" id="last_name" name="last_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" placeholder="Enter email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label >Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <label>Password Confirmation</label>
                                        <input type="password" class="form-control" placeholder="Enter password confirmation" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-success">Add</button>
                                        <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal effects-->
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script>const csrf = "{{ csrf_token() }}";</script>
    <script src="{{asset ('assets/js/backAssets/users.js')}}"></script>
@endsection
