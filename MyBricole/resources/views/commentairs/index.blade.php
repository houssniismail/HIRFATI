
{{$commentaires}}

@foreach ($commentaires as $commentaire)
{{$commentaire->commentaire}}
<a href="{{route('commentairs.show',['id'=>$commentaire->id])}}">show</a>
@endforeach