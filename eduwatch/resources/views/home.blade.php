<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EduWatch</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* GRID UTAMA */
.parent {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
}

/* NAVBAR */
.navbar {
    grid-column: 1 / -1;
    background: #1e1e2f;
    color: white;
    padding: 15px 20px;
    font-size: 20px;
    font-weight: bold;
}

/* CARD VIDEO */
.card {
    background: #f4f4f4;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

.thumbnail {
    width: 100%;
    height: 150px;
    background: #ccc;
}

.title {
    padding: 10px;
    font-weight: bold;
}
</style>
</head>
<body>

<div class="parent">

    <!-- 1 = NAVBAR -->
    <div class="navbar">EduWatch</div>

    <!-- 2 & 3 -->
    <div class="card">
        <div class="thumbnail">Thumbnail 1</div>
        <div class="title">Judul Video 1</div>
    </div>

    <!-- 4 & 6 -->
    <div class="card">
        <div class="thumbnail">Thumbnail 2</div>
        <div class="title">Judul Video 2</div>
    </div>

    <!-- 5 & 7 -->
    <div class="card">
        <div class="thumbnail">Thumbnail 3</div>
        <div class="title">Judul Video 3</div>
    </div>

</div>

</body>
</html>