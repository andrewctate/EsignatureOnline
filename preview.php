<?php
/*Assign variables from global GET array*/
$firstname=$_GET["firstname"];
$middlename=$_GET["middlename"]; 
$lastname=$_GET["lastname"];
$title=$_GET["title"];
$organization=$_GET["organization"];
$address=$_GET["address"];
$phone=$_GET["phone"];
$cell=$_GET["cell"];
$email=$_GET["email"];
$website=$_GET["website"];

/*Remove all spaces*/
$firstname=trim($firstname);
$middlename=trim($middlename);
$lastname=trim($lastname);
$title=trim($title);
$organization=trim($organization);
$address=trim($address);
$phone=trim($phone);
$cell=trim($cell);
$email=trim($email);
$website=trim($website);


function drawPreview($firstname, $middlename, $lastname, $title, $organization, $address, $phone, $cell, $email, $website){
  echo "<table  style=\"border-spacing:0; border:0; padding:0;\">";
  echo "<tr>";
  echo "<td style=\"padding:0; height:auto; width:auto; text-align:left; font-family:arial; font-size:13px; vertical-align:top\"><!--<img height=\"150px\" width=\"150px\" src=\"\">--></td>";
  echo "<td style=\"padding:0; height:auto; text-align:left; font-family:arial; font-size:13px; color:blue\">";
  echo "<table style=\"border-spacing:0; border:0; padding:0;\">";
  
  if (($firstname != "") || ($middlename != "") || ($lastname != ""))
  {
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top; height:20px; text-align:left; color:orange; font-family:arial; font-size:20px;\">".$firstname." ".$middlename." ".$lastname."</td>";
    echo "</tr>";
  }  
    
  if ($title != "")
  {
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top; height:20px; text-align:left; font-family:arial; font-size:14px; color:#008080\">".$title."</td>";
    echo "</tr>";
  }
  
  if ($organization != "")
  {  
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top; height:20px; text-align:left; font-family:arial; font-size:13px; color:#008080\">".$organization."</td>";
    echo "</tr>";  
  }
  
  if ($address != "")
  {  
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top; height:20px; text-align:left; font-family:arial; font-size:13px; color:#008080\">".$address."</td>";
    echo "</tr>";
  }  
  
  if (($phone != "")||($cell != ""))
  { 
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top; height:20px; text-align:left; font-family:arial; font-size:13px; color:#008080\">";
    
    if ($phone != "")
    {
      echo "<strong>Phone:</strong> ";
    }
    
    echo $phone." ";
    
    if ($cell != "")
    {
      echo "<strong>Cellular:</strong> ";
    }
    
    echo $cell." </td>";
    
    
    echo "</tr>";
  } 
  
  if (($email != "")||($website != ""))
  {   
    echo "<tr>";
    echo "<td style=\"padding:0; vertical-align:top;  height:20px; text-align:left; font-family:arial; font-size:13px; color:blue\">".$email;
    
    if (($email != "")&&($website != "")) 
    {
      echo " <p style=\"display:inline; color:orange; font-size:15px\">||</p> ";
    }   
    
    echo "<a style=\"font-family:arial; font-size:13px; color:blue\" href=\"http://".$website."\">".$website."</a></td>";
    echo "</tr>";
  }    
  /*echo "<tr>";
  echo "<td style=\"padding:0; height:20px; text-align:left; font-family:arial; font-size:13px; color:blue\"></td>";
  echo "</tr>";*/
  
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
}
 
function checkFormEmpty($firstname, $middlename, $lastname, $title, $organization, $address, $phone, $cell, $email, $website)
{
  return ($firstname != "") || ($middlename != "") || ($lastname != "") || ($title != "") || ($organization != "") || ($address !="") || ($phone != "") || ($cell != "") || ($website != "");
}



if (checkFormEmpty($firstname, $middlename, $lastname, $title, $organization, $address, $phone, $cell, $email, $website))
{
drawPreview($firstname, $middlename, $lastname, $title, $organization, $address, $phone, $cell, $email, $website);
}    
?>
