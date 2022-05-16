<?php
	class event{
		private $id=null;
		private $event_startdate=null;
		private $event_enddate=null;
		private $event_name=null;
		private $event_location=null;
		private $notification_email=null;
		
		private $event_organizer=null;
		private $event_httplink=null;
		private $active=null;
		private $accomodation=null;
		function __construct($id, $event_startdate, $event_enddate, $event_name, $event_location, $notification_email,$event_organizer,$event_httplink,$active,$accomodation){
			$this->id=$id;
			$this->event_startdate=$event_startdate;
			$this->event_enddate=$event_enddate;
			$this->event_name=$event_name;
			$this->event_location=$event_location;
			$this->notification_email=$notification_email;
			$this->event_organizer=$event_organizer;
			$this->event_httplink=$event_httplink;
			$this->active=$active;
			$this->accomodation=$accomodation;
		}
		function getid(){
			return $this->id;
		}
		function getevent_startdate(){
			return $this->event_startdate;
		}
		function getevent_enddate(){
			return $this->event_enddate;
		}
		function getevent_name(){
			return $this->event_name;
		}
		function getevent_location(){
			return $this->event_location;
		}
		function getnotification_email(){
			return $this->notification_email;
		}
		function getevent_organizer(){
			return $this->event_organizer;
		}
		function getevent_httplink(){
			return $this->event_httplink;
		}
		function getactive(){
			return $this->active;
		}
		function getaccomodation(){
			return $this->accomodation;
		}
		function setevent_startdate(string $event_startdate){
			$this->event_startdate=$event_startdate;
		}
		function setevent_enddate(string $event_enddate){
			$this->event_enddate=$event_enddate;
		}
		function setevent_name(string $event_name){
			$this->event_name=$event_name;
		}
		function setevent_location(string $event_location){
			$this->event_location=$event_location;
		}
		function setnotification_email(string $notification_email){
			$this->notification_email=$notification_email;
		}
		function setevent_organizer(string $event_organizer){
			$this->event_organizer=$event_organizer;
		}
		function setevent_httplink(string $event_httplink){
			$this->event_httplink=$event_httplink;
		}
		function setactive(string $active){
			$this->active=$active;
		}
		function setaccomodation(string $accomodation){
			$this->accomodation=$accomodation;
		}
		
	}


?>