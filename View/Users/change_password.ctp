<div class="panel panel-default">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-8"><h3 style='margin-top:0px'>Change Password</h3></div>
			<div class="col-md-4 text-right"><?php echo $this->Html->actionIconBtn('fa fa-reply',' Back','index');?></div>
		</div>
	</div>
	<div class="panel-body">		
		<?php echo $this->Form->create('User', array('inputDefaults' => array('div' => 'col-md-12 form-group','class' => 'form-control'),'class' => 'form-horizontal','id'=>'UserChangePasswordForm')); ?>
		<div class="row">
			<div class="col-md-12">				
				<?php echo $this->Form->input('current_password', array(
					'type' => 'password',
				)); ?>
				<?php echo $this->Form->input('new_password', array(
					'type' => 'password',
				)); ?>
				<?php echo $this->Form->input('confirm_password', array(
					'type' => 'password',
				)); ?>
				<?php echo $this->Form->submit('Change Password', array(
					'div' => false,
					'class' => 'btn btn-primary'
				)); ?>
			</div>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
