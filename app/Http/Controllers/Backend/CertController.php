<?php

namespace App\Http\Controllers\Backend;

use App\Cert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cert = Cert::all();
        return view('backend.cert.index',compact('cert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cert.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cert = Cert::create($request->all());
        $cert->addMedia($request->cert)->toMediaCollection('cert');
        return redirect()->route('cert.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function show(Cert $cert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function edit(Cert $cert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cert $cert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cert $cert)
    {
        $cert->delete();
        return redirect()->route('cert.index');
    }
}
