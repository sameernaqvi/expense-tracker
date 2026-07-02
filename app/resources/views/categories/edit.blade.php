<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Edit Category — Spendly</title>
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
		--shadow-card: 0 2px 8px rgba(30, 42, 58, .08), 0 1px 2px rgba(30, 42, 58, .04);
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
		color: var(--navy);
	}

	.app-shell {
		display: flex;
		flex-direction: column;
		min-height: 100vh;
	}

	.top-nav {
		height: 60px;
		background: var(--navy);
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0 1.5rem;
		position: sticky;
		top: 0;
		z-index: 100;
	}

	.nav-brand {
		display: flex;
		align-items: center;
		gap: 10px;
	}

	.brand-icon {
		width: 32px;
		height: 32px;
		background: rgba(232, 168, 62, .2);
		border-radius: 8px;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.brand-icon i {
		color: var(--amber-light);
		font-size: 15px;
	}

	.brand-name {
		font-family: var(--font-display);
		font-size: 1.2rem;
		font-weight: 800;
		color: #fff;
		letter-spacing: -.4px;
	}

	.nav-right {
		display: flex;
		align-items: center;
		gap: .75rem;
	}

	.nav-icon-btn {
		background: rgba(255, 255, 255, .08);
		border: none;
		border-radius: 8px;
		width: 36px;
		height: 36px;
		color: rgba(255, 255, 255, .7);
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.nav-avatar {
		width: 36px;
		height: 36px;
		border-radius: 50%;
		background: var(--amber);
		color: var(--navy);
		font-weight: 700;
		font-size: .8rem;
		display: flex;
		align-items: center;
		justify-content: center;
		cursor: pointer;
		font-family: var(--font-display);
	}

	.dropdown-menu {
		border: 1px solid var(--slate-200);
		box-shadow: 0 8px 24px rgba(30, 42, 58, .12);
		border-radius: 10px;
	}

	.app-body {
		display: flex;
		flex: 1;
	}

	.sidebar {
		width: 220px;
		background: #fff;
		border-right: 1px solid var(--slate-200);
		padding: 1.5rem 0;
		flex-shrink: 0;
	}

	.sidebar-section-label {
		font-size: .7rem;
		font-weight: 700;
		color: var(--slate-400);
		letter-spacing: .6px;
		text-transform: uppercase;
		padding: .5rem 1.25rem;
		margin-top: .5rem;
	}

	.nav-item {
		display: flex;
		align-items: center;
		gap: 10px;
		padding: .6rem 1.25rem;
		margin: 2px .75rem;
		border-radius: 8px;
		font-size: .875rem;
		font-weight: 500;
		color: var(--slate-600);
		text-decoration: none;
		transition: background .12s, color .12s;
	}

	.nav-item i {
		font-size: 1rem;
		width: 20px;
		text-align: center;
	}

	.nav-item:hover {
		background: var(--slate-100);
		color: var(--navy);
	}

	.nav-item.active {
		background: var(--amber-pale);
		color: var(--navy);
		font-weight: 600;
	}

	.nav-item.active i {
		color: var(--amber);
	}

	.main-content {
		flex: 1;
		padding: 2rem;
		overflow-y: auto;
	}

	.breadcrumb-nav {
		display: flex;
		align-items: center;
		gap: .5rem;
		font-size: .825rem;
		color: var(--slate-400);
		margin-bottom: 1.5rem;
	}

	.breadcrumb-nav a {
		color: var(--slate-400);
		text-decoration: none;
		font-weight: 500;
	}

	.breadcrumb-nav a:hover {
		color: var(--navy);
	}

	.breadcrumb-nav .sep {
		color: var(--slate-200);
	}

	.breadcrumb-nav .current {
		color: var(--navy);
		font-weight: 600;
	}

	.form-layout {
		display: grid;
		grid-template-columns: 1fr 320px;
		gap: 1.25rem;
		align-items: start;
		max-width: 900px;
	}

	.card-box {
		background: #fff;
		border-radius: 12px;
		box-shadow: var(--shadow-card);
		border: 1px solid var(--slate-100);
	}

	.card-head {
		padding: 1.1rem 1.5rem;
		border-bottom: 1px solid var(--slate-100);
	}

	.card-title {
		font-family: var(--font-display);
		font-size: .95rem;
		font-weight: 700;
		color: var(--navy);
	}

	.card-desc {
		font-size: .8rem;
		color: var(--slate-400);
		margin-top: .2rem;
	}

	.card-body-pad {
		padding: 1.5rem;
	}

	/* Banner */
	.edit-banner {
		background: linear-gradient(135deg, var(--amber-pale) 0%, #fff 100%);
		border: 1.5px solid rgba(232, 168, 62, .3);
		border-radius: 12px;
		padding: 1rem 1.5rem;
		display: flex;
		align-items: center;
		gap: 1rem;
		margin-bottom: 1.5rem;
		max-width: 900px;
	}

	.edit-banner-icon {
		width: 44px;
		height: 44px;
		background: var(--amber);
		border-radius: 10px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: var(--navy);
		font-size: 1.3rem;
		flex-shrink: 0;
	}

	.edit-banner-title {
		font-family: var(--font-display);
		font-size: 1.1rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -.3px;
	}

	.edit-banner-sub {
		font-size: .82rem;
		color: var(--slate-400);
		margin-top: .15rem;
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
	}

	.form-control {
		border: 1.5px solid var(--slate-200);
		border-radius: 8px;
		padding: .7rem 1rem;
		font-family: var(--font-body);
		font-size: .9rem;
		color: var(--navy);
		background: var(--slate-50);
		width: 100%;
		transition: border-color .15s, box-shadow .15s;
	}

	.form-control:focus {
		border-color: var(--amber);
		box-shadow: 0 0 0 3px rgba(232, 168, 62, .12);
		background: #fff;
		outline: none;
	}

	.form-control.is-invalid {
		border-color: var(--rose);
	}

	.invalid-feedback {
		font-size: .8rem;
		color: var(--rose);
		margin-top: .3rem;
		display: block;
	}

	.char-count {
		font-size: .75rem;
		color: var(--slate-400);
		text-align: right;
		margin-top: .25rem;
	}

	/* Preview */
	.preview-block {
		background: var(--slate-50);
		border: 1.5px dashed var(--slate-200);
		border-radius: 10px;
		padding: 1.1rem;
		text-align: center;
		margin-bottom: 1rem;
	}

	.preview-label {
		font-size: .72rem;
		color: var(--slate-400);
		text-transform: uppercase;
		letter-spacing: .4px;
		margin-bottom: .6rem;
	}

	.preview-cat {
		display: inline-flex;
		align-items: center;
		gap: 8px;
		background: var(--amber-pale);
		border: 1.5px solid rgba(232, 168, 62, .3);
		border-radius: 10px;
		padding: .65rem 1.1rem;
	}

	.preview-cat-icon {
		width: 32px;
		height: 32px;
		background: var(--amber);
		border-radius: 8px;
		display: flex;
		align-items: center;
		justify-content: center;
		color: var(--navy);
		font-size: 1rem;
	}

	.preview-cat-name {
		font-family: var(--font-display);
		font-size: 1rem;
		font-weight: 700;
		color: var(--navy);
	}

	/* Stats card */
	.stats-list {
		list-style: none;
	}

	.stats-list li {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: .65rem 0;
		border-bottom: 1px solid var(--slate-100);
		font-size: .875rem;
	}

	.stats-list li:last-child {
		border-bottom: none;
	}

	.stats-list .lbl {
		color: var(--slate-400);
	}

	.stats-list .val {
		font-weight: 700;
		color: var(--navy);
	}

	.stats-list .val.amber {
		color: var(--amber);
		font-family: var(--font-display);
	}

	/* Danger zone */
	.danger-zone {
		background: var(--rose-pale);
		border: 1.5px solid rgba(224, 82, 82, .2);
		border-radius: 10px;
		padding: 1rem 1.1rem;
	}

	.danger-zone-title {
		font-size: .82rem;
		font-weight: 700;
		color: var(--rose);
		margin-bottom: .4rem;
		display: flex;
		align-items: center;
		gap: 6px;
	}

	.danger-zone p {
		font-size: .78rem;
		color: #9b4040;
		margin-bottom: .75rem;
		line-height: 1.5;
	}

	.btn-danger-zone {
		background: var(--rose);
		color: #fff;
		border: none;
		border-radius: 8px;
		padding: .55rem 1.1rem;
		font-size: .82rem;
		font-weight: 700;
		font-family: var(--font-display);
		cursor: pointer;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		gap: 6px;
	}

	.btn-danger-zone:hover {
		background: #c94040;
	}

	.btn-danger-zone:disabled {
		opacity: .45;
		cursor: not-allowed;
	}

	.form-actions {
		display: flex;
		gap: .75rem;
		padding-top: 1.25rem;
		border-top: 1px solid var(--slate-100);
		margin-top: 1.25rem;
	}

	.btn-save {
		background: var(--navy);
		color: #fff;
		border: none;
		border-radius: 8px;
		padding: .75rem 1.75rem;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: .9rem;
		cursor: pointer;
		display: flex;
		align-items: center;
		gap: 6px;
		transition: background .15s;
	}

	.btn-save:hover {
		background: var(--navy-mid);
	}

	.btn-cancel {
		background: var(--slate-100);
		color: var(--slate-600);
		border: none;
		border-radius: 8px;
		padding: .75rem 1.25rem;
		font-weight: 600;
		font-size: .9rem;
		cursor: pointer;
		text-decoration: none;
		display: flex;
		align-items: center;
		gap: 6px;
		transition: background .15s;
	}

	.btn-cancel:hover {
		background: var(--slate-200);
		color: var(--navy);
	}

	.modal-content {
		border-radius: 14px;
		border: 1px solid var(--slate-200);
	}

	.btn-cancel-modal {
		background: var(--slate-100);
		color: var(--slate-600);
		border: none;
		border-radius: 8px;
		padding: .6rem 1.2rem;
		font-weight: 600;
		cursor: pointer;
	}

	.btn-danger-confirm {
		background: var(--rose);
		color: #fff;
		border: none;
		border-radius: 8px;
		padding: .6rem 1.4rem;
		font-weight: 700;
		font-family: var(--font-display);
		cursor: pointer;
	}

	@media (max-width: 1024px) {
		.form-layout {
			grid-template-columns: 1fr;
		}
	}

	@media (max-width: 768px) {
		.sidebar {
			display: none;
		}
	}
	</style>
</head>

<body>
	<div class="app-shell">
		<nav class="top-nav">
			<div class="nav-brand">
				<div class="brand-icon"><i class="bi bi-receipt-cutoff"></i></div>
				<span class="brand-name">Spendly</span>
			</div>
			<div class="nav-right">
				<button class="nav-icon-btn"><i class="bi bi-bell"></i></button>
				<div class="dropdown">
					<div class="nav-avatar" data-bs-toggle="dropdown">JD</div>
					<ul class="dropdown-menu dropdown-menu-end mt-2">
						<li><span class="dropdown-item-text fw-semibold" style="font-size:.875rem;">Jane Doe</span></li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li>
							<form action="/logout" method="POST"><button type="submit"
									class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-2"></i>Sign
									out</button></form>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="app-body">
			<aside class="sidebar">
				<div class="sidebar-section-label">Menu</div>
				<a href="/dashboard" class="nav-item"><i class="bi bi-grid-1x2"></i><span>Dashboard</span></a>
				<a href="/expenses" class="nav-item"><i class="bi bi-receipt"></i><span>Expenses</span></a>
				<a href="/categories" class="nav-item active"><i class="bi bi-tags"></i><span>Categories</span></a>
				<a href="/reports" class="nav-item"><i class="bi bi-bar-chart-line"></i><span>Reports</span></a>
			</aside>

			<main class="main-content">
				<div class="breadcrumb-nav">
					<a href="/categories">Categories</a>
					<span class="sep"><i class="bi bi-chevron-right"></i></span>
					<span class="current">Edit: Groceries</span>
				</div>

				<div class="edit-banner">
					<div class="edit-banner-icon"><i class="bi bi-tags"></i></div>
					<div>
						<div class="edit-banner-title">Editing: Groceries</div>
						<div class="edit-banner-sub">18 expenses linked &nbsp;·&nbsp; £370.45 this month</div>
					</div>
				</div>

				<form action="{{ route('categories.update', $category) }}" method="POST">
					@csrf @method('PUT')
					<div class="form-layout">
						<div>
							<div class="card-box">
								<div class="card-head">
									<div class="card-title">Category details</div>
									<div class="card-desc">Rename this category — all linked expenses will update
										automatically.</div>
								</div>
								<div class="card-body-pad">
									<div class="mb-4">
										<label class="form-label" for="name">Category name <span
												class="required-star">*</span></label>
										<input type="text" class="form-control @error('name') is-invalid @enderror"
											id="name" name="name" value="{{ old('name', $category->name) }}" required
											maxlength="50"
											oninput="updatePreview(this.value); updateCharCount(this.value.length)" />
										<div class="char-count"><span id="char-count">8</span>/50 characters</div>
										@error('name')
										Validation error: <div class="invalid-feedback" style="display:block;">
											{{ $message }}</div>
										@enderror
									</div>

									<div class="form-actions">
										<button type="submit" class="btn-save"><i class="bi bi-check-circle"></i> Save
											changes</button>
										<a href="{{ route('categories.index') }}" class="btn-cancel"><i
												class="bi bi-x"></i> Cancel</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Right -->
						<div style="display:flex;flex-direction:column;gap:1.25rem;">
							<!-- Preview -->
							<div class="card-box">
								<div class="card-head">
									<div class="card-title">Live preview</div>
								</div>
								<div class="card-body-pad">
									<div class="preview-block">
										<div class="preview-label">How it will appear</div>
										<div class="preview-cat">
											<div class="preview-cat-icon"><i class="bi bi-cart3"></i></div>
											<div class="preview-cat-name" id="preview-name">Groceries</div>
										</div>
									</div>
									<p style="font-size:.75rem;color:var(--slate-400);text-align:center;margin:0;">
										Category name updates live as you type.</p>
								</div>
							</div>

							<!-- Stats -->
							<div class="card-box">
								<div class="card-head">
									<div class="card-title">Usage stats</div>
								</div>
								<div class="card-body-pad">
									<ul class="stats-list">
										<li><span class="lbl">Total expenses</span><span class="val">18</span></li>
										<li><span class="lbl">This month</span><span class="val amber">£370.45</span>
										</li>
										<li><span class="lbl">All time</span><span class="val">£4,280.90</span></li>
										<li><span class="lbl">Created</span><span class="val">1 Jan 2025</span></li>
									</ul>
								</div>
							</div>

							<!-- Danger zone -->
							<div class="card-box">
								<div class="card-head">
									<div class="card-title">Danger zone</div>
								</div>
								<div class="card-body-pad">
									<div class="danger-zone">
										<div class="danger-zone-title"><i class="bi bi-exclamation-triangle-fill"></i>
											Delete this category</div>
										<p>You have 18 expenses in this category. Reassign or delete them before you can
											remove this category.</p>
										<button type="button" class="btn-danger-zone" disabled><i
												class="bi bi-trash3"></i> Cannot delete — has expenses</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</main>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	function updatePreview(val) {
		document.getElementById('preview-name').textContent = val || 'Category name';
	}

	function updateCharCount(len) {
		const el = document.getElementById('char-count');
		el.textContent = len;
		el.style.color = len > 40 ? '#E05252' : '#8A99AD';
	}
	</script>
</body>

</html>