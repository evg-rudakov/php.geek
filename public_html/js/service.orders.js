console.log('service.orders.js');

$('.btn_process').on('click', function () {
    let data = $(this).data('id');

    $.post(
        '/admin/orders.php?action=process',
        {order_id: data},

        function (response, status) {
            if (status == "success") {
                if (response.status == 'OK') {
                    $('#order-' + data + ' td.field-status').text('Проведен');
                } else {
                    alert(response.message);
                }
            } else {
                alert('ERROR');
            }
        }
    );
});

$('.btn_remove').on('click', function () {
    let data = $(this).data('id');

    $.post(
        '/admin/orders.php?action=remove',
        {order_id: data},

        function (response, status) {
            if (status == "success") {
                if (response.status == 'OK') {
                    $('#order-' + data).remove();
                } else {
                    alert(response.message);
                }
            } else {
                alert('ERROR');
            }
        }
    );
});