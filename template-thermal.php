<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
	margin: 0;
	padding: 0;
	background: #f0f2f5;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
}

/* ---- VOUCHER ---- */
.voucher {
	width: 270px;
	font-family: 'Poppins', 'Segoe UI', sans-serif;
	background: #ffffff;
	border-radius: 10px;
	overflow: hidden;
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
	border: 1px solid #e0e0e0;
	margin: auto;
}

.voucher-inner {
	display: flex;
	flex-direction: row;
	align-items: stretch;
	width: 100%;
}

.voucher-left {
	background: #f7f9fa;
	color: #0f2027;
	width: 40%;
	padding: 6px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	text-align: center;
	border-right: 1px solid #e5e5e5;
}

.voucher-logo {
	height: 26px;
	margin-bottom: 4px;
}

.voucher-title {
	font-size: 11px;
	font-weight: 700;
	color: #0f2027;
	text-transform: uppercase;
	margin-bottom: 3px;
}

.qrcode-container {
	background: #fff;
	padding: 4px;
	border-radius: 5px;
	margin-top: 3px;
	border: 1px solid #ddd;
}

.qrcode {
	height: 50px;
	width: 50px;
}

.voucher-right {
	width: 60%;
	background: #fff;
	padding: 6px 7px;
	color: #0f2027;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.credential-section {
	background: #f8fafc;
	border-left: 2px solid #2c5364;
	border-radius: 6px;
	padding: 5px;
	margin-bottom: 5px;
}

.credential-label {
	font-size: 8.5px;
	font-weight: 600;
	text-transform: uppercase;
	color: #666;
	margin-bottom: 2px;
}

.credential-value {
	font-size: 12px;
	font-weight: 700;
	color: #2c5364;
	background: #fff;
	border: 1px dashed #2c5364;
	border-radius: 4px;
	padding: 3px;
	font-family: 'Courier New', monospace;
	word-break: break-all;
	text-align: center;
}

.credential-split {
	display: flex;
	gap: 4px;
}

.package-info {
	background: linear-gradient(135deg, #2c5364 0%, #203a43 100%);
	color: white;
	padding: 4px;
	border-radius: 5px;
	font-size: 9px;
	font-weight: 600;
	text-align: center;
	margin: 4px 0;
	line-height: 1.2em;
}

.login-info {
	background: #fff8e1;
	color: #d35400;
	border-radius: 5px;
	padding: 4px;
	font-size: 8.5px;
	font-weight: 600;
	border: 1px solid #ffe0b2;
	text-align: center;
}

.login-url {
	display: block;
	font-weight: 700;
	color: #0f2027;
	margin-top: 2px;
}

.voucher-footer {
	background: #f4f4f4;
	text-align: center;
	padding: 3px;
	font-size: 8px;
	color: #333;
	border-top: 1px solid #e0e0e0;
	border-radius: 0 0 10px 10px;
}
</style>
</head>
<body>

<table class="voucher">
	<tbody>
		<tr>
			<td>
				<div class="voucher-inner">
					
					<!-- LEFT SIDE -->
					<div class="voucher-left">
						<img src="https://fanex.mg/logo.png" alt="Fanex Logo" class="voucher-logo">
						<div class="voucher-title">Fanex</div>
						
						<?php if ($qr == "yes") { ?>
						<div class="qrcode-container">
							<?= $qrcode ?>
						</div>
						<?php } ?>
					</div>

					<!-- RIGHT SIDE -->
					<div class="voucher-right">
						<?php if ($usermode == "vc") { ?>
						<div class="credential-section">
							<div class="credential-label">🎫 Voucher</div>
							<div class="credential-value"><?= $username; ?></div>
						</div>
						<?php } ?>

						<?php if ($usermode == "up") { ?>
						<div class="credential-split">
							<div class="credential-section">
								<div class="credential-label">👤 User</div>
								<div class="credential-value"><?= $username; ?></div>
							</div>
							<div class="credential-section">
								<div class="credential-label">🔑 Pass</div>
								<div class="credential-value"><?= $password; ?></div>
							</div>
						</div>
						<?php } ?>

						<div class="package-info">
							⏱️ <?= $validity; ?> | ⏳ <?= $timelimit; ?><br>
							📊 <?= $datalimit; ?> | 💰 <?= $price; ?>
						</div>

						<div class="login-info">
							Please Login to:
							<span class="login-url">http://fanex.mg</span>
						</div>
					</div>

				</div>
			</td>
		</tr>

		<!-- Footer -->
		<tr>
			<td class="voucher-footer">
				Made by <strong>Faneva © 2025</strong>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>

