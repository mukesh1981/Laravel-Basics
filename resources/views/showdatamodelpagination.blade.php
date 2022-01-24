<x-header pagetitlename="Show Data From table"/>
<H1>Show all data from table using Model View and Controller</h1>

<h3>Model for fetach all data from table</h3>
<p>Command for creatiing Model</p>
<p>PHP artisan make:model ModelName</p>
<p>use Illuminate\Database\Eloquent\Model
    <br>
    class ModelName extends Model<br>
    {
        <br>
      use  HasFactory;<br>
    }
</p>
 <h1>Call Model into the Controller</h1>
   
<p>use App\Models\ModelName;</p>
<p>return ModelName::all();// fetach all table row</p>
<p>$data=ModelName::all();</p>
<p>or</p>
<p>$data=ModelName::paginate(5);// this for pagination to all find data from table</p>
<p>return view('templatename',['arrayVariable'=>$data])</p>

<h1>Show all data on the template page</h1>
<p>forech($arrayVariable as $data){ echo $data->fieldName}</p>
<h1>Call Pagination on the template</h1>
<p>$dataVariableName->links()// it is called for pagination all data will display with pagination autometically.
</p>
<table border="1">
    <tr><td>Id</td>
    <td>Email id</td>
    <td>Fist Name</td>
    <td>Last Name</td>
    
   
    @foreach($allArrayData as $allapidata) 
</tr>
<tr>
    <td>{{$allapidata->id}}</td>
    <td>{{$allapidata->game_name}}</td>
    <td>{{$allapidata->game_device}}</td>
    <td>{{$allapidata->game_payout_speed}}</td>
    
</tr>
@endforeach
</table>
<div>{{$allArrayData->links()}}</div>