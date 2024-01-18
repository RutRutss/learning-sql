<?php
if (!function_exists('getYoutubeEmbedUrl')) {
    function getYoutubeEmbedUrl($url)
    {
        // ดึงรหัสวิดีโอจาก URL YouTube
        $videoId = getYoutubeVideoId($url);

        // สร้าง URL สำหรับ <iframe>
        return "https://www.youtube.com/embed/{$videoId}";
    }
}

// ดึงรหัสวิดีโอจาก URL ของ YouTube
if (!function_exists('getYoutubeVideoId')) {
    function getYoutubeVideoId($url)
    {
        $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

        preg_match($pattern, $url, $matches);

        return $matches[1] ?? null;
    }
}
