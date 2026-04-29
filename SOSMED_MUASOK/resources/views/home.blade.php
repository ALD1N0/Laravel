<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muasok</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    @include('layout.navbar')

    <div class="main-content">
        <!-- Example of a post -->
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/lnj.jpg') }}" alt="User profile">
                <h2>Profile 1</h2>
            </div>
            <div class="post-content">
                <img src="{{ asset('assets/foto/ccjpg.jpg') }}" alt="Post content">
            </div>
            <div class="post-footer">
                <p>Jawaban Supporter Cewek Indonesia ini sangat berkelas!</p>
                <small>1 hour ago</small>
            </div>
        </div>

        <!-- Repeat more posts with images -->
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/smp.jpg') }}" alt="User profile">
                <h2>Profile 2</h2>
            </div>
            <div class="post-content">
                <img src="{{ asset('assets/foto/skl.jpg') }}" alt="Post content">
            </div>
            <div class="post-footer">
                <p>Another amazing post from Indonesia's fans!</p>
                <small>2 hours ago</small>
            </div>
        </div>

        <!-- Additional image posts -->
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/rahas.jpg') }}" alt="User profile">
                <h2>Profile 3</h2>
            </div>
            <div class="post-content">
                <img src="{{ asset('assets/foto/skl.jpg') }}" alt="Post content">
            </div>
            <div class="post-footer">
                <p>Post dengan foto yang menakjubkan!</p>
                <small>3 hours ago</small>
            </div>
        </div>

        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/lnj.jpg') }}" alt="User profile">
                <h2>Profile 4</h2>
            </div>
            <div class="post-content">
                <img src="{{ asset('assets/foto/smp.jpg') }}" alt="Post content">
            </div>
            <div class="post-footer">
                <p>Ini adalah foto terbaru dari perjalanan saya!</p>
                <small>4 hours ago</small>
            </div>
        </div>

        <!-- Post dengan video -->
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/smp.jpg') }}" alt="User profile">
                <h2>Profile 5</h2>
            </div>
            <div class="post-content">
                <div class="video-container">
                    <video class="insta-video" muted loop>
                        <source src="{{ asset('assets/videos/bisa tapi mati.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="post-footer">
                <p>Video yang sangat menarik!</p>
                <small>5 hours ago</small>
            </div>
        </div>

        <!-- Post dengan video lainnya -->
        <div class="post">
            <div class="post-header">
                <img src="{{ asset('assets/foto/ccjpg.jpg') }}" alt="User profile">
                <h2>Profile 6</h2>
            </div>
            <div class="post-content">
                <div class="video-container">
                    <video class="insta-video" muted loop>
                        <source src="{{ asset('assets/videos/contoh.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="post-footer">
                <p>Video lainnya yang harus ditonton!</p>
                <small>6 hours ago</small>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>
