<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sen's Market</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>

  <aside class="sidebar">
    <h1>Sen's Market</h1>
    <nav>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
        <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">👤 Profil</a>
        <a href="{{ route('produk') }}" class="{{ request()->routeIs('produk') ? 'active' : '' }}">💼 Produk</a>
        <a href="{{ route('tersimpan') }}" class="{{ request()->routeIs('tersimpan') ? 'active' : '' }}">🔖 Tersimpan</a>
        <a href="{{ route('jual') }}" class="{{ request()->routeIs('jual') ? 'active' : '' }}">✏️ Jual Produk</a>
        <a href="{{ route('pengaturan') }}" class="{{ request()->routeIs('pengaturan') ? 'active' : '' }}">⚙️ Pengaturan</a>
        <a href="{{ route('bantuan') }}" class="{{ request()->routeIs('bantuan') ? 'active' : '' }}">🎤 Bantuan</a>
    </nav>

</aside>