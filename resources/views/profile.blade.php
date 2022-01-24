<x-header pagetitlename="User Profile Page"/>
<h1>User Profile Page After Login</h1>
<p>Loged As:{{session('userid')}}


</p>
<p>This user is loged in using only session</p>
<p>Login and logout page using store user details into the session and logout from profile using pulled the session values and redirect to again login page</p>
<a href="{{url('/logout')}}">logout</a>