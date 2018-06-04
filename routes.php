<?php
//rto to maninagar
$r1u=array("RTO Circle","Ranip Cross Road","Bhavsar Hostel","Akhbarnagar","Pragatinagar","Shastrinagar","Jaimangal","Sola Cross Road","Valinath Chowk","Memnagar","University","Andhajan Mandal","Himatlal Park","Shivaranjani","Jhansi-ki-rani","Nehrunagar","Manekbaug","Dharnidhar","Anjali","Chandranagar","Khodiyarnagar","Danilimda C. Rasta","V. Mandir","S.N. College","Kankriya T.Ex.","Kankaria Lake","Rambaug","Maninagar C.Road","Maninagar R.S");
$r1d=array_reverse($r1u);
//vasna to naroda
$r2u=array("Vasna","Anjali","Chandranagar","Khodiyarnagar","Danilimda C.Rasta","Danilimda Road","Chhipa","Chandola Lake","BRTS Workshop","Kashiram","Narol","Mukesh Ind.","Isanpur","Ghodasar","Jashodanagar","Express Way","C.T.M.","Hateshwar","Purvadeep","Jogeshwari Soc.","Rabari Colony","Ramrajya Soc.","Rameshwar Park","Geeta Gauri","Soni Ni Chali","Viratnagar","Bapunagar","Leelanagar","Thakkarnagar","Hirawadi","Vijay Park","Krishnanagar","Dhanush Dhari","Naroda","Bethak","Naroda Gam");
$r2d=array_reverse($r2u);
//rto to naroda
$r3u=array("RTO Circle","Ranip Cross Road","Bhavsar Hostel","Akhbarnagar","Pragatinagar","Shastrinagar","Jaimangal","Sola Cross Road","Valinath Chowk","Memnagar","University","Andhajan Mandal","Himatlal Park","Shivaranjani","Jhansi-ki-rani","Nehrunagar","Manekbaug","Dharnidhar","Anjali","Chandranagar","Khodiyarnagar","Danilimda C. Rasta","Danilimda Road","Chhipa","Chandola Lake","BRTS Workshop","Kashiram","Narol","Mukesh Ind.","Isanpur","Ghodasar","Jashodanagar","Express Way","C.T.M.","Hateshwar","Purvadeep","Jogeshwari Soc.","Rabari Colony","Ramrajya Soc.","Rameshwar Park","Geeta Gauri","Soni Ni Chali","Viratnagar","Bapunagar","Leelanagar","Thakkarnagar","Hirawadi","Vijay Park","Krishnanagar","Dhanush Dhari","Naroda");
$r3d=array_reverse($r3u);
//rto to delhi darwaja
$r4u=array("RTO Circle","Ranip Cross Road","NR Patel","Ramapir no teka","Junavadaj","Gurudwara","Hanumanpura","Sarkari Litho Press","Dilhi Darwaja","Delhi Darwaja");
$r4d=array_reverse($r4u);
//ghuma to maninagar
$r5u=array("Ghuma Gam","Bopal","Bopal Approach","Ambali Gam","Swagat Bunglows","Jayantilal Park","Ashok Vatika","Antarix Colony","Iskcon Mandir","ISKCON Cross Road","Ramdev Nagar","ISRO","Star Bazaar","Jodhpur Char Rasta","Shivranjani","Jhansi-ki-rani","Nehrunagar","Manekbaug","Dharnidhar","Anjali","Chandranagar","Khodiyarnagar","Danilimda C. Rasta","V. Mandir","S.N. College","Kankriya T.Ex.","Kankaria Lake","Rambaug","Maninagar C.Road","Maninagar R.S");
$r5d=array_reverse($r5u);
//odhav to sp ring road
$r6u=array("AJIT Mill","Soni Ni Chali","Grid Station","Odhav Fire Station","Vallabh Nagar","Chhotalal ni Chali","Morlidhar Society","Odhav Talav (Gam)","S P Ring Road Approach");
$r6d=array_reverse($r6u);
//delhi darwaja to science city approach
$r7u=array("Delhi Darwaja","Dilhi Darwaja","Sarkari Litho Press","Hanumanpura","Gurudwara","Junavadaj","Ramapir no teka","Bhavsar Hostel","Akhbarnagar","Pragatinagar","Shastrinagar","Jaimangal","Paras nagar","Parshwanath Jain mandir","BhuyangDev","Sattadhar char Rasta","Sola Bridge","science city approach");
$r7d=array_reverse($r7u);
$source=$_POST['ca'];
$dest=$_POST['cb'];
$n1=sizeof($r1u);
$n2=sizeof($r2u);
$n3=sizeof($r3u);
$n4=sizeof($r4u);
$n5=sizeof($r5u);
$n6=sizeof($r6u);
$n7=sizeof($r7u);
//route 1
for($i=0;$i<$n1;$i++)
{
	if($source==$r1u[$i])
	{
		for($j=$i;$j<$n1;$j++)
		{
			if($dest==$r1u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r1u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n1;$i++)
{
	if($source==$r1d[$i])
	{
		for($j=$i;$j<$n1;$j++)
		{
			if($dest==$r1d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r1d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 2
for($i=0;$i<$n2;$i++)
{
	if($source==$r2u[$i])
	{
		for($j=$i;$j<$n2;$j++)
		{
			if($dest==$r2u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r2u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n2;$i++)
{
	if($source==$r2d[$i])
	{
		for($j=$i;$j<$n2;$j++)
		{
			if($dest==$r2d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r2d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 3
for($i=0;$i<$n3;$i++)
{
	if($source==$r3u[$i])
	{
		for($j=$i;$j<$n3;$j++)
		{
			if($dest==$r3u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r3u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n3;$i++)
{
	if($source==$r3d[$i])
	{
		for($j=$i;$j<$n3;$j++)
		{
			if($dest==$r3d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r3d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 4
for($i=0;$i<$n4;$i++)
{
	if($source==$r4u[$i])
	{
		for($j=$i;$j<$n4;$j++)
		{
			if($dest==$r4u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r4u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n4;$i++)
{
	if($source==$r4d[$i])
	{
		for($j=$i;$j<$n4;$j++)
		{
			if($dest==$r4d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r4d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 5
for($i=0;$i<$n5;$i++)
{
	if($source==$r5u[$i])
	{
		for($j=$i;$j<$n5;$j++)
		{
			if($dest==$r5u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r5u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n5;$i++)
{
	if($source==$r5d[$i])
	{
		for($j=$i;$j<$n5;$j++)
		{
			if($dest==$r5d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r5d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 6
for($i=0;$i<$n6;$i++)
{
	if($source==$r6u[$i])
	{
		for($j=$i;$j<$n6;$j++)
		{
			if($dest==$r6u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r6u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n6;$i++)
{
	if($source==$r6d[$i])
	{
		for($j=$i;$j<$n6;$j++)
		{
			if($dest==$r6d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r6d[$k] ."<br>" ;
				}
			}
		}
	}
}
//route 7
for($i=0;$i<$n7;$i++)
{
	if($source==$r7u[$i])
	{
		for($j=$i;$j<$n7;$j++)
		{
			if($dest==$r7u[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r7u[$k] ."<br>" ;
				}
			}
		}
	}
}
for($i=0;$i<$n7;$i++)
{
	if($source==$r7d[$i])
	{
		for($j=$i;$j<$n7;$j++)
		{
			if($dest==$r7d[$j])
			{	
				echo "Your Bus Route is : <br>";
				for($k=$i;$k<=$j;$k++)
				{
					echo $r7d[$k] ."<br>" ;
				}
			}
		}
	}
}
				
?>

