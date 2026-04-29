@extends('mainlayout')

@section('maincontent')


    <div style="padding: 20px;"></div>

    <div class="products">
      <a href="{{ route('detail') }}" class="product-card">
        <img src="helm.jpeg" alt="">
        <div class="name">Jual Helm KYT</div>
        <div class="price">Rp.500</div>
        <div class="location">Teras</div>
      </a>
      <a href="{{ route('detail') }}" class="product-card">
        <img src="trees.png" alt="">
        <div class="name">Little Trees</div>
        <div class="price">Rp.700</div>
        <div class="location">Gentan</div>
      </a>
      <a href="{{ route('detail') }}" class="product-card">
        <img src="adibas.jpg" alt="">
        <div class="name">Sepatu Adibas</div>
        <div class="price">Rp.700</div>
        <div class="location">Kertonatan</div>
      </a>
      <a href="{{ route('detail') }}" class="product-card">
        <img src="tiger.jpg" alt="">
        <div class="name">Spakbor Tiger Herek</div>
        <div class="price">Rp.500</div>
        <div class="location">Randusari</div>
      </a>
      <a href="{{ route('detail') }}" class="product-card">
        <img src="fiber.jpg" alt="">
        <div class="name">Microfiber</div>
        <div class="price">Rp.500</div>
        <div class="location">Teras</div>
      </a>
      </div>
  </main>
  
</body>
</html>
@endsection