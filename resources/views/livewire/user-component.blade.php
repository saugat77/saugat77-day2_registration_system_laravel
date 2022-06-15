<x-app-layout>
<div class="container mt-3">
    <h2>Users</h2>  
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
    @endif          
    <table class="table table-striped">
      <thead>
        <tr>
            <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            @foreach ( $users as $user)
            
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td><?php
            if ($user->role =="2"){
                  echo "moderator"; 
            }
            elseif($user->role=="1"){
                echo "admin"; 
            }
            else{
                echo "user"; 
            }
                
            ?>
        </td>
        <td><a href={{"delete/".$user['id']}} ><i class="fa fa-trash" title="delete"> </a></i>
        <a href={{"edit/".$user['id']}} style="margin-left:20px " ><i class="fa fa-edit" title="edit"  > </a></i></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</x-app-layout>
