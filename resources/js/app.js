/*
 * Validasi form login: cegah submit selama kolom wajib masih kosong.
 * Ini hanya untuk pengalaman pengguna — backend tetap wajib memvalidasi ulang.
 */
document.querySelectorAll('[data-auth-form]').forEach((form) => {
    const fields = [...form.querySelectorAll('[data-required-message]')];

    const setError = (input, message) => {
        const error = form.querySelector(`[data-error-for="${input.name}"]`);

        input.setAttribute('aria-invalid', message ? 'true' : 'false');

        if (!error) {
            return;
        }

        error.textContent = message;
        error.hidden = !message;
    };

    const validate = (input) => {
        const message = input.value.trim() === '' ? input.dataset.requiredMessage : '';

        setError(input, message);

        return message === '';
    };

    form.addEventListener('submit', (event) => {
        const empty = fields.filter((input) => !validate(input));

        if (empty.length > 0) {
            event.preventDefault();
            empty[0].focus();
        }
    });

    fields.forEach((input) => {
        input.addEventListener('input', () => {
            if (input.getAttribute('aria-invalid') === 'true') {
                validate(input);
            }
        });
    });
});
