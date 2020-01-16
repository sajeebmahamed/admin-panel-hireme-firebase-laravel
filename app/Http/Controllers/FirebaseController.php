<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function index()
      {
      return view('adminview', compact('value'));
      // $usersdata = $ref->getValue();
      // foreach ($usersdata as $userdata)
      // {
      //   $all_user[] = $userdata;
      // }
      // return view('home', compact('all_user'));
      // //return $all_user;
      }
    function userprofile()
    {
      $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');
      $firebase = (new Factory)
      ->withServiceAccount($seviceAccount)
      ->withDatabaseUri('https://miceo-work.firebaseio.com/')
      ->create();

      $database = $firebase ->getDatabase();
      $ref = $database->getReference('profiles');
      $snapshot = $ref->getSnapshot();
      $value = $snapshot->getValue();
      return view('/home', compact('value'));
    }

}
