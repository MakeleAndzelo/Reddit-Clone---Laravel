<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
	/**
	 * Listning of links
	 * 
	 * @return response
	 */
    public function index()
    {
    	$links = Link::all();

    	return view('links.index', compact('links'));
    }

    /**
     * Creates form for links
     * 
     * @return response
     */
    public function create()
    {
    	return view('links.create');
    }

    /**
     * Stores link
     * @param  Request $request 
     * @return Response
     */
    public function store(Request $request)
    {
    	$link = Link::create($request->all());
        session()->flash('success', 'Link successfully created');

    	return redirect(route('links.show', $link->id));
    }

    /**
     * Shows link
     * 
     * @param  Link   $link 
     * @return Response
     */
    public function show(Link $link)
    {
    	return view('links.show', compact('link'));
    }

    /**
     * Form view for edit
     * 
     * @return response
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Updates a link
     * @param  Request $request Request with link parameters
     * @param  Link    $link    Link for update
     * @return Response
     */
    public function update(Request $request, Link $link)
    {
        $link->update($request->all());
        session()->flash('success', 'Link successfully updated');
        return redirect(route('links.show', $link->id));
    }

    /**
     * Destroys a link
     * @param  Link   $link 
     * @return Response
     */
    public function destroy(Link $link)
    {
        $link->delete();
        session()->flash('success', 'Link successfully deleted');
        return redirect('/');
    }
}
