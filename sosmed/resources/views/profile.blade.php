@include('navbar')
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
            <img src="{{ asset('assets/lnj.jpg') }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <h1>Muasok</h1>
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
                Isi BIO<br>
                Voly ball<br>

            </div>
            <!-- Tombol Aksi -->
            <div class="actions">
                <button class="btn">Edit Profile</button>
                <button class="btn archive">Add Content</button>
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
        <img src="{{ asset('assets/aaa.jpg') }}" alt="Post 1">
        <img src="{{ asset('assets/ccjpg.jpg') }}" alt="Post 2">
        <!-- Video Post -->
        <video controls>
            <source src="{{ asset('assets/f.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/majima.jpg') }}" alt="Post 4">
        <!-- Video Post -->
        <video controls>
            <source src="{{ asset('assets/d.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="{{ asset('assets/sss.jpg') }}" alt="Post 6">
    </div>
</div>

</body>
</html>
