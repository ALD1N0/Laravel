@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
</head>
<body>
    @include('navbar')
    <div class="messenger-container">
        <!-- Header untuk daftar kontak -->
        <div class="header">
            <img src="{{ asset('assets/majima.jpg') }}" alt="Profile Picture" class="profile-pic">
            <p class="username">muasok_</p>
            
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab active">Messages</button>
        </div>

        <!-- Daftar Kontak -->
        <div class="contacts-list">
            <div class="contact">
                <img src="{{ asset('assets/ccjpg.jpg') }}" alt="Contact 1" class="contact-avatar">
                <div class="contact-info">
                    <p class="contact-name">Contact 1</p>
                    <p class="contact-status">You: Hello. 10h</p>
                </div>
            </div>
            <!-- Ulangi elemen contact untuk lebih banyak kontak -->
            <div class="contact">
                <img src="{{ asset('assets/aaa.jpg') }}" alt="Contact 1" class="contact-avatar">
                <div class="contact-info">
                    <p class="contact-name">Contact 2</p>
                    <p class="contact-status">You: Hello. 10h</p>
                </div>
            </div>
        </div>

        
    </div>
</body>
</html>
