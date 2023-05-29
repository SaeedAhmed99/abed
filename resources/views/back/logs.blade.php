@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
		<!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Logs</h4>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="alert_model"></div>
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" data-paging='false' id="example1" data-page-length='25' style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                            <th>Ip</th>
                                        </tr>
                                        </thead>
                                        <tbody class="partners-table">
                                            @php $i = 0; @endphp
                                            @foreach($logs as $log)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $log->user->first_name ?? ''}} {{ $log->user->last_name ?? ''}}</td>
                                                    <td>{{ $log->type ?? ''}}</td>
                                                    <td>{{ $log->action ?? ''}}</td>
                                                    <td>{{ $log->ip ?? ''}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="load-more-btn mt-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1200">
                                        {{$logs->links("pagination::bootstrap-4")}}
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
@endsection
