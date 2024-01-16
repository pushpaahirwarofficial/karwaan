<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class Indexdb extends Model
{
	public function count_Slider()
	{
		$db = db_connect();
        $builder = $db->table('tbl_slider');
        $countSlider   = $builder->countAll(); 
        return $countSlider;
	}

	public function count_Achievement()
	{
		$db = db_connect();
        $builder = $db->table('tbl_achievement');
        $countAchievement = $builder->countAll(); 
        return $countAchievement;
	}

	public function count_Artist()
	{
		$db = db_connect();
        $builder = $db->table('tbl_artist');
        $countArtists   = $builder->countAll(); 
        return $countArtists;
	}

	public function count_ArtistData()
	{
		$db = db_connect();
        $builder = $db->table('tbl_artistData');
        $countArtistData   = $builder->countAll(); 
        return $countArtistData;
	}
	
	public function count_Songs()
	{
		$db = db_connect();
        $builder = $db->table('tbl_songs');
        $countSongs   = $builder->countAll(); 
        return $countSongs;
	}
	
	public function count_Videos()
	{
		$db = db_connect();
        $builder = $db->table('tbl_youtube');
        $countVideos   = $builder->countAll(); 
        return $countVideos;
	}
	public function count_Reviews()
	{
		$db = db_connect();
        $builder = $db->table('tbl_testimonial');
        $countReviews   = $builder->countAll(); 
        return $countReviews;
	}
	
	public function count_Images()
	{
		$db = db_connect();
        $builder = $db->table('tbl_gallery');
        $countImages   = $builder->countAll(); 
        return $countImages;
	}
	public function count_Contact()
	{
		$db = db_connect();
        $builder = $db->table('tbl_contact');
        $countContacts   = $builder->countAll(); 
        return $countContacts;
	}
	public function count_Letter()
	{
		$db = db_connect();
        $builder = $db->table('tbl_newsletter');
        $countLetter   = $builder->countAll(); 
        return $countLetter;
	}
	
	public function count_Event()
	{
		$db = db_connect();
        $builder = $db->table('tbl_event');
        $countEvents   = $builder->countAll(); 
        return $countEvents;
	}

	public function count_Tevent()
	{
		$db = db_connect();
        $builder = $db->table('tbl_tevent');
        $countTevents   = $builder->countAll(); 
        return $countTevents;
	}


	public function count_Blog()
	{
		$db = db_connect();
        $builder = $db->table('tbl_blog');
        $countBlogs   = $builder->countAll(); 
        return $countBlogs;
	}
}


