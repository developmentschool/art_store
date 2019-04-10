"use strict";
$(document).ready(function () {
    $("#phoneNumber").mask("+7 (999) 999-99-99");
    let user_id = $("#basket-address").data('userid');

    fetch(`${location.origin}/basket-ajax/get-user-addresses?userid=${user_id}`)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            let addresses = data.address;
            let cities = data.city;
            $("#basket-address").autocomplete({
                source: addresses
            });
            $("#basket-city").autocomplete({
                source: cities
            });
        });
    $.ajax({
        url: `${location.origin}/basket-ajax/getnum`,
        success: function (result) {
            let data = JSON.parse(result);
            $(".count-item__count:last").html(data.basketCount);
        }
    });
});
$(".basket-button").on("click", function (event) {
    event.preventDefault();
    let id = (event.target.tagName === "SPAN" ? event.target.parentNode.dataset.id : event.target.dataset.id);
    let quantity = $("#product-quantity").val();
    quantity = (typeof (quantity) === "undefined" ? 1 : quantity);
    $.ajax({
        url: `${location.origin}/basket-ajax/add`,
        data: {
            id: id,
            quantity: quantity,
        },
        success: function (result) {
            let data = JSON.parse(result);
            $(".count-item__count:last").html(data.basketCount);
            $("#modal").modal();
        }
    });
});
$(document).on("click", (event) => {
    if ($(event.target).hasClass("btn-basket-plus") || $(event.target).hasClass("btn-basket-minus")) {
        let parent = $(event.target).parent().parent().parent();
        let id = parent.data("id");
        let quantity = parent.find("._js_input").val();
        let price = parent.find(".prod-price").html();
        let action = ($(event.target).hasClass("btn-basket-plus") ? "add" : "del");
        parent.find(".product-sum").html(`${quantity * price}`);
        $.ajax({
            url: `${location.origin}/basket-ajax/${action}`,
            data: {
                id: id,
                quantity: 1,
            },
            success: function (result) {
                let data = JSON.parse(result);
                $("#subTotalSum").html(data.basketSum + " РУБ");
                $("#totalSum").html(data.basketSum + " РУБ");
            }
        });
    }

});
