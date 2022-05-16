<?php
	include '../Controller/eventC.php';
	$eventC=new eventC();
	$listeevents=$eventC->afficherevents(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterevent.php">Ajouter un event</a></button>
		<center><h1>Liste des events</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>event_startdate</th>
				<th>event_enddate</th>
				<th>event_name</th>
				<th>event_location</th>
				<th>notification_email</th>
				<th>event_organizer</th>
				<th>event_httplink</th>
				<th>active</th>
				<th>accomodation</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeevents as $event){
			?>
			<tr>
				<td><?php echo $event['id']; ?></td>
				<td><?php echo $event['event_startdate']; ?></td>
				<td><?php echo $event['event_enddate']; ?></td>
				<td><?php echo $event['event_name']; ?></td>
				<td><?php echo $event['event_location']; ?></td>
				<td><?php echo $event['notification_email']; ?></td>
				<td><?php echo $event['event_organizer']; ?></td>
				<td><?php echo $event['event_httplink']; ?></td>
				<td><?php  
				if ($event['active']==1)
				{echo "active" ;} 
				else if ($event['active']==0)
				{echo "inactive" ;}
				else 
				{ echo "code erroné" ;}

				?>
				</td>
				<td><?php echo $event['accomodation']; ?></td>
				<td>
			
					
					<a href="modifierevent.php?id=<?php echo $event['id']; ?>">Modifier</a>
				
				</td>
				<td>
					<a href="supprimerevent.php?id=<?php echo $event['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
