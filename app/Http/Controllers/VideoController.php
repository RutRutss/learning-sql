<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลทั้งหมดจากฐานข้อมูล
        $videos = Video::all();
        return view('home', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        // บันทึกข้อมูลลงในฐานข้อมูล
        Video::create($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully');
    }
}
