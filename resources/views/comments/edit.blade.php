@if ($errors->any())
    <div class="callout callout-danger">
        <h5>
            <i class="icon fas fa-ban " style="margin-right: 10px;color: #dd1616;"></i>Form Error
        </h5>
        <ul class="list-unstyled" style="margin-left: 1.9rem;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<fieldset>
    <legend>edit  comment</legend>
    <form action="{{ route('comments.update', $comment) }}" method="POST">
        @csrf
        @method('put')
        <label>Name: <input type="text" name="name" value="{{ $comment->name }}"></label><br>
        <label>Email: <input type="email" name="email" value="{{ $comment->email }}"></label><br>
        <label>Comment: <textarea name="content">{{ $comment->content }}</textarea></label><br>
        <input type="submit" value="comment!">
    </form>
</fieldset>
