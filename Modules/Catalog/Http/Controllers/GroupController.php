<?php

namespace Modules\Catalog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Catalog\Entities\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return Group::all();
    }

    /**
     * Create new group
     * @return array
     */
    public function create()
    {
      return Group::firstOrCreate(['title' => 'По-умолчанию']);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request)
    {
      $group = Group::findOrFail($request->id);
      return ['message' => 'Успешно сохранено!', 'model' => $group->fill($request->toArray())->save()];
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('catalog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('catalog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
