$(document).ready(function () {
    $("article").load('home.html')

    $("#about").click(function () {
        $("article").load('about.html')
    })

    $("#home").click(function () {
        $("article").load('home.html', function(){
            $("#show").click(function () {
                $("#text").show();
            });
        
            $("#hide").click(function () {
                $("#text").hide();
            });
        })
    })


})