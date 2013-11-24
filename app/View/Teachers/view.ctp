



<div class = "container moreSpace">
<div class="teachers view">
<h2><?php echo __('Teacher'); ?></h2>
	<dl>
		<h2><?php echo __('Id'); ?></h2>
		<h3>
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</h3>
		<dt><?php echo __('Paterno'); ?></h2>
		<h3>
			<?php echo h($teacher['Teacher']['paterno']); ?>
			&nbsp;
		</h3>
		
		<h2><?php echo __('Nombre'); ?></h2>
		<h3>
			<?php echo h($teacher['Teacher']['nombre']); ?>
			&nbsp;
		</h3>
		
		<h2><?php echo __('Mail'); ?></h2>
		<h3>
			<?php echo h($teacher['Teacher']['mail']); ?>
			&nbsp;
		</h3>
		
	</dl>
</div>

<?php echo $this->Html->image('profe.jpg', array( 'class' => 'media-object' , 'width' => '250')) ;?>



<div class ="col-md-4 col-md-offset-9">
	<form role="form">
  
  <div class="form-group">
    <label for="exampleInputFile" ><h2>Upload Grades Via Excel</h2></label>
    <input type="file" id="exampleInputFile" class = "btn btn-success">
    <p class="help-block"><h3>You can download our template to make it simpler</h3></p>
  </div>
 
</form>
</div>



<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($teacher['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('Materia'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Profesor'); ?></th>
		<th><?php echo __('P1'); ?></th>
		<th><?php echo __('P2'); ?></th>
		<th><?php echo __('Ef'); ?></th>
		<th><?php echo __('Tp'); ?></th>
		<th><?php echo __('Ti'); ?></th>
		<th><?php echo __('Dc'); ?></th>
		<th><?php echo __('Nf'); ?></th>
		<th><?php echo __('Si'); ?></th>
		<th><?php echo __('Condicion'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Modulo'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>


	<?php foreach ($teacher['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['student_id']; ?></td>
			<td><?php echo $grade['nombre']; ?></td>
			<td><?php echo $grade['subject_id']; ?></td>
			<td><?php echo $grade['materia']; ?></td>
			<td><?php echo $grade['teacher_id']; ?></td>
			<td><?php echo $grade['profesor']; ?></td>
			<td><?php echo $grade['p1']; ?></td>
			<td><?php echo $grade['p2']; ?></td>
			<td><?php echo $grade['ef']; ?></td>
			<td><?php echo $grade['tp']; ?></td>
			<td><?php echo $grade['ti']; ?></td>
			<td><?php echo $grade['dc']; ?></td>
			<td><?php echo $grade['nf']; ?></td>
			<td><?php echo $grade['si']; ?></td>
			<td><?php echo $grade['condicion']; ?></td>
			<td><?php echo $grade['fecha']; ?></td>
			<td><?php echo $grade['modulo']; ?></td>
			<td><?php echo $grade['created_at']; ?></td>
			<td><?php echo $grade['updated_at']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), null, __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Student Teacher Messages'); ?></h3>
	<?php if (!empty($teacher['StudentTeacherMessage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($teacher['StudentTeacherMessage'] as $studentTeacherMessage): ?>
		<tr>
			<td><?php echo $studentTeacherMessage['id']; ?></td>
			<td><?php echo $studentTeacherMessage['student_id']; ?></td>
			<td><?php echo $studentTeacherMessage['teacher_id']; ?></td>
			<td><?php echo $studentTeacherMessage['subject']; ?></td>
			<td><?php echo $studentTeacherMessage['message']; ?></td>
			<td><?php echo $studentTeacherMessage['created_at']; ?></td>
			<td><?php echo $studentTeacherMessage['updated_at']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_teacher_messages', 'action' => 'view', $studentTeacherMessage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_teacher_messages', 'action' => 'edit', $studentTeacherMessage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_teacher_messages', 'action' => 'delete', $studentTeacherMessage['id']), null, __('Are you sure you want to delete # %s?', $studentTeacherMessage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Teacher Message'), array('controller' => 'student_teacher_messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subjects'); ?></h3>
	<?php if (!empty($teacher['Subject'])): ?>
	<table class = "table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th><?php echo __('Sigla'); ?></th>
		<th><?php echo __('Materia'); ?></th>
		<th><?php echo __('Horario'); ?></th>
		<th><?php echo __('Semestre'); ?></th>
		<th><?php echo __('Aula'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($teacher['Subject'] as $subject): ?>
		<tr>
			<td><?php echo $subject['id']; ?></td>
			<td><?php echo $subject['registro']; ?></td>
			<td><?php echo $subject['sigla']; ?></td>
			<td><?php echo $subject['materia']; ?></td>
			<td><?php echo $subject['horario']; ?></td>
			<td><?php echo $subject['semestre']; ?></td>
			<td><?php echo $subject['aula']; ?></td>
			<td><?php echo $subject['created_at']; ?></td>
			<td><?php echo $subject['updated_at']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, __('Are you sure you want to delete # %s?', $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

</div>
