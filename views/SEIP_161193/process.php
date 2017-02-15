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
<?php
require_once("../../vendor/autoload.php");

$objStudent = new \App\Student();
    $objStudent->setName($_POST["name"]);
    $objStudent->setStudentID($_POST["studentID"]);

$objCourse = new \App\Course();
    $objCourse->setMarkBangla($_POST["markBangla"]);
    $objCourse->setGradeBangla();

    $objCourse->setMarkEnglish($_POST["markEnglish"]);
    $objCourse->setGradeEnglish();

    $objCourse->setMarkMath($_POST["markMath"]);
    $objCourse->setGradeMath();


$name = $objStudent->getName();
$studentID = $objStudent->getStudentID();

    $markBangla= $objCourse->getMarkBangla();
    $gradeBangla= $objCourse->getGradeBangla();

    $markEnglish= $objCourse->getMarkEnglish();
    $gradeEnglish= $objCourse->getGradeEnglish();

    $markMath= $objCourse->getMarkMath();
    $gradeMath= $objCourse->getGradeMath();

$headerPart=<<<'HEADER'

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
HEADER;

if(!file_exists("Result.html")){
    $fr = fopen("Result.html","w+");
    fclose($fr);
}

if(filesize("Result.html")<=0){
    file_put_contents("Result.html",$headerPart,FILE_APPEND);
}

$resultPage =<<<RESULT

<div class='studentInformation'>
    <table class="table">
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$studentID</td>
        </tr>
    </table>
</div>

<div class='resultInformation'>
    <table class="table">
        <tr>
            <th>Subject</th>
            <th>Mark Obtained</th>
            <th>Grade Obtained</th>
        </tr>
        <tr>
            <td>Bangla</td>
            <td>$markBangla</td>
            <td>$gradeBangla</td>
        </tr>
        <tr>
            <td>English</td>
            <td>$markEnglish</td>
            <td>$gradeEnglish</td>
        </tr>
        <tr>
            <td>Math</td>
            <td>$markMath</td>
            <td>$gradeMath</td>
        </tr>
    </table>
</div>

RESULT;

echo $resultPage;

file_put_contents("Result.html",$resultPage,FILE_APPEND);
?>

</body>
</html>
