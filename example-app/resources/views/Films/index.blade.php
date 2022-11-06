@extends('Films.layout')

@section('content')
<div>
    <a href="{{ route('films.create') }}">Add new film</a>
</div>

@if ($message = Session::get('success'))
<div>
    <p>{{ $message }}</p>
</div>
@endif

<table border="1px solid black">
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @foreach ($films as $films)
    <tr>
        <td> {{ $films->name }} </td>
        <td> {{ $films->description }} </td>
        <td>
            <a href="{{ route('films.show', $films->id) }}">Show</a>
            <a href="{{ route('films.edit', $films->id) }}">Edit</a>
            <form action="{{ route('films.destroy', $films->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection