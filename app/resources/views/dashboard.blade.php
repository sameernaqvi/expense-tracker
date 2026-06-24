<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Dashboard — Spendly</title>
	<link
		href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500&display=swap"
		rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
	<style>
	:root {
		--navy: #1E2A3A;
		--navy-mid: #2D3E52;
		--navy-light: #3D5166;
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

	/* Layout */
	.app-shell {
		display: flex;
		flex-direction: column;
		min-height: 100vh;
	}

	/* Top Nav */
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
		position: relative;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: background .15s;
	}

	.nav-icon-btn:hover {
		background: rgba(255, 255, 255, .15);
	}

	.nav-badge {
		position: absolute;
		top: 5px;
		right: 5px;
		width: 8px;
		height: 8px;
		background: var(--amber);
		border-radius: 50%;
		border: 2px solid var(--navy);
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

	/* Main with sidebar */
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

	/* Main content */
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

	/* Stat cards */
	.stat-grid {
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 1rem;
		margin-bottom: 1.75rem;
	}

	.stat-card {
		background: #fff;
		border-radius: 12px;
		padding: 1.25rem 1.5rem;
		box-shadow: var(--shadow-card);
		border: 1px solid var(--slate-100);
	}

	.stat-label {
		font-size: .75rem;
		font-weight: 600;
		color: var(--slate-400);
		letter-spacing: .4px;
		text-transform: uppercase;
		margin-bottom: .5rem;
		display: flex;
		align-items: center;
		gap: 6px;
	}

	.stat-value {
		font-family: var(--font-display);
		font-size: 1.75rem;
		font-weight: 800;
		color: var(--navy);
		letter-spacing: -.5px;
	}

	.stat-delta {
		font-size: .78rem;
		margin-top: .35rem;
		display: flex;
		align-items: center;
		gap: 4px;
	}

	.delta-up {
		color: var(--rose);
	}

	.delta-down {
		color: var(--sage);
	}

	.stat-icon {
		width: 36px;
		height: 36px;
		border-radius: 8px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 1rem;
		flex-shrink: 0;
	}

	/* Two-col layout */
	.two-col {
		display: grid;
		grid-template-columns: 1fr 360px;
		gap: 1.25rem;
		margin-bottom: 1.25rem;
	}

	/* Card */
	.card-box {
		background: #fff;
		border-radius: 12px;
		box-shadow: var(--shadow-card);
		border: 1px solid var(--slate-100);
	}

	.card-head {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 1.1rem 1.5rem;
		border-bottom: 1px solid var(--slate-100);
	}

	.card-title {
		font-family: var(--font-display);
		font-size: .95rem;
		font-weight: 700;
		color: var(--navy);
	}

	.card-link {
		font-size: .8rem;
		color: var(--amber);
		font-weight: 600;
		text-decoration: none;
	}

	.card-link:hover {
		color: var(--navy);
	}

	/* Expense list */
	.expense-list {
		list-style: none;
	}

	.expense-item {
		display: flex;
		align-items: center;
		gap: 1rem;
		padding: .9rem 1.5rem;
		border-bottom: 1px solid var(--slate-100);
		transition: background .1s;
	}

	.expense-item:last-child {
		border-bottom: none;
	}

	.expense-item:hover {
		background: var(--slate-50);
	}

	.exp-icon {
		width: 36px;
		height: 36px;
		border-radius: 9px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: .9rem;
		flex-shrink: 0;
	}

	.exp-info {
		flex: 1;
		min-width: 0;
	}

	.exp-title {
		font-weight: 600;
		font-size: .875rem;
		color: var(--navy);
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	.exp-meta {
		font-size: .78rem;
		color: var(--slate-400);
		margin-top: 2px;
	}

	.exp-amount {
		font-family: var(--font-display);
		font-size: .95rem;
		font-weight: 700;
		color: var(--navy);
		white-space: nowrap;
	}

	/* Category breakdown */
	.cat-row {
		display: flex;
		align-items: center;
		gap: .75rem;
		padding: .75rem 1.5rem;
		border-bottom: 1px solid var(--slate-100);
	}

	.cat-row:last-child {
		border-bottom: none;
	}

	.cat-dot {
		width: 10px;
		height: 10px;
		border-radius: 50%;
		flex-shrink: 0;
	}

	.cat-name {
		flex: 1;
		font-size: .875rem;
		color: var(--slate-600);
		font-weight: 500;
	}

	.cat-bar-wrap {
		width: 80px;
		background: var(--slate-100);
		border-radius: 4px;
		height: 6px;
		overflow: hidden;
	}

	.cat-bar-fill {
		height: 100%;
		border-radius: 4px;
	}

	.cat-amount {
		font-size: .875rem;
		font-weight: 700;
		color: var(--navy);
		font-family: var(--font-display);
		min-width: 60px;
		text-align: right;
	}

	/* Quick add */
	.quick-add {
		padding: 1.25rem 1.5rem;
	}

	.quick-add-title {
		font-family: var(--font-display);
		font-size: .9rem;
		font-weight: 700;
		color: var(--navy);
		margin-bottom: .75rem;
	}

	.quick-input {
		border: 1.5px solid var(--slate-200);
		border-radius: 8px;
		padding: .6rem .9rem;
		font-size: .875rem;
		width: 100%;
		margin-bottom: .6rem;
		font-family: var(--font-body);
		color: var(--navy);
		background: var(--slate-50);
		transition: border-color .15s;
	}

	.quick-input:focus {
		border-color: var(--amber);
		outline: none;
		box-shadow: 0 0 0 3px rgba(232, 168, 62, .15);
		background: #fff;
	}

	.quick-row {
		display: grid;
		grid-template-columns: 1fr 1fr;
		gap: .6rem;
	}

	.btn-quick-submit {
		background: var(--amber);
		color: var(--navy);
		border: none;
		border-radius: 8px;
		padding: .6rem;
		font-family: var(--font-display);
		font-weight: 700;
		font-size: .875rem;
		width: 100%;
		cursor: pointer;
		margin-top: .6rem;
		transition: background .15s;
	}

	.btn-quick-submit:hover {
		background: var(--amber-light);
	}

	/* Flash message */
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

	.dropdown-menu {
		border: 1px solid var(--slate-200);
		box-shadow: 0 8px 24px rgba(30, 42, 58, .12);
		border-radius: 10px;
	}

	@media (max-width: 1100px) {
		.stat-grid {
			grid-template-columns: repeat(2, 1fr);
		}

		.two-col {
			grid-template-columns: 1fr;
		}
	}

	@media (max-width: 768px) {
		.sidebar {
			display: none;
		}

		.stat-grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}
	</style>
</head>

<body>
	<div class="app-shell">
		<!-- Top Nav -->
		<nav class="top-nav">
			<div class="nav-brand">
				<div class="brand-icon"><i class="bi bi-receipt-cutoff"></i></div>
				<span class="brand-name">Spendly</span>
			</div>
			<div class="nav-right">
				<button class="nav-icon-btn"><i class="bi bi-bell"></i><span class="nav-badge"></span></button>
				<div class="dropdown">
					<div class="nav-avatar" data-bs-toggle="dropdown" style="cursor:pointer;">JD</div>
					<ul class="dropdown-menu dropdown-menu-end mt-2">
						<li><span class="dropdown-item-text fw-semibold" style="font-size:.875rem;">Jane Doe</span></li>
						<li><span class="dropdown-item-text text-muted" style="font-size:.78rem;">jane@example.com</span></li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
						<li>
							<form action="/logout" method="POST">
								<button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-2"></i>Sign
									out</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="app-body">
			<!-- Sidebar -->
			<aside class="sidebar">
				<div class="sidebar-section-label">Menu</div>
				<a href="/dashboard" class="nav-item active"><i class="bi bi-grid-1x2"></i><span>Dashboard</span></a>
				<a href="/expenses" class="nav-item"><i class="bi bi-receipt"></i><span>Expenses</span></a>
				<a href="/categories" class="nav-item"><i class="bi bi-tags"></i><span>Categories</span></a>
				<a href="/reports" class="nav-item"><i class="bi bi-bar-chart-line"></i><span>Reports</span></a>
			</aside>

			<!-- Main -->
			<main class="main-content">
				<!-- Flash -->
				<!-- <div class="flash-success"><i class="bi bi-check-circle-fill"></i> Expense added successfully.</div> -->

				<div class="page-header">
					<div>
						<div class="page-title">Good morning, Jane 👋</div>
						<div class="page-subtitle">Here's your spending overview for June 2025.</div>
					</div>
					<a href="/expenses/create" class="btn-add"><i class="bi bi-plus"></i> Add expense</a>
				</div>

				<!-- Stats -->
				<div class="stat-grid">
					<div class="stat-card">
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;">
							<div class="stat-label"><i class="bi bi-calendar3"></i> This month</div>
							<div class="stat-icon" style="background:var(--amber-pale);color:var(--amber);">£</div>
						</div>
						<div class="stat-value">£1,248</div>
						<div class="stat-delta delta-up"><i class="bi bi-arrow-up-short"></i> Up £148 vs May</div>
					</div>
					<div class="stat-card">
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;">
							<div class="stat-label"><i class="bi bi-receipt"></i> Expenses</div>
							<div class="stat-icon" style="background:var(--slate-100);color:var(--slate-600);"><i
									class="bi bi-hash"></i></div>
						</div>
						<div class="stat-value">47</div>
						<div class="stat-delta" style="color:var(--slate-400);">this month</div>
					</div>
					<div class="stat-card">
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;">
							<div class="stat-label"><i class="bi bi-tags"></i> Categories</div>
							<div class="stat-icon" style="background:var(--sage-pale);color:var(--sage);"><i
									class="bi bi-folder2"></i></div>
						</div>
						<div class="stat-value">8</div>
						<div class="stat-delta" style="color:var(--slate-400);">active</div>
					</div>
					<div class="stat-card">
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:.5rem;">
							<div class="stat-label"><i class="bi bi-graph-up"></i> Daily avg</div>
							<div class="stat-icon" style="background:var(--rose-pale);color:var(--rose);"><i
									class="bi bi-graph-up-arrow"></i></div>
						</div>
						<div class="stat-value">£42</div>
						<div class="stat-delta delta-down"><i class="bi bi-arrow-down-short"></i> Down £6 vs May</div>
					</div>
				</div>

				<!-- Two col -->
				<div class="two-col">
					<!-- Recent expenses -->
					<div class="card-box">
						<div class="card-head">
							<div class="card-title">Recent expenses</div>
							<a href="/expenses" class="card-link">View all <i class="bi bi-arrow-right"></i></a>
						</div>
						<ul class="expense-list">
							<li class="expense-item">
								<div class="exp-icon" style="background:#EEF1F5;color:#4A5568;"><i class="bi bi-cart3"></i></div>
								<div class="exp-info">
									<div class="exp-title">Tesco weekly shop</div>
									<div class="exp-meta">Groceries &nbsp;·&nbsp; 23 Jun</div>
								</div>
								<div class="exp-amount">£87.40</div>
							</li>
							<li class="expense-item">
								<div class="exp-icon" style="background:#FEF3DC;color:#E8A83E;"><i class="bi bi-lightning-charge"></i>
								</div>
								<div class="exp-info">
									<div class="exp-title">Electricity bill</div>
									<div class="exp-meta">Utilities &nbsp;·&nbsp; 22 Jun</div>
								</div>
								<div class="exp-amount">£64.00</div>
							</li>
							<li class="expense-item">
								<div class="exp-icon" style="background:#E8F5EE;color:#4CAF7D;"><i class="bi bi-bus-front"></i></div>
								<div class="exp-info">
									<div class="exp-title">Monthly Oyster top-up</div>
									<div class="exp-meta">Transport &nbsp;·&nbsp; 21 Jun</div>
								</div>
								<div class="exp-amount">£60.00</div>
							</li>
							<li class="expense-item">
								<div class="exp-icon" style="background:#F0EEFF;color:#7C5CFC;"><i class="bi bi-cup-hot"></i></div>
								<div class="exp-info">
									<div class="exp-title">Coffee — Pret A Manger</div>
									<div class="exp-meta">Dining out &nbsp;·&nbsp; 21 Jun</div>
								</div>
								<div class="exp-amount">£3.80</div>
							</li>
							<li class="expense-item">
								<div class="exp-icon" style="background:#FDEAEA;color:#E05252;"><i class="bi bi-phone"></i></div>
								<div class="exp-info">
									<div class="exp-title">Phone bill — O2</div>
									<div class="exp-meta">Bills &nbsp;·&nbsp; 20 Jun</div>
								</div>
								<div class="exp-amount">£28.00</div>
							</li>
							<li class="expense-item">
								<div class="exp-icon" style="background:#EEF1F5;color:#4A5568;"><i class="bi bi-cart3"></i></div>
								<div class="exp-info">
									<div class="exp-title">Sainsbury's top-up</div>
									<div class="exp-meta">Groceries &nbsp;·&nbsp; 19 Jun</div>
								</div>
								<div class="exp-amount">£22.15</div>
							</li>
						</ul>
					</div>

					<!-- Right col -->
					<div style="display:flex;flex-direction:column;gap:1.25rem;">
						<!-- Category breakdown -->
						<div class="card-box">
							<div class="card-head">
								<div class="card-title">By category</div>
								<a href="/reports" class="card-link">Full report</a>
							</div>
							<div class="cat-row">
								<div class="cat-dot" style="background:#E8A83E;"></div>
								<div class="cat-name">Groceries</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:75%;background:#E8A83E;"></div>
								</div>
								<div class="cat-amount">£370</div>
							</div>
							<div class="cat-row">
								<div class="cat-dot" style="background:#4CAF7D;"></div>
								<div class="cat-name">Transport</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:40%;background:#4CAF7D;"></div>
								</div>
								<div class="cat-amount">£200</div>
							</div>
							<div class="cat-row">
								<div class="cat-dot" style="background:#7C5CFC;"></div>
								<div class="cat-name">Dining out</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:30%;background:#7C5CFC;"></div>
								</div>
								<div class="cat-amount">£148</div>
							</div>
							<div class="cat-row">
								<div class="cat-dot" style="background:#E05252;"></div>
								<div class="cat-name">Bills</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:25%;background:#E05252;"></div>
								</div>
								<div class="cat-amount">£120</div>
							</div>
							<div class="cat-row">
								<div class="cat-dot" style="background:#3B82F6;"></div>
								<div class="cat-name">Utilities</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:20%;background:#3B82F6;"></div>
								</div>
								<div class="cat-amount">£96</div>
							</div>
							<div class="cat-row" style="border:none;">
								<div class="cat-dot" style="background:#8A99AD;"></div>
								<div class="cat-name">Other</div>
								<div class="cat-bar-wrap">
									<div class="cat-bar-fill" style="width:10%;background:#8A99AD;"></div>
								</div>
								<div class="cat-amount">£314</div>
							</div>
						</div>

						<!-- Quick add -->
						<div class="card-box">
							<div class="card-head">
								<div class="card-title">Quick add</div>
							</div>
							<div class="quick-add">
								<form action="/expenses" method="POST">
									<!-- @csrf -->
									<input class="quick-input" type="text" name="title" placeholder="What did you spend on?" />
									<div class="quick-row">
										<input class="quick-input" type="number" name="amount" placeholder="£ Amount" step="0.01" min="0" />
										<select class="quick-input" name="category_id">
											<option value="">Category</option>
											<option>Groceries</option>
											<option>Transport</option>
											<option>Dining out</option>
											<option>Bills</option>
											<option>Utilities</option>
										</select>
									</div>
									<input class="quick-input" type="date" name="expense_date" />
									<button type="submit" class="btn-quick-submit"><i class="bi bi-plus-circle me-1"></i>Add
										expense</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
	// Set today as default for date input
	document.querySelector('input[type="date"]').value = new Date().toISOString().split('T')[0];
	</script>
</body>

</html>