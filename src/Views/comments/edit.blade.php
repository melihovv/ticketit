<div class="modal fade" id="comment-edit-modal-{{ $comment->id }}" tabindex="-1"
     role="dialog">
  <div class="modal-dialog model-lg" role="document">
    <div class="modal-content">
      {!! CollectiveForm::model($comment, [
           'route' => [$setting->grab('main_route').'-comment.update', $comment->id],
           'method' => 'PUT',
           'class' => 'form-horizontal'
       ]) !!}

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
          <span aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="col-sm-12">
          <div class="form-group">
            {!! CollectiveForm::textarea('content', $comment->html, [
                'class' => 'form-control summernote-editor',
                'rows' => '5',
                'required',
            ]) !!}
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            {{ trans('ticketit::lang.btn-close') }}
          </button>
          {!! CollectiveForm::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
        </div>

        {!! CollectiveForm::close() !!}
      </div>
    </div>
  </div>
</div>
