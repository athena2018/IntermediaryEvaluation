<?php


// 1- Create a table in PHP containing the following information:
$presentation = ['firstName' => "Leslie", 'lastName' =>"Gayard", 'address' =>"54A Luxembourg Avenue", 'postalCode'=>"4950", 'city'=>"Bascharage", 'email'=> "lesgayard@gmail.com", 'telephone'=>"691522153",'dateOfBirth'=>"1983-05-16"];
?>
<ul>
<?php 
// 2- Using a loop, display the contents of this array (keys + values) in an HTML list.
foreach ($presentation as $key=> $value){
    echo '<li>' . $key . ' : ' . $value . '</li>';
}
// 3- The date is to be displayed in French format (DD / MM / YYYY)

// store the date format into separate variables that i concatenate in a global birthday variable
$day = "16";
$month = "05";
$year = "1983;"






?>
</ul>
//The date is to be displayed in French format (DD / MM / YYYY).
//Bonus :
//Manage date of birth display using the DateTime class
