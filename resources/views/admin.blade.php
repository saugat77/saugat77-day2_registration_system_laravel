<x-app-layout>
   <div class="header">
    <h1>Admin Dashboard</h1>
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
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </form>

</div>

</x-app-layout>
