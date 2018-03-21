<?php
class DB{
   protected $host='localhost';
   protected $user='root';
   protected $pwd='root';
   protected $dbname='abcd';
   protected $link;
   protected static $null=null;
   public function __construct()
   {
   	   $res=mysqli_connect($this->host,$this->user,$this->pwd,$this->dbname);
   	   mysqli_query($res,'set names utf8');
       $this->link=$res;
   	   return $this;
   }
   public static function aa()
   {
            if(self::$null==null){
                 self::$null=new self();
            }
            return self::$null;
   }
   public function sql($sql)
   {   
   	    $ree=mysqli_query($this->link,$sql);
   	    $int=mysqli_affected_rows($this->link);
   	    if($int>0){
             return true;
   	    }else{
   	    	 return false;
   	    }
   }
   public function bb($sql)
   {
        $res=mysqli_query($this->link,$sql);
        $array=[];
        while ($arr=mysqli_fetch_assoc($res)) {
        	  $array[]=$arr;
        }
        return $array;
   }
    public function cc($sql){
          $res=mysqli_query($this->link,$sql);
          $arr=mysqli_fetch_assoc($res);
          return $arr;
   }
   
}
