@include('layouts.navbar')
<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
</head>
<body>

<div class="profile-container">
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="profile-image">
            <img src="{{ asset('assets/foto/lnj.jpg') }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <h1>TiasWidyatama</h1>
            <div class="profile-stats">
                <div>
                    <strong>22</strong>
                    Posts
                </div>
                <div>
                    <strong>341</strong>
                    Followers
                </div>
                <div>
                    <strong>199</strong>
                    Following
                </div>
            </div>
            <div class="profile-bio">
                TiasWidyatama<br>
                Voly ball<br>
                Pesawaran 🌍 Lampung
            </div>
        </div>
    </div>

    <!-- Profile Tabs -->
    <div class="profile-tabs">
        <a href="#">Posts</a>
    </div>

    <!-- Profile Posts Grid -->
    <div class="profile-posts">
        <!-- Gambar Post -->
        <img src="{{ asset('assets/foto/aaa.jpg') }}" alt="Post 1">
        <img src="{{ asset('assets/foto/ccjpg.jpg') }}" alt="Post 2">
        <!-- Video Post -->
        <video controls>
            <source src="{{ asset('assets/videos/z.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/foto/majima.jpg') }}" alt="Post 4">
        <!-- Video Post -->
        <video controls>
            <source src="{{ asset('assets/videos/d.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/foto/sss.jpg') }}" alt="Post 6">
    </div>
</div>

</body>
</html>
