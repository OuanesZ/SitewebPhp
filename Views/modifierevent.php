 <HTML>
<head>
</head>
<body>
<?PHP
 
include_once '../Model/event.php';
    include_once '../Controller/eventC.php';
	
if (isset($_GET['id'])){
	 
	$adhC=new eventC();
    $result=$adhC->recupererevent($_GET['id']);
	//var_dump($result); 
	//die() ;
	foreach($result as $row){
		$cin=$row['id'];
		$event_startdate=$row['event_startdate'];
		$event_enddate=$row['event_enddate'];
		$event_name=$row['event_name'];
		$event_location=$row['event_location'];
		$date=$row['notification_email'];
        $event_organizer=$row['event_enddate'];
		$event_httplink=$row['event_httplink'];
		$active=$row['active'];
		$accomodation=$row['accomodation'];

?>

<form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
				<tr>
                    <td>
                        <label for="event_startdate">event_stardate:
                        </label>
                    </td>
                    <td><input type="date" name="event_startdate" id="event_startdate" value="<?php echo $row['event_startdate']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="event_enddate">event_enddate:
                        </label>
                    </td>
                    <td><input type="date" name="event_enddate" id="event_enddate" value="<?php echo $row['event_enddate']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="event_name">event_name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_name" value="<?php echo $row['event_name']; ?>" id="event_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="event_location">event_name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_location" id="event_location" value="<?php echo $row['event_location']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="notification_email">email:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="notification_email" id="notification_email" value="<?php echo $row['notification_email']; ?>">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="event_organizer">organisateur:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_organizer" id="event_organizer" value="<?php echo $row['event_organizer']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="event_httplink">link:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_httplink" id="event_httplink" value="<?php echo $row['event_httplink']; ?>">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="active">active ou pas:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="active" id="active" value="<?php echo $row['active']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="accomodation">accomodation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="accomodation" id="accomodation" value="<?php echo $row['accomodation']; ?>">
                    </td>
                </tr>                        
                <tr>
                    <td></td>
                    <td>
                        <input type="submit"  name="modifier" value="Modifier"> 
                    </td>
                    <td>
                         
                    </td>
                </tr>
				
				<tr>
<td></td>
<td><input type="hidden" name="envoi" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
            </table>
        </form>
<?PHP
	}

}
if(isset($_POST['modifier']))
{
	$adh=new event($_POST['id'],$_POST['event_startdate'],$_POST['event_enddate'],
	$_POST['event_name'],$_POST['event_location'],$_POST['notification_email'],
    $_POST['event_organizer'],
    $_POST['event_httplink'],
    $_POST['active'],
    $_POST['accomodation']);
	 	
	$adhC->updateevent($adh,$_POST['envoi']);
	 
	header('Location: afficherListeevent.php');
}
?>
</body>
</HTMl>
