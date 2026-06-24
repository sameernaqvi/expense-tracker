<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign In — Spendly</title>
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

	/* Left panel */
	.auth-panel {
		width: 440px;
		min-height: 100vh;
		background: var(--white);
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 3rem 3rem;
		position: relative;
		z-index: 2;
		box-shadow: 4px 0 32px rgba(30, 42, 58, 0.08);
	}

	.brand {
		display: flex;
		align-items: center;
		gap: 10px;
		margin-bottom: 3rem;
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
		font-size: 1.75rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -0.5px;
		margin-bottom: .4rem;
	}

	.auth-sub {
		color: var(--slate-400);
		font-size: 0.9rem;
		margin-bottom: 2rem;
	}

	.form-label {
		font-size: 0.8rem;
		font-weight: 600;
		color: var(--navy);
		letter-spacing: 0.4px;
		text-transform: uppercase;
		margin-bottom: 6px;
	}

	.form-control {
		border: 1.5px solid var(--slate-200);
		border-radius: 8px;
		padding: .7rem 1rem;
		font-family: var(--font-body);
		font-size: 0.925rem;
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

	.btn-primary-auth {
		background: var(--navy);
		border: none;
		border-radius: 8px;
		color: #fff;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: 0.95rem;
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

	.btn-primary-auth:active {
		transform: translateY(0);
	}

	.divider {
		display: flex;
		align-items: center;
		gap: .75rem;
		margin: 1.5rem 0;
		color: var(--slate-400);
		font-size: .8rem;
	}

	.divider::before,
	.divider::after {
		content: '';
		flex: 1;
		height: 1px;
		background: var(--slate-200);
	}

	.auth-footer {
		margin-top: 2rem;
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

	.remember-row {
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: 1.5rem;
	}

	.form-check-input:checked {
		background-color: var(--navy);
		border-color: var(--navy);
	}

	.forgot-link {
		font-size: .85rem;
		color: var(--amber);
		text-decoration: none;
		font-weight: 500;
	}

	.forgot-link:hover {
		color: var(--navy);
	}

	/* Right decorative panel */
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
		background: radial-gradient(circle, rgba(232, 168, 62, .15) 0%, transparent 70%);
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.visual-grid {
		position: absolute;
		inset: 0;
		background-image: linear-gradient(rgba(255, 255, 255, .03) 1px, transparent 1px),
			linear-gradient(90deg, rgba(255, 255, 255, .03) 1px, transparent 1px);
		background-size: 40px 40px;
	}

	.visual-content {
		position: relative;
		z-index: 2;
		text-align: center;
		padding: 2rem;
	}

	.visual-badge {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		background: rgba(232, 168, 62, .15);
		border: 1px solid rgba(232, 168, 62, .3);
		border-radius: 20px;
		padding: .4rem 1rem;
		color: var(--amber-light);
		font-size: .8rem;
		font-weight: 600;
		letter-spacing: .3px;
		margin-bottom: 2rem;
	}

	.visual-quote {
		color: rgba(255, 255, 255, .9);
		font-family: var(--font-display);
		font-size: 1.5rem;
		font-weight: 700;
		line-height: 1.4;
		letter-spacing: -.3px;
		margin-bottom: 1.5rem;
	}

	.visual-quote span {
		color: var(--amber-light);
	}

	.stat-cards {
		display: flex;
		gap: 1rem;
		justify-content: center;
		flex-wrap: wrap;
		margin-top: 2.5rem;
	}

	.stat-card {
		background: rgba(255, 255, 255, .06);
		border: 1px solid rgba(255, 255, 255, .1);
		border-radius: 12px;
		padding: 1rem 1.5rem;
		text-align: left;
		min-width: 140px;
	}

	.stat-card .label {
		color: rgba(255, 255, 255, .45);
		font-size: .75rem;
		letter-spacing: .4px;
		text-transform: uppercase;
		margin-bottom: .3rem;
	}

	.stat-card .value {
		color: #fff;
		font-family: var(--font-display);
		font-size: 1.4rem;
		font-weight: 800;
		letter-spacing: -.5px;
	}

	.stat-card .value.amber {
		color: var(--amber-light);
	}

	.stat-card .delta {
		font-size: .75rem;
		color: #4CAF7D;
		margin-top: .2rem;
	}

	.alert-error {
		background: #FDEAEA;
		border: 1.5px solid #f5c0c0;
		border-radius: 8px;
		color: #b94040;
		padding: .75rem 1rem;
		font-size: .875rem;
		display: flex;
		align-items: center;
		gap: 8px;
		margin-bottom: 1.25rem;
	}

	@media (max-width: 768px) {
		.visual-panel {
			display: none;
		}

		.auth-panel {
			width: 100%;
		}
	}
	</style>
</head>

<body>
	<!-- Auth Panel -->
	<div class="auth-panel">
		<div class="brand">
			<div class="brand-icon"><i class="bi bi-receipt-cutoff"></i></div>
			<span class="brand-name">Spendly</span>
		</div>

		<h1 class="auth-heading">Welcome back</h1>
		<p class="auth-sub">Sign in to track your spending and stay on top of your budget.</p>

		<!-- Error state (hidden by default, shown on failure) -->
		<!-- <div class="alert-error"><i class="bi bi-exclamation-circle-fill"></i> These credentials don't match our records.</div> -->

		<form action="{{ route('login') }}" method="POST">
			<!-- CSRF token for Laravel -->
			@csrf

			<div class="mb-3">
				<label class="form-label" for="email">Email address</label>
				<div class="input-icon-wrap">
					<i class="bi bi-envelope"></i>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
						value="{{ old('email') }}" placeholder="you@example.com" required autofocus autocomplete="email" />
					@error('email')
					<div class="invalid-feedback d-block">{{ $message }}</div>
					@enderror
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label" for="password">Password</label>
				<div class="input-icon-wrap">
					<i class="bi bi-lock"></i>
					<input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required
						autocomplete="current-password" />
					@error('password')
					<div class="invalid-feedback d-block">{{ $message }}</div>
					@enderror
					<button type="button" class="password-toggle" onclick="togglePassword()">
						<i class="bi bi-eye" id="eye-icon"></i>
					</button>
				</div>
			</div>

			<div class="remember-row">
				<div class="form-check mb-0">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" />
					<label class="form-check-label" for="remember" style="font-size:.875rem; color:#4A5568;">Remember me</label>
				</div>
				<a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>
			</div>

			<button type="submit" class="btn-primary-auth">
				<i class="bi bi-arrow-right-circle me-2"></i>Sign in
			</button>
		</form>

		<div class="auth-footer">
			Don't have an account? <a href="{{ route('register') }}">Create one — it's free</a>
		</div>
	</div>

	<!-- Visual Panel -->
	<div class="visual-panel">
		<div class="visual-grid"></div>
		<div class="visual-content">
			<div class="visual-badge">
				<i class="bi bi-shield-check"></i> Personal & Secure
			</div>
			<div class="visual-quote">
				Know where every<br>pound goes — <span>before it's gone.</span>
			</div>
			<p style="color:rgba(255,255,255,.45); font-size:.875rem; max-width:320px; margin:0 auto;">
				Spendly gives you a clear, honest picture of your spending — by category, by month, by habit.
			</p>

			<div class="stat-cards">
				<div class="stat-card">
					<div class="label">This month</div>
					<div class="value amber">£1,248</div>
					<div class="delta"><i class="bi bi-arrow-down-short"></i> 12% vs last month</div>
				</div>
				<div class="stat-card">
					<div class="label">Categories</div>
					<div class="value">8</div>
					<div class="delta" style="color:rgba(255,255,255,.4);">active</div>
				</div>
				<div class="stat-card">
					<div class="label">Expenses logged</div>
					<div class="value">47</div>
					<div class="delta" style="color:rgba(255,255,255,.4);">this month</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	function togglePassword() {
		const pwd = document.getElementById('password');
		const icon = document.getElementById('eye-icon');
		if (pwd.type === 'password') {
			pwd.type = 'text';
			icon.className = 'bi bi-eye-slash';
		} else {
			pwd.type = 'password';
			icon.className = 'bi bi-eye';
		}
	}
	</script>
</body>

</html>