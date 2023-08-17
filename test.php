<!DOCTYPE html>
<html>
<head>
    <title>PHP Instructor Test</title>
</head>
<body>
<h1>Task-1</h1>

<div class="main">
    <form action="test.php" method="post">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="message">Message Body</label> <br>
                    <textarea name="message" id="" class="form-control" placeholder="Enter you paragraph here"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <br>
    </form>
</div>
<?php
echo "<h5>No. of Words :)</h5>";
echo "The number of words in given paragraph are =  ".str_word_count($_POST["message"])."<br>";
//echo $_POST["message"];

?>

<h1>Task-2</h1>
<?php
$str = $_POST["message"];
$words = array_count_values(str_word_count($str, 1));
arsort($words);
print_r($words);
//print_r($words);
?>
<h1>Task-3</h1>
<?php
$str = $_POST["message"];
$words = array_count_values(str_word_count($str, 1));
arsort($words);
print_r($words);
echo "<hr>";
echo "<h5>Your given paragraph :)</h5>";
echo $_POST["message"];
?>
<h1>Task-4</h1>
<p>For the purpose of Security I had did given: </p>
<h5>1. I have used the POST method in the form so that the data being provided must not reflect in the URL</h5>
<span><h5>2. Also, if you want to get the form live on your end you can access it using given link:</h5> <a href="http://10.0.43.218/phpInstructorTest/test.php">Click to Access Form</a></span>
<h5>You should ask before accessing on email so I can configure the server!</h5>
</body>
</html>


