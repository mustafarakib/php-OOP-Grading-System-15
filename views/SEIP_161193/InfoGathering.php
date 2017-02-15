<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Information Gathering Form</title>

    <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap-theme.min.css">
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../resources/style.css">
</head>

<body>
<div class="container">

<form action="process.php" method="post">
     <div class="studentInformation"  >
           <div class="form-group">
               <label for="name">Student's Name:</label>
               <input type="text" class="form-control" name="name" placeholder="Please Enter Student's Name Here...">
           </div>

           <div class="form-group">
               <label for="studentID">Student's ID:</label>
               <input type="text" class="form-control" name="studentID" placeholder="Please Enter Student's ID Here...">
           </div>
     </div>

     <div class="resultInformation"  >
           <div class="form-group">
               <label for="markBangla">Bangla Mark:</label>
               <input type="number" step="any" min="0" max="100" class="form-control" name="markBangla" placeholder="Please Enter Bangla Mark Here...">
           </div>

           <div class="form-group">
               <label for="markEnglish">English Mark:</label>
               <input type="number" step="any"  min="0" max="100" class="form-control" name="markEnglish" placeholder="Please Enter English Mark Here...">
           </div>

           <div class="form-group">
               <label for="markMath">Math Mark:</label>
               <input type="number" step="any"  min="0" max="100" class="form-control" name="markMath" placeholder="Please Enter Math Mark Here...">
           </div>
           <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
      </div>
</form>
</div>

</body>
</html>
