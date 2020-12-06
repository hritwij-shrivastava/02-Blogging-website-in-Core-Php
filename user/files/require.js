$(document).ready(function () {
    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active-sidebar');
        $('#spinnertop').toggleClass('spinner-top');
        $('#spinnermiddle').toggleClass('spinner-middle');
        $('#spinnerbottom').toggleClass('spinner-bottom');
        $('.mainarea-post').toggleClass('shift');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
    });
    $('.homebutton-nav').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').toggleClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
        $('.mainarea-post').removeClass('shift');
    });
    $('.chatbutton-nav').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').toggleClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
        $('.mainarea-post').removeClass('shift');
    });
    $('.notification-nav').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').toggleClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
        $('.mainarea-post').removeClass('shift');
    });
    $('.profile-nav').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').toggleClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
        $('.mainarea-post').removeClass('shift');
    });
    $('#dropdownMenuButton').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').toggleClass('clicked');
        $('.arrow-box').toggleClass('showbox');
        $('.mainarea-post').removeClass('shift');
    });
    $('#content').on('click', function () {
        $('#sidebar').removeClass('active-sidebar');
        $('#spinnertop').removeClass('spinner-top');
        $('#spinnermiddle').removeClass('spinner-middle');
        $('#spinnerbottom').removeClass('spinner-bottom');
        $('.homebutton-nav').removeClass('clicked');
        $('.chatbutton-nav').removeClass('clicked');
        $('.notification-nav').removeClass('clicked');
        $('.profile-nav').removeClass('clicked');
        $('.button-logout-navbar').removeClass('clicked');
        $('.arrow-box').removeClass('showbox');
    });
    $("#letter").on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm").toggle();
    });
    $('#cancelform').on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm").toggle();
    });
    $('#uplabel').on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm2").toggle();
    });
    $('#cancelform2').on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm2").toggle();
    });
    $('#bio').on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#line').toggleClass('hideeverything');
        $('#line2').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm3").toggle();
    });
    $('#cancelform3').on("click", function() {
        $('#letter').toggleClass('hideeverything');
        $('#line').toggleClass('hideeverything');
        $('#line2').toggleClass('hideeverything');
        $('#uplabel').toggleClass('hideeverything');
        $('#bio').toggleClass('hideeverything');
        $('#settings').toggleClass('hideeverything');
        $('#logoutbtn').toggleClass('hideeverything');
        $("#addForm3").toggle();
    });
});
function writeblog(){
    window.open("../../resources/config_files/create_blog.php","_self");
}
function logout(){
    window.open("../../resources/config_files/logout.php","_self");
}
function home(){
    window.open("../home/home.php","_self");
}
function profile(){
    window.open("../profile/profile.php","_self");
}