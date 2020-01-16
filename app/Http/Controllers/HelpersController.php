<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class HelpersController extends Controller
{
  //bazarman Controller Start //
  function userpostsbazarman()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Bazarman')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.bazarman', compact('data'));
  }
  //Bazarman Controller End //

  //cobler Controller Start //
  function userpostscobler()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Cobler')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.cobler', compact('data'));
  }
  //Cobler Controller End //

  //dancer Controller Start //
  function userpostsdancer()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Dancer')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.dancer', compact('data'));
  }
  //Dancer Controller End //

  //Daylabour Controller Start //
  function userpostsdaylabour()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Daylabour')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.daylabour', compact('data'));
  }
  //Daylabour Controller End //


  //Vhanktiman Controller Start //
  function userpostsvhanktiman()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Vhanktiman')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.vhanktiman', compact('data'));
  }
  //Vhanktiman Controller End //

  //Others Controller Start //
  function userpostsothers()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Helpers/Others')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('helpers.others', compact('data'));
  }
  //Others Controller End //

}
