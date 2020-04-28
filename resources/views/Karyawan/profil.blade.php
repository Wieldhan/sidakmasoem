@extends ('layout.master')
@section ('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<h1 style="font-size: 30px">PROFILE</h1>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card card-primary card-outline">
				<div class="card-body box-profile">
					<div class="text-center">
						<img class="profile-user-img img-fluid img-circle" src="/images/avatardefault.png" alt="User profile picture">
					</div>
					<h3 class="profile-username text-center">Wildan Yanuarsyah Tanjung</h3>
					<p class="text-muted text-center">Software Engineer</p>
					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
							<i class="fab fa-instagram"></i>
							<b>INSTAGRAM</b> <a class="float-right">1,322</a>
						</li>
						<li class="list-group-item">
							<i class="fab fa-facebook"></i>
							<b>FACEBOOK</b> <a class="float-right">543</a>
						</li>
						<li class="list-group-item">
							<i class="fab fa-twitter"></i>
							<b>TWITTER</b> <a class="float-right">13,287</a>
						</li>
					</ul>
					<a href="#" class="btn btn-primary btn-block">
						<i class="fas fa-pencil-alt mr-1"></i>
						<b>Edit Profile</b></a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">About Me</h3>
					</div>
					<div class="card-body">
						<strong><i class="fas fa-book mr-1"></i> Education</strong>
						<p class="text-muted">
							B.S. in Computer Science from the University of Tennessee at Knoxville
						</p>
						<hr>
						<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
						<p class="text-muted">
							Malibu, California
						</p>
						<hr>
						<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
						</p>
						<hr>
						<strong><i class="far fa-file-alt mr-1"></i>Notes</strong>
						<p class="text-muted">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
						</p>
					</div>					
				</div>
			</div>
		</div>
	</div>
	@endsection
