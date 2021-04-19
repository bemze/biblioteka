<h1>All books</h1>
<h3>
<a href="{{route('book.create')}}">Create book</a>
<br>
<a href="{{route('author.index')}}">All authors</a>
<br>
<a href="{{route('author.create')}}">Create author</a>
</h3>
<hr>
@foreach ($books as $book)
  <a href="{{route('book.edit',[$book])}}">{{$book->title}} {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</a>
  <form method="POST" action="{{route('book.destroy', [$book])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach

<a href="{{route('book.create')}}">


