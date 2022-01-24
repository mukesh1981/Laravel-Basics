<x-header pagetitlename="Fetch API Data"/>
<H1>what is Http Client?</h1>
<p>Using the Http client we can fetch all api data into my web application</p>
<h3>Making Requests</h3>
<p>To make requests, you may use the get, post, put, patch, and delete methods provided by the Http facade. First, let's examine how to make a basic GET request to another URL:</p>
<h3>Use This path into your controller to access api data</h3>
<p>use Illuminate\Support\Facades\Http;</p>
<h3>Call API URL to fetch data</h3>
<p>$response = Http::get('http://example.com');</p>
<p>The get method returns an instance of Illuminate\Http\Client\Response, which provides a variety of methods that may be used to inspect the response:</p>
   <h3>Call Data by array list</h3>
   <p>$response->body() : string;<br>
$response->json() : array|mixed;<br>
$response->object() : object;<br>
$response->collect() : Illuminate\Support\Collection;<br>
$response->status() : int;<br>
$response->ok() : bool;<br>
$response->successful() : bool;<br>
$response->failed() : bool;<br>
$response->serverError() : bool;<br>
$response->clientError() : bool;<br>
$response->header($header) : string;<br>
$response->headers() : array;</p> 
<h3>Call All Json data</h3>
<p>The Illuminate\Http\Client\Response object also implements the PHP ArrayAccess interface, allowing you to access JSON response data directly on the response:</p>
<p>Return Path</p>
<p>return Http::get('http://example.com/users/1')['name'];</p>
<h3>Dumping Requests</h3>
<p>If you would like to dump the outgoing request instance before it is sent and terminate the script's execution, you may add the dd method to the beginning of your request definition:
</p><p>
return Http::dd()->get('http://example.com');</p>
<h3>Fetch All Data From API(other web application</h3>
<p>All Array Data get from API</p>
 
{{print_r($apidata)}}
<table border="1">
    <tr><td>Id</td>
    <td>Email id</td>
    <td>Fist Name</td>
    <td>Last Name</td>
    
    <td>Profile Pic</td>
    @foreach($apidata as $allapidata) 
</tr>
<tr>
    <td>{{$allapidata['id']}}</td>
    <td>{{$allapidata['email']}}</td>
    <td>{{$allapidata['first_name']}}</td>
    <td>{{$allapidata['last_name']}}</td>
    <td><img src="{{$allapidata['avatar']}}"</td>
</tr>
@endforeach
</table>


