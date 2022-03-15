
        <div class="form-group">
            {{ Form::label('id', 'ID', ['class' => 'control-label']) }}
            {{ Form::number('id', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
            {{ Form::text('description', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('pic_url', 'Link on picture', ['class' => 'control-label']) }}
            {{ Form::text('pic_url', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price', ['class' => 'control-label']) }}
            {{ Form::number('price', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('slug', 'slug', ['class' => 'control-label']) }}
            {{ Form::text('slug', null , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'Category ID', ['class' => 'control-label']) }}
            {{ Form::number('category_id', null , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('in_trade', 'In trade', ['class' => 'form-check-label']) }}
            {{ Form::checkbox('in_trade', null , ['class' => 'form-check-input']) }}
        </div>


