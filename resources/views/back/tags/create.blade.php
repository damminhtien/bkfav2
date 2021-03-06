<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('sub.tag') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    {!! Form::open(['method' => 'POST', 'route' => 'tags.store']) !!}
                         <div class="form-group row">
                            {!! Form::label('txtTag', 'Add: ', ['class'=>'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('tag', null, ['id' => 'txtTag', 'class' => 'form-control', 'placeholder' => 'Enter Tag']) !!}
                                </div>
                        </div>
                         <div class="modal-footer">
                            {!! Form::reset('Refresh', ['class'=>'btn btn-outline-secondary btn-sm']) !!}
                            {!!  Form::submit('Create', ['class'=>'btn btn-outline-primary btn-sm']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>