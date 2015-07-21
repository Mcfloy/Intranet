<?php
	class member
	{
		private $initialized = false;
		private $id;
		private $login;
		private $fullname;
		private $password;
		private $class;
		private $group;
		private $grade;
		private $teacher;
		private $schedule;

		public function __construct($login, $password)
		{
			require_once 'bdd.php';
			$req = $bdd->prepare('SELECT members.id, members.fullname, members.class, members.groupe, members.grade, members.is_teacher, schedules.schedule AS schedule FROM members INNER JOIN schedules WHERE (members.login = :login AND members.password = :password) AND schedules.class = members.class');
			$req->execute(array(
				'login' => $login,
				'password' => $password));
			$fetch = $req->fetch();
			if ($fetch != false)
			{
				$this->id = $fetch['id'];
				$this->login = $login;
				$this->fullname = $fetch['fullname'];
				$this->password = $password;
				$this->class = $fetch['class'];
				$this->grade = $fetch['grade'];
				$this->group = $fetch['groupe'];
				$this->teacher = ($fetch['is_teacher'] == 1) ? (true) : (false) ;
				$this->schedule = json_decode($fetch['schedule']);
				$this->initialized = true;
				$req->closeCursor();
			}
		}

		public function initialized()
		{
			return $this->initialized;
		}

		public function getId()
		{
			return $this->id;
		}

		public function getLogin()
		{
			return $this->login;
		}

		public function getFullname()
		{
			return $this->fullname;
		}

		public function getClass()
		{
			return $this->class;
		}

		public function getGroup()
		{
			return $this->group;
		}

		public function getGrade()
		{
			return $this->grade;
		}

		public function isTeacher()
		{
			return $this->teacher;
		}

		public function getTodaySchedule()
		{
			setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
			$today = ucwords(strftime('%A'));
			if ($today == "Dimanche")
				return false;
			else
				return $this->schedule->{$today};
		}

		public function getSchedule()
		{
			return $this->schedule;
		}
	}
?>