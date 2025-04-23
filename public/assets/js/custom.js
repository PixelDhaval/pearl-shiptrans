document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formOverlay = document.querySelector('.form-overlay');
    const btnText = submitBtn.querySelector('.btn-text');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading state
            formOverlay.style.display = 'flex';
            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';

            // Submit form
            fetch(contactForm.action, {
                method: 'POST',
                body: new FormData(contactForm),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const successAlert = document.createElement('div');
                    successAlert.className = 'alert alert-success';
                    successAlert.textContent = data.message;
                    contactForm.insertAdjacentElement('beforebegin', successAlert);
                    
                    // Reset form
                    contactForm.reset();
                } else {
                    // Show error message
                    const errorAlert = document.createElement('div');
                    errorAlert.className = 'alert alert-danger';
                    errorAlert.textContent = data.message || 'An error occurred. Please try again.';
                    contactForm.insertAdjacentElement('beforebegin', errorAlert);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show error message
                const errorAlert = document.createElement('div');
                errorAlert.className = 'alert alert-danger';
                errorAlert.textContent = 'An error occurred. Please try again.';
                contactForm.insertAdjacentElement('beforebegin', errorAlert);
            })
            .finally(() => {
                // Hide loading state
                formOverlay.style.display = 'none';
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
            });
        });
    }
});