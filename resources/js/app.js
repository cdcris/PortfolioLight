const introDialog = document.querySelector('[data-intro-dialog]');
const introTrigger = document.querySelector('[data-intro-trigger]');
const introClose = document.querySelector('[data-intro-close]');

if (introDialog instanceof HTMLDialogElement && introTrigger instanceof HTMLButtonElement) {
    introTrigger.addEventListener('click', () => introDialog.showModal());

    introClose?.addEventListener('click', () => introDialog.close());

    introDialog.addEventListener('click', (event) => {
        if (event.target === introDialog) {
            introDialog.close();
        }
    });

    introDialog.addEventListener('close', () => introTrigger.focus());
}
