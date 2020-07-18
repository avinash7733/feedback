
<?php 
$conn=mysqli_connect('localhost','root','','feedback_system');
if(isset($_POST['sub']))
{
  $quest1=$_POST['quest1'];
  $quest2=$_POST['quest2'];
  $quest3=$_POST['quest3'];
  $quest4=$_POST['quest4'];
  $quest5=$_POST['quest5'];
  $quest6=$_POST['quest6'];
  $quest7=$_POST['quest7'];
  $quest8=$_POST['quest8'];
  $quest9=$_POST['quest9'];
$query="INSERT INTO labsss(q1,q2,q3,q4,q5,q6,q7,q8,q9)values('$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9')";
mysqli_query($conn,$query);



echo "<h2 style='color:green'>Thank you </h2>";
}

?>
<form method="post">
<fieldset>
<center><u>Student's FeedBack Form</u></center><br>
 
<fieldset>



<h3>Please give your answer about the following question by circling the given grade on the scale:</h3>
<center>

<button type="button" style="font-size:12pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Strongly Agree 5</button>
<button type="button" style="font-size:12pt;color:white;background-color:brown;border:2px solid #336600;padding:3px">Agree 4</button>
<button type="button" style="font-size:12pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Neutral 3</button>
<button type="button" style="font-size:12pt;color:white;background-color:purple;border:2px solid #336600;padding:3px"> Disagree 2</button>
<button type="button" style="font-size:12pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Strongly Disagree 1</button><br> 

</center>

<table class="table table-bordered" style="margin-top:50px">
<form>
<tr>

</select>
</td>
</tr>
</table>
<center>
<h3><u>LABS FEEDBACK</u></h3>

</center>
<table class="table table-bordered">                             
<tr>
<td><h3>LAB codes as per syllabus:</h3></td>
  <td><h3><u> <center>LAB 3</center></u></h3></td> 
       

</tr>
<tr>
<td><b>1:</b>Was the selection of experiment commensurate with the theory?</td>

<td><input type="radio" name="quest1" value="5" > 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>

</tr>
  
<tr>
<td><b>2:</b>Was the experiment leading towards proper conclusions/interpretations?</td>
<td><input type="radio" name="quest2" value="5">5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name=" quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>

</tr>

<tr>
<td>
<b>3:</b>Whether lab instructor helped you in uderstanding the experimental observations?</td>
<td>
<input type="radio" name="quest3" value="5" > 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>

</tr>
<tr>
<Td><b>4:</b>Whether the experiment trigger you for any creative idea?</Td>
<td> <input type="radio" name="quest4" value="5" > 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1</td>

</tr>


<tr>
<td>
<b>5:</b> Whether experimental set up was well maintained,fully operational?</td>
<td> 
<input type="radio" name="quest5" value="5" > 5
<input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>


</tr>
<tr>
<td><b>6:</b> Whether precise,updated & seld explanatory labmanuals were provided?</td>
<td>
 <input type="radio" name="quest6" value="5" > 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3"> 3
<input type="radio" name=" quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>

</tr>

<tr><td>
<b>7:</b>Whether submission of experimental write up was routine&repetitive?</td>
<td> <input type="radio" name="quest7" value="5" > 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>

</tr>
<tr>
<td>
<b>8:</b> Whether lab instructor does assessment of experiment reguarly and gives feedback?</td>
<td>
<input type="radio" name="quest8" value="5" > 5
  <input type="radio" name="quest8" value="4">4
  <input type="radio" name="quest8" value="3">3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1</td>

</tr>
<tr>
<td>
<b>9:</b> Whether the entire lab session was useful in clarifying your knowledge of theory?</td>
<td><input type="radio" name="quest9" value="5" >5
  <input type="radio" name="quest9" value="4">4
  <input type="radio" name="quest9" value="3"> 3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1</td>

</tr>

<tr>
  <td>
<p align="center"><button type="submit" style="font-size:9pt;color:white;background-color:brown;border:2px solid #336600;padding:9px" name="sub">Submit</button></p>

</td></tr>
</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
  
  </div><!--close site_content-->   
  
    
    </div><!--close main-->
  </form>
<center>