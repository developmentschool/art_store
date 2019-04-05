"use strict";
$(document).ready(function () {
    $.ajax({
        url: "http://art-store.local/basket/getnum",
        success: function (result) {
            let data = JSON.parse(result);
            console.log(data);
            $(".count-item__count:last").html(data.data);
        }
    });
});
$(".basket-button").on("click", function (event) {
    event.preventDefault();
    let id = event.target.dataset.id;
    let quantity = $("#product-quantity").val();
    quantity = (typeof (quantity) === "undefined" ? 1 : quantity);
    console.log("quantity " + quantity);
    $.ajax({
        url: "http://art-store.local/basket/add",
        data: {
            id: id,
            quantity: quantity,
        },
        success: function (result) {
            let data = JSON.parse(result);
            console.log(data);
            $(".count-item__count:last").html(data.data);
            $("#modal").modal();
        }
    });
});