<?php
class Stumodel extends CI_Model
{
    function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }

    function stuinsert($r,$s,$b,$f)
    {
    	$this->db->insert('student',array('rno'=>$r,'name'=>$s,'branch'=>$b,'fees'=>$f));//insert into student(rno,name,branch,fees) values($r,)
    	return $this->db->affected_rows();  //mysql_affected_rows
    }
     function stuupdate($r,$s,$b,$f)
    {
        $this->db->where('rno',$r);
        $this->db->update('student',array('name'=>$s,'branch'=>$b,'fees'=>$f));//update student set name=?,barnch=?,fees=? where rno=?
        return $this->db->affected_rows();  //mysql_affected_rows
    }
    function showstudent()
    {
    	$res = $this->db->get('student'); //select * from student
    	return $res->result_array();   //mysql_fetch_array
    }
    function findstudent($r)
    {
        $res = $this->db->get_where('student',array('rno'=>$r));
        return $res->result_array(); 
    }
     function deletestudent($r)
    {
        $res = $this->db->delete('student',array('rno'=>$r));//delete from student where rno=?
        return $this->db->affected_rows();
    }

}





?>