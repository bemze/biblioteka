<h1>Edit author</h1>

<form method="POST" action="{{route('author.update',[$author->id])}}">
   Name: <input type="text" name="author_name" value="{{$author->name}}">
   Surname: <input type="text" name="author_surname" value="{{$author->surname}}">
   @csrf
   <button type="submit">EDIT</button>
</form>