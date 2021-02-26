<?php
class Users extends Controller {

  public function index() {
    $this->loader->load();
  }
  
  public function users_new() {
    $this->loader->load('users_new', ['title'=>'S\'inscrire']);
  }
  
  public function c_users_create() {
    try {
      $loginUser = filter_input(INPUT_POST, 'loginUser');
      $firstname = filter_input(INPUT_POST, 'firstname');
      $lastname = filter_input(INPUT_POST, 'lastname');
      $birth = filter_input(INPUT_POST, 'birth');
      $mailUser = filter_input(INPUT_POST, 'mailUser');
      $phoneUser = filter_input(INPUT_POST, 'phoneUser');
      $password = filter_input(INPUT_POST, 'password');
      //$passwordConf = filter_input(INPUT_POST, 'passwordConf');
      $user = $this->users->m_create_user($loginUser, $firstname , $lastname , $birth, $mailUser, $phoneUser, $password);
      $this->sessions->login($user);
      $this->loader->load('moncompte', ['title'=>'Mon compte']);
    } catch (Exception $e) {
      $data = ['error' => $e->getMessage(), 'title'=>'S\'inscrire'];
      $this->loader->load('users_new', $data );
    }
  }





}