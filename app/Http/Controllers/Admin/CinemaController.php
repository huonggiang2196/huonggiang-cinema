<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\CinemaRepository;
use App\Contracts\MediaRepository;
use App\Http\Requests\CinemaRequest;

class CinemaController extends Controller
{
    protected $cinema, $media;
    public function __construct(
        CinemaRepository $cinema,
        MediaRepository $media
    )
    {
        $this->cinema = $cinema;
        $this->media = $media;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinemas = $this->cinema->all(['media']);
        return view('admin.cinema.index', compact('cinemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media = $this->media->getMediaByTypeCinema([]);

        return view('admin.cinema.create', compact('media'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CinemaRequest $request)
    {
        $data = $request->all();

        if ($this->cinema->create($data)) {
            return redirect()->route('cinema.create')->with('error', trans('The cinema has been successfully created!'));
        } else {
            return redirect()->route('cinema.create')->with('success', trans('The cinema has been created failed!'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cinema = $this->cinema->find($id, []);
        $media = $this->media->getMediaByTypeCinema([]);

        return view('admin.cinema.edit', compact('cinema', 'media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CinemaRequest $request, $id)
    {
        $data = $request->all();
        
        if ($this->cinema->update($id, $data)) {
            return redirect()->route('cinema.edit', ['id' => $id])->with('error', trans('The cinema has been successfully edited!'));
        } else {
            return redirect()->route('cinema.edit', ['id' => $id])->with('success', trans('The cinema has been edited failed!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($this->cinema->delete($id)) {
                return response(['status' => trans('messages.success')]);
            }
            return response(['status' => trans('messages.failed')]);
        }
    }
}
