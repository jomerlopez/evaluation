<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<table class="table table-header-rotated">
  <thead>
    <tr>
      <!-- First column header is not rotated -->
      <th></th>
      <!-- Following headers are rotated -->
      <th class="rotate"><div><span>Good</span></div></th>
        <th class="rotate"><div><span>Very Good</span></div></th>
        <th class="rotate"><div><span>Excellent</span></div></th>
        <th class="rotate"><div><span>Perfect</span></div></th>
        
         </tr> 
  </thead>
  <tbody>
    <tr>
      <th class="row-header">Question 1</th>
      <td><input checked="checked" name="column1[]" type="radio" ></td>
      <td><input checked="checked" name="column2[]" type="radio" value="row1-column2"></td>
      <td><input name="column3[]" type="radio" value="row1-column3"></td>
      <td><input name="column4[]" type="radio" value="row1-column4"></td>
      
    </tr>
    <tr>
      <th class="row-header">Question 2</th>
      <td><input name="column1[]" type="radio" value="row2-column1"></td>
      <td><input name="column2[]" type="radio" value="row2-column2"></td>
      <td><input checked="checked" name="column3[]" type="radio" value="row2-column3"></td>
      <td><input checked="checked" name="column4[]" type="radio" value="row2-column4"></td>
      
    </tr>
    <tr>
      <th class="row-header">Question 3</th>
      <td><input name="column1[]" type="radio" value="row3-column1"></td>
      <td><input name="column2[]" type="radio" value="row3-column2"></td>
      <td><input name="column3[]" type="radio" value="row3-column3"></td>
      <td><input name="column4[]" type="radio" value="row3-column4"></td>
      </td>
    </tr>
  </tbody>
</table>