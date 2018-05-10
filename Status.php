
Conversation opened. 1 read message.

Skip to content
Using Sri Krishna College of Engineering and Technology Mail with screen readers
159 of 3,620
 
(no subject)
Inbox
	x
Nithya Shree N N
	
AttachmentsApr 23
	
to me

10 Attachments
	
Click here to Reply or Forward
Using 2.35 GB
Manage
Program Policies
Powered by
Google
Last account activity: 13 hours ago
Details
	
	

<?php	
		$x=$_POST['aadhar'];
		$e=mysql_connect("localhost","root","");
		mysql_select_db("miniproject");
		$r=mysql_query("SELECT * FROM studata WHERE aadhar='$x'");
		$row=mysql_fetch_array($r);	
		if($r==FALSE)
			$str="hai";
		else
		$str=$row["status"];
		mysql_close($e);

?>
		<body>
		<form method="post">
		<input type="text" name="aadhar"  placeholder="Enter your Aadhar Number">
		<input type="text" value="<?php echo @$str;?>"/><hr/>
		<input type="submit" value="SUBMIT" name="sbut" >
		</form>
		
		</body>

store1.php
Displaying store - Copy.php.
