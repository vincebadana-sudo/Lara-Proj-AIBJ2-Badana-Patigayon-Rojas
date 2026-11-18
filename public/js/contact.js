document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successAlert = document.getElementById('successAlert');

    const inputs = {
        name: {
            el: document.getElementById('name'),
            err: document.getElementById('nameErr'),
            check: (val) => val.trim() === '' ? 'Please enter your name.' : ''
        },
        email: {
            el: document.getElementById('email'),
            err: document.getElementById('emailErr'),
            check: (val) => {
                if (val.trim() === '') return 'Please enter your email address.';
                const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return pattern.test(val.trim()) ? '' : 'Please enter a valid email address.';
            }
        },
        subject: {
            el: document.getElementById('subject'),
            err: document.getElementById('subjectErr'),
            check: (val) => val.trim() === '' ? 'Please enter a subject.' : ''
        },
        message: {
            el: document.getElementById('message'),
            err: document.getElementById('messageErr'),
            check: (val) => val.trim() === '' ? 'Please enter your message.' : ''
        }
    };

    Object.values(inputs).forEach(({ el, err, check }) => {
        el.addEventListener('input', () => {
            const msg = check(el.value);
            err.textContent = msg;
            el.classList.toggle('invalid', msg !== '');
        });
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        successAlert.style.display = 'none';
        let valid = true;

        Object.values(inputs).forEach(({ el, err, check }) => {
            const msg = check(el.value);
            err.textContent = msg;

            if (msg !== '') {
                el.classList.add('invalid');
                valid = false;
            } else {
                el.classList.remove('invalid');
            }
        });

        if (valid) {
            successAlert.style.display = 'block';
            form.reset();
        }
    });
});
