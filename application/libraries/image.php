<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image{
	private $CI;
	private $images = array();
	
	function __construct($params = array()){
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();
		
		// Load the Sessions class
		$this->CI->load->library('session');
		
		// Grab the authors array from the session table, if it exists
		if ($this->CI->session->userdata('images') !== FALSE)
		{
			$this->images = $this->CI->session->userdata('images');
		}
		else
		{
			
		}
	}
	
	public function insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) == 0)
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}
				
		$save_image = FALSE;		
		if (isset($items['image_name']))
		{			
			if ($this->_insert($items) == TRUE)
			{
				$save_image = TRUE;
			}
		}
		else
		{
			foreach ($items as $val)
			{
				if (is_array($val) AND isset($val['image_name']))
				{
					if ($this->_insert($val) == TRUE)
					{
						$save_image = TRUE;
					}
				}			
			}
		}

		// Save the banks data if the insert was successful
		if ($save_image == TRUE)
		{
			$this->saveImage();
			return TRUE;
		}

		return FALSE;
	}
	
	private function _insert($items = array())
	{
		// Was any cart data passed? No? Bah...
		if ( ! is_array($items) OR count($items) == 0)
		{
			log_message('error', 'The insert method must be passed an array containing data.');
			return FALSE;
		}
						
		$rowid = md5($items['image_name']);
			
		unset($this->images[$rowid]);		
		
		// Create a new index with our new row ID
		$this->images[$rowid]['rowid'] = $rowid;
	
		// And add the new items to the cart array			
		foreach ($items as $key => $val)
		{
			$this->images[$rowid][$key] = $val;
		}

		// Woot!
		return TRUE;
	}
	
	private function saveImage()
	{
		
		$this->CI->session->unset_userdata('images');
		$this->CI->session->set_userdata(array('images' => $this->images));

		return TRUE;	
	}
	
	public function update($items = array())
	{
		// Was any contact data passed?
		if ( ! is_array($items) OR count($items) == 0)
		{
			return FALSE;
		}
			
		$save_image = FALSE;
		if (isset($items['rowid']))
		{
			if ($this->_update($items) == TRUE)
			{
				$save_image = TRUE;
			}
		}
		else
		{
			foreach ($items as $val)
			{
				if (is_array($val) AND isset($val['image_name']))
				{
					if ($this->_update($val) == TRUE)
					{
						$save_image = TRUE;
					}
				}			
			}
		}

		// Save the cart data if the insert was successful
		if ($save_image == TRUE)
		{
			$this->saveImage();
			return TRUE;
		}

		return FALSE;
	}
	
	private function _update($items = array())
	{
		// Without these array indexes there is nothing we can do
		if ( ! isset($items['image_name']))
		{
			return FALSE;
		}
		
		if ($this->images[$items['rowid']]['image_name'] == $items['image_name'])
		{
			$rowid = md5($items['image_name']);
			unset($this->images[$rowid]);		

			// Create a new index with our new row ID
			$this->images[$rowid]['rowid'] = $rowid;
		
			// And add the new items to the cart array			
			foreach ($items as $key => $val)
			{
				$this->images[$rowid][$key] = $val;
			}
		}
		return TRUE;
	}
	
	public function remove($image_name)
	{
		$save_image = FALSE;
		$rowid = md5($image_name);
		if ($this->images[$rowid]['image_name'] == $image_name)
		{
			
			unset($this->images[$rowid]);	
			$save_image = TRUE;
		}
		
		if ($save_image == TRUE)
		{
			$this->saveImage();
			return TRUE;
		}
	}
	
	public function contents()
	{
		$cart = $this->images;
			
		return $cart;
	}
	
	public function destroy()
	{
                unset($this->images);	
                
		$this->CI->session->unset_userdata('images');
	}
	
}