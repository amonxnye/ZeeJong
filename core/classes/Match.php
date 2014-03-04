<?php
/*
Match Class
*/



require_once(dirname(__FILE__) . '/Team.php');
require_once(dirname(__FILE__) . '/Score.php');
require_once(dirname(__FILE__) . '/Referee.php');
require_once(dirname(__FILE__) . '/Tournament.php');


/**
@brief Match Class

The class contains the following information:
- id
- date
- place
*/
class Match {
	private $id;
	private $teamA;
	private $teamB;
	private $tournamentId;
	private $refereeId;
	private $date;
	private $scoreId;
	private $db;


	/**
	Constructor
	@param id
	*/
	public function __construct($id, $teamA, $teamB, $tournamentId, $refereeId, $date, $scoreId, &$db) {
		$this->id = $id;
		$this->teamA = $teamA;
		$this->teamB = $teamB;
		$this->tournamentId = $tournamentId;
		$this->refereeId = $refereeId;
		$this->date = $date;
		$this->scoreId = $scoreId;
		$this->db = &$db;		
	}

	/**
	Get the ID of the match
	@return id
	*/
	public function getId() {
		return $this->id;
	}
	
	
	
	public function getTeamA() {
		return $this->db->getTeamById($this->teamA);
	}
	

	public function getTeamAId() {
		return $this->teamA;
	}


	public function getTeamB() {
		return $this->db->getTeamById($this->teamB);
	}
	

	public function getTeamBId() {
		return $this->teamB;
	}
	
	
	public function getScore() {
		return $this->db->getScoreById($this->scoreId);		
	}
	

	public function getScoreId() {
		return $this->scoreId;		
	}

	
	public function getReferee() {
		return $this->db->getRefereeById($this->refereeId);
	}
	
	
	public function getRefereeId() {
		return $this->refereeId;
	}


	public function getTournament() {
		return $this->db->getTournamentById($this->tournamentId);
	}


	public function getTournamentId() {
		return $this->tournamentId;
	}
	
	
	public function getDate() {
		return $this->date;
	}
	
	
	public function getPlayersTeamA() {
		return $this->getTeamA()->getPlayers();
	}
	
	public function getPlayersTeamB() {
		return $this->getTeamB()->getPlayers();
	}
	

	/**
	String function
	@return string
	*/
	public function __toString() {
		return "ID: $this->id";
	}

}
?>
