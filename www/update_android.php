<?php
	//Versions/Name of current applictaion
	//Version/Name should be the same, like the one in the manifest
	$meshchat_n = 'DKS-MeshChat';
	$meshchat_v = '0.1';

	$siganlgenerator_n = 'DKS-Signalgenerator';
	$siganlgenerator_v = '0.1';

	$fourieanalyzer_n = 'DKS-FourierAnalyzer';
	$fourieanalyzer_v = '0.1';

	//get the reqestet app
	$request = $_POST['version'];

	if($request === $meshchat_n){
		echo $meshchat_v;
	}
	elseif ($request === $siganlgenerator_n) {
		echo $siganlgenerator_v;
	}
	elseif ($request === $fourieanalyzer_n) {
		echo $fourieanalyzer_v;
	}
	else{
		echo "error";
	}
?>