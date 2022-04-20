

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Country</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Deleted at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>

            <td>{{$user->country->name}}</td>


            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->birth_date}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>{{$user->deleted_at}}</td>
            <td>
                <a href="{{url('users/'.$user->id)}}">Show</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
