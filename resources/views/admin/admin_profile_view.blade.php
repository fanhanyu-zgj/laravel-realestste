@extends('admin.admin_dashboard')
@section('admin')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<div class="page-content">
    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>
                            <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo))?url('upload/admin_images/'.$profileData->photo):url('upload/no_image.jpg')}}" alt="profile">
                            <span class="h4 ms-3 ">{{ $profileData->username}}</span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                        <p class="text-muted">{{ $profileData->name}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">{{ $profileData->email}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">PHONE:</label>
                        <p class="text-muted">{{ $profileData->phone}}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">ADDREDD:</label>
                        <p class="text-muted">{{ $profileData->address}}</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="github"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                            <i data-feather="instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
               <div class="card-body">

								<h6 class="card-title">Update Admin Profile</h6>

								<form class="forms-sample" method="post" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Username</label>
										<input type="text" class="form-control" id="username" name='username' autocomplete="off" value="{{$profileData->username}}">
									</div>
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Name</label>
										<input type="text" class="form-control" id="name" name='name' autocomplete="off" value="{{$profileData->name}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Email</label>
										<input type="text" class="form-control" id="email" name='email' autocomplete="off" value="{{$profileData->email}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Phone</label>
										<input type="text" class="form-control" id="phone" name='phone' autocomplete="off" value="{{$profileData->phone}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Address</label>
										<input type="text" class="form-control" id="address" name='address' autocomplete="off" value="{{$profileData->address}}">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Photo</label>
                                        <input class="form-control" type="file" name='photo' id="image">
									</div>
                                    <div class="mb-3">
                                    <img id='showImage' class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo))?url('upload/admin_images/'.$profileData->photo):url('upload/no_image.jpg')}}" alt="profile">
                                </div>


									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
	
								</form>

              </div>
            </div>
            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->
       
        <!-- right wrapper end -->
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader=new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        })
    })
</script>
@endsection