<h1>Author</h1>
<h3>
<a href="{{route('book.index')}}">All books</a>
<a href="{{route('author.index')}}">All authors</a>

</h3>
<form method="POST" action="{{route('author.store')}}">
   Name: <input type="text" name="author_name">
   Surname: <input type="text" name="author_surname">
   @csrf
   <button type="submit">ADD</button>
</form>
