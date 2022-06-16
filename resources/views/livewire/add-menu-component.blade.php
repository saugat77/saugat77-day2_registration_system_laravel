@extends('layouts.base')
@section('content')
    <h2 style="font-size: 30px">Add Side Bar Menu</h2>  
      
   <div class="add-sub-menu">
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
    @endif  
    <form style="margin: 20px; margin-left:50px" wire:submit.prevent="menubtn">
              <div class="col-sm-4">
                <label for="name" class="form-label">Menu</label>
                <input type="text" name="name" class="form-control" id="name" wire:model="name">
              </div>    
              <div class="col-sm-4">
                <label for="name" class="form-label">Parent Menu</label>
                <select class="form-control input-md" wire:model="side_bar_id">
                    <option value="">None</option>
                    @foreach ($menu as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach
                </select>
              </div>                      
            <button type="submit" class="btn btn-primary" style="background-color: black; margin-top:20px;   margin-left:100px;">Submit</button>
      
    </form>

   </div>
   @endsection