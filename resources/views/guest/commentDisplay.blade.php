
@foreach($comments as $comment)
<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>

<p><strong>{{ $comment->user->name }}</strong>  {{ $comment->content }}</p>

    <a href="" id="reply"></a>



    <form method="post" action="{{url('/aa') }}">
    @csrf
    <div class="form-group">
        <input type="text" name="content" class="form-control" required/>
        <input type="hidden" name="newspaper_id" value="{{ $newspaper_id }}" required />
        <input type="hidden" name="parent_id" value="{{ $comment->id }}" required />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning" value="Reply" />
    </div>
</form>
@include('guest.commentDisplay', ['comments' => $comment->replies])
</div>
@endforeach
