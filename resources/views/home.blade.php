<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <title>CSCCDrive | Welcome</title>



    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

</head>

<body>
    <section id="landing">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>

    </section>

    <div class="button">
    </div>

    <section  class="text-center" id="home">
        <div class="recherche">


<form class="" action="/search" method="get">
         
          
      <input  class="rechBar"    placeholder="search here " type="search" name="search" class="form-control" value="" type="text" placeholder="Search your cours">
            <a href="#" class="rechButton"><i class="fas fa-search"></i></a>

        
       </form>


      
        </div>

        <h1>GRAB A COURS!</h1>
        <div    class="container">
 <div class="row">
 <div class="col-md-6">
       <table>
      
                 <tr>
                     <th>File Name</th>
                     <th>Download</th>

                 </tr>
                 @foreach($files as $file) 
                 <tr> 
                <th><h4 style="color:black;"> {{$file->nom}} </h4></th>   
                  <th> <a  style="color:red;" href="{{URL::to('/')}}/images/{{$file->image}}">click here </a>  </th> 
                </tr>    
 @endforeach
 
         </table>
       <h6   style="  text-align: center;"  class="text-center">  {!!  $files->links()  !!}       </h6>
        </div></div></div>


     
 
   



    

 

 





    </section>
    <section class="upload ">
        <div class="overlay"></div>
        <h1>Share a cours!</h1>
        <label for="avatar">Choose a file:</label>

          <a class="btn btn-md btn-success text-center" href="{{  route('create')   }}"> add a new file     </a>
   

    </section>




    <script src="js/TweenMax.min.js"></script>
    <script>
    TweenMax.staggerFrom('section span',
    0.1,{
        x: 300,
        opacity: 0
    },0.1)
    </script>
</body>

<footer>
        <div class="col-md-12 text-center">
                <p> &copy; Copyright CSC Club 2019 </p>
            </div>
</footer>


        <script src="js/jquery-3.3.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
