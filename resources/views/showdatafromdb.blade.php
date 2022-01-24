<x-header pagetitlename="Show Data From table"/>
<H1>Show all data from table</h1>
{{print_r($allArrayData)}}
<table border="1">
    <tr><td>Id</td>
    <td>Email id</td>
    <td>Fist Name</td>
    <td>Last Name</td>
    
   
    @foreach($allArrayData['oneToOneData'] as $oneToOneData=>$allapidata) 
</tr>
<tr>
    <td></td>
   
    
</tr>
@endforeach
</table>
<table border="1">
<tr><td>
<h3>All Data from table from database</h3>
<p>All Array Data get from API</p>
 <h1>Fetch Data From Table using only controller</h1>
 <table border="1">
    <tr><td>Id</td>
    <td>Email id</td>
    <td>Fist Name</td>
    <td>Last Name</td>
    
   
    @foreach($allArrayData['table1'] as $table1=>$allapidata) 
</tr>
<tr>
    <td>{{$allapidata->id}}</td>
    <td>{{$allapidata->game_name}}</td>
    <td>{{$allapidata->game_device}}</td>
    <td>{{$allapidata->game_payout_speed}}</td>
    
</tr>
@endforeach
</table>
</td>
<td>
<h1>Edit Delete the data</h1>
<table border="1">
    <tr><td>Id</td>
    <td>Name</td>
    <td>Email Id</td>
    <td>MobileNo</td>
    <td>Education</td>
    <td>Gender</td>
    <td>Action</td>
    
   
    @foreach($allArrayData['table2'] as $table2=>$allapidata) 
</tr>
<tr>
    <td>{{$allapidata->id}}</td>
    <td>{{$allapidata->name}}</td>
    <td>{{$allapidata->emailId}}</td>
    <td>{{$allapidata->mobileNo}}</td>
    <td>{{$allapidata->education}}</td>
    <td>{{$allapidata->gender}}</td>
    <td><a href="/edit/{{$allapidata->id}}">Edit</a>|<a href="/delete/{{$allapidata->id}}">Delete</a></td>
    
</tr>
@endforeach
</table>
</td>
</table>



<h1>Fetch Data From Table using controller, Model and view</h1>
<p>This data fetch using Model</p>
<p>When we create a model we keep in mind if you have tablename if you create model same name which is the tablename then 
    autometically fetch all data from that table
</p>
<table border="1">
    <tr><td>Id</td>
    <td>Email id</td>
    <td>Fist Name</td>
    <td>Last Name</td>
    
   
    @foreach($allArrayData['table2'] as $table2=>$allapidata) 
</tr>
<tr>
    <td>{{$allapidata->id}}</td>
    <td>{{$allapidata->name}}</td>
    <td>{{$allapidata->emailId}}</td>
    <td>{{$allapidata->mobileNo}}</td>
    
</tr>
@endforeach
</table>
