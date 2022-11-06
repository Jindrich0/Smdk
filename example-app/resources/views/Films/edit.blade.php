@extends('Films.layout')

@section('content')
<h2>Edit film</h2>
<div class="row">
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
        </tr>
        <tr>
            <td> <input type="text" name="name" value="{{ $films->name }}" placeholder="name"> </td>
            <td> <textarea name="description" placeholder="Description" style="width:500px;"> {{ $films->description}} </textarea> </td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>
@endsection