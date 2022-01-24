<x-header pagetitlename="Edit Add Form Data"/>
<h1>Edit Data</h1>

<table>

<form action="/updateData1" method="POST">
@csrf
<tr><td><label>Name</label></td><td>
<input type="hidden" name="id" value="{{$data['id']}}"/>
<input type="text" name="name1" value="{{$data['name']}}"/>
<span style="color:red;">@error('name1'){{$message}} @enderror</span>
</td></tr>
<tr><td>
<label>Email Id</label></td><td>
<input type="text" name="emailid" value="{{$data['emailId']}}"/>
<span style="color:red;">@error('emailid'){{$message}} @enderror</span>
</td></tr>
<tr><td><label>Mobile Number</label></td><td>
<input type="text" name="mobileno" value="{{$data['mobileNo']}}"/>
<span style="color:red;">@error('mobileno'){{$message}} @enderror</span>
</td></tr>

<tr><td><input type ="submit" name="submitdata" value="Submit"/></td></tr>
</form>
</table>