/*alert('welcome');
document.getElementById('demo').innerHTML='working...';*/

//$("#demo").html('jquery is working');

//preloader setup
$(window).on('load',function(){
    $('#preloader_status').fadeOut();
    $('#preloader').delay(350).fadeOut();
});