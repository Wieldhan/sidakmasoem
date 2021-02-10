@extends ('layout.master')
@section ('content')
<div class="content-wrapper">
  <div class="error-page float-left" style="margin-top: 200px;">
    <h2 class="headline text-danger">500</h2>
    <div class="error-content">
      <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>
      <p>
        The Page is not Avaliable. We will work on fixing that right away.
        Meanwhile, you may <a href="{{url('dashboard')}}">Return to Dashboard</a> thank you.
      </p>
    </div>
  </div>
</div>
@endsection