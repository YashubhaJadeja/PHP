<?php
echo "Registere has Success.<hr/>";
echo "Full Name: " .$_REQUEST['fullname']."<Br/>";
echo "e-mail: " .$_REQUEST['email']."<Br/>";
echo "Gender: " .$_REQUEST['gender']."<Br/>";
echo "Date: " .$_REQUEST['date']."<Br/>";
echo "Phone Number: " .$_REQUEST['number']."<Br/>";
echo "Address:" .$_REQUEST['Address']."<Br/>";
echo "Course:" .$_REQUEST['course']."<Br/>";

if (!empty($_REQUEST['interest']))
{
   echo "Interest: ".implode(",", $_REQUEST['interest']) . "<br/>";
}

else
{
   echo "No interests selected. <br/>";
}



//  echo "Registere has Success.<hr/>";
//  echo "Full Name: " .$_GET['fullname']."<Br/>";
//  echo "e-mail: " .$_GET['email']."<Br/>";
//  echo "Gender: " .$_GET['gender']."<Br/>";
//  echo "Date: " .$_GET['date']."<Br/>";
//  echo "Phone Number: " .$_GET['number']."<Br/>";
//  echo "Address:" .$_GET['Address']."<Br/>";
//  echo "Course:" .$_GET['course']."<Br/>";

//  if (!empty($_GET['interest']))
//  {
//     echo "Interest: ".implode(",", $_GET['interest']) . "<br/>";
//  }

// else
// {
//     echo "No interests selected. <br/>";
// }




// echo "Registere has Success.<hr/>";
// echo "Full Name: " .$_POST['fullname']."<Br/>";
// echo "e-mail: " .$_POST['email']."<Br/>";
// echo "Gender: " .$_POST['gender']."<Br/>";
// echo "Date: " .$_POST['date']."<Br/>";
// echo "Phone Number: " .$_POST['number']."<Br/>";
// echo "Address:" .$_POST['Address']."<Br/>";
// echo "Course:" .$_POST['course']."<Br/>";

// if (!empty($_POST['interest']))
// {
//    echo "Interest: ".implode(",", $_POST['interest']) . "<br/>";
// }

// else
// {
//    echo "No interests selected. <br/>";
// }
?>