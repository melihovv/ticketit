@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-default" !!}">
            <div class="panel-heading">
                <h3 class="panel-title">
                    {!! $comment->user->name !!}
                    @if (Auth::user()->id === $comment->user_id)
                      <button type="button" class="btn btn-info"
                              data-toggle="modal"
                              data-target="#comment-edit-modal-{{ $comment->id }}">
                        {{ trans('ticketit::lang.btn-edit')  }}
                      </button>
                    @endif
                    <span class="pull-right" style="padding-top: 10px;">
                        {!! $comment->updated_at->diffForHumans() !!}
                    </span>
                </h3>
                @include('ticketit::comments.edit', ['comment' => $comment])
            </div>
            <div class="panel-body">
                <div class="content">
                    <p> {!! $comment->html !!} </p>
                </div>
            </div>
        </div>
    @endforeach
@endif