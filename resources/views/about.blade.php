<x-header pagetitlename="about us"/>
<p>This is the about page</p>
<p>This page using by:</p>
<p>Pass the values using controller and call is on view then call it javascript file using json</p>
<p>csrf form </p>@csrf
@foreach($userdata as $user)
    <h1>{{$user}}</h1>
@endforeach
<script>
    var data=@json($userdata);
    console.warn(data[0]);
    </script>
    