@extends('mainlayouta')

@section('maincontent')


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