<?php
$email_list=array("ss16U10659@btech.nitdgp.ac.in", "aa16U10138@btech.nitdgp.ac.in");
$flag=array(0,0);
$c=1;
while(1)
{
	$f=0;
	$index=rand(0,1);
	if(flag[$index]==0)
	{
		$to=$email_list[$index];
		$subject="Feedback form token";
		$headers=$c;
		mail($to,$subject,$headers);
		echo("Mail sent ");
		$c++;
		$flag[$index]=1;
	}
	for($x=0;$x<2;$x++)
	{
		if($flag[$x]==0)
			$f=1;
	}
	if($f==0)
		break;
}
?>
