/**
 * DigiFintech Contact Form Handler
 */
document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;

    const formAlert = document.getElementById('formAlert');
    const formSuccess = document.getElementById('formSuccess');
    const btnSubmit = contactForm.querySelector('.btn-submit');
    const csrfInput = document.getElementById('csrf_token');

    // Basic email validation regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let csrfFetched = false;

    // Fetch CSRF token when user first interacts with the form
    const fetchCsrfToken = async () => {
        if (csrfFetched) return;
        try {
            const response = await fetch('api/csrf.php');
            const data = await response.json();
            if (data.csrf_token && csrfInput) {
                csrfInput.value = data.csrf_token;
                csrfFetched = true;
            }
        } catch (error) {
            console.error('Failed to initialize form security.');
        }
    };

    contactForm.addEventListener('focusin', fetchCsrfToken, { once: true });
    contactForm.addEventListener('mouseenter', fetchCsrfToken, { once: true });

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Reset previous validation state
        resetValidation();

        // Validate
        let isValid = true;
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData.entries());

        if (!data.name || data.name.trim() === '') {
            showError('name', 'Name is required');
            isValid = false;
        }

        if (!data.email || !emailRegex.test(data.email.trim())) {
            showError('email', 'Please enter a valid email address');
            isValid = false;
        }

        if (!data.message || data.message.trim() === '') {
            showError('message', 'Message is required');
            isValid = false;
        }

        // If simple client validation fails, stop
        if (!isValid) return;

        // Prepare for submission
        setLoading(true);

        // Fallback fetch if interaction events didn't trigger it
        if (!csrfFetched) {
            await fetchCsrfToken();
            if (csrfInput && csrfInput.value) {
                formData.set('csrf_token', csrfInput.value);
            }
        }

        try {
            const response = await fetch('api/enquiry.php', {
                method: 'POST',
                body: formData
            });

            // Ensure response is JSON
            const result = await response.json().catch(() => {
                throw new Error('Invalid server response');
            });

            if (result.status === 'success') {
                showSuccess();
            } else {
                showGlobalError(result.message || 'An error occurred. Please try again later.');
                // In case of CSRF failure, refresh token for next try
                if (response.status === 403) {
                    csrfFetched = false;
                    fetchCsrfToken();
                }
            }
        } catch (error) {
            console.error('Submission error:', error);
            showGlobalError('Service unavailable. Please try again later.');
        } finally {
            setLoading(false);
        }
    });

    function showError(fieldId, message) {
        const input = document.getElementById(fieldId);
        if (input) {
            input.classList.add('is-invalid');
            const feedback = input.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = message;
            }
            input.setAttribute('aria-invalid', 'true');
            // Ensure aria-describedby is pointing to the error container
            const errorId = fieldId + 'Error';
            input.setAttribute('aria-describedby', errorId);
        }
    }

    function resetValidation() {
        const inputs = contactForm.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
            input.removeAttribute('aria-invalid');
            // We don't necessarily need to remove aria-describedby, just empty the text
            const errorId = input.getAttribute('id') + 'Error';
            const feedback = document.getElementById(errorId);
            if (feedback) feedback.textContent = '';
        });
        
        if (formAlert) {
            formAlert.classList.remove('is-active');
        }
    }

    function showGlobalError(message) {
        if (formAlert) {
            const textNode = formAlert.querySelector('.form-alert-text');
            if (textNode) textNode.textContent = message;
            formAlert.classList.add('is-active');
            // Shift focus for accessibility
            formAlert.focus();
        }
    }

    function showSuccess() {
        contactForm.style.display = 'none';
        if (formAlert) formAlert.style.display = 'none';
        
        if (formSuccess) {
            formSuccess.classList.add('is-active');
            // Shift focus to success message for screen readers
            formSuccess.setAttribute('tabindex', '-1');
            formSuccess.focus();
        }
    }

    function setLoading(isLoading) {
        if (isLoading) {
            btnSubmit.classList.add('is-loading');
            btnSubmit.setAttribute('disabled', 'true');
            btnSubmit.setAttribute('aria-disabled', 'true');
        } else {
            btnSubmit.classList.remove('is-loading');
            btnSubmit.removeAttribute('disabled');
            btnSubmit.removeAttribute('aria-disabled');
        }
    }

    // Clear validation error on input
    contactForm.addEventListener('input', (e) => {
        if (e.target.classList.contains('form-control')) {
            e.target.classList.remove('is-invalid');
            e.target.removeAttribute('aria-invalid');
            const errorId = e.target.getAttribute('id') + 'Error';
            const feedback = document.getElementById(errorId);
            if (feedback) feedback.textContent = '';
        }
    });
});
