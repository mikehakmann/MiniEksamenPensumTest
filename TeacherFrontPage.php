<?php include_once("./template.php");?>
<!doctype html>
<html>
<!--<link rel="stylesheet" href="template.css"> <!-- refere til mit css dokument -->
 <?php LoadTemplate("header");?>
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- PLEASE NO CHANGES BELOW THIS LINE (UNTIL I SAY SO) -->
  <!-- <script language="javascript" type="text/javascript" src="libraries/p5.min.js"></script>   -->
  <!-- <script language="javascript" type="text/javascript" src="MEPT.js"></script>  -->
  <!-- OK, YOU CAN MAKE CHANGES BELOW THIS LINE AGAIN -->
  
  
	

  
</head>
<body> 

<button id="close" class="closing" style ="border: none; position: fixed; onClick="javascript:close_clip()"><img src="MEPT.png" width="100" height="100" ></button>
	


<div class="center2" style = "padding-top : 22px;">
<button class = "klasseTestButton"  style=" float: right; width: 20%; font-size: 30px; margin-right: 10px" type="button" onclick="MEPT.page=MEPT.page-1">+ Opret ny test</button>
<button class ="klasseTestButton" style=" float: right; margin-left: 3.0%;  width: 20%; font-size: 30px; margin-bottom : 10px; margin-right: 10px;"  type="button" onclick="MEPT.page=MEPT.page+1">+ Opret ny klasse</button>
  
<table>

  <!-- 
  style=" float: right; margin-left: 3.0%;  width: 20%; font-size: 30px;  type="button" onclick="MEPT.page=MEPT.page+1"
  -->	
  

<text style ="font-size : 30px; margin-left: 5px;">
Forrige test
</text>

<tr style ="padding-top : 200px;">
	<th style = "padding : 15px;"><label for="Hold">Hold</label></</th>
	<th><label for="Hold">Opgavetitel</label></th>
	<th><label for="Hold">Besvarelser</label></th>
	<th><label for="Hold">Startdato</label></th>
	<th><label for="Hold">Afleveringsfrist</label></</th>
</tr>
<tr>
	<td class = "padding"><label class = "holdNavn" for="Hold">Lene Hau</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
<tr>
	<td class = "padding" ><label class = "holdNavn" for="Hold">Jane Goodall</label></td>
	<td><label for="Hold">ingen	</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
	




 <!-- <tr>
    <td>  <label for="Answer">Answer1</label></td>
	<td style="width : 20%;">  <input type="text" id="Answer1" name="Answer" value="1"></td>
  </tr>
  <tr>
    <td>  <label for="Answer2">Answer2</label></td>
	<td style="width : 20%;">  <input type="radio" id="Answer2" name="Answer" value="2"></td>
  </tr>
    <tr>
    <td><label for="Answer3">Answer3</label></td>
	<td style="width : 20%;"><input type="radio"id="Answer3" name="Answer" value="3"></td>
  </tr>
 -->
  
</table>
<table>

<text style ="font-size : 30px; margin-left: 5px;">
Nuværende tests
</text>

<tr>
	<th style = "padding : 15px"><label for="Hold">Hold</label></</th>
	<th><label for="Hold">Opgavetitel</label></th>
	<th><label for="Hold">Besvarelser</label></th>
	<th><label for="Hold">Startdato</label></th>
	<th><label for="Hold">Afleveringsfrist</label></</th>
</tr>
<tr>
	<td class = "padding"><label class = "holdNavn" for="Hold">Lene Hau</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
<tr>
	<td class = "padding"><label class = "holdNavn" for="Hold">Jane Goodall</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
</table>
</table>

<table>

<text style ="font-size : 30px; margin-left: 5px;">
Planlagte tests
</text>

<tr>
<th style = "padding : 15px"><label for="Hold">Hold</label></</th>
	<th><label for="Hold">Opgavetitel</label></th>
	<th><label for="Hold">Besvarelser</label></th>
	<th><label for="Hold">Startdato</label></th>
	<th><label for="Hold">Afleveringsfrist</label></</th>
</tr>
<tr>
	<td class = "padding"><label class = "holdNavn" for="Hold">Lene Hau</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
<tr>
	<td class = "padding"><label class = "holdNavn" for="Hold">Jane Goodall</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
	<td><label for="Hold">ingen</label></td>
</tr>
</table>
</div>

</body>
</html>