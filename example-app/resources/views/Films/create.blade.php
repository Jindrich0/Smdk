@extends('Films.layout')

@section('content')
<h2>Add film</h2>
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

<form action="{{ route('films.store') }}" method="POST">
    @csrf

    <table border="1px solid black">
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        <tr>
            <td> <input type="text" name="name" placeholder="name"> </td>
            <td> <textarea name="description" placeholder="Description"> </textarea> </td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>