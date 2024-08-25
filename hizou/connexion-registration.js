document.addEventListener('DOMContentLoaded', function() {
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    const signupForm = document.getElementById('signupForm');
    const signinForm = document.getElementById('signinForm');
    const signupPasswordToggle = document.getElementById('signupPasswordToggle');
    const signinPasswordToggle = document.getElementById('signinPasswordToggle');
    const signupPassword = document.getElementById('signupPassword');
    const signinPassword = document.getElementById('signinPassword');
    const passwordStrengthBar = document.getElementById('passwordStrengthBar');
    const forgotPassword = document.getElementById('forgotPassword');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });

    function togglePasswordVisibility(passwordInput, toggleIcon) {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    signupPasswordToggle.addEventListener('click', () => togglePasswordVisibility(signupPassword, signupPasswordToggle));
    signinPasswordToggle.addEventListener('click', () => togglePasswordVisibility(signinPassword, signinPasswordToggle));

    function checkPasswordStrength(password) {
        let strength = 0;
        if (password.length >= 8) strength++;
        if (password.match(/[a-z]+/)) strength++;
        if (password.match(/[A-Z]+/)) strength++;
        if (password.match(/[0-9]+/)) strength++;
        if (password.match(/[$@#&!]+/)) strength++;

        switch (strength) {
            case 0:
            case 1:
                return { width: '20%', color: '#ff4d4d' };
            case 2:
                return { width: '40%', color: '#ffa64d' };
            case 3:
                return { width: '60%', color: '#ffff4d' };
            case 4:
                return { width: '80%', color: '#4dff4d' };
            case 5:
                return { width: '100%', color: '#00cc00' };
        }
    }

    signupPassword.addEventListener('input', function() {
        const strength = checkPasswordStrength(this.value);
        passwordStrengthBar.style.width = strength.width;
        passwordStrengthBar.style.backgroundColor = strength.color;
    });

    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('signupName').value;
        const email = document.getElementById('signupEmail').value;
        const password = signupPassword.value;

        // Simuler une inscription
        setTimeout(() => {
            const signupMessage = document.getElementById('signupMessage');
            signupMessage.textContent = `Inscription réussie pour ${name} (${email})`;
            signupMessage.className = 'success-message';
            signupForm.reset();
        }, 1000);
    });

    signinForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('signinEmail').value;
        const password = signinPassword.value;

        // Simuler une connexion
        setTimeout(() => {
            const signinMessage = document.getElementById('signinMessage');
            signinMessage.textContent = `Connexion réussie pour ${email}`;
            signinMessage.className = 'success-message';
            signinForm.reset();
        }, 1000);
    });

    forgotPassword.addEventListener('click', function(e) {
        e.preventDefault();
        const email = prompt("Entrez votre adresse e-mail pour réinitialiser votre mot de passe:");
        if (email) {
            // Simuler l'envoi d'un e-mail de réinitialisation
            setTimeout(() => {
                alert(`Un e-mail de réinitialisation a été envoyé à ${email}`);
            }, 1000);
        }
    });
});