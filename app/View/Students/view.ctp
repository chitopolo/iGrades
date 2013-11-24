<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class = "container">
<div class="students view">
<h1><?php echo __('Student'); ?></h1>
	<dl>
		
		<dt> <h2><?php echo __('Last Name'); ?></h2></dt>
		<dd>
			<h3><?php echo h($student['Student']['paterno']); ?></h3>
			&nbsp;
		</dd>
		<dt> <h2><?php echo __('Materno'); ?></h2></dt>
		<dd>
			<h3> <?php echo h($student['Student']['materno']); ?></h3>
			&nbsp;
		</dd>
		<dt> <h2><?php echo __('Nombre'); ?></h2></dt>
		<dd>
			<h3> <?php echo h($student['Student']['nombre']); ?></h3>
			&nbsp;
		</dd>
		
		<dt> <h2><?php echo __('Mail'); ?></h2></dt>
		<dd>
			<h3> <?php echo h($student['Student']['mail']); ?></h3>
			&nbsp;
		</dd>
		
	</dl>
</div>

<div class="related">
	<?php $aux = 0?>
	<?php if (!empty($student['Grade'])): ?>
	<table class = "table" cellpadding = "0" cellspacing = "0">
	
	<?php foreach ($student['Grade'] as $grade): ?>
			
		

				<?php if ($aux == 0): ?>
			<div>
				<?php echo $aux ?>
<h1><?php echo __('Matematicas'); ?></h1>
<?php 
		$p1 = $grade['p1'];
		$p2 =  $grade['p2']; 
		$p3 =  $grade['ef']; 
		$p4 =   $grade['tp']; 
		$p5 =  $grade['ti']; 
		$p6 =   $grade['dc']; 
		 ?>
		 Numero 1

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      
 

      function drawChart() {
      	var p1 = <?php echo $p1; ?>;
      var p2 = <?php echo $p2; ?>;
      var p3 = <?php echo $p3; ?>;
      var p4 = <?php echo $p4; ?>;
      var p5 = <?php echo $p5; ?>;
      var p6 = <?php echo $p6; ?>;
      
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Notas'],
          ['Inicio', 0 ],
          ['Primer Parcial', parseFloat(p1) ],
          ['Segundo Parcial',    parseFloat(p2)],
          ['Tercer Parcial',   parseFloat(p3)],
          ['cuarto Parcial',   parseFloat(p4)],
          ['quinto Parcial',  parseFloat(p5)],
          ['sexto Parcial',   parseFloat(p6)],
        
          
        ]);
       

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }


    </script>

 
    <div id="chart_div" style="width: 1100px; height: 500px;"></div>
  
<?php endif ?>




		</div>



			
				<?php if ($aux == 2): ?>
			<div>
				<?php echo $aux ?>
<h1><?php echo __('Quimica'); ?></h1>
<?php 
		$pa = $grade['p1'];
		$pb =  $grade['p2']; 
		$pc=  $grade['ef']; 
		$pd =   $grade['tp']; 
		$pe =  $grade['ti']; 
		$pf =   $grade['dc']; 
		 ?>

		 Numero 2
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart2);
      
 

      function drawChart2() {
      	var pa = <?php echo $pa; ?>;
      var pb = <?php echo $pb; ?>;
      var pc = <?php echo $pc; ?>;
      var pd = <?php echo $pd; ?>;
      var pe = <?php echo $pe; ?>;
      var pf = <?php echo $pf; ?>;
      
        var data2 = google.visualization.arrayToDataTable([
          ['Time', 'Notas'],
          ['Inicio', 0 ],
          ['Primer Parcial', parseFloat(pa) ],
          ['Segundo Parcial',    parseFloat(pb)],
          ['Tercer Parcial',   parseFloat(pc)],
          ['cuarto Parcial',   parseFloat(pd)],
          ['quinto Parcial',  parseFloat(pe)],
          ['sexto Parcial',   parseFloat(pf)],
        
          
        ]);
       

        var options2 = {
          title: 'Company Performance'
        };

        var chart2 = new google.visualization.LineChart(document.getElementById('chart_div2'));
        chart2.draw(data2, options2);
      }


    </script>

 
    <div id="chart_div2" style="width: 1100px; height: 500px;"></div>

<?php endif ?>




		</div>

	

			
				<?php if ($aux == 3): ?>
			<div>
<?php echo $aux ?>
<h1><?php echo __('Fisica'); ?></h1>
<?php 
		$p11 = $grade['p1'];
		$p22 =  $grade['p2']; 
		$p33 =  $grade['ef']; 
		$p44 =   $grade['tp']; 
		$p55 =  $grade['ti']; 
		$p66 =   $grade['dc']; 
		 ?>
		 Numero 3

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart3);
      
 

      function drawChart3() {
      	var p11 = <?php echo $p11; ?>;
      var p22 = <?php echo $p22; ?>;
      var p33 = <?php echo $p33; ?>;
      var p44 = <?php echo $p44; ?>;
      var p55 = <?php echo $p55; ?>;
      var p66 = <?php echo $p66; ?>;
      
        var data3 = google.visualization.arrayToDataTable([
          ['Time', 'Notas'],
          ['Inicio', 0 ],
          ['Primer Parcial', parseFloat(p11) ],
          ['Segundo Parcial',    parseFloat(p22)],
          ['Tercer Parcial',   parseFloat(p33)],
          ['cuarto Parcial',   parseFloat(p44)],
          ['quinto Parcial',  parseFloat(p55)],
          ['sexto Parcial',   parseFloat(p66)],
        
          
        ]);
       

        var options3 = {
          title: 'Company Performance'
        };

        var chart3 = new google.visualization.LineChart(document.getElementById('chart_div3'));
        chart3.draw(data3, options3);
      }


    </script>

 
    <div id="chart_div3" style="width: 1100px; height: 500px;"></div>
  
<?php endif ?>




		</div>



		

	<?php if ($aux == 2): 
		$aux = 3;
	 elseif ($aux ==0): {
	  	$aux = 2;

	} 

	endif 
	?>


 


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
	<?php if (!empty($student['StudentTeacherMessage'])): ?>
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
	<?php foreach ($student['StudentTeacherMessage'] as $studentTeacherMessage): ?>
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
	<?php if (!empty($student['Subject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
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
	<?php foreach ($student['Subject'] as $subject): ?>
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