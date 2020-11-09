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
    <div class="card card-primary card-outline">
      @if($datas->avatar == '')
      <img src="{{asset('images/avatars/avatardefault.png')}}" class="card-img-top" alt="profile picture">
      @else
      <img src="{{asset('images/avatars/'.$datas->avatar)}}" class="card-img-top" alt="profile picture">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{$datas->nama_lengkap}}</h5>
        <p class="card-text text-muted" style="font-size: 15px">{{$datas->jabatan}}</p>
      </div>
      <div class="card-footer">
        <div class="form-row">
          <div class="col col-sm-10">
            <p class="card-text">
              <small class="text-muted">{{$datas->email}}</small>
            </p>
          </div>
          <div class="col col-sm-2">
            <button class="btn btn-sm btn-primary float-right">Detail</button>
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