@extends ('layout.master')
@section ('link')
@endsection
@section ('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="card-deck">
    @foreach ($data as $datas)
    <div class="col-sm-3 my-3">
      <div class="card card-primary card-outline card-sm">
        <div class="card-body">
          <div class="text-center" style="margin-bottom:  10px;">
            @if($datas->avatar == '')
            <img src="{{asset('images/avatars/avatardefault.png')}}" class="img-circle img-fluid"
              style="width:150px; height: 150px;" alt="profile picture">
            @else
            <img src="{{asset('images/avatars/'.$datas->avatar)}}" class="img-circle img-fluid"
              style="width:150px; height: 150px;" alt="profile picture">
            @endif
          </div>
          <h5 class="card-title">{{$datas->nama_lengkap}}</h5>
          <p class="card-text text-muted" style="font-size: 13px">{{$datas->jabatan}}</p>
        </div>
        <div class="card-footer">
          <div class="form-row">
            <div class="col col-sm-10">
              <p class="card-text">
                <small class="text-muted">{{$datas->email}}</small>
              </p>
            </div>
            <div class="col col-sm-2">
              <a href="{{url('error')}}" class="btn btn-sm btn-primary float-right">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@include('sweetalert::alert')
@endsection
@section ('javascript')
@endsection