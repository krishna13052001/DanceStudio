<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'db_danweb');
class DB_con
{
    function __construct()
    {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    public function choreographerreg($txtname,$rdogender,$txtdob,$txtarea,$txtmn,$txtmail,$txtpd,$combodance,$txtawards)
    {
        $ret=mysqli_query($this->dbh,"insert into tbl_chor_reg(username,gender,dob,address,mobile_no,email_id,password,dance_type,any_awards) values('$txtname','$rdogender','$txtdob','$txtarea','$txtmn','$txtmail','$txtpd','$combodance','$txtawards')");

        return $ret;
    }
    public function add_rewards($sname,$cname,$dance_type,$rewards,$date)
    {
        $ret=mysqli_query($this->dbh,"insert into add_rewards(username,cname,dance_type,rewards,date) values('$sname','$cname','$dance_type','$rewards','$date')");

        return $ret;
    }

    public function studentreg($txtname,$rdogender,$txtdob,$txtarea,$txtmn,$txtmail,$txtpd,$combodance,$txtawards)
    {
        $ret=mysqli_query($this->dbh,"insert into tbl_stu_reg(username,gender,dob,address,mobile_no,email_id,password,dance_type,any_awards) values('$txtname','$rdogender','$txtdob','$txtarea','$txtmn','$txtmail','$txtpd','$combodance','$txtawards')");

        return $ret;
    }
	public function choreographerlogin($txtname,$txtpd)
    {
        $ret=mysqli_query($this->dbh,"insert into tbl_chor_login(username,password) values('$txtname','$txtpd')");
        return $ret;
    }
	public function studentlogin($txtname,$txtpd)
    {
        $ret=mysqli_query($this->dbh,"insert into tbl_stu_login(username,password) values('$txtname','$txtpd')");

        return $ret;
    }
	public function adminlogin($txtname,$txtpd)
    {
        $ret=mysqli_query($this->dbh,"insert into tbl_admin_login(username,password) values('$txtname','$txtpd')");

        return $ret;
    }
}
?>
