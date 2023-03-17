<div>
    <h1>User List {{ $name }}</h1>
    <p>name : {{ $user->name }}</p>
    <p>email : {{ $user->email }}</p>
    <ul>
        @foreach ($user_list as $value)
            <li>
                <p>name : {{ $value->name }}</p>
                <p>email : {{ $value->email }}</p>
            </li>
        @endforeach
    </ul>
</div>
