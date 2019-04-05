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
    $.ajax({
        url: "http://art-store.local/basket/add",
        data: {
            id: id,
            quantity: quantity,
        },
        success: function (result) {
            let data = JSON.parse(result);
            console.log(data);
            // $(".count-item__count:last").html(data.data);
            // $("#modal").modal();
        }
    });
});
$(document).on("click", (event) => {
    if ($(event.target).hasClass("_js_plus") || $(event.target).hasClass("_js_minus")) {
        let parent = $(event.target).parent().parent().parent();
        let quantity =parent.find("._js_input").val();
        let price = parent.find(".prod-price").html();
        console.log(price);
        parent.find(".product-sum").html(`${quantity * price}`);
    }

});
