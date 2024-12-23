document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('modal')
  const closeModal = document.getElementById('closeModal')
  const contactForm = document.getElementById('contactForm')

  document.addEventListener('click', (e) => {
    if (e.target.hasAttribute('data-contact')) {
      modal.style.display = 'flex'
    }
  })

  closeModal.addEventListener('click', () => {
    modal.style.display = 'none'
  })

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault()
    modal.style.display = 'none'
  })
})
