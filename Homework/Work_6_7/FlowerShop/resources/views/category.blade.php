<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Category</title>
    @extends('layout.head')
</head>
<body>
    @extends('layout.navigation')
  
    
    <div class="main_div">

    <div class="flowers">
    <a href="{{url('/taigulebi')}}">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">თაიგულები</h5>
             
            </div>
          </div>
        </a>
    </div>


    <div class="flowers">
        <a href="">

          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">გვირგვინი</h5>
  
            </div>
          </div>
        </a>

    </div>

    <div class="flowers">
        <a href="">
          
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">საქორწინო თაიგულები</h5>
  
            </div>
          </div>
        </a>
    </div>


    <div class="flowers">
        <a href="">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">კომპოზიციები კალათში</h5>
  
            </div>
          </div>
        </a>
    </div>
    </div>
</body>
</html>