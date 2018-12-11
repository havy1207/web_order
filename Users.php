<?php
/**
 * Created by PhpStorm.
 * User: Ha Vy
 * Date: 12/11/2018
 * Time: 1:00 PM
 */
require_once './vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class get_put_db
{
    protected $database;
    public $dbname = '';

    public function __construct()
    {
        $acc = ServiceAccount::fromJsonFile(__DIR__.'/secret/fir-8e911-1ca8ef325e3a.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        $this->database = $firebase->getDatabase();
    }

    public function get(int $userID = NULL){
        if(empty($userID) || !isset($userID)) {return FALSE;}

        if($this ->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        }else {
            return FALSE;
        }
    }

    public function insert(array $data){
        if(empty($data) || !isset($data)) {return FALSE;}

        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }

    public function delete(int $userID){
        if(empty($userID) || !isset($userID)) {return FALSE;}

        if($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

// $user = new Users();
// //Push data

// var_dump($user->insert([
//     'Havyaaaa',
//     'huynh'
// ]));

// getdata()

// var_dump($user->get(1));

// deletedata

// var_dump($user->delete(1));