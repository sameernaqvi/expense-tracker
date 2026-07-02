<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password — Spendly</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <style>
        :root {
            --navy: #1E2A3A;
            --navy-mid: #2D3E52;
            --amber: #E8A83E;
            --amber-light: #F5C96A;
            --amber-pale: #FEF3DC;
            --sage: #4CAF7D;
            --sage-pale: #E8F5EE;
            --rose: #E05252;
            --rose-pale: #FDEAEA;
            --slate-50: #F8F9FB;
            --slate-100: #EEF1F5;
            --slate-200: #DDE3EC;
            --slate-400: #8A99AD;
            --slate-600: #4A5568;
            --font-display: 'Plus Jakarta Sans', sans-serif;
            --font-body: 'Inter', sans-serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-body);
            background: var(--slate-50);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .auth-wrap {
            width: 100%;
            max-width: 460px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-content: center;
            margin-bottom: 2.5rem;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: var(--navy);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon i {
            color: var(--amber);
            font-size: 18px;
        }

        .brand-name {
            font-family: var(--font-display);
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--navy);
            letter-spacing: -0.5px;
        }

        .steps {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .step-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .78rem;
            font-weight: 700;
        }

        .step-circle.done {
            background: var(--sage);
            color: #fff;
        }

        .step-circle.active {
            background: var(--navy);
            color: #fff;
        }

        .step-label {
            font-size: .68rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .step-label.done {
            color: var(--sage);
        }

        .step-label.active {
            color: var(--navy);
        }

        .step-connector {
            width: 48px;
            height: 2px;
            margin-bottom: 20px;
        }

        .step-connector.done {
            background: var(--sage);
        }

        .card-box {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(30, 42, 58, .10), 0 1px 4px rgba(30, 42, 58, .06);
            border: 1px solid var(--slate-100);
            padding: 2.5rem;
        }

        .token-banner {
            background: var(--amber-pale);
            border: 1.5px solid rgba(232, 168, 62, .35);
            border-radius: 10px;
            padding: .85rem 1.1rem;
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            margin-bottom: 1.75rem;
        }

        .token-banner i {
            color: var(--amber);
            font-size: 1.05rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .token-banner-text {
            font-size: .82rem;
            color: #9a6a10;
            line-height: 1.5;
        }

        .token-banner-text strong {
            color: #7a5208;
            display: block;
            margin-bottom: 2px;
        }

        .auth-heading {
            font-family: var(--font-display);
            font-size: 1.55rem;
            font-weight: 800;
            color: var(--navy);
            letter-spacing: -.4px;
            margin-bottom: .35rem;
            text-align: center;
        }

        .auth-sub {
            color: var(--slate-400);
            font-size: .875rem;
            margin-bottom: 2rem;
            text-align: center;
            line-height: 1.6;
        }

        .form-label {
            font-size: .78rem;
            font-weight: 600;
            color: var(--navy);
            letter-spacing: .4px;
            text-transform: uppercase;
            margin-bottom: 6px;
            display: block;
        }

        .required-star {
            color: var(--rose);
            margin-left: 2px;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap>.input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--slate-400);
            font-size: 1rem;
            pointer-events: none;
        }

        .form-control {
            border: 1.5px solid var(--slate-200);
            border-radius: 8px;
            padding: .72rem 1rem .72rem 2.4rem;
            font-family: var(--font-body);
            font-size: .92rem;
            color: var(--navy);
            background: var(--slate-50);
            width: 100%;
            transition: border-color .15s, box-shadow .15s;
        }

        .form-control:focus {
            border-color: var(--amber);
            box-shadow: 0 0 0 3px rgba(232, 168, 62, .15);
            background: #fff;
            outline: none;
        }

        .form-control.is-invalid {
            border-color: var(--rose);
            box-shadow: 0 0 0 3px rgba(224, 82, 82, .1);
        }

        .invalid-feedback {
            font-size: .8rem;
            color: var(--rose);
            margin-top: .3rem;
            display: block;
        }

        .valid-feedback {
            font-size: .8rem;
            color: var(--sage);
            margin-top: .3rem;
            display: block;
        }

        .form-hint {
            font-size: .78rem;
            color: var(--slate-400);
            margin-top: .3rem;
        }

        .pwd-toggle {
            position: absolute;
            right: 11px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--slate-400);
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
            transition: color .12s;
            padding: 0;
        }

        .pwd-toggle:hover {
            color: var(--navy);
        }

        .pwd-toggle i {
            pointer-events: none;
        }

        .strength-bar {
            height: 5px;
            border-radius: 4px;
            background: var(--slate-200);
            margin-top: .45rem;
            overflow: hidden;
        }

        .strength-fill {
            height: 100%;
            border-radius: 4px;
            transition: width .3s, background .3s;
            width: 0;
        }

        .strength-label {
            font-size: .75rem;
            color: var(--slate-400);
            margin-top: .3rem;
        }

        .pwd-rules {
            list-style: none;
            margin-top: .65rem;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .pwd-rules li {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: .78rem;
            color: var(--slate-400);
            transition: color .2s;
        }

        .pwd-rules li .rule-icon {
            font-size: .8rem;
            color: var(--slate-400);
            transition: color .2s;
        }

        .pwd-rules li.pass {
            color: var(--sage);
        }

        .pwd-rules li.pass .rule-icon {
            color: var(--sage);
        }

        .match-row {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: .35rem;
            font-size: .78rem;
        }

        .match-row.match {
            color: var(--sage);
        }

        .match-row.no-match {
            color: var(--rose);
        }

        .match-row.hidden {
            visibility: hidden;
        }

        .btn-reset {
            background: var(--navy);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-family: var(--font-display);
            font-weight: 700;
            font-size: .95rem;
            padding: .85rem 1.5rem;
            width: 100%;
            cursor: pointer;
            transition: background .15s, transform .1s;
            position: relative;
            overflow: hidden;
            margin-top: 1.5rem;
        }

        .btn-reset::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(232, 168, 62, .2) 0%, transparent 60%);
        }

        .btn-reset:hover {
            background: var(--navy-mid);
            transform: translateY(-1px);
        }

        .btn-reset:active {
            transform: translateY(0);
        }

        .btn-reset:disabled {
            opacity: .5;
            cursor: not-allowed;
            transform: none;
        }

        .section-divider {
            display: flex;
            align-items: center;
            gap: .6rem;
            margin: 1.5rem 0 1.25rem;
            color: var(--slate-400);
            font-size: .75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .section-divider::before,
        .section-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--slate-200);
        }

        .back-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 1.5rem;
            font-size: .875rem;
            color: var(--slate-400);
            text-decoration: none;
            transition: color .12s;
        }

        .back-link:hover {
            color: var(--navy);
        }

        .alert-error {
            background: var(--rose-pale);
            border: 1.5px solid rgba(224, 82, 82, .25);
            border-radius: 8px;
            color: #b94040;
            padding: .75rem 1rem;
            font-size: .875rem;
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 1.25rem;
        }

        .alert-error i {
            flex-shrink: 0;
            margin-top: 1px;
        }

        @media (max-width: 576px) {
            body {
                padding: 1.25rem;
            }

            .card-box {
                padding: 1.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="auth-wrap">
        <div class="brand">
            <div class="brand-icon"><i class="bi bi-receipt-cutoff"></i></div>
            <span class="brand-name">Spendly</span>
        </div>

        <div class="steps">
            <div class="step">
                <div class="step-circle done"><i class="bi bi-check"></i></div>
                <div class="step-label done">Email</div>
            </div>
            <div class="step-connector done"></div>
            <div class="step">
                <div class="step-circle done"><i class="bi bi-check"></i></div>
                <div class="step-label done">Link sent</div>
            </div>
            <div class="step-connector done"></div>
            <div class="step">
                <div class="step-circle active">3</div>
                <div class="step-label active">New password</div>
            </div>
        </div>

        <div class="card-box">
            <h1 class="auth-heading">Set a new password</h1>
            <p class="auth-sub">Confirm your email address and choose a strong new password to secure your account.</p>

            <div class="token-banner">
                <i class="bi bi-shield-lock-fill"></i>
                <div class="token-banner-text">
                    <strong>Secure reset link verified</strong>
                    This page was opened from your password reset email. Enter your account email and choose a new password to finish.
                </div>
            </div>

            @if ($errors->any())
            <div class="alert-error">
                <i class="bi bi-exclamation-circle-fill"></i>
                <div>{{ $errors->first() }}</div>
            </div>
            @endif

            <form method="POST" action="{{ route('password.store') }}" id="reset-form" novalidate>
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="section-divider">Your details</div>

                <div class="mb-4">
                    <label class="form-label" for="email">
                        Email address <span class="required-star">*</span>
                    </label>
                    <div class="input-wrap">
                        <i class="bi bi-envelope input-icon"></i>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email', $request->email) }}"
                            placeholder="you@example.com"
                            required
                            autofocus
                            autocomplete="username" />
                    </div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @else
                    <div class="form-hint">Must match the address that received the reset link.</div>
                    @enderror
                </div>

                <div class="section-divider">Choose a new password</div>

                <div class="mb-4">
                    <label class="form-label" for="password">
                        New password <span class="required-star">*</span>
                    </label>
                    <div class="input-wrap">
                        <i class="bi bi-lock input-icon"></i>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="Min. 8 characters"
                            required
                            autocomplete="new-password"
                            oninput="checkStrength(this.value); checkMatch(); validateForm();" />
                        <button type="button" class="pwd-toggle" onclick="togglePwd('password','eye-pwd')">
                            <i class="bi bi-eye" id="eye-pwd"></i>
                        </button>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="strength-bar"><div class="strength-fill" id="strength-fill"></div></div>
                    <div class="strength-label" id="strength-label">Enter a password to see its strength</div>

                    <ul class="pwd-rules">
                        <li id="rule-len"><i class="bi bi-circle rule-icon" id="icon-len"></i>At least 8 characters</li>
                        <li id="rule-upper"><i class="bi bi-circle rule-icon" id="icon-upper"></i>One uppercase letter (A-Z)</li>
                        <li id="rule-num"><i class="bi bi-circle rule-icon" id="icon-num"></i>One number (0-9)</li>
                        <li id="rule-special"><i class="bi bi-circle rule-icon" id="icon-special"></i>One special character (!@#$...)</li>
                    </ul>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="password_confirmation">
                        Confirm new password <span class="required-star">*</span>
                    </label>
                    <div class="input-wrap">
                        <i class="bi bi-lock-fill input-icon"></i>
                        <input
                            type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repeat your new password"
                            required
                            autocomplete="new-password"
                            oninput="checkMatch(); validateForm();" />
                        <button type="button" class="pwd-toggle" onclick="togglePwd('password_confirmation','eye-conf')">
                            <i class="bi bi-eye" id="eye-conf"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="match-row hidden" id="match-indicator">
                        <i class="bi bi-check-circle-fill"></i>
                        <span id="match-text">Passwords match</span>
                    </div>
                </div>

                <button type="submit" class="btn-reset" id="submit-btn" disabled>
                    <i class="bi bi-shield-check me-2"></i>Reset password
                </button>
            </form>
        </div>

        <a href="{{ route('login') }}" class="back-link">
            <i class="bi bi-arrow-left"></i> Back to sign in
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePwd(fieldId, iconId) {
            const field = document.getElementById(fieldId);
            const icon = document.getElementById(iconId);
            field.type = field.type === 'password' ? 'text' : 'password';
            icon.className = field.type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
        }

        function setRuleState(id, passed) {
            const item = document.getElementById(`rule-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            item.classList.toggle('pass', passed);
            icon.className = passed ? 'bi bi-check-circle-fill rule-icon' : 'bi bi-circle rule-icon';
        }

        function checkStrength(value) {
            const tests = {
                len: value.length >= 8,
                upper: /[A-Z]/.test(value),
                num: /[0-9]/.test(value),
                special: /[^A-Za-z0-9]/.test(value),
            };

            Object.entries(tests).forEach(([key, passed]) => setRuleState(key, passed));

            const score = Object.values(tests).filter(Boolean).length;
            const fill = document.getElementById('strength-fill');
            const label = document.getElementById('strength-label');
            const widths = ['0%', '25%', '50%', '75%', '100%'];
            const colors = ['#DDE3EC', '#E05252', '#E8A83E', '#4CAF7D', '#2E7D52'];
            const labels = [
                'Enter a password to see its strength',
                'Weak password',
                'Fair password',
                'Good password',
                'Strong password'
            ];

            fill.style.width = widths[score];
            fill.style.background = colors[score];
            label.textContent = labels[score];
            label.style.color = score === 0 ? '#8A99AD' : colors[score];
        }

        function checkMatch() {
            const password = document.getElementById('password').value;
            const confirmation = document.getElementById('password_confirmation').value;
            const indicator = document.getElementById('match-indicator');
            const text = document.getElementById('match-text');

            if (!confirmation) {
                indicator.className = 'match-row hidden';
                return false;
            }

            const matches = password === confirmation;
            indicator.className = `match-row ${matches ? 'match' : 'no-match'}`;
            indicator.querySelector('i').className = matches ? 'bi bi-check-circle-fill' : 'bi bi-x-circle-fill';
            text.textContent = matches ? 'Passwords match' : 'Passwords do not match';
            return matches;
        }

        function validateForm() {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const confirmation = document.getElementById('password_confirmation').value;
            const strongEnough = password.length >= 8;
            const matches = password && confirmation && password === confirmation;

            document.getElementById('submit-btn').disabled = !(email && strongEnough && matches);
        }

        document.getElementById('email').addEventListener('input', validateForm);
        checkStrength(document.getElementById('password').value);
        checkMatch();
        validateForm();
    </script>
</body>

</html>
