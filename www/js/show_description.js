function hideDiv(){
	$( ".inside_div" ).hide( 1000 );
}

function showDiv(id){
	var obj = "."+id;
	$( obj ).show( "slow" );
}