import './bootstrap';

document.querySelectorAll('.edit-form').forEach((form) => {
    const close = document.createElement('button');
    close.type = 'button';
    close.className = 'modal-close';
    close.textContent = 'Close';
    close.addEventListener('click', () => form.closest('details').removeAttribute('open'));
    form.prepend(close);
});

document.querySelectorAll('.actions details').forEach((dialog) => {
    dialog.addEventListener('toggle', () => {
        if (!dialog.open) return;
        dialog.querySelector('.edit-form input, .edit-form textarea, .edit-form select')?.focus();
    });
});

document.querySelectorAll('input[name="sub"]').forEach((input) => {
    input.addEventListener('input', () => {
        input.value = input.value.toLowerCase().replace(/\s+/g, '-');
    });
});
