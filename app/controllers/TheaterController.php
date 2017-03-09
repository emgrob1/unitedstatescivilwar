<?php

class TheaterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function ajaxTest(){
		$myVar = "sample";
		
		echo '<script>
var myvar = "<?php echo $myVar; ?>";
</script>';
	}
}

