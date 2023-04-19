
@foreach($comments as $index=>$comment)
<div id="display-comment{{$index}}" class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>

<p><strong>{{ $comment->user->name }}</strong>  {{ $comment->content }}</p>

    <a href="" id="reply"></a>


    
    <form method="post" action="{{url('/aa') }}">
    @csrf
    <div class="form-group">
        <input type="text" name="content" class="form-control" required/>
        @error('content') <p class="text-danger">{{$message}}</p> @enderror

        <input type="hidden" name="newspaper_id" value="{{ $newspaper_id }}" required />
        @error('newspaper_id') <p class="text-danger">{{$message}}</p> @enderror

        <input type="hidden" name="parent_id" value="{{ $comment->id }}" required />
        @error('parent_id') <p class="text-danger">{{$message}}</p> @enderror

    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning" value="Reply" />
    </div>
</form>
@include('guest.commentDisplay', ['comments' => $comment->replies])
</div>
@endforeach
