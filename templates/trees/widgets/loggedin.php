<div class="sidebar">
	<h2>Welcome, <?php echo $account_logged->getName(); ?>.</h2>
	<div class="inner">
		<ul>
			<li>
				<a href="<?php echo getLink('account/manage'); ?>">My Account</a>
			</li>
			<?php if(empty($account_logged->getCustomField('key'))): ?>
				<li>
					<a href="<?php echo getLink('account/register'); ?>">Register Account</a>
				</li>
			<?php endif; ?>
			<li>
				<a href="<?php echo getLink('account/character/create'); ?>">Create Character</a>
			</li>
			<li>
				<a href="<?php echo getLink('account/character/delete'); ?>">Delete Character</a>
			</li>
			<li>
				<a href="<?php echo getLink('account/info'); ?>">Change Info</a>
			</li>
			<li>
				<a href="<?php echo getLink('account/password'); ?>">Change Password</a>
			</li>
			<li>
				<a href="<?php echo getLink('account/email'); ?>">Change Email</a>
			</li>
			<li>
				<a href="<?php echo getLink('account/logout'); ?>">Logout</a>
			</li>
		</ul>
	</div>
</div>