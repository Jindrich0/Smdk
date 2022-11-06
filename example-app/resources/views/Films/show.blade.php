@extends('Films.layout')

@section('content')
<h2>Show film</h2>
<div>
    <a href="{{ route('films.index') }}">Back</a>
</div>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('films.update',$films->id) }}" method="POST">
    @csrf

    @method('PUT')
    <table border="1px solid black">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        <tr>
            <td> {{ $films->name }} </td>
            <td> {{ $films->description}} </td>
            <td> {{ $films->created_at}} </td>
            <td> {{ $films->updated_at}} </td>
        </tr>
    </table>
</form>
@endsection