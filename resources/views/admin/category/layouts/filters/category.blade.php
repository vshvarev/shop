<label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
    @foreach($categories as $category)
    <option value="{{ $category->title }}">
</datalist>
