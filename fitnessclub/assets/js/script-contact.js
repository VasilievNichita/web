$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const status = $('#formStatus');
        status.text('').css('color', '');

        // Простая валидация
        const name = form.find('input[name="name"]').val().trim();
        const email = form.find('input[name="email"]').val().trim();
        const message = form.find('textarea[name="message"]').val().trim();

        if (name === '' || email === '' || message === '') {
            status.text('Пожалуйста, заполните все поля.').css('color', 'red');
            return;
        }

        $.ajax({
            url: 'otpravka_message.php',
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.trim() === 'OK') {
                    status.text('Сообщение успешно отправлено!').css('color', 'green');
                    form[0].reset();
                } else {
                    status.text('Ошибка: ' + response).css('color', 'red');
                }
            },
            error: function() {
                status.text('Произошла ошибка при отправке запроса.').css('color', 'red');
            }
        });
    });
});