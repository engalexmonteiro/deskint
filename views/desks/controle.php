<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Collapse;

/* @var $this yii\web\View */
/* @var $model app\models\Desks */

$this->title = "Controle";
$this->params['breadcrumbs'][] = ['label' => 'Desks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


function sendcmd($deskint,$code,$type,$count){

        $request = "http://" . $deskint . '/testget.php?code=' . $code . "&type=" . $type . "&c=" . $count;

        echo $request . "</br>";

        $response = file_get_contents($request);
        echo $response;
}


?>
<div class="desks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

  <script language="Javascript">

	function httprequest() {
		var xhr = new XMLHttpRequest();
		xhr.open('GET',arguments[0], true);
		xhr.send();
		xhr.onreadystatechange = processRequest;
		
	}

	function processRequest(e) {
	    if (xhr.readyState == 4 && xhr.status == 200) {
        	// time to partay!!!
		document.write("tudo joia");
	  }
	}


  </script>



 <div class="panel-group" id="accordion">

	<?php

        	foreach ($desks as $desk) {

	?>
	  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $desk->id?>"><?= "Deskint " . $desk->ip_address  ?></a>
		      </h4>
		    </div>


		 	   <div id="collapse<?= $desk->id?>" class="panel-collapse collapse in">
			         <div class="panel-body">


				  <?

					 foreach ($devices[$desk->id] as $device) {

				        ?>
					          <div class="panel panel-default">
						          <div class="panel-heading">
					                      <h4 class="panel-title">
					                        <a data-toggle="collapse" data-parent="#accordion" href="#subcollapse<?= $device->id?>"><?= $device->name  ?></a>
					                      </h4>
					                    </div>
				                           <div id="subcollapse<?= $device->id?>" class="panel-collapse collapse in">
                                				 <div class="panel-body">
									<? foreach ($controls[$device->id] as $control) {?>
											<div class="row">
											 <div class="col-md-8"><?= $control->command?></div>
							 <?$request="\"" . "http://" . $desk->ip_address . '/testget.php?code=' . $control->ircode . "&type=NEC"  . "&c=1" . "\"" ;?>
	 			 <div class="col-md-4"> <button type="button" class="btn btn-primary" onclick='httprequest(<?= $request?>)'>SEND</button></div>
											</div>
									<?
                        						}?>


				                                </div>
				                                </div>
			                           </div>
				          </div>
		
			        <? } ?>



				</div>
				</div>
			   </div>
	  </div>
	
	<? } ?>

</div> 

    </p>


</div>
