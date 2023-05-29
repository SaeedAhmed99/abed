@extends('layouts.master')
@section('css')
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Site settings</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row -->
    <div class="row">
        <div class="container-fluid pt-2 px-4">
            <div class="col-sm-12 col-xl-12 card">
                <div id="alert_logo" class="mt-2">
                </div>
                <div class="row p-4 ">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="mb-0">WebSite Logo</h4>
                        </div>
                        <p class="mb-4">Current logo:
                            <img class="ml-3" id="user_image" width="150" src="{{ asset($get_setting->logo ?? '') }}">
                        </p>
                    </div>
                    <div class="col-8">
                        <label for="formFileSm" class="form-label mb-3">New logo image? (PNG/JPG/JPEG)</label>
                        <form method="post" id="update_logo" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <input type="file" id="formFileSm" accept="image/png, image/jpeg, image/jpg" name="logo" class="dropify" data-height="100" />
                                </div>
                                <button class="btn btn-primary ms-2">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 card">
                <div class="rounded h-100 p-4 ">
                    <div id="alert_name">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">WebSite title</h4>
                    </div>
                    <form method="post" id="update_name_en">
                        @csrf
                        <label>Title name (English)</label>
                        <div class="d-flex mb-2 form-floating">
                            @php $name = json_decode($get_setting->name); @endphp
                            <input name="name_en" type="text" class="form-control" placeholder="Enter title name (english)" value="{{$name->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" enctype="multipart/form-data" id="update_name_ar">
                        @csrf
                        <label>Title name (Arabic)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input type="text" class="form-control" name="name_ar"  placeholder="Enter title name (arabic)" value="{{$name->ar ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-6 card">
                <div class=" rounded h-100 p-4">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">Home Page Meta tags (SEO)</h4>
                    </div>
                    <div id="alert-meta-en">
                    </div>
                    <h5 class="mt-4 mb-3">English SEO: </h5>
                    @php $meta_title = json_decode($get_setting->meta_title); @endphp
                    <form id="update_meta_title_en">
                        @csrf
                        <label>Meta title (English)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_title_en" type="text" class="form-control" placeholder="Enter meta title (english)" value="{{$meta_title->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    @php $meta_keywords = json_decode($get_setting->meta_keywords); @endphp
                    <form id="update_meta_keywords_en">
                        @csrf
                        <label>Meta keywords (English)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_keywords_en" type="text" class="form-control" placeholder="Enter meta keywords (english)" value="{{$meta_keywords->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    @php $meta_description = json_decode($get_setting->meta_description); @endphp
                    <form method="post" id="update_meta_description_en">
                        @csrf
                        <label>Meta description (English)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_description_en" type="text" class="form-control" placeholder="Enter meta description (english)" value="{{$meta_description->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <div id="alert-meta-ar">
                    </div>
                    <h5 class="mt-4 mb-3">Arabic SEO: </h5>
                    <form method="post" id="update_meta_title_ar">
                        @csrf
                        <label>Meta title (Arabic)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_title_ar" type="text" class="form-control" placeholder="Enter meta title (arabic)" value="{{$meta_title->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>

                    <form method="post" id="update_meta_keywords_ar">
                        @csrf
                        <label>Meta keywords (Arabic)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_keywords_ar" type="text" class="form-control" placeholder="Enter meta keywords (arabic)" value="{{$meta_keywords->ar ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>

                    <form method="post" id="update_meta_description_ar">
                        @csrf
                        <label>Meta description (Arabic)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="meta_description_ar" type="text" class="form-control" placeholder="Enter meta description (arabic)" value="{{$meta_description->ar ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-6 card">
                <div class=" rounded p-4">
                    <div id="alert-social">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">WebSite social networks</h4>
                    </div>

                    <form method="post" id="update_facebook_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-facebook-f"></i></span>
                            <input name="facebook_link" value="{{$get_setting->facebook_link ?? ''}}" type="text" class="form-control" placeholder="facebook" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" id="update_twitter_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-twitter"></i></i></span>
                            <input type="text" name="twitter_link" value="{{$get_setting->twitter_link ?? ''}}" class="form-control" placeholder="twitter" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" id="update_linkedin_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-linkedin-in"></i></span>
                            <input type="text" name="linkedin_link" value="{{$get_setting->linkedin_link ?? ''}}" class="form-control" placeholder="linkedin" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" id="update_instagram_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-instagram"></i></span>
                            <input type="text" name="instagram_link" value="{{$get_setting->instagram_link ?? ''}}" class="form-control" placeholder="instagram" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" id="update_snapchat_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-snapchat"></i></span>
                            <input type="text" name="snapchat_link" value="{{$get_setting->snapchat_link ?? ''}}" class="form-control" placeholder="snapchat" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                    <form method="post" id="update_tiktok_link">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-tiktok"></i></span>
                            <input type="text" name="tiktok_link" value="{{$get_setting->tiktok_link ?? ''}}" class="form-control" placeholder="tiktok" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="col-12 col-6">
                    <div class=" rounded p-4">
                        <div id="alert-main-info">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="mb-0">REACH US main info</h4>
                        </div>

                        <form method="post" id="update_email">
                            @csrf
                            <label>Email</label>
                            <div class="d-flex mb-2 form-floating">
                                <input name="email" value="{{$get_setting->email}}" type="text" class="form-control" placeholder="Enter email">
                                <button class="btn btn-primary ms-2">Update</button>
                            </div>
                        </form>
                        <form method="post" id="update_phone">
                            @csrf
                            <label>Phone</label>
                            <div class="d-flex mb-2 form-floating">
                                <input name="phone" type="text" value="{{$get_setting->phone}}" class="form-control" placeholder="Enter phone">
                                <button class="btn btn-primary ms-2">Update</button>
                            </div>
                        </form>
                        <form method="post" id="update_fax">
                            @csrf
                            <label>Fax</label>
                            <div class="d-flex mb-2 form-floating">
                                <input name="fax" type="text" value="{{$get_setting->fax}}" class="form-control" placeholder="Enter fax">
                                <button class="btn btn-primary ms-2">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12 col-6 card">
                <div class=" rounded p-4">
                    <div id="alert-address">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-0">REACH US address</h4>
                    </div>
                    @php $address = json_decode($get_setting->address); @endphp
                    <form id="update_address_en">
                        @csrf
                        <label>Address (English)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="address_en" type="text" class="form-control" placeholder="Enter address (english)" value="{{$address->en ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>

                    <form id="update_address_ar">
                        @csrf
                        <label>Address (Arabic)</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="address_ar" type="text" class="form-control" placeholder="Enter address (arabic)" value="{{$address->ar ?? ''}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-12 col-6 card">
                <div class=" rounded p-4">
                    <div id="alert-map-iframes">
                    </div>
                    <div class="mb-4">
                        <h4 class="mb-0">REACH US Map iframe</h4>
                    </div>

                    <form id="update_map_iframe">
                        @csrf
                        <label>Map iframe</label>
                        <div class="d-flex mb-2 form-floating">
                            <input name="map_iframe" type="text" class="form-control" placeholder="Enter map iframe" value="{{$get_setting->map_iframe}}">
                            <button class="btn btn-primary ms-2">Update</button>
                        </div>
                    </form>
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
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

<script src="{{asset ('assets/js/backAssets/settings.js')}}"></script>
@endsection
