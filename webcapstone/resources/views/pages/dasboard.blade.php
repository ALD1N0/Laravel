@extends('mainlayout')

@section('maincontent')

 <div class="carousel">
      <video autoplay loop muted controls>
        <source src="video1.mp4" type="video/mp4">
      </video>
      
      <video autoplay loop muted controls>
        <source src="mrbean.mp4" type="video/mp4">
      </video>
    </div>
    

    <h2>Terakhir Dilihat</h2>
    <div class="products">
      <div class="product-card">
        <img src="helm.jpeg" alt="">
        <div class="name">Jual Helm KYT</div>
        <div class="price">Rp.500</div>
        <div class="location">Teras</div>
      </div>
      <div class="product-card">
        <img src="trees.png" alt="">
        <div class="name">Little Trees</div>
        <div class="price">Rp.20.000</div>
        <div class="location">Gentan</div>
      </div>
    </div>

  </main>
  <script>
    const profileIcon = document.getElementById('profileIcon');
    const dropdownMenu = document.getElementById('dropdownMenu');

    profileIcon.addEventListener('click', (e) => {
      e.stopPropagation();
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('click', () => {
      dropdownMenu.style.display = 'none';
    });
  </script>
</body>
</html>
@endsection