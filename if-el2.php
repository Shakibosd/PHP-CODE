
<?php
$marks = 70;

if ($marks>=100)
{
    print("Marks=100:-");
	$grade = "Golden A+";
	print("Congratulations!!!:-   ");
	
}
else if ($marks>=90)
{
    print("Marks=90:-");
	$grade = "Golden A+";
	print("Congratulations!!!:-   ");
}
else if ($marks>=80)
{
    print("Marks=80:-");
	$grade = "A+";
	print("Congratulations!!!:-   ");
}
else if($marks>=70)
{
    print("Marks=70:-");
	$grade = "A";
	print("Good Result- Aro Valo Korte Hobe:-  ");
}
else if($marks>=60)
{
    print("Marks=60:-");
	$grade = "A-";
}
else if($marks>=50)
{
    print("Marks=50:-");
	$grade = "B";
}
else if($marks>=40)
{
    print("Marks=40:-");
	$grade = "C";
}
else if($marks>=33)
{
    print("Marks=33:-");
	$grade = "D";
}
else
{
	$grade = "F   ";
	print("Bed Result - Try Again:-   ");
}

echo "Student grade: $grade";
?>

