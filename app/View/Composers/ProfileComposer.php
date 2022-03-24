<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Flight;
use Illuminate\Http\Request;

class ProfileComposer
{
  /**
   * The user repository implementation.
   *
   * @var \App\Repositories\UserRepository
   */
  protected $let;

  /**
   * Create a new profile composer.
   *
   * @param  \App\Repositories\UserRepository  $users
   * @return void
   */
  public function __construct(Request $request)
  {
    $this->let = Flight::find($request->route('flight'));
    // Dependencies are automatically resolved by the service container...

  }

  /**
   * Bind data to the view.
   *
   * @param  \Illuminate\View\View  $view
   * @return void
   */
  public function compose(View $view)
  {
    $view->with('let', $this->let);
  }
}
