@extends('app')
@section('content')

<div class="col-lg-8 col-lg-offset-2">
    <form action="/add_cat" method="POST">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="exampleInputEmail1">Category Name</label>
            <textarea type="textarea" class="form-control" name="cat_name" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-default">Add</button>
    </form>
</div>

@endsection