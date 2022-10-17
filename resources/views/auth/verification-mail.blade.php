<h1>Shoes Mail</h1>

<p>Welcome {{$user->name}}!</p>

<p>You recieved this email as a result of your registration to our website. Please click on the variation link</p>

<p>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here</a>
</p>