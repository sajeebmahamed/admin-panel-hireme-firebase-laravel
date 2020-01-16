<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\ClientM;

class ClientMessage extends Controller
{
  function addclientmessage(Request $request)
  {
    ClientM::insert([
      'cname' => $request->cname,
      'cmail' => $request->cmail,
      'cmessage' => $request->cmessage,
    ]);
    return back()->with('status', 'Thanks you! We will get back you soon');
  }
}
