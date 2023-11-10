<?php

namespace App\Http\Controllers;

use App\Models\Pe;
use Illuminate\Http\Request;

/**
 * Class PeController
 * @package App\Http\Controllers
 */
class PeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pes = Pe::paginate();

        return view('pe.index', compact('pes'))
            ->with('i', (request()->input('page', 1) - 1) * $pes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pe = new Pe();
        return view('pe.create', compact('pe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pe::$rules);

        $pe = Pe::create($request->all());

        return redirect()->route('pes.index')
            ->with('success', 'Pe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pe = Pe::find($id);

        return view('pe.show', compact('pe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pe = Pe::find($id);

        return view('pe.edit', compact('pe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pe $pe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pe $pe)
    {
        request()->validate(Pe::$rules);

        $pe->update($request->all());

        return redirect()->route('pes.index')
            ->with('success', 'Pe updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pe = Pe::find($id)->delete();

        return redirect()->route('pes.index')
            ->with('success', 'Pe deleted successfully');
    }
}
