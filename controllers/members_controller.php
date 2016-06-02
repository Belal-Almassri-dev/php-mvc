<?php
  class membersController {
    public function index() {
      // Add all members into one variable name
      $members = member::allMembers();
      require_once('views/members/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return request('pages', 'error');

      // we use the given id to get the right member
      $member = member::find($_GET['id']);
      require_once('views/members/show.php');
    }
  }
?>