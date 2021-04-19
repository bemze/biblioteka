<h1>All authors</h1>

<h3>
<a href="{{route('book.index')}}">All books</a>
<br>
<a href="{{route('author.create')}}">Create author</a>
<br>
<a href="{{route('book.create')}}">Create book</a>

</h3>
@foreach ($authors as $author)
  <a href="{{route('author.edit',[$author])}}">{{$author->name}} {{$author->surname}}</a>
  <form method="POST" action="{{route('author.destroy', [$author])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
