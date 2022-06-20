@extends('healthEx/index')
@section('content')
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<h3>family member registration</h3>

<div class="container">
  <form action="/action_page.php">
      <label for="fname">Member ID</label>
    <input type="text" id="memberID" name="memberID" placeholder="enter member id.." required>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

       <label for="Age">Age</label>
    <input type="text" id="age" name="age" placeholder="your age.." required>
      <label for="disablity">status</label>
    <input type="text" id="disablity" name="disablity" placeholder="enter disablity of family member.." required>
    
    
     <label for="sex">Sex</label>
    <input type="text" id="sex" name="sex" placeholder="your sex.." required><br><br>
    
 <label for="photo">upload photo</label>
    <input type="file" id="photo" name="photo"><br><br>
    <input type="submit" value="Submit">
  </form>
</div>

@endsection