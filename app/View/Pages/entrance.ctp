<h1>Makin' stuff good.</h1>
<div class="tabcondom">
	<a class="linkset" href="#down" onClick="openGuts('#left')">Clients</a>
	<a class="linkset" href="#down" onClick="openGuts('#center')">Services</a>
	<a class="linkset" href="#down" onClick="openGuts('#right')">Events</a>
</div>
<div class="hand"><div class="scalpel center"></div></div>
<div class="skin">	
	<div class="guts clearfix">
		<div class="organ" id="left">
			<button class="prev dBtn tis0 respHbigger" onClick="tissue0('prev')">&laquo;</button>
			<div class="membrane">
				<div class="tissue">
					<?php
					foreach ($clients as $client):
						echo '<div class="cell">';
						echo $this->Html->tag('h3', $client['Clients']['name'], array('class' => 'respHsmaller'));
						echo '</div>';
					endforeach;
					?>
				</div>
			</div>
			<button class="next dBtn tis0 respHbigger" onClick="tissue0('next')">&raquo;</button>
		</div>
		<div class="organ" id="center">
			<button class="prev dBtn tis1 respHbigger" onClick="tissue1('prev')">&laquo;</button>
			<div class="membrane">
				<div class="tissue">
					<?php
					foreach ($services as $service):
						echo '<div class="cell">';
						echo $this->Html->tag('h3', $service['Services']['name'], array('class' => 'respHsmaller'));
						echo '</div>';
					endforeach;
					?>
				</div>
			</div>
			<button class="next dBtn tis1 respHbigger" onClick="tissue1('next')">&raquo;</button>
		</div>
		<div class="organ" id="right">
			<button class="prev dBtn tis2 respHbigger" onClick="tissue2('prev')">&laquo;</button>
			<div class="membrane">	
				<div class="tissue">
					<?php
					foreach ($events as $event):
						echo '<div class="cell">';
						echo $this->Html->tag('h3', $event['Events']['name'], array('class' => 'respHsmaller'));
						echo '</div>';
					endforeach;
					?>
				</div>
			</div>
			<button class="next dBtn tis2 respHbigger" onClick="tissue2('next')">&raquo;</button>
		</div>
	</div>
</div>
<div id="down">&nbsp;</div>	