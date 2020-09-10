

<div class="card mb-3">
  <img src="https://gsk-sg.com/wp-content/uploads/2017/06/student-management.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    	<table class="table">
  <thead class="thead-light">
    <tr>
     
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($students as $student)
   <tr>
      <td>{{$student->cne}}</td>
      <td>{{$student->firstName}}</td>
      <td>{{$student->secondName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->speciality}}</td>
      <td> 
      <a href="#" class="btn btn-sm btn-info">Show</a>
      <a href="{{url ('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
      <a href="" class="btn btn-sm btn-danger">Delete</a>  
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>





