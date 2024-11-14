const confirmModal = document.getElementById('confirm_modal')
if (confirmModal) {
    confirmModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const href = button.getAttribute('data-bs-href');
  
    const modalOkButton = confirmModal.querySelector('.btn-primary');
    modalOkButton.href = href;
  });
}