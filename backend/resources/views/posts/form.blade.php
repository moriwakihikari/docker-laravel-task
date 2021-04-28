@csrf
<div class="form-floating mb-3">
  <input type="text" name="title" class="form-control" required value="{{ $post->title ?? old('title') }}" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">タイトル</label>
</div>
<div class="form-outline">
  <textarea required class="form-control" name="body" id="textAreaExample" rows="4">{{ $post->body ?? old('body') }}</textarea>
  <label class="form-label" for="textAreaExample">本文</label>
</div>