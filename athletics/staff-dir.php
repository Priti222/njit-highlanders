<?php

## ADMINISTRATORS 9 members
$administrators = [
["image" =>  "athletics/images/Lenny_Kaplan4.jpg?width=100", 
"name" => "Lenny Kaplan",
"position" => "Associate Vice President/Director of Athletics",
"email" => "kaplan@njit.edu",
"phone" => "973-596-3638"],
["image" =>  "athletics/images/AndrewSchwartz1.jpg?width=100", 
"name" => "Andrew Schwartz",
"position" => "Senior Associate Director of Athletics",
"email" => "aschwart@njit.edu",
"phone" => "973-642-7224"],
["image" =>  "athletics/images/Peg_2022_3x5_v2.jpg?width=100", 
"name" => "Peg Hefferan",
"position" => "Associate Director of Athletics for Administration & Student-Athlete Services/Senior Woman Administrator",
"email" => "hefferan@njit.edu",
"phone" => "973-596-3181"],
["image" =>  "athletics/images/JaysonSmikle.jpg?width=100", 
"name" => "Jayson Smikle",
"position" => "Associate Athletic Director for Compliance",
"email" => "jsmikle@njit.edu",
"phone" => "973-596-5278"],
["image" =>  "athletics/images/Steph_Pillari_New.jpg?width=100", 
"name" => "Stephanie Pillari",
"position" => "Assistant Athletics Director for Media Relations and Digital Strategy (MSOC, WBB, FENC, MVB, BSB secondary)",
"email" => "pillari@njit.edu",
"phone" => "973-596-8324"],
["image" =>  "athletics/images/Joe%20Vacca.jpg?width=100", 
"name" => "Joe Vacca",
"position" => "Assistant Athletic Director - Business /Ticket Manager",
"email" => "vacca@njit.edu",
"phone" => "973-596-8452"],
["image" =>  "athletics/images/Michael%20Siegal.jpg?width=100", 
"name" => "Michael Siegel",
"position" => "Faculty Athletic Representative",
"email" => "misieg@njit.edu",
"phone" => "973-596-5835"],
["image" =>  "athletics/images/Brian%20Callahan%20-%20Asst.%20Director%20of%20Physical%20Education.JPG?width=100", 
"name" => "Brian Callahan",
"position" => "Assistant Director of Physical Education",
"email" => "Callahan@njit.edu",
"phone" => "973-596-3637"],
["image" =>  "athletics/images/Kerry%20Feder.jpg?width=100", 
"name" => "Kerry Feder",
"position" => "Administrative Assistant for the Director of Athletics",
"email" => "kfeder@njit.edu",
"phone" => "973-596-3636"],
];


### ACADEMIC SUPPORT 3 members
$academic = [
["image" =>  "athletics/images/Sandra_Taylor.JPG?width=100?width=100", 
"name" => "Lenny Kaplan",
"position" => "Associate Vice President/Director of Athletics",
"email" => "kaplan@njit.edu",
"phone" => "973-596-5558"],
["image" =>  "athletics/images/Coach%20Spisto.JPG?width=100", 
"name" => "Sandra Taylor",
"position" => "Director for Norma J. Clayton '81 Learning Center",
"email" => "staylor@njit.edu",
"phone" => "973-596-5458"],
["image" =>  "athletics/images/Brittany_Vorndran2016.JPG?width=100", 
"name" => "Brittany Allard",
"position" => "Academic Advisor for Student-Athletes",
"email" => "brittany.v.allard@njit.edu",
"phone" => "973-596-6470"]
];

### COMPLIANCE 1 member
$compliance = [
["image" =>  "athletics/images/JaysonSmikle.jpg?width=100", 
"name" => "Jayson Smikle",
"position" => "Associate Athletic Director for Compliance",
"email" => "jsmikle@njit.edu",
"phone" => "973-596-5278"]
];

https://njithighlanders.com/staff-directory/jayson-smikle/149

### DEVELOPMENT 1 member
$development = [
["image" =>  "athletics/images/Sean_Morrison_headshot.jpg?width=100", 
"name" => "Sean Morrison",
"position" => "Director of Development for Athletics",
"email" => "sean.p.morrison@njit.edu",
"phone" => "973-596-3440"]
];

########## Array of all Staff Teams ##############
$all_teams=[
["team" => $administrators, "title" => "ADMINISTRATORS"],
["team" => $academic, "title" => "ACADEMIC SUPPORT"],
["team" => $compliance, "title" => "COMPLIANCE"],
["team" => $development, "title" => "DEVELOPMENT"]
];


function display_table ($team) {
echo "<table class='w3-table w3-border w3-bordered w3-hoverable'>";



$n = count($team);

for ($j=0; $j<$n; $j++ ) {
$staff = $team[$j];
echo "<tr>";
echo "<td><img width='50' src=" . $staff['image'] . "/></td>";
echo "<td>" . $staff['name']. "</td>";
echo "<td>" . $staff['position']. "</td>";
echo "<td>" . $staff['email']. "</td>";
echo "<td>" . $staff['phone']. "</td>";
echo "</tr>";
}

echo "</table>";
}


$length = count($all_teams);


for ($i=0; $i<$length; $i++ ) {

echo "<div id='" . $all_teams[$i]['title'] . "' class='w3-light-grey w3-border'><b>" . $all_teams[$i]['title'] . "</b></div>" ;
display_table( $all_teams[$i]['team']);
echo "<br/><br/>";
}
echo "<br/>";
?>