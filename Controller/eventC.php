<?php
	include '../config.php';
	include_once '../Model/event.php';
	class eventC {
		
		function afficherevents(){
			$sql="SELECT * FROM events";
			$db = config::getConnexion();
			try{
				 
				$query= $db->prepare($sql) ; //pdostatement
				$query->execute() ; 
				$liste = $query->fetchAll() ;
				
				return $liste;
			}
			catch(Exception $e){
				die('Erreurs:'. $e->getMeesage());
			}
		}
		
		
		
		function supprimerevent($id){
			$sql="DELETE FROM events WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterevent($event){
			$sql="INSERT INTO events (id, event_startdate, event_enddate, event_name, event_location, notification_email,event_organizer,event_httplink,active,accomodation) 
			VALUES (:id, :event_startdate, :event_enddate, :event_name, :event_location, :notification_email,:event_organizer,:event_httplink,:active,:accomodation)";
			$db = config::getConnexion();
			 
			try{
				$query = $db->prepare($sql);//string stringquery
				$query->execute([
					'id' => $event->getid(),
					'event_startdate' => $event->getevent_startdate(),
					'event_enddate' => $event->getevent_enddate(),
					'event_name' => $event->getevent_name(),
					'event_location' => $event->getevent_location(),
					'notification_email' => $event->getnotification_email(),
					'event_organizer' => $event->getevent_organizer(),
					'event_httplink' => $event->getevent_httplink(),
					'active' => $event->getactive(),
					'accomodation' => $event->getaccomodation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererevent($id){
			$sql="SELECT * from events where id=$id";
		$db = config::getConnexion();
		try{
		 
		$query= $db->prepare($sql) ; //pdostatement
				$query->execute() ; 
				$liste = $query->fetchAll() ;
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		}
		
		function updateevent($newnew, $id){
		
 		
$sql="UPDATE events SET id=:id, event_startdate=:event_startdate,event_enddate=:event_enddate,event_name=:event_name,event_location=:event_location,notification_email=:notification_email,event_organizer=:event_organizer,event_httplink=:event_httplink,active=:active,accomodation=:accomodation WHERE id=:id";
		
		$db = config::getConnexion();

		try {
				 $req=$db->prepare($sql);
		$id=$newnew->getid();
        $event_startdate=$newnew->getevent_startdate();
        $event_enddate=$newnew->getevent_enddate();
        $event_name=$newnew->getevent_name();
        $event_location=$newnew->getevent_location();
		$notification_email =$newnew->getnotification_email(); 
		$event_organizer =$newnew->getevent_organizer();
		$event_httplink =$newnew->getevent_httplink();
		$active =$newnew->getactive();
		$accomodation =$newnew->getaccomodation();
		/*$datas = array(':id'=>$id, ':id'=>$id, 
		':event_startdate'=>$event_startdate,':event_enddate'=>$event_enddate,':event_name'=>$event_name,':email'=>$email,
		':notification_email'=>$notification_email);*/
			 
		$req->bindValue(':id',$id);
		$req->bindValue(':event_startdate',$event_startdate);
		$req->bindValue(':event_enddate',$event_enddate);
		$req->bindValue(':event_name',$event_name);
		$req->bindValue(':event_location',$event_location);
		$req->bindValue(':notification_email',$notification_email);
		$req->bindValue(':event_organizer',$event_organizer);
		$req->bindValue(':event_httplink',$event_httplink);
		$req->bindValue(':active',$active);
		$req->bindValue(':accomodation',$accomodation);
		 		
            $s=$req->execute();
		
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>