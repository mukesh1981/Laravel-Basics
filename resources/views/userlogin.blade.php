<x-header pagetitlename="User Login with Session"/>
<h1>User Login with only Session</h1>
<p>

</p>
<table>
<form action="userLoginCheck" method="post">
@csrf
<tr><td><label>Name</label></td><td>
<input type="text" name="userid"/>
<span style="color:red;">@error('userid'){{$message}} @enderror</span>
</td></tr>
<tr><td>
<label>Password</label></td><td>
<input type="password" name="password"/>
<span style="color:red;">@error('password'){{$message}} @enderror</span>
</td></tr>

<tr><td><input type ="submit" name="submitdata" value="Submit"/></td></tr>
</form>
</table>