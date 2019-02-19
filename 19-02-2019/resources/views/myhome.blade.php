<!--@extends('layouts.app1')
-->
@extends('layouts.app1')

	@section('title')
    
      Welcome to {{$name}}




<div style="font-size:14px;text-align:left;">
<form method="post" action="../created/">

@csrf

Name:<br />
<input type="text" name="name" />
<br />Body:<br />
<input type="text" name="body" /><br />

<input type="submit" value="Save" />
</form>


</div>
<br /><br />





@endsection