<?php

use Nest\Framework\Http\Route;

class HomeController
{
  public function index()
  {
  }

  public function path()
  {
  }
}

Route::GET("/:category/:categoryId", [HomeController::class, "path"]);
Route::GET("/", [HomeController::class, "index"]);
