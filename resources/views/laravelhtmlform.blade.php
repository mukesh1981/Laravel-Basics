<x-header pagetitlename="Laravel Html form"/>
<h1>Html form for Registration</h1ce>
<table>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="laravelhtmlformdata" method="post">
@csrf
<tr><td><label>Name</label></td><td>
<input type="text" name="name1"/>
<span style="color:red;">@error('name1'){{$message}} @enderror</span>
</td></tr>
<tr><td>
<label>Email Id</label></td><td>
<input type="text" name="emailid"/>
<span style="color:red;">@error('emailid'){{$message}} @enderror</span>
</td></tr>
<tr><td><label>Mobile Number</label></td><td>
<input type="text" name="mobileno"/>
<span style="color:red;">@error('mobileno'){{$message}} @enderror</span>
</td></tr>
<tr><td><input type ="submit" name="submitdata" value="Submit"/></td></tr>
</form>
</table>