<x-app-layout>
    <div class="header">
    <h1 style="font-size: 30px"> <b>Edit users </b>  </h1>
    <div style="padding-top:10px">
     @if (session()->has('message'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">x</button>
         {{session()->get('message')}}
     </div>
     @endif
    </div>
 <div class="edit">
     <form  action="{{url('/edit')}}" method="POST" style="margin: 20px; margin-left:50px">
         @csrf
         <form>
            <input type="hidden" name="id" value="{{$data->id}}">
             <div class="col-sm-4">
                 <label for="name" class="form-label">Name</label>
                 <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name" >
               </div>
             <div class="col-sm-4">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" value="{{$data->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
             </div>
             <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label for="inputPassword6"  class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                  <input type="password" name="password" value=" {{$data->password}}" id="role" class="form-control" >
                </div>
             <div class="row g-3 align-items-center">
                 <div class="col-auto">
                   <label for="inputPassword6"  class="col-form-label">Role</label>
                 </div>
                 <div class="col-auto">
                   <input type="text" name="role" value=" {{$data->role}}" id="role" class="form-control" >
                 </div>
                 
               </div>
            
             <button type="submit" class="btn btn-primary" style="background-color: black; margin-top:20px;   width:20%">Update</button>
           </form>
     </form>
 
 </div>
 
 </x-app-layout>
 