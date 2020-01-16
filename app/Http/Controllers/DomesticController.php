<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class DomesticController extends Controller
{
  //Carpenter Controller Start //
  function userpostscarpenter()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Carpenter')->orderByKey()->getSnapshot();
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
    return view('domestic.carpenter', compact('data'));
  }

  //Carpenter Controller End //

  //Carpenter Data Delete Start //
  // function userpostscarpenterdelete()
  // {
  //   print_r($id);
  // }

  //Carpenter Data Delete End //

  //Cooker Controller Start //
  function userpostscooker()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Cooker')->orderByKey()->getSnapshot();
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
    return view('domestic.cooker', compact('data'));
  }

  //Cooker Controller End //

  //Electrician Controller Start //
  function userpostselectrician()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Electrician')->orderByKey()->getSnapshot();
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
    return view('domestic.electrician', compact('data'));
  }

  //Electrician Controller End //

  //Gasrepairer Controller Start //
  function userpostsgasrepairer()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Gasrepairer')->orderByKey()->getSnapshot();
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
    return view('domestic.gasreparier', compact('data'));
  }

  //Gasrepairer Controller End //

  //locksmith Controller Start //
  function userpostslocksmith()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Locksmith')->orderByKey()->getSnapshot();
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
    return view('domestic.locksmith', compact('data'));
  }

  //Locksmith Controller End //

  //locksmith Controller Start //
  function userpostsmaid()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Maid')->orderByKey()->getSnapshot();
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
    return view('domestic.maid', compact('data'));
  }

  //Maid Controller End //

  //Plumber Controller Start //
  function userpostsplumber()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Domestic/Plumber')->orderByKey()->getSnapshot();
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
    return view('domestic.plumber', compact('data'));
  }

  //Plumber Controller End //
}
