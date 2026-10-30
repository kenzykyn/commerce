
document.addEventListener('DOMContentLoaded', () => {
    const toggleButtons = document.querySelectorAll('[data-password-toggle]');

    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const inputId = button.getAttribute('aria-controls');
            const input = document.getElementById(inputId);

            if (!input) return;

            const isPassword = input.type === 'password';

            input.type = isPassword ? 'text' : 'password';

            button.setAttribute('aria-pressed', String(isPassword));
            button.setAttribute(
                'aria-label',
                isPassword ? 'Hide password' : 'Show password'
            );

            button.textContent = isPassword ? 'Hide' : 'Show';
        });
    });
});
