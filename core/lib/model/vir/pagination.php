<?php

namespace core\lib\model\vir;
use core\lib\conf;
class pagination
{
	public function __construct()
	{
		
	}
	
	public function setnav($data,$dallnum,$pagenum,$ctrlobj)
	{
		$pallnum = ceil(count($dallnum)/$pagenum);
		$ctrlobj->assign('pallnum',$pallnum);
		
		if(count($data)<$pagenum){
			$ctrlobj->assign('pagenum',false);
		}else{
			$ctrlobj->assign('pagenum',true);
		}
		
		
		$ctrlobj->assign('dallnumcount',count($dallnum));
		
		
		
		if($pallnum>10){
			$pallnume = $_GET['page']+9;
			if($pallnume>$pallnum){
				$pallnume = $pallnum;
			}
			if($pallnum-$_GET['page']>9){
				$pallnumsleftnum = 0;
				if($_GET['page']-PAGELISTPALLNUMSLEFTNUM>0){
					$pallnumsleftnum = PAGELISTPALLNUMSLEFTNUM;
				}else{
					$pallnumsleftnum = $_GET['page']-1;
				}
				$ctrlobj->assign('pallnums',$_GET['page']-$pallnumsleftnum);
			}else{
				$ctrlobj->assign('pallnums',$pallnum-9);
			}
			$ctrlobj->assign('pallnume',$pallnume);
		}else{
			$ctrlobj->assign('pallnums',1);
			$ctrlobj->assign('pallnume',$pallnum);
		}
		
		$ctrlobj->assign('page',$_GET['page']);
	}
	
	
	/*原始控制器部分代码备份
		$pallnum = ceil(count($dallnum)/$pagenum);
		$this->assign('pallnum',$pallnum);
		
		if(count($data)<$pagenum){
			$this->assign('pagenum',false);
		}else{
			$this->assign('pagenum',true);
		}
		
		
		$this->assign('dallnumcount',count($dallnum));
		
		
		
		if($pallnum>10){
			$pallnume = $_GET['page']+9;
			if($pallnume>$pallnum){
				$pallnume = $pallnum;
			}
			if($pallnum-$_GET['page']>9){
				$pallnumsleftnum = 0;
				if($_GET['page']-PAGELISTPALLNUMSLEFTNUM>0){
					$pallnumsleftnum = PAGELISTPALLNUMSLEFTNUM;
				}else{
					$pallnumsleftnum = $_GET['page']-1;
				}
				$this->assign('pallnums',$_GET['page']-$pallnumsleftnum);
			}else{
				$this->assign('pallnums',$pallnum-9);
			}
			$this->assign('pallnume',$pallnume);
		}else{
			$this->assign('pallnums',1);
			$this->assign('pallnume',$pallnum);
		}
		
		$this->assign('page',$_GET['page']);
		*/
}
?>