
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Teacher Table</title>
    <style>
    h1 {text-align: center;}
    form {
  text-align: center;
}
a {
    text-align: center; 
}
.container {
    margin-left: 380px;
}

.blue-container {
    margin: 50px;
}
body{
    font-family: Goudy Old Style ;
    font-size: 15px;
}
.blue-button {
    margin-left: 380px;

}
</style>
</head>
<body>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>


    <div class="col-sm-12">
        <h1 class="display-3">Teacher Details</h1>
    </div><br><br>
    <div class="container">
        <div class="col-sm-4 " >
            <form action="search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control"/>
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary active">SEARCH</button>
                    </span>
                </div>
            </form>
        </div>   
    </div><br>
    <a href="{{ route('teachers.create')}}" class="btn btn-success active"  style="position: absolute; right: 450px;width:200px;">ADD</a>

<div class="blue-container">
<table class="table table-striped table-dark">
  <thead>
        <tr>
        <td><b>S.NO</b></td>
        <td><b>ID</b></td>
        <td><b>NAME</b></td>
        <td><b>BOOK ID</b></td>
        <td><b>DEPARTMENT</b></td>
        <td><b>E-MAIL ID</b></td>
        <td><b> NUMBER</b></td>
        <td colspan = 4><b>ACTIONS</b></td>
        </tr>
    </thead>
    <tbody>
        <?php $sno = 1;?>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$sno=$sno}}</td>
                <td>{{$teacher->Teacher_ID}}</td>
                <td>{{$teacher->Name}}</td>
                <td>{{$teacher->Book_ID}}</td>
                <td>{{$teacher->Department}}</td>
                <td>{{$teacher->Email_ID}}</td>
                <td>{{$teacher->Mobile_Number}}</td>
                <td>
                    <a href="{{ route('teachers.edit',$teacher->id)}}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="{{ route('teachers.destroy', $teacher->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $sno = $sno + 1; ?>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>


