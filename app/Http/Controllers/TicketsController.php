<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TicketsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Default tickets page.
   *
   * @return void
   */
  public function index()
  {
    return view('tickets.index');
  }

  /**
   * Create ticket page.
   *
   * @return void
   */
  public function create()
  {
    return view('tickets.create');
  }

}
