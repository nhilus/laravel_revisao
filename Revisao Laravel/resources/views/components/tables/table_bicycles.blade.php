

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">User Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Deleted at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($bicycles as $bicycle)
        <tr>
            <th scope="row">{{$bicycle->id}}</th>
            <td>
                @foreach($bicycle-> users as $user)
                    <p>{{$user->name}}</p>
                @endforeach
            </td>
            <td>{{$bicycle->brand}}</td>
            <td>{{$bicycle->model}}</td>
            <td>{{$bicycle->address->street_name}}   {{$bicycle->address->country->name}}</td>
            <td>{{$bicycle->created_at}}</td>
            <td>{{$bicycle->updated_at}}</td>
            <td>{{$bicycle->deleted_at}}</td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
