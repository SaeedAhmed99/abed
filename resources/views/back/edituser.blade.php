@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Edit User</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
                                        <div id="alert_change_image"></div>

                                        <div class="row d-flex justify-content-between ">
                                            <div class="col-4">
                                                <div class="main-img-user profile-user">
                                                    @if ($user->image == null)
                                                        <img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}">
                                                    @else
                                                        <img id="user_image" alt="" src="{{ asset($user->image) }}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-7 ">
                                                <form class="mb-3" id="update_image">
													@csrf
													<div>
                                                        <input type="number" name="id" value="{{ $user->id }}" hidden>
														<input accept="image/png, image/jpeg, image/jpg" name="image" class="form-control form-control-sm" type="file">
														<button class="btn btn-primary mt-2">Upload</button>
													</div>
												</form>
                                            </div>
                                        </div>

										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ $user->first_name }} {{ $user->last_name }}</h5>
												<p class="main-profile-name-text">{{ $user->email }}</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
                                            {{ $user->bio }}										</div><!-- main-profile-bio -->
										<h6><i class="fa-solid fa-phone"></i> Phone</h6>
                                        <div class="main-profile-bio">
                                            {{ $user->phone }}
										</div>
										<h6><i class="fa-solid fa-location-dot"></i> Address</h6>
                                        <div class="main-profile-bio">
                                            {{ $user->address }}
										</div>
										<h6><i class="fa-solid fa-globe"></i> Country</h6>
                                        <div class="main-profile-bio">
                                            {{ $user->country }}
										</div>
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">  
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="active">
											<a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a>
										</li>
										<li class="">
											<a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">PASSWORD</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
									<div class="tab-pane active" id="settings">
                                        <div id="alert_edit_user"></div>
										<form role="form" id="formEditUser">
                                            @csrf
                                            <input type="number" name="id" value="{{ $user->id }}" hidden>
											<div class="form-group">
												<label>First Name</label>
												<input type="text" value="{{ $user->first_name }}" name="first_name" class="form-control">
											</div>
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" value="{{ $user->last_name }}" name="last_name" class="form-control">
											</div>
											<div class="form-group">
												<label for="Email">Email</label>
												<input type="email" value="{{ $user->email }}" name="email" id="Email" class="form-control">
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="phone" value="{{ $user->phone }}" name="phone" id="phone" class="form-control">
											</div>
											<div class="form-group">
												<label for="address">Address</label>
												<input type="address" value="{{ $user->address }}" name="address" id="address" class="form-control">
											</div>
											<div class="form-group">
												<label for="country">Country</label>
												<input type="country" value="{{ $user->country }}" name="country" id="country" class="form-control">
											</div>
											<div class="form-group">
												<label for="AboutMe">Bio</label>
												<textarea rows="10" name="bio" id="AboutMe" class="form-control">{{ $user->bio }}</textarea>
											</div>
											<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
										</form>
									</div>
									<div class="tab-pane" id="home">
                                        <div id="alert_change_password"></div>
										<form role="form" id="formChangePassord">
                                            @csrf
                                            <input type="number" name="id" value="{{ $user->id }}" hidden>
											<div class="form-group">
												<label for="Password">Current Password</label>
												<input type="password" name="current_password" placeholder="Current Password" id="Password" class="form-control">
											</div>
											<div class="form-group">
												<label for="Password">Password</label>
												<input type="password" name="new_password" placeholder="8 - 20 Characters" id="Password" class="form-control">
											</div>
											<div class="form-group">
												<label for="RePassword">Re-Password</label>
												<input type="password" name="new_confirm_password" placeholder="8 - 20 Characters" id="RePassword" class="form-control">
											</div>
											<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
										</form>
									</div>
								</div>
							</div>
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
    <script src="{{asset ('assets/js/backAssets/users.js')}}"></script>
@endsection