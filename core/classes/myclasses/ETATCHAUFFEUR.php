<?php
namespace Home;
use Native\RESPONSE;/**
 * 
 */
class ETATCHAUFFEUR extends TABLE
{

		public static $tableName = __CLASS__;
		public static $namespace = __NAMESPACE__;

		const RAS = 1;
		const MISSION = 2;
		const INDISPONIBLE = 3;

		public $name;
		public $class;

		public function enregistre(){}


		public function sentenseCreate(){}
		public function sentenseUpdate(){}
		public function sentenseDelete(){}

	}
	?>