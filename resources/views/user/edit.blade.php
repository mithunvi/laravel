<div class="col-lg-8 col-lg-offset-2">
   <form action="/update/{{$user->id}}" method="post">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$user->name}}" type="text" class="form-control" id="exampleInputEmail1" name="name">
      </div>
     
      <button type="submit" class="btn btn-default">Submit</button>
  </form>

</div>
