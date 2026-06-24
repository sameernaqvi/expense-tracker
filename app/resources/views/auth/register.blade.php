<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Create Account — Spendly</title>
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
	}

	.auth-panel {
		width: 480px;
		min-height: 100vh;
		background: #fff;
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 2.5rem 3rem;
		position: relative;
		z-index: 2;
		box-shadow: 4px 0 32px rgba(30, 42, 58, 0.08);
	}

	.brand {
		display: flex;
		align-items: center;
		gap: 10px;
		margin-bottom: 2.5rem;
		font-family: var(--font-display);
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
		font-size: 1.4rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -0.5px;
	}

	.auth-heading {
		font-family: var(--font-display);
		font-size: 1.65rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -.5px;
		margin-bottom: .35rem;
	}

	.auth-sub {
		color: var(--slate-400);
		font-size: .9rem;
		margin-bottom: 1.75rem;
	}

	.form-label {
		font-size: .78rem;
		font-weight: 600;
		color: var(--navy);
		letter-spacing: .4px;
		text-transform: uppercase;
		margin-bottom: 6px;
	}

	.form-control {
		border: 1.5px solid var(--slate-200);
		border-radius: 8px;
		padding: .7rem 1rem;
		font-family: var(--font-body);
		font-size: .925rem;
		color: var(--navy);
		background: var(--slate-50);
		transition: border-color .15s, box-shadow .15s;
	}

	.form-control:focus {
		border-color: var(--amber);
		box-shadow: 0 0 0 3px rgba(232, 168, 62, .15);
		background: #fff;
		outline: none;
	}

	.form-control.is-invalid {
		border-color: #E05252;
	}

	.invalid-feedback {
		font-size: .8rem;
		color: #E05252;
		margin-top: .3rem;
	}

	.input-icon-wrap {
		position: relative;
	}

	.input-icon-wrap .bi {
		position: absolute;
		left: 12px;
		top: 50%;
		transform: translateY(-50%);
		color: var(--slate-400);
		font-size: 1rem;
		pointer-events: none;
	}

	.input-icon-wrap .form-control {
		padding-left: 2.4rem;
	}

	.password-toggle {
		position: absolute;
		right: 12px;
		top: 50%;
		transform: translateY(-50%);
		background: none;
		border: none;
		color: var(--slate-400);
		cursor: pointer;
		font-size: 1rem;
	}

	.form-row {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: 1rem;
	}

	.strength-bar {
		height: 4px;
		border-radius: 4px;
		background: var(--slate-200);
		margin-top: .4rem;
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

	.btn-primary-auth {
		background: var(--navy);
		border: none;
		border-radius: 8px;
		color: #fff;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: .95rem;
		padding: .8rem 1.5rem;
		width: 100%;
		cursor: pointer;
		transition: background .15s, transform .1s;
		position: relative;
		overflow: hidden;
	}

	.btn-primary-auth::after {
		content: '';
		position: absolute;
		inset: 0;
		background: linear-gradient(135deg, rgba(232, 168, 62, .2) 0%, transparent 60%);
	}

	.btn-primary-auth:hover {
		background: var(--navy-mid);
		transform: translateY(-1px);
	}

	.terms-check {
		font-size: .82rem;
		color: var(--slate-600);
	}

	.terms-check a {
		color: var(--amber);
		font-weight: 600;
		text-decoration: none;
	}

	.form-check-input:checked {
		background-color: var(--navy);
		border-color: var(--navy);
	}

	.auth-footer {
		margin-top: 1.75rem;
		text-align: center;
		font-size: .875rem;
		color: var(--slate-400);
	}

	.auth-footer a {
		color: var(--navy);
		font-weight: 600;
		text-decoration: none;
	}

	.auth-footer a:hover {
		color: var(--amber);
	}

	/* Visual panel */
	.visual-panel {
		flex: 1;
		background: var(--navy);
		position: relative;
		overflow: hidden;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.visual-panel::before {
		content: '';
		position: absolute;
		width: 600px;
		height: 600px;
		background: radial-gradient(circle, rgba(76, 175, 125, .12) 0%, transparent 70%);
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.visual-grid {
		position: absolute;
		inset: 0;
		background-image: linear-gradient(rgba(255, 255, 255, .03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .03) 1px, transparent 1px);
		background-size: 40px 40px;
	}

	.visual-content {
		position: relative;
		z-index: 2;
		text-align: center;
		padding: 2rem;
	}

	.step-list {
		list-style: none;
		text-align: left;
		margin: 2rem auto 0;
		max-width: 300px;
	}

	.step-list li {
		display: flex;
		align-items: flex-start;
		gap: 14px;
		margin-bottom: 1.25rem;
	}

	.step-num {
		width: 28px;
		height: 28px;
		border-radius: 50%;
		background: rgba(232, 168, 62, .2);
		border: 1.5px solid rgba(232, 168, 62, .4);
		color: var(--amber-light);
		font-size: .75rem;
		font-weight: 700;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-shrink: 0;
	}

	.step-text {
		color: rgba(255, 255, 255, .7);
		font-size: .875rem;
		line-height: 1.5;
	}

	.step-text strong {
		color: rgba(255, 255, 255, .95);
		font-weight: 600;
		display: block;
		margin-bottom: 2px;
	}

	@media (max-width: 768px) {
		.visual-panel {
			display: none;
		}

		.auth-panel {
			width: 100%;
		}

		.form-row {
			grid-template-columns: 1fr;
		}
	}
	</style>
</head>

<body>
	<div class="auth-panel">
		<div class="brand">
			<div class="brand-icon"><i class="bi bi-receipt-cutoff"></i></div>
			<span class="brand-name">Spendly</span>
		</div>

		<h1 class="auth-heading">Create your account</h1>
		<p class="auth-sub">Start tracking your expenses in under a minute.</p>

		<form action="{{ route('register') }}" method="POST" novalidate>
			@csrf

			<div class="mb-3">
				<label class="form-label" for="name">Full name</label>
				<div class="input-icon-wrap">
					<i class="bi bi-person"></i>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
						value="{{ old('name') }}" placeholder="Jane Smith" required autocomplete="name" />
					@error('name')
					<div class="invalid-feedback d-block">{{ $message }}</div>
					@enderror
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">Email address</label>
				<div class="input-icon-wrap">
					<i class="bi bi-envelope"></i>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
						placeholder="you@example.com" required autocomplete="email" />
					@error('email')
					<div class="invalid-feedback d-block">{{ $message }}</div>
					@enderror
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label" for="password">Password</label>
				<div class="input-icon-wrap">
					<i class="bi bi-lock"></i>
					<input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
						name="password" placeholder="Min. 8 characters" required oninput="checkStrength(this.value)" />
					@error('password')
					<div class="invalid-feedback d-block">{{ $message }}</div>
					@enderror
					<button type="button" class="password-toggle" onclick="togglePwd('password','eye1')"><i class="bi bi-eye"
							id="eye1"></i></button>
				</div>
				<div class="strength-bar">
					<div class="strength-fill" id="strength-fill"></div>
				</div>
				<div class="strength-label" id="strength-label">Enter a password</div>
			</div>

			<div class="mb-3">
				<label class="form-label" for="password_confirmation">Confirm password</label>
				<div class="input-icon-wrap">
					<i class="bi bi-lock-fill"></i>
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
						placeholder="Repeat password" required />
					<button type="button" class="password-toggle" onclick="togglePwd('password_confirmation','eye2')"><i
							class="bi bi-eye" id="eye2"></i></button>
				</div>
			</div>

			<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox" id="terms" name="terms" required />
				<label class="form-check-label terms-check" for="terms">
					I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
				</label>
			</div>

			<button type="submit" class="btn-primary-auth">
				<i class="bi bi-person-plus me-2"></i>Create account
			</button>
		</form>

		<div class="auth-footer">
			Already have an account? <a href="{{ route('login') }}">Sign in</a>
		</div>
	</div>

	<div class="visual-panel">
		<div class="visual-grid"></div>
		<div class="visual-content">
			<div
				style="color:rgba(255,255,255,.9); font-family:'Plus Jakarta Sans',sans-serif; font-size:1.4rem; font-weight:800; letter-spacing:-.3px; margin-bottom:.5rem;">
				Three steps to<br><span style="color:#F5C96A;">financial clarity</span>
			</div>
			<p style="color:rgba(255,255,255,.4); font-size:.875rem; max-width:280px; margin:0 auto;">
				Spendly makes it effortless to understand your spending patterns.
			</p>

			<ul class="step-list">
				<li>
					<div class="step-num">1</div>
					<div class="step-text"><strong>Create your categories</strong>Start with Groceries, Transport, and
						Entertainment — or build your own set.</div>
				</li>
				<li>
					<div class="step-num">2</div>
					<div class="step-text"><strong>Log your expenses</strong>Add what you spend, when you spend it, with optional
						notes for context.</div>
				</li>
				<li>
					<div class="step-num">3</div>
					<div class="step-text"><strong>Review monthly reports</strong>See totals by category, spot trends, and adjust
						where it matters.</div>
				</li>
			</ul>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	function togglePwd(id, iconId) {
		const f = document.getElementById(id),
			i = document.getElementById(iconId);
		f.type = f.type === 'password' ? 'text' : 'password';
		i.className = f.type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
	}

	function checkStrength(val) {
		const fill = document.getElementById('strength-fill');
		const label = document.getElementById('strength-label');
		let score = 0;
		if (val.length >= 8) score++;
		if (/[A-Z]/.test(val)) score++;
		if (/[0-9]/.test(val)) score++;
		if (/[^A-Za-z0-9]/.test(val)) score++;
		const map = ['', 'Weak', 'Fair', 'Good', 'Strong'];
		const colors = ['', '#E05252', '#E8A83E', '#4CAF7D', '#2E7D52'];
		const widths = ['0%', '25%', '50%', '75%', '100%'];
		fill.style.width = widths[score];
		fill.style.background = colors[score];
		label.textContent = score === 0 ? 'Enter a password' : map[score] + ' password';
		label.style.color = score === 0 ? '#8A99AD' : colors[score];
	}
	</script>
</body>

</html>