<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"/><title>Repair Items</title>
</head>
<body>
<form method="post" action="http://students.engr.scu.edu/~tsun/repair.php">
  <fieldset>
  <legend style="color:blue;font-size:30px">Repair Items</legend>
   <!--<label for"custid">Customer ID:</label>
  <input type="text" placeholder = "Customer ID" name="custid" id="custid"> <br/>-->
   <label for = "phoneno" >Phone Number: </label>
  <input type="text" name="phoneno" id="phoneno"> <br/>
   <label for="item">item:</label>
   <input type="text" placeholder = "COMPUTER or PRINTER" name="item" id="item"> <br/>
   <label for="itemid">Item ID:</label>
   <input type="text" name="itemid" id="itemid"> <br/>
   <label for="model">model:</label>
   <input type="text" name="model" id="model"> <br/>
   <label for="price">price:</label>
   <input type="text" name="price" id="price"> <br/>
   <label for="year">year:</label>
   <input type="text" name="year" id="year"> <br/>
   <label for="serviceContract">Service Contract Type:</label>
   <input type="text" placeholder = "NONE, SINGLE, or GROUP" name="serviceContract" id="serviceContract"> <br/>
   <label for="contractId">Service Contract ID:</label>
   <input type="text" name="contractId" id= "contractId" >

    <!-- <p style="color:green;front-size:24px">Printer Repair</p>
   <label for"custid2">Customer ID:</label>
  <input type="text" placeholder = "Customer ID" name="custid2" id="custid2"> <br/>
   <label for="item2">item:</label>
   <input type="text" placeholder = "printer" name="item2" id="item2"> <br/>
   <label for="model2">model:</label>
   <input type="text" name="mode2l" id="model2"> <br/>
   <label for="price2">price:</label>
   <input type="text" name="price2" id="price2"> <br/>
   <label for="year2">year:</label>
   <input type="text" name="year2" id="year2"> <br/>
   <label for="serviceContract2">Service Contract Type:</label>
   <input type="text" placeholder = "none, single, or group" name="serviceContract2" id="serviceContract2"> <br/>
  <!-- <p>Do you have a service contract?</p> 
   <input type="radio" name="SC" id="yesSC" value="yesSC"></input>
   <label for="yesSC"> yes </label>
   <input type="radio" name="SC" id="noSC" value="noSC"></input>
   <label for="noSC"> no </label>-->
   </fieldset>

  <br/><br/>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset" onclick = "window.location.href = 'repair.html'" >
 </form>
 </body>
</html>
