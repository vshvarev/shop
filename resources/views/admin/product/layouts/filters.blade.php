<div class="btn-group">
    {{ Form::open(['url' => 'admin/products', 'method' => 'get']) }}
    {{ Form::select('category_id', $categories, null, array('placeholder' => 'Pick a category...',
                                                            'class' => 'form-control')) }}
    <p></p>
    {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
<p></p>
