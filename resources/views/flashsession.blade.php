<x-header pagetitlename="Flash Session"/>
<h1>Flash Session</h1>
<p>
Flash session is used only once time after store it just use it to display the message after submision data 
</p>
<table>

@if(session('name1'))
<h3>Data has been saved for..{{session('name1')}}</h3>
@endif
<form action="flashSessionData" method="post">
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