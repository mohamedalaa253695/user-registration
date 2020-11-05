<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Auth library</title>
    <style type="text/css">
    	body {
    	  margin: 0px;
    	  padding: 0px;
    	  width: 100%;
    	  font-family: sans-serif;
	      font-size: 15px;
	      color: #444;
    	}

    	main {
    	  padding: 30px;
    	  padding-top: 60px;
    	  box-sizing: border-box;
    	}

    	form {
    	  margin-bottom: 40px;
    	}

	    .auth-menu {
	      position: fixed;
	      left: 0;
	      top: 0;
	      z-index: 10001;
	      width: 100%;
    	  box-sizing: border-box;
	      line-height: 40px;
	      background-color: #444;
	      color: #fff;
	      font-size: 14px;
	      padding-left: 15px;
	      padding-right: 15px;
	    }

	    .auth-menu a {
	      color: #fff;
	      text-decoration: none;
	      font-weight: bold;
	    }

	    .notification {
	      padding: 10px;
    	  background-color: #eee;
    	  font-weight: bold;
    	  margin-bottom: 30px;
	    }
    </style>
</head>
<body>



<main role="main" class="wrapper">
	<h1><?= lang('Auth.accountSettings') ?></h1>

<?= view('App\Views\_notifications') ?>

<form method="POST" action="<?= site_url('account'); ?>" accept-charset="UTF-8">
	<?= csrf_field() ?>
	<p>
		<label><?= lang('Auth.name') ?></label><br />
		<input required type="text" name="name" value="<?= $userData['name']; ?>" />
	</p>
	<p>
		<label><?= lang('Auth.email') ?></label><br />
		<input disabled type="text" value="<?= $userData['email']; ?>" />
	</p>
	<?php if ($userData['new_email']): ?>
	<p>
		<label><?= lang('Auth.pendingEmail') ?></label><br />
		<input disabled type="text" value="<?= $userData['new_email']; ?>" />
	</p>
	<?php endif; ?>
    <p>
        <button type="submit"><?= lang('Auth.update') ?></button>
    </p>
</form>


<!-- CHANGE EMAIL -->
<h2><?= lang('Auth.changeEmail') ?></h2>
<p><?= lang('Auth.changeEmailInfo') ?></p>

<form method="POST" action="<?= site_url('change-email'); ?>" accept-charset="UTF-8"
	onsubmit="changeEmail.disabled = true; return true;">
	<?= csrf_field() ?>
	<p>
		<label><?= lang('Auth.newEmail') ?></label><br />
		<input required type="email" name="new_email" value="<?= old('new_email') ?>" />
	</p>
	<p>
		<label><?= lang('Auth.currentPassword') ?></label><br />
		<input required type="password" name="password" value="" />
	</p>
    <p>
        <button name="changeEmail" type="submit"><?= lang('Auth.update') ?></button>
    </p>
</form>


<!-- CHANGE PASSWORD -->
<h2><?= lang('Auth.changePassword') ?></h2>

<form method="POST" action="<?= site_url('change-password'); ?>" accept-charset="UTF-8"
	onsubmit="changePassword.disabled = true; return true;">
	<?= csrf_field() ?>
	<p>
		<label><?= lang('Auth.currentPassword') ?></label><br />
		<input required type="password" minlength="5" name="password" value="" />
	</p>
	<p>
		<label><?= lang('Auth.newPassword') ?></label><br />
		<input required type="password" minlength="5" name="new_password" value="" />
	</p>
	<p>
		<label><?= lang('Auth.newPasswordAgain') ?></label><br />
		<input required type="password" minlength="5" name="new_password_confirm" value="" />
	</p>
    <p>
        <button name="changePassword" type="submit"><?= lang('Auth.update') ?></button>
    </p>
</form>


<!-- DELETE ACCOUNT -->
<h2><?= lang('Auth.deleteAccount') ?></h2>

<form method="POST" action="<?= site_url('delete-account') ?>" accept-charset="UTF-8">
    <?= csrf_field() ?>
    <p><?= lang('Auth.deleteAccountInfo') ?></p>
	<p>
		<label><?= lang('Auth.currentPassword') ?></label><br />
		<input required type="password" name="password" value="" />
	</p>
	<p>
		<button type="submit" onclick="return confirm('<?= lang('Auth.areYouSure') ?>')"><?= lang('Auth.deleteAccount') ?></button>
	</p>
</form>

</main>

</body>
</html>









