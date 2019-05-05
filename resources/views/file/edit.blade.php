 
 @extends('welcome')
 @section('content')
 <div class="container">
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

<form   action="{{route('file.update',$file->id)}}"      method="post">
  @csrf
  @method('PUT')
  <div class="row">



    <div class="col-md-12">
      <strong> nom </strong>
      <input type="text"  placeholder="nom" value="{{$file->nom}}" name="nom" class="form-control">
    </div>

    <div class="col-md-12">
      <strong> thematique </strong>
      <input type="text"  value="{{$file->thematique}}" placeholder="thematique" name="" class="form-control">
    </div>


    <div class="col-md-12">
      <strong> formateur  </strong>
      <input type="text" value="{{$file->formateur}}" placeholder="nom" name="formateur" class="form-control">

    </div>



    <div class="col-md-12">
      <strong> code </strong>
      <input type="text" value="{{$file->code}}" placeholder="nom" name="code" class="form-control">

    </div>

    <div class="col-md-12">
      <strong> duree </strong>
      <input type="duree" value="{{$file->duree}}" placeholder="duree" name="duree" class="form-control">

    </div>







    <div class="col-md-12">
      <strong> fiche_tech </strong>
      <input type="duree" value="{{$file->fiche_tech}}" placeholder="fiche_tech" name="fiche_tech" class="form-control">

    </div>
    <div class="col-md-12">
      <strong> cible_public </strong>
      <input type="duree" value="{{$file->cible_public}}" placeholder="cible_public" name="cible_public" class="form-control">

    </div>

  </div>
  <div class="col-md-12">
    <strong> status </strong>
    <input type="duree"  value="{{$file->status}}"  placeholder="status" name="status" class="form-control">

  </div>




    <div class="col-md-12">
      <strong> programme :  </strong>
      <textarea name="programme" value="{{$file->programme}}"  class="form-control" rows="8" cols="80"></textarea>

    </div>







    <div class="col-md-12">

      <a href="{{route('file.home')}}" class="btn btn-sm btn-success"   >back </a>
<button type="submit" class="btn btn-sm btn-primary">submit </button>
    </div>





  </div>
</form>


     </div>
   </div>
 </div>
 @endsection('content')
