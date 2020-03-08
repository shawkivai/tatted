<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Repositories\Repository;

class StateController extends Controller
{
    private $stateModel;

    public function __construct(State $state)
    {
        $this->stateModel = new Repository($state);
    }
    public function index()
    {
        return $this->stateModel->all();
    }

    public function statePostcodes(int $stateId)
    {
        return State::with('postcodes')->where('id', $stateId)->get();
    }

    public function stateSuburbs(int $stateId)
    {
        return State::with('suburbs')->where('id', $stateId)->paginate(50);
    }
}