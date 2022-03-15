
        <div class="form-group">
            {{ Form::label('id', 'ID', ['class' => 'control-label']) }}
            {{ Form::number('id', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'title', ['class' => 'control-label']) }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('in_main_page', 'in main page', ['class' => 'form-check-label']) }}
            {{ Form::checkbox('in_main_page', null, ['class' => 'form-check-input']) }}
        </div>
        <div class="form-group">
            {{ Form::label('parent_id', 'parent ID', ['class' => 'control-label']) }}
            {{ Form::number('parent_id', null, ['class' => 'form-control']) }}
        </div>

