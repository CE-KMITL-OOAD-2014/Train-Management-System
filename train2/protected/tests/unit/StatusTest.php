<?php
class StatusTest extends CDbTestCase{
    function  testSearch(){
        $db=Yii::app()->db->pdoInstance;
        
				$sth2=$db->query('Select *from status where status ');
				$user1=$sth2->fetchAll();
				 $mUser2=new Status('search'); 
				$mUser2->status='status';
				$mUserData2=$mUser2->search()->getData();
				$this->assertEquals($user1,$mUserData2);
				$sth3=$db->query('Select *from status where date');
				$user2=$sth3->fetchAll();
				 $mUser3=new Status('search'); 
				$mUser3->date='date';
				$mUserData3=$mUser3->search()->getData();
				$this->assertEquals($user2,$mUserData3);
				
				
		
    }
	}
	?>