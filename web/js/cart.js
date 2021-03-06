"use strict";
$(document).ready(function () {
    $("#phoneNumber").mask("+7 (999) 999-99-99");
    let personalInfoBtn = $(".personal-info-btn-edit");
    personalInfoBtn.on('click', (event) => {
        let target = $(event.target);
        let id = target.parent().attr("id");
        console.log(target.parent());

        $(`#${id} :input`).attr("readonly", (index, attr) => {
            return attr ? false : true;
        });

        target.prev().attr("disabled", (index, attr) => {
            return attr ? false : true;
        });

        target.next().hasClass('disabled') ? target.next().removeClass('disabled') : target.next().addClass('disabled');

        let btnName = () => {
            return target.html() === 'Редактировать' ? 'Блокировать' : 'Редактировать';
        };
        target.html(btnName);
        $("#phoneNumber").mask("+7 (999) 999-99-99");
    });

    $.ajax({
        url: `${location.origin}/cart-ajax/getnum`,
        success: function (result) {
            let data = JSON.parse(result);
            $(".count-item__count:last").html(data.basketCount);
        }
    });
});
$(".cart-button").on("click", function (event) {
    event.preventDefault();
    let id = (event.target.tagName === "SPAN" ? event.target.parentNode.dataset.id : event.target.dataset.id);
    let quantity = $("#product-quantity").val();
    quantity = (typeof (quantity) === "undefined" ? 1 : quantity);
    $.ajax({
        url: `${location.origin}/cart-ajax/add`,
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
    if ($(event.target).hasClass("btn-cart-plus") || $(event.target).hasClass("btn-cart-minus")) {
        let parent = $(event.target).parent().parent().parent();
        let id = parent.data("id");
        let quantity = parent.find("._js_input").val();
        let price = parent.find(".prod-price").html();
        let action = ($(event.target).hasClass("btn-cart-plus") ? "add" : "del");
        parent.find(".product-sum").html(`${quantity * price}`);
        $.ajax({
            url: `${location.origin}/cart-ajax/${action}`,
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
