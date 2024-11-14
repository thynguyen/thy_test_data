@if(session('Error'))
<div class="alert alert-danger" role="alert">{!! session('Error') !!}</div>
@endif
@if(session('Success'))
<div class="alert alert-success" role="alert">{!! session('Success') !!}</div>
@endif