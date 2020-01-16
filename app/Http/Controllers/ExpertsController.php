<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Util\JSON;
use Kreait\Firebase\ServiceAccount;

class ExpertsController extends Controller
{
  //architect Controller Start //
  function userpostsarchitectr()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Architect')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.architect', compact('data'));
  }
  //architect Controller End //

  //beautician Controller Start //
  function userpostsbeautician()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Beautician')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.beautician', compact('data'));
  }
  //beautician Controller End //

  //developer Controller Start //
  function userpostsdeveloper()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Developer')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.developer', compact('data'));
  }
  //developer Controller End //

  //Doctor Controller Start //
  function userpostsdoctor()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Doctor')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.doctor', compact('data'));
  }
  //Doctor Controller End //

  //Driver Controller Start //
  function userpostsdriver()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Driver')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.driver', compact('data'));
  }
  //Driver Controller End //

  //Decorator Controller Start //
  function userpostsdecorator()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Decorator')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.decorator', compact('data'));
  }
  //Decorator Controller End //

  //lawyer Controller Start //
  function userpostslawyer()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Lawyer')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.lawyer', compact('data'));
  }
  //Lawyer Controller End //

  //Photographer Controller Start //
  function userpostsphotographer()
  {
    $seviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseKey.json');

    $firebase = (new Factory)
    ->withServiceAccount($seviceAccount)
    ->withDatabaseUri('https://miceo-work.firebaseio.com/')
    ->create();

    $database = $firebase ->getDatabase();
    $ref = $database->getReference('posts/Experts/Photographer')->orderByKey()->getSnapshot();
    $post = $ref->getValue();

      foreach($post as $key=>$val)
      {
        foreach($val as  $akey => $aval)
        {
          $data[]=$aval;
        }
      }
      array_keys($data);
    return view('experts.photographer', compact('data'));
  }
  //Photographer Controller End //



}
