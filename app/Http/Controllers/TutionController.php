<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class TutionController extends Controller
{
  public function userposts9_10()
  {

    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();

    $ref = $database->getReference('posts/Tution/Class_9_10')->orderByKey()->getSnapshot();
                  // $snapshot = $ref->getSnapshot();
                  // $post = $ref->getValue();
    $post = $ref->getValue();

    foreach($post as $key=>$val)
    {
      foreach($val as  $akey => $aval)
      {
        $data[]=$aval;}
      }
      array_keys($data);
    //dd($data);

  // return $data;
  return view('tution.class_9_10', compact('data'));
  }
  function userposts11_12()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

      $database = $firebase ->getDatabase();
      $ref = $database->getReference('posts/Tution/Class_11_12')->orderByKey()->getSnapshot();
      $post = $ref->getValue();

        foreach($post as $key=>$val)
        {
          foreach($val as  $akey => $aval)
          {
            $data[]=$aval;
          }
        }
        array_keys($data);
    //dd($data);

  //return $data;
  return view('tution.class_11_12', compact('data'));
  }
  // function deletedata($user_id)
  // {
  //   $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');
  //
  //   $firebase = (new Factory)
  //   ->withServiceAccount($seviceAccount)
  //   ->withDatabaseUri('https://miceo-work.firebaseio.com/')
  //   ->create();
  //
  //   $database = $firebase ->getDatabase();
  //   // $ref = $database->getReference('posts/Tution/class_9_10')->getChildKeys()->equalTo($user_id);
  //   $ref = $database->getReference('posts/Tution/class_9_10')->getChildKeys();
  //   return $ref;
  // }

  //Class 1-5 Start
  function userposts1_5()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

      $database = $firebase ->getDatabase();
      $ref = $database->getReference('posts/Tution/Class_1_5')->orderByKey()->getSnapshot();
      $post = $ref->getValue();

        foreach($post as $key=>$val)
        {
          foreach($val as  $akey => $aval)
          {
            $data[]=$aval;
          }
        }
        array_keys($data);
    //dd($data);

  //return $data;
  return view('tution.Class_1_5', compact('data'));
  }
  //Class 1-5 End

  //Class 6-8 Start

  function userposts6_8()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

      $database = $firebase ->getDatabase();
      $ref = $database->getReference('posts/Tution/Class_6_8')->orderByKey()->getSnapshot();
      $post = $ref->getValue();

        foreach($post as $key=>$val)
        {
          foreach($val as  $akey => $aval)
          {
            $data[]=$aval;
          }
        }
        array_keys($data);
    //dd($data);

  //return $data;
  return view('tution.Class_6_8', compact('data'));
  }

  //Class 6-8 End
}
