

@extends('welcome')
@section('content')
 
   <div class="row">
     <div class="col-lg-12">
       <h1>new file  data : </h1>
       @if ($errors->any())
           <div class="alert alert-danger">
             <strong><b>whoops ! u have an input problem try again </b> </strong>
             <ul>
               @foreach ($errors as $error)
               <li>{{$error}}</li>

               @endforeach
             </ul>
           </div>
       @endif

<form   action="{{route('store')}}"      method="post"  enctype="multipart/form-data">
  @csrf
  <div class="row">


 
    <div class="col-md-12">
      <strong> file name </strong>
      <input type="text"  placeholder="nom" name="nom" class="form-control">
    </div>


    <div class="col-md-12">
    <strong> upload the file  </strong>
    <input type="file"  placeholder="image" name="image" class="form-control">

  </div>
  </div>







    <div class="col-md-12">

  
<button type="submit" class="btn btn-sm btn-primary">submit </button>
    </div>





  </div>
</form>


     </div>

@endsection('content')
