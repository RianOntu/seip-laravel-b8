<x-master>
<x-slot:title>
   Edit Page
</x-slot:title>

<h1>Edit page</h1>

<form method="post" action="{{route('students.update',$student->id)}}">
@csrf 
@method('put')
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input name="name" value="{{$student->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date of birth:</label>
    <input name="dob" type="text" value="{{$student->dob}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <label for="">Gender:</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="Male" id="flexRadioDefault1" {{$student->gender=="Male"?'checked':""}}>
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="Female" id="flexRadioDefault2"{{$student->gender=="Female"?'checked':""}} >
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="Others" id="flexRadioDefault3" {{$student->gender=="Others"?'checked':""}} >
  <label class="form-check-label" for="flexRadioDefault3">
 Others
  </label>
</div>
<label for="">Hobbies:</label>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="Gardening" id="flexCheckDefault" {{$student->hobbies=="Gardening"?'checked':""}}{{$student->hobbies=="Gardening and Playing football"?'checked':""}}>
  <label class="form-check-label" for="flexCheckDefault">
    Gardening
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="Playing football" id="flexCheckChecked" {{$student->hobbies=="Playing football"?'checked':""}}{{$student->hobbies=="Gardening and Playing football"?'checked':""}}>>
  <label class="form-check-label" for="flexCheckChecked">
   Playing football
  </label>
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





</x-master>