<?php
    include_once '../Model/event.php';
    include_once '../Controller/eventC.php';

    $error = "";

    // create event
    $event = null;

    // create an instance of the controller
    $eventC = new eventC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["event_startdate"]) &&		
        isset($_POST["event_enddate"]) &&
		isset($_POST["event_name"]) && 
        isset($_POST["event_location"]) && 
        isset($_POST["notification_email"])&& 
        isset($_POST["event_organizer"])&& 
        isset($_POST["event_httplink"])&& 
        isset($_POST["active"])&& 
        isset($_POST["accomodation"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['event_startdate']) &&
            !empty($_POST["event_enddate"]) && 
			!empty($_POST["event_name"]) && 
            !empty($_POST["event_location"]) && 
            !empty($_POST["notification_email"])&&
            !empty($_POST["event_organizer"])&& 
            !empty($_POST["event_httplink"])&& 
            !empty($_POST["active"])&& 
            !empty($_POST["accomodation"])
        ) {
            $event = new event(
                $_POST['id'],
				$_POST['event_startdate'],
                $_POST['event_enddate'], 
				$_POST['event_name'],
                $_POST['event_location'],
                $_POST['notification_email'],
                $_POST['event_organizer'],
                $_POST['event_httplink'],
                $_POST['active'],
                $_POST['accomodation']
            );
            $eventC->ajouterevent($event);
            header('Location:afficherListeevent.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeevent.php">Retour à la liste des events</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="event_startdate">event_startdate:
                        </label>
                    </td>
                    <td><input type="date" name="event_startdate" id="event_startdate" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="event_enddate">event_enddate:
                        </label>
                    </td>
                    <td><input type="date" name="event_enddate" id="event_enddate" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="event_name">event_name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_name" id="event_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="event_location">event_location:
                        </label>
                    </td>
                    <td>
                        <input type="etext" name="event_location" id="event_location">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="notification_emai">email de notification:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="notification_email" id="notification_email" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="event_organizer">event_organizer:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_organizer" id="event_organizer" >
                    </td>
                </tr> 
                </tr> 
                <tr>
                    <td>
                        <label for="event_httplink">event_httplink:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="event_httplink" id="event_httplink" >
                    </td>
                    <tr>
                    <td>
                        <label for="active">active:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="active" id="active" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="accomodation">accomodation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="accomodation" id="accomodation" >
                    </td>               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>