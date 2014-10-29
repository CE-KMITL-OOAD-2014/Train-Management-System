<?php
class LineTest extends CDbTestCase{
    function  testSearch(){
        $db=Yii::app()->db->pdoInstance;
				$sth2=$db->query('Select *from line where source ');
				$user1=$sth2->fetchAll();
				 $mUser2=new Line('search'); 
				$mUser2->source='source';
				$mUserData2=$mUser2->search()->getData();
				$this->assertEquals($user1,$mUserData2);
				$sth3=$db->query('Select *from line where dest');
				$user2=$sth3->fetchAll();
				 $mUser3=new Line('search'); 
				$mUser3->dest='dest';
				$mUserData3=$mUser3->search()->getData();
				$this->assertEquals($user2,$mUserData3);
				
				
		
    }
	}
	?>