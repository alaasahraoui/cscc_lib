
@extends('welcome')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <h1> our files ---></h1>


    </div>
    <div class="col-sm-2">
      <a class="btn btn-sm btn-success" href="{{  route('file.create')   }}"> add a new file     </a>
    </div>
                   

    @foreach($files as $file)
    <ul>


 <a href="{{URL::to('/')}}/images/{{$file->image}}">{{$file->nom}}</a>


     <li>nom: {{$file->nom}}</li>


     <li>
   <form   action="{{ route('file.destroy',$file->id)}}" method="post">
     <a class="btn btn-sm btn-success" href="{{route('file.show',$file->id)}}"> <b>show</b>  </a>
     <a class="btn btn-sm btn-warning" href="{{route('file.edit',$file->id)}}"> <b>edit</b> </a>
      @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-sm btn-danger"> <b>delete</b> </button>


   </form>
     </li>

</ul>
    @endforeach

 {!!  $files->links()  !!}

  </div>
</div>
 @endsection('content')
