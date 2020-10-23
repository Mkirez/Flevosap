

$("#products").on("click",".product-item",function () {
    var product_id = $(this).data("product_id");
    window.location.replace("/product/info?id=" + product_id);
});

$("#update_cart").on("click",function () {
    $("#cart_form").submit();
});

$(".cart").on("click",".minus",function () {
    var old = parseInt($(this).parent().find(".qty").val());
    if(old-1 >= 0){
        $(this).parent().find(".qty").val(old - 1);
    }
});

$(".cart").on("click",".plus",function () {
    var old = parseInt($(this).parent().find(".qty").val());
    $(this).parent().find(".qty").val(old + 1);
});


//random();
function random(){
    setTimeout(function () {
        $(".navbar.navbar-expand-lg.navbar-light.navbar-bg-color").css({"background-color":getRandomColor()});
        $("body").css({"background-color":getRandomColor()});
        random();
    },250);
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}