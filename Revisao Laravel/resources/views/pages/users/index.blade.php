@extends('master.main')


@section('content')
    @component('components.tables.table_users', ['users'=>$users])
    @endcomponent

@endsection
