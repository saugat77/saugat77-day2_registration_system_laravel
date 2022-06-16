@extends('layouts.base')
@section('content')
    <div class="hero">
        <div class="centered">
                <a style="font-size: 40px"><p>We build hope.
                        <br>We buildOn<br></p>
            <button style="background-color:orange; font ">Join us</button></a>
         </div>
</div>
<div class="form">
        <p>Never miss a chance to make a difference</p>
        <div class="form-center">
            <form class="row gx-3 gy-2 align-items-center" >
                    <div class="col-sm-3" style="margin-left: 300px; margin-bottom:20px;">
                        <label class="visually-hidden" for="specificSizeInputName" >Name</label>
                        <input type="text" class="form-control" id="specificSizeInputName" placeholder="First name">
                    </div>
                    <div class="col-sm-3">
                        <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                        <div class="input-group" style=" margin-bottom:20px;">
                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-auto" style=" margin-bottom:20px;">
                        <button type="submit" style="background-color:transparent; color:white; font-weight:20px; border-color:white;   " class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
</div>
<div class="para">
    <a class="nepal"></a><p>Our mission is to break the cycle of poverty, illiteracy, and low expectations through </p>
    <p>  service and education. We mobilize U.S. students to transform our communities </p>
    <p>   through service and change the world by building schools in developing countries.</p></a>
</div>
<div class="ourwork">
        <h1 style="font-size:50px; margin-top:30px; padding-left: 30px; ">We’re Building a Movement</h1>
        <p style="font-size:20px; float:left;padding-top:40px;line-spacing:1.5px; padding-left: 50px;">Our U.S. Service Learning Program gives students in underperforming urban <br> high schools the opportunity to impact their 
        local communities in powerful ways. And through our Global <br> School Construction Program, our students prove  that service
        and education can build a stronger <br> community and a better future. </p>
        <img src="{{url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')}}" alt="child" style="height:300px; width:500px; float:right; padding-right:10px">
    
    <div style="padding-left: 120px; font-size:30px; float:left;" >
        <button style=" background-color: orangered; margin-top:50px; color:white; position:absolute">Explore Our Work</button>
        </div>
</div>
</body>
<div class="container">
  <div class="row" >
  <h1 style="font-size:40px; margin-left: 30px; margin-buttom: 20px;">More About Us</h1>
    <div class="col align-self-start" >
        <img src="{{url('public\assets\images\arko.jpg')}}" alt="arko" style="border-radius:50%; padding-left:10px; height:200px; align-items:center;">
     <p style="margin-top:10px" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, corporis maxime modi laudantium repudiandae cum consequatur beatae atque tempora veniam neque reprehenderit aspernatur quos totam vitae ullam nobis, voluptatem at adipisci numquam itaque, alias amet blanditiis recusandae? Quis ratione harum similique, et at eaque cum dicta dolorem nulla deserunt, veritatis eum? Mollitia recusandae impedit repudiandae iusto minus minima laboriosam fugiat neque ullam, distinctio nulla expedita? Eos quibusdam placeat quisquam asperiores?</p>
    </div>
    <div class="col align-self-center">
    <img src="{{url('public\assets\images\arko1.jpg')}}" alt="arko" style="border-radius:50%; margin-left:20px ;height:200px">
    <p style="margin-top:10px">  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate reprehenderit temporibus voluptatibus quaerat inventore? Facilis, aliquid! Totam eaque veniam similique fuga, id eveniet ex cumque, facilis eos quas alias nemo at, omnis velit fugiat quidem sunt ipsam unde voluptatem atque? Amet reprehenderit laudantium soluta enim doloribus. Id suscipit possimus, expedita molestiae ex est accusantium eaque accusamus molestias amet illo unde sit corporis ea inventore odio et quos dolorum cumque doloribus.</p>
    </div>
    <div class="col align-self-end">
    <img src="{{url('public\assets\images\arko1.jpg')}}" alt="arko" style="border-radius:50%; margin-left:20px; height:200px">
 <p style="margin-top:10px">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nihil iure illum nesciunt suscipit, tenetur animi quis aperiam magnam quaerat saepe incidunt nisi, consectetur aliquid nemo porro quibusdam? Rerum, blanditiis? Repellat esse aspernatur eveniet odio, atque vitae harum dolores ipsa, qui necessitatibus vero quibusdam deserunt voluptatem reprehenderit fuga consequuntur nostrum! Vitae, quae animi nemo natus nihil eius dicta consectetur quas quos beatae harum incidunt iusto eum deserunt, adipisci, quo fuga?</p>
    </div>
  </div>
</div>
<nav aria-label="Page navigation example" style="margin:50px;">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</body>


@endsection