$(document).ready(function(){
    $('.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active').on('click', 'a', function() {
        $('.sidebar-nav a.active').removeClass('active');
        $(this).addClass('active');
    })
})

  