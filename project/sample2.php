<?php
    session_start();
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" /> -->
   <style>
    

body {
    background-image: url("global/hd5.jpg");
    /* Keep the inherited background full size. */
    background-attachment: fixed; 
    background-size: cover;
    display: grid;
    align-items: center;
    justify-content: center;
    height: 100vh;
    color: black;
}

.container {
    width: 30rem;
    height: 48rem;
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2);   
    border-radius: 5px;
    position: relative;
    z-index: 1;
    background: inherit;
    overflow: hidden;
}

.container:before {
    content: "";
    position: absolute;
    background: inherit;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 3000px rgba(255, 255, 255, .01);
    filter: blur(20px);
    margin: -10px;
}
</style>
</head>
<body>
 <div class="container">
	<h1>Evaluation:</h1>
	<h6>The Instructor Answered questions completely.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="radio1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="radio1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="radio1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline3">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline4" name="radio1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline4">Good</label>
</div>
<br><br>

	<h6>The instructor encouraged class participation.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline5" name="radio2" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline5">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline6" name="radio2" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline6">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline7" name="radio2" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline7">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline8" name="radio2" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline8">Good</label>
</div>
<br><br>

<h6>The instructor manages the time well.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline9" name="radio3" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline9">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline10" name="radio3" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline10">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline11" name="radio3" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline11">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline12" name="radio3" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline12">Good</label>
</div>
<br><br>

<h6>The instructor is creative in developing activities and lessons.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline13" name="radio4" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline13">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline14" name="radio4" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline14">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline15" name="radio4" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline15">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline16" name="radio4" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline16">Good</label>
</div>
<br><br>

<h1>School Evaluation:</h1>
	<h6>Was adequate and appropriate for session</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline17" name="radio5" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline17">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline18" name="radio5" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline18">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline19" name="radio5" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline19">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline20" name="radio5" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline20">Good</label>
</div>
<br><br>

	<h6>Was comfortable and provided adequate space</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline21" name="radio6" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline21">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline22" name="radio6" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline22">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline23" name="radio6" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline23">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline24" name="radio6" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline24">Good</label>
</div>
<br><br>

<h6>The instructor manages the time well.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline25" name="radio7" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline25">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline26" name="radio7" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline26">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline27" name="radio7" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline27">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline28" name="radio7" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline28">Good</label>
</div>
<br><br>

<h6>The instructor is creative in developing activities and lessons.</h6>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline29" name="radio8" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline29">Poor</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline30" name="radio8" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline30">Fair</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline31" name="radio8" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline31">Average</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline32" name="radio8" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline32">Good</label>
</div>


<!-- <div class="custom-control custom-radio">
<h5>Answered questions completely.</h5>
<input type="radio" name="ques1" value="1" class="custom-control-input"/>Poor
<input type="radio" name="ques1" value="2" />Fair
<input type="radio" name="ques1" value="3" />Average
<input type="radio" name="ques1" value="4" />Good 
</div>
 
<h5>Encouraged class participation.</h5>
<input type="radio" name="ques2" value="1" />Poor
<input type="radio" name="ques2" value="2" />Fair
<input type="radio" name="ques2" value="3" />Average
<input type="radio" name="ques2" value="4" />Good
 
<h5>Manages the time well.</h5>
<input type="radio" name="ques3" value="1" />Poor
<input type="radio" name="ques3" value="2" />Fair
<input type="radio" name="ques3" value="3" />Average
<input type="radio" name="ques3" value="4" />Good

<br><br>
	<h1>School Evaluation:</h1>
<h5>Answered questions completely.</h5>
<input type="radio" name="ques1" value="1" />Poor
<input type="radio" name="ques1" value="2" />Fair
<input type="radio" name="ques1" value="3" />Average
<input type="radio" name="ques1" value="4" />Good 
 
<h5>Encouraged class participation.</h5>
<input type="radio" name="ques2" value="1" />Poor
<input type="radio" name="ques2" value="2" />Fair
<input type="radio" name="ques2" value="3" />Average
<input type="radio" name="ques2" value="4" />Good
 
<h5>Manages the time well.</h5>
<input type="radio" name="ques3" value="1" />Poor
<input type="radio" name="ques3" value="2" />Fair
<input type="radio" name="ques3" value="3" />Average
<input type="radio" name="ques3" value="4" />Good	
  -->
<br/><br/>
<button type="button" class="btn btn-success btn-lock">Submit</button>
</div>
</div>
</html>