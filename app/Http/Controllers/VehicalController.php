<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class VehicalController extends Controller
{
  function userpostsbike()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Vehicals/Bike')->orderByKey()->getSnapshot();
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
    return view('vehicals.bike', compact('data'));
  }
  function userpostscars()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Vehicals/Car')->orderByKey()->getSnapshot();
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
    return view('vehicals.car', compact('data'));
  }
  //Ambulance Controller Start //
  function userpostsambulance()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Vehicals/Ambulance')->orderByKey()->getSnapshot();
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
    return view('vehicals.ambulance', compact('data'));
  }
  //Ambulance Controller End //

  //Pickup Controller Start //

  function userpostspickup()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Vehicals/Pickup')->orderByKey()->getSnapshot();
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
    return view('vehicals.pickup', compact('data'));
  }

  //Pickup Controller End //
  //Truck Controller Start //
  function userpoststruck()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Vehicals/Truck')->orderByKey()->getSnapshot();
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
    return view('vehicals.track', compact('data'));
  }

  //Truck Controller End //
}
