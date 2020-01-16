<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class ElectronicsController extends Controller
{
  //airconditioner Controller Start //
  function userpostsairconditioner()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Airconditioner')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.airconditioner', compact('data'));
  }
  //airconditioner Controller End //

  //Computer Controller Start //
  function userpostscomputer()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Computer')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.computer', compact('data'));
  }
  //Computer Controller End //

  //fridge Controller Start //
  function userpostsfridge()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Fridge')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.fridge', compact('data'));
  }
  //fridge Controller End //

  //Mobile Controller Start //
  function userpostsmobile()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Mobile')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.mobile', compact('data'));
  }
  //Mobile Controller End //

  //Oven Controller Start //
  function userpostsoven()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Oven')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.oven', compact('data'));
  }
  //Oven Controller End //

  //Television Controller Start //
  function userpoststelevision()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Electronics/Television')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('electronics.television', compact('data'));
  }
  //Television Controller End //

}
