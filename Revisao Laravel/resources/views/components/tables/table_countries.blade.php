

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Deleted at</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($countries as $country)
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>{{$country->deleted_at}}</td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
