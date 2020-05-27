<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Teachers Form</title>
    <style>
    body{
      font-family: Goudy Old Style ;
      font-size: 15px;
    }
    .content {
      max-width: 700px;
      margin: auto;
    }
    .button {
      display: inline-block;
      border-radius: 4px;
      background-color: #2E8B57;
      border: none;
      color: white ;
      text-align: center;
      font-size: 18px;
      padding: 10px;
      width: 150px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: 50px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 15px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    </style>
  </head>
  <body>
  <div class="content">
    <h1><center><b> Teacher Entry Form </b></center></h1><BR>
    
    <form method='get' action="/upload/csv" enctype='multipart/form-data' >
      {{ csrf_field() }}
        <div class="row">
          <div class="input-w">
            <input type="file" name="file" style="margin-top:20px;margin-left:200px;background-color:grey;">
            <input class="btn btn-success text-center" type="submit" value="Upload"  name="upload" style="margin-left:450px;margin-top:-53px;height:40px;width:120px;font-size:18px;"> 
          </div>  
        </div>
    </form>


    <section class="col">
    <form method="post" action="{{ route('teachers.store') }}">
      @csrf
        <div class="form-group">
            <label for="Teacher_ID">Teacher ID:</label>
            <input type="text" class="form-control" name="Teacher_ID" placeholder="Enter Teacher's ID.."/>
        </div>


        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="Name"  placeholder="Enter Teacher's Name.."/>
        </div>


        <div class="form-group">
            <label for="Book_ID">Book ID :</label>
            <input type="text" class="form-control" name="Book_ID"  placeholder="Enter Borrowed book ID.."/>
        </div>

        <div class="form-group">
        <label for="Department">Department:</label>
              <select class="form-control" name="Department">
              <option value="Choose Department Name" selected >Choose Department Name </option>
              <option value="Computer Science And Engineering">Computer Science And Engineering</option>
              <option value="Electronics and Communication Engineering"> Electronics and Communication Engineering</option>
              <option value="Electronics and Instrumentation Engineering"> Electronics and Instrumentation Engineering</option>
              <option value="Aerospace Engineering">Aerospace Engineering</option>
              <option value="Civil Engineering">Civil Engineering</option>
              <option value="Business">Business</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
              <option value="Automobile Engineering">Automobile Engineering</option>
              <option value="Polymer Engineering">Polymer Engineering</option>
              <option value="Mathematics and Actuarial Science">Mathematics and Actuarial Science</option>
              <option value="Life Sciences">Life Sciences</option>
              <option value="Arabic & Islamic Studies">Arabic & Islamic Studies</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="English">English</option>
              <option value="Law">Law</option>
              <option value="Managemnet Studies">Managemnet Studies</option>
              <option value="Commerce">Commerce</option>
              <option value="Business">Business</option>
              <option value="Computer Applications">Computer Applications</option> 
              <option value="Architecture">Architecture</option>
              <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Email_ID">E-Mail ID</label>
            <input type="email" class="form-control" name="Email_ID" placeholder="Enter Teacher's E-mail id.."/>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="Mobile_Number">Mobile Number</label>
            <input type="text" class="form-control" name="Mobile_Number" placeholder="Enter Teacher's Contact Number"/>
            <small id="numberhelp" class="form-text text-muted">We'll never share your contact details with anyone else.</small>
        </div>
                    
        <button type="submit" class="button" style="margin-left: 35%"><span>Submit</span></button>
        
        <a href="{{ route('teachers.index') }}" class="btn btn-warning text-center" style="margin-left: 40%;color: white;">Go Back</a>

    </form>
    </section>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
