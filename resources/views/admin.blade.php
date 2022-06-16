<x-app-layout>
   <div class="header">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Function of Admin
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="showusers">Show users</a></li>
                 
                  <li><a class="dropdown-item" href="{{url('menuitems')}}">Menu Items</a></li>
                  
                  <li><a class="dropdown-item" href="{{url('addmenu')}}">Add Menu Items</a></li>

                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   </div>
   <div style="padding-top:30px">
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
    @endif
   </div>
<div class="add-mod">
    <form  action="{{url('/addmod')}}" method="POST" style="margin: 20px; margin-left:50px">
        @csrf
        <form>
            <div class="col-sm-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" >
              </div>
            <div class="col-sm-4">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label for="inputPassword6"  class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                  <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                  </span>
                </div>
              </div>
           
            <button type="submit" class="btn btn-primary" style="background-color: black; margin-top:20px;   margin-left:100px;">Submit</button>
          </form>
    </form>

</div>

</x-app-layout>
