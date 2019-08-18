<!--@if(Session::has('flash_message'))
       <div class="container">
           <div class="alert alert-info" id="alert"> 
                   <button data-dismiss='alert' class="close">&times;</button>
                   show message
                   {{ Session::get('flash_message')}}
           </div>
       </div>
@endif-->
<!--//helper function-->
@if(session()->has('flash_message'))
       <div class="container">
           <div class="alert alert-{{ session('flash_message_level')}}" id="alert"> 
                   <button data-dismiss='alert' class="close">&times;</button>
                   <!--show message-->
                   {{ session()->get('flash_message')}}
           </div>
       </div>
@endif