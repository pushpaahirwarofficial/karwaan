<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Countingdb extends Model
{
    public function count_comments()
	{
		$db = db_connect();
        $builder = $db->table('tbl_comment');
        $countComment   = $builder->countAll(); 
        return $countComment;
	}

    public function count_reply()
	{
		$db = db_connect();
        $builder = $db->table('tbl_reply');
        $countReply   = $builder->countAll(); 
        return $countReply;
	}

    public function count_like()
	{
		$db = db_connect();
        $countLike = $db->table('tbl_like')->get();
        return $countLike;
	}
}
