<?php
class UserloginTest extends CDbTestCase{
    function  testSearch(){
        $db=Yii::app()->db->pdoInstance;
                $sth=$db->query('Select *from userlogin where email ');
                $users=$sth->fetchAll();
                $mUser=new Userlogin('search')   ;    
                $mUser->email='email';
                $mUserData=$mUser->search()->getData();
                $this->assertEquals($users,$mUserData);
				$sth2=$db->query('Select *from userlogin where name ');
				$user1=$sth2->fetchAll();
				 $mUser2=new Userlogin('search')   ; 
				$mUser2->name='name';
				$mUserData2=$mUser2->search()->getData();
				$this->assertEquals($user1,$mUserData2);
				$sth3=$db->query('Select *from userlogin where username');
				$user2=$sth3->fetchAll();
				 $mUser3=new Userlogin('search')   ; 
				$mUser3->name='username';
				$mUserData3=$mUser3->search()->getData();
				$this->assertEquals($user2,$mUserData3);
				
				
				
				
		
    }
    
    
}


