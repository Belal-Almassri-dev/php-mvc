<?php
  class member {
    // These are public atributes so it can be accessed as the following $member->xx  
    public $id;
    public $fName;
    public $lName;
    public $email;

    public function __construct($id, $fName, $lName, $email) {
      $this->id      = $id;
      $this->fName  = $fName;
      $this->lName  = $lName;
      $this->email = $email;
    }

    public static function allMembers() {
      $list = [];
      $db = Db::getConnect();
      $req = $db->query('SELECT * FROM members');

      // we create a list of member objects from the database results
      foreach($req->fetchall() as $member) {
        $list[] = new member($member['id'], $member['fName'], $member['lName'], $member['email']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getConnect();
      // To ensure that the id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM members WHERE id = :id');
      // now replace :id with the actual $id
      $req->execute(array('id' => $id));
      $member = $req->fetch();

      return new member($member['id'], $member['fName'], $member['lName'], $member['email']);
    }
  }
?>