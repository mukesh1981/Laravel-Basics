<x-header pagetitlename="Add Form Data"/>
<h1>Html form for Registration and add data into the table</h1>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<table>

<form action="saveDataDb" method="post">
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
<tr><td><label>Education</label></td><td>
<select name="education">
<option value="BA">BA</option>
<option value="BSC">BSC</option>
<option value="BCA">BCA</option>
<option value="MCA">MCA</option>
</select>
<span style="color:red;">@error('education'){{$message}} @enderror</span>
</td></tr>
<tr><td><label>Gender</label></td><td>
<input type="radio" name="gender" value="Male"/>Male
<input type="radio" name="gender" value="Female"/>Female
<span style="color:red;">@error('gender'){{$message}} @enderror</span>
</td></tr>
<tr><td><input type ="submit" name="submitdata" value="Submit"/></td></tr>
</form>
</table>