$(document).ready(function () {
    console.log('ajax.js [LOADED]');

    $('#btn-simple').on('click', function () {
        $.get(
            '/ajax.php',
            function (response, status) {
                console.log(status); // success
                console.log(response); // json
            }
        );
    });

    $('#btn-jsonitem').on('click', function () {
        $.get(
            '/ajax.php?action=jsonitem',
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });

    $('#btn-post-simple').on('click', function () {
        $.post(
            '/ajax.php?action=input',
            {message: 'hello-from-ajax!'},
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });

    $('#btn-post-jsonitem').on('click', function () {
        let user = {
            login: 'John',
            password: '123123'
        };

        $.post(
            '/ajax.php?action=object',
            {user: user},
            function (response, status) {
                console.log(status);
                console.log(response);
            }
        );
    });
});