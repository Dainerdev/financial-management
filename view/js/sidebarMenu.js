// Script for Web menu
document.addEventListener('DOMContentLoaded', function () {
    const openSidebar = document.getElementById('open-sidebar');
    const closeSidebar = document.getElementById('menu');
    const sidebar = document.getElementById('sidebar-menu');
    const container = document.querySelector('.container');

    openSidebar.addEventListener('click', function () {
        sidebar.style.left = '0';
        container.style.marginLeft = '250px';
        openSidebar.classList.add('hidden');
    });

    closeSidebar.addEventListener('click', function () {
        sidebar.style.left = '-250px';
        container.style.marginLeft = '0';
        openSidebar.classList.remove('hidden');
    });

    window.addEventListener('click', function (event) {
        if (!event.target.matches('#open-sidebar') && !event.target.matches('.sidebar') && !event.target.matches('.container')) {
            sidebar.style.left = '-250px';
            container.style.marginLeft = '0';
            openSidebar.classList.remove('hidden');
        }
    });
});


// Script for User menu
document.addEventListener('DOMContentLoaded', function() {
    var username = document.getElementById('username');
    var menu = document.getElementById('menu');
  
    username.addEventListener('click', function() {
      menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    });
  
    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener('click', function(event) {
      var isClickInside = username.contains(event.target) || menu.contains(event.target);
      if (!isClickInside) {
        menu.style.display = 'none';
      }
    });
});