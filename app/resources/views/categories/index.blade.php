<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Categories — Spendly</title>
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

	.page-header {
		display: flex;
		align-items: flex-start;
		justify-content: space-between;
		margin-bottom: 1.75rem;
	}

	.page-title {
		font-family: var(--font-display);
		font-size: 1.5rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -.4px;
	}

	.page-subtitle {
		color: var(--slate-400);
		font-size: .875rem;
		margin-top: .2rem;
	}

	.btn-add {
		background: var(--navy);
		color: #fff;
		border: none;
		border-radius: 8px;
		padding: .6rem 1.2rem;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: .875rem;
		cursor: pointer;
		display: flex;
		align-items: center;
		gap: 6px;
		text-decoration: none;
		transition: background .15s;
	}

	.btn-add:hover {
		background: var(--navy-mid);
		color: #fff;
	}

	.flash-success {
		background: var(--sage-pale);
		border: 1.5px solid rgba(76, 175, 125, .3);
		border-radius: 8px;
		color: #2e7d52;
		padding: .7rem 1rem;
		font-size: .875rem;
		display: flex;
		align-items: center;
		gap: 8px;
		margin-bottom: 1.25rem;
	}

	/* Two-col layout */
	.two-col {
		display: grid;
		grid-template-columns: 1fr 360px;
		gap: 1.25rem;
		align-items: start;
	}

	/* Category cards grid */
	.cat-cards-grid {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
		gap: 1rem;
		margin-bottom: 1.25rem;
	}

	.cat-card {
		background: #fff;
		border-radius: 12px;
		box-shadow: var(--shadow-card);
		border: 1.5px solid var(--slate-100);
		padding: 1.25rem;
		transition: border-color .15s, box-shadow .15s;
		position: relative;
	}

	.cat-card:hover {
		border-color: var(--amber);
		box-shadow: 0 4px 16px rgba(30, 42, 58, .1);
	}

	.cat-card-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: 1rem;
	}

	.cat-card-icon {
		width: 44px;
		height: 44px;
		border-radius: 11px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 1.2rem;
	}

	.cat-card-actions {
		display: flex;
		gap: .35rem;
	}

	.btn-cat-action {
		width: 28px;
		height: 28px;
		border-radius: 6px;
		border: none;
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: .8rem;
		transition: background .12s;
	}

	.btn-cat-edit {
		background: var(--amber-pale);
		color: var(--amber);
	}

	.btn-cat-edit:hover {
		background: #fde8b0;
	}

	.btn-cat-delete {
		background: var(--rose-pale);
		color: var(--rose);
	}

	.btn-cat-delete:hover {
		background: #fbd5d5;
	}

	.cat-card-name {
		font-family: var(--font-display);
		font-size: 1rem;
		font-weight: 700;
		color: var(--navy);
		margin-bottom: .25rem;
	}

	.cat-card-count {
		font-size: .78rem;
		color: var(--slate-400);
		margin-bottom: .85rem;
	}

	.cat-card-total {
		font-family: var(--font-display);
		font-size: 1.3rem;
		font-weight: 800;
		color: var(--navy);
	}

	.cat-card-total-label {
		font-size: .72rem;
		color: var(--slate-400);
		text-transform: uppercase;
		letter-spacing: .4px;
		margin-top: 1px;
	}

	.cat-bar {
		height: 4px;
		background: var(--slate-200);
		border-radius: 4px;
		margin-top: .85rem;
		overflow: hidden;
	}

	.cat-bar-fill {
		height: 100%;
		border-radius: 4px;
	}

	/* Create form */
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

	.form-hint {
		font-size: .78rem;
		color: var(--slate-400);
		margin-top: .3rem;
	}

	.btn-submit {
		background: var(--navy);
		color: #fff;
		border: none;
		border-radius: 8px;
		padding: .7rem 1.5rem;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: .9rem;
		cursor: pointer;
		width: 100%;
		margin-top: 1rem;
		display: flex;
		align-items: center;
		justify-content: center;
		gap: 6px;
		transition: background .15s;
	}

	.btn-submit:hover {
		background: var(--navy-mid);
	}

	/* Info box */
	.info-box {
		background: var(--amber-pale);
		border: 1px solid rgba(232, 168, 62, .3);
		border-radius: 10px;
		padding: 1rem 1.1rem;
		margin-top: 1rem;
	}

	.info-title {
		font-size: .8rem;
		font-weight: 700;
		color: #9a6a10;
		margin-bottom: .4rem;
		display: flex;
		align-items: center;
		gap: 5px;
	}

	.info-text {
		font-size: .775rem;
		color: #b07a20;
		line-height: 1.5;
	}

	/* Empty state */
	.empty-state {
		text-align: center;
		padding: 3.5rem 2rem;
	}

	.empty-icon {
		width: 72px;
		height: 72px;
		background: var(--slate-100);
		border-radius: 18px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 2rem;
		color: var(--slate-400);
		margin: 0 auto 1.25rem;
	}

	.empty-title {
		font-family: var(--font-display);
		font-size: 1.1rem;
		font-weight: 700;
		color: var(--navy);
		margin-bottom: .4rem;
	}

	.empty-sub {
		color: var(--slate-400);
		font-size: .875rem;
		max-width: 280px;
		margin: 0 auto;
		line-height: 1.6;
	}

	/* Delete modal */
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

	@media (max-width: 1100px) {
		.two-col {
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
				@if (session('success'))
				<div class="flash-success"><i class="bi bi-check-circle-fill"></i> {{ session('success') }}
				</div>
				@endif
				@if (session('error'))
				<div class="alert alert-danger">
					{{ session('error') }}
				</div>
				@endif
				<div class="page-header">
					<div>
						<div class="page-title">Categories</div>
						<div class="page-subtitle">Organise your expenses into meaningful groups.</div>
					</div>
				</div>

				<div class="two-col">
					<!-- Left: category cards -->
					<div>
						<div class="cat-cards-grid">
							@forelse ($categories as $category)
							<div class="cat-card">
								<div class="cat-card-name">{{ $category->name }}</div>
								<div class="cat-card-count">{{ $category->expenses_count }} expenses</div>

								<a href="{{ route('categories.edit', $category) }}" class="btn-cat-action btn-cat-edit">
									<i class="bi bi-pencil"></i>
								</a>

								<button class="btn-cat-action btn-cat-delete" data-bs-toggle="modal"
									data-bs-target="#deleteModal" data-id="{{ $category->id }}"
									data-name="{{ $category->name }}" data-count="{{ $category->expenses_count }}">
									<i class="bi bi-trash3"></i>
								</button>
							</div>
							@empty
							<div class="empty-state">
								<div class="empty-title">No categories yet</div>
								<div class="empty-sub">Create your first category to organise your expenses.</div>
							</div>
							@endforelse

						</div>
					</div>

					<!-- Right: inline create form -->
					<div>
						<div class="card-box">
							<div class="card-head">
								<div class="card-title">Create new category</div>
								<div class="card-desc">Add a custom category for your expenses.</div>
							</div>
							<div class="card-body-pad">
								<form action="{{ route('categories.store') }}" method="POST">
									@csrf
									<div class="mb-4">
										<label class="form-label" for="name">Category name <span
												class="required-star">*</span></label>
										<input type="text" class="form-control @error('name') is-invalid @enderror"
											id="name" name="name" value="{{ old('name') }}"
											placeholder="e.g. Subscriptions, Holidays, Pets…" required maxlength="50" />
										<div class="form-hint">Keep it short and descriptive. Max 50 characters.</div>
										@error('name')
										Validation error: <div class="invalid-feedback" style="display:block;">
											{{ $message }}</div>
										@enderror
									</div>

									<button type="submit" class="btn-submit"><i class="bi bi-plus-circle"></i> Create
										category</button>
								</form>

								<div class="info-box">
									<div class="info-title"><i class="bi bi-info-circle-fill"></i> About categories
									</div>
									<div class="info-text">
										Categories are personal — only you can see yours. Each expense must belong to
										exactly one category. You cannot delete a category that has expenses linked to
										it.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<!-- Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom:1px solid var(--slate-100);padding:1.25rem 1.5rem;">
					<h5 class="modal-title" style="font-family:var(--font-display);font-weight:700;"><i
							class="bi bi-trash3 text-danger me-2"></i>Delete category?</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body" style="padding:1.25rem 1.5rem;">
					<p style="color:var(--slate-600);font-size:.9rem;margin-bottom:.6rem;">
						Are you sure you want to delete <strong id="cat-delete-name"></strong>?
					</p>
					<div id="cat-has-expenses"
						style="background:var(--rose-pale);border:1.5px solid rgba(224,82,82,.2);border-radius:8px;padding:.75rem 1rem;font-size:.82rem;color:#9b4040;display:none;">
						<i class="bi bi-exclamation-triangle-fill me-1"></i>
						This category has <strong id="cat-expense-count"></strong> linked expense(s). You must reassign
						or delete them first.
					</div>
					<div id="cat-no-expenses" style="font-size:.82rem;color:var(--slate-400);">
						This will permanently remove the category. This action cannot be undone.
					</div>
				</div>
				<div class="modal-footer" style="border-top:1px solid var(--slate-100);gap:.5rem;">
					<button class="btn-cancel-modal" data-bs-dismiss="modal">Cancel</button>
					<form id="cat-delete-form" method="POST">
						@csrf @method('DELETE')
						<button type="submit" class="btn-danger-confirm" id="cat-delete-btn"><i
								class="bi bi-trash3 me-1"></i>Delete</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	document.getElementById('deleteModal').addEventListener('show.bs.modal', function(e) {
		const btn = e.relatedTarget;
		const name = btn.dataset.name;
		const count = parseInt(btn.dataset.count || 0);
		document.getElementById('cat-delete-name').textContent = '"' + name + '"';
		document.getElementById('cat-expense-count').textContent = count;
		if (count > 0) {
			document.getElementById('cat-has-expenses').style.display = 'block';
			document.getElementById('cat-no-expenses').style.display = 'none';
			document.getElementById('cat-delete-btn').disabled = true;
			document.getElementById('cat-delete-btn').style.opacity = '.4';
		} else {
			document.getElementById('cat-has-expenses').style.display = 'none';
			document.getElementById('cat-no-expenses').style.display = 'block';
			document.getElementById('cat-delete-btn').disabled = false;
			document.getElementById('cat-delete-btn').style.opacity = '1';
		}
		document.getElementById('cat-delete-form').action = '/categories/' + (btn.dataset.id || '1');
	});
	setTimeout(() => {
		const f = document.querySelector('.flash-success');
		if (f) f.style.display = 'none';
	}, 4000);
	</script>
</body>

</html>