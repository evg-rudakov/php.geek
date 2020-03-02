console.log('Product.js');

$('#add-product').on('click', function () {
    let id = $(this).data('id');

    $.post(
        '/shop/cart.php?action=additem',
        {id: id, quantity: 1},

        function (response, status) {
            if (response.result == "OK") {
                alert('Товар добавлен в корзину');
            } else {
                alert('Не удалось добавить товар в корзину');
            }
        }
    );
});