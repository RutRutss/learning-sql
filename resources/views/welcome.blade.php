<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="container text-center mb-3">
            <h2>บทเรียนออนไลน์ รูปแบบไมโครเลิร์นนิ่ง</h2>
            <h3>รายวิชา ระบบฐานข้อมูลและการออกแบบ</h3>
        </div>

        <div id="accordion">
            @foreach ($videos as $video)
                <div class="card">
                    <div class="card-header" id="heading{{ $video->id }}" data-toggle="collapse"
                        data-target="#collapse{{ $video->id }}" aria-expanded="true"
                        aria-controls="collapse{{ $video->id }}">
                        <h5 class="mb-0">
                            <button class="btn">
                                {{ $video->videoName }}
                            </button>
                        </h5>
                    </div>

                    <div id="collapse{{ $video->id }}" class="collapse" aria-labelledby="heading{{ $video->id }}"
                        data-parent="#accordion">
                        <div class="card-body">
                            <p><strong></strong> {{ $video->videoDesc }}</p>

                            {{-- แปลงลิงก์ YouTube เป็น URL สำหรับ <iframe> --}}
                            <div class="embed-responsive embed-responsive-16by9 text-center">
                                <style>
                                    @media (max-width: 767px) {

                                        /* ถ้าขนาดหน้าจอเป็นมือถือ */
                                        #youtubeemb {
                                            width: 100% !important;
                                            height: 300px !important;
                                        }
                                    }

                                    @media (min-width: 768px) {

                                        /* ถ้าขนาดหน้าจอไม่ใช่มือถือ (Desktop, Tablet, ...) */
                                        #youtubeemb {
                                            width: 70%;
                                            height: 480px !important;
                                        }
                                    }
                                </style>

                                <iframe class="embed-responsive-item" id="youtubeemb"
                                    src="{{ getYoutubeEmbedUrl($video->videoLink) }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
