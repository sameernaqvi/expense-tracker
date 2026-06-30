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
		width: 440px;
		min-height: 100vh;
		background: #fff;
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 3rem;
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
		font-family: var(--font-display);
		font-size: 1.4rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -0.5px;
	}

	/* Step indicator */
	.steps {
		display: flex;
		align-items: center;
		justify-content: flex-start;
		gap: 0;
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
		transition: all .2s;
	}

	.step-circle.done {
		background: var(--sage);
		color: #fff;
	}

	.step-circle.active {
		background: var(--navy);
		color: #fff;
	}

	.step-circle.pending {
		background: var(--slate-100);
		color: var(--slate-400);
	}

	.step-label {
		font-size: .68rem;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: .4px;
	}

	.step-label.active {
		color: var(--navy);
	}

	.step-label.done {
		color: var(--sage);
	}

	.step-label.pending {
		color: var(--slate-400);
	}

	.step-connector {
		width: 48px;
		height: 2px;
		background: var(--slate-200);
		margin-bottom: 20px;
	}

	.step-connector.done {
		background: var(--sage);
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

	.form-control {
		border: 1.5px solid var(--slate-200);
		border-radius: 8px;
		padding: .7rem 1rem;
		font-family: var(--font-body);
		font-size: .925rem;
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

	.input-icon-wrap {
		position: relative;
	}

	.input-icon-wrap>.bi {
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
		transition: background .15s;
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
	}

	.back-link {
		display: flex;
		align-items: center;
		gap: 5px;
		margin-top: 2rem;
		font-size: .875rem;
		color: var(--amber);
		font-weight: 600;
		text-decoration: none;
		transition: color .12s;
	}

	.back-link:hover {
		color: var(--navy);
	}

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

	.visual-title {
		color: rgba(255,255,255,.9);
		font-family: var(--font-display);
		font-size: 1.4rem;
		font-weight: 800;
		letter-spacing: -.3px;
		margin-bottom: .5rem;
		text-align: center;
	}

	.visual-title span {
		color: var(--amber-light);
	}

	/* Success state */
	.success-state {
		text-align: center;
		padding: .5rem 0;
	}

	.success-icon {
		width: 72px;
		height: 72px;
		background: var(--sage-pale);
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 2rem;
		color: var(--sage);
		margin: 0 auto 1.25rem;
	}

	.success-title {
		font-family: var(--font-display);
		font-size: 1.3rem;
		font-weight: 800;
		color: var(--navy);
		margin-bottom: .5rem;
		letter-spacing: -.3px;
	}

	.success-sub {
		color: var(--slate-400);
		font-size: .875rem;
		line-height: 1.6;
		max-width: 300px;
		margin: 0 auto 1.5rem;
	}

	.email-highlight {
		display: inline-block;
		background: var(--amber-pale);
		border: 1px solid rgba(232, 168, 62, .3);
		border-radius: 6px;
		padding: .2rem .6rem;
		font-weight: 700;
		color: #9a6a10;
		font-size: .875rem;
	}

	.resend-link {
		font-size: .82rem;
		color: var(--slate-400);
		margin-top: .75rem;
		text-align: center;
	}

	.resend-link a {
		color: var(--amber);
		font-weight: 600;
		text-decoration: none;
	}

	.resend-link a:hover {
		color: var(--navy);
	}

	/* Show either form or success */
	.view-form .success-view {
		display: none;
	}

	.view-success .form-view {
		display: none;
	}

	@media (max-width: 768px) {
		.visual-panel {
			display: none;
		}

		.auth-panel {
			width: 100%;
			padding: 2rem;
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

		<!-- Steps -->
		<div class="steps">
			<div class="step">
				<div class="step-circle active">1</div>
				<div class="step-label active">Email</div>
			</div>
			<div class="step-connector"></div>
			<div class="step">
				<div class="step-circle pending">2</div>
				<div class="step-label pending">Link sent</div>
			</div>
			<div class="step-connector"></div>
			<div class="step">
				<div class="step-circle pending">3</div>
				<div class="step-label pending">New password</div>
			</div>
		</div>

		<div class="view-form" id="main-card">

			<!-- FORM VIEW -->
			<div class="form-view">
				<h1 class="auth-heading">Forgot your password?</h1>
				<p class="auth-sub">Enter the email address on your account and we'll send you a secure reset link.</p>
				@if (session('status'))
				<div class="alert alert-success mb-4">
					{{ session('status') }}
				</div>
				@endif
				<form action="{{ route('password.email') }}" method="POST">
					@csrf
					<div class="mb-4">
						<label class="form-label" for="email">Email address</label>
						<div class="input-icon-wrap">
							<i class="bi bi-envelope"></i>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
								value="{{ old('email') }}" placeholder="you@example.com" required autocomplete="email" />
						</div>
						@error('email')
						<div class="invalid-feedback d-block">{{ $message }}</div>
						@enderror
					</div>

					<button type="submit" class="btn-primary-auth">
						<i class="bi bi-send me-2"></i>Send reset link
					</button>
				</form>
			</div>

			<!-- SUCCESS VIEW (shown after submit) -->
			<div class="success-view" style="display:none;">
				<div class="success-state">
					<div class="success-icon"><i class="bi bi-envelope-check-fill"></i></div>
					<div class="success-title">Check your inbox</div>
					<p class="success-sub">
						We've sent a password reset link to<br>
						<span class="email-highlight" id="sent-email">you@example.com</span>
					</p>
					<p style="font-size:.82rem;color:var(--slate-400);line-height:1.6;">
						The link expires in <strong>60 minutes</strong>. If you don't see the email, check your spam folder.
					</p>
					<div class="resend-link">
						Didn't receive it? <a href="#" onclick="resend()">Resend email</a>
					</div>
				</div>
			</div>

		</div>

		<a href="{{ route('login') }}" class="back-link"><i class="bi bi-arrow-left"></i> Back to sign in</a>
	</div>

	<div class="visual-panel">
		<div class="visual-grid"></div>
		<div class="visual-content">
			<div class="visual-title">
				Three steps to<br><span>financial clarity</span>
			</div>
			<p style="color:rgba(255,255,255,.45); font-size:.875rem; max-width:320px; margin:0 auto;">
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
	function showSuccess(e) {
		e.preventDefault();
		const email = document.getElementById('email').value;
		document.getElementById('sent-email').textContent = email;

		const card = document.getElementById('main-card');
		card.querySelector('.form-view').style.display = 'none';
		card.querySelector('.success-view').style.display = 'block';

		// Update step indicators
		const circles = document.querySelectorAll('.step-circle');
		const labels = document.querySelectorAll('.step-label');
		const connectors = document.querySelectorAll('.step-connector');

		circles[0].className = 'step-circle done';
		circles[0].innerHTML = '<i class="bi bi-check"></i>';
		labels[0].className = 'step-label done';
		connectors[0].className = 'step-connector done';
		circles[1].className = 'step-circle active';
		labels[1].className = 'step-label active';
	}

	function resend() {
		alert('Reset email resent! Check your inbox again.');
	}
	</script>
</body>

</html>
