<div class="card mt-3">
  <div class="card-body">
    <i class="fas fa-user-circle fa-3x mr-1"></i>
    <div>
      <div class="font-weight-bold">{{ $post->user->name }}</div>
      <div class="font-weight-lighter">{{ $post->created_at->format('Y/m/d H:i') }}</div>
    </div>
  @if( Auth::id() === $post->user_id )      
      <div class="ml-auto card-text d-flex justify-content-end">
        <div class="dropdown">
          <a
            href="#"
            role="button"
            id="dropdownMenuButton"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-ellipsis-v"></i>
          </a>
            </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route("posts.edit", ['post' => $post]) }}">
              <i class="fas fa-pen mr-1"></i>記事を更新する
            </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}">
              <i class="fas fa-trash-alt mr-1"></i>記事を削除する
            </a>
          </div>
        </div>
      </div>
      <!-- modal -->
      <div id="modal-delete-{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $post->title }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal -->
    @endif

  </div>
  <div class="card-body pt-0">
    <h3 class="h4 card-title">
      <a class="text-dark" href="{{ route('posts.show', ['post' => $post]) }}">
        {{ $post->title }}
      </a>
    </h3>
    <div class="card-text">
      {{ $post->body }}
    </div>
  </div>
</div>

