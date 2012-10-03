<?php

function range_check($n, $min, $max) {
	if ($n > $max) 
		return $max;
	if ($n < $min)
		return $min;
	return $n;
}

class Pager {

	public $base_url;
	public $total = 0;
	public $per_page = 10;
	public $page_var = 'page';

	public function show() {

		$total_page = (int)($this->total / $this->per_page) + 1;		
		$cur_page = (isset($_GET['p']))? $_GET['p'] : 0;

		echo '<div class="pager">';
		
		$page_no = range_check($cur_page-1, 0, $total_page-1);
		$href = sprintf($this->base_url, $page_no);
		$this->make_link('上一頁&lt;&lt; ', $href);
		
		for ($p = 0; $p < $total_page; $p++):
			if ($cur_page == $p):
				echo '<a href="#" class="font-bold">';
				echo $p+1;
				echo '</a> ';
				continue;
			endif;

			$href = sprintf($this->base_url, $p);
			$this->make_link($p+1, $href);			
		endfor;

		$page_no = range_check($cur_page+1, 0, $total_page-1);
		$href = sprintf($this->base_url, $page_no);
		$this->make_link(' &gt;&gt;下一頁',  $href);
		
		echo '</div>';
	}

	private function make_link($str, $link) {
		echo "<a href=\"$link\" >",	$str, '</a> ';
	}	
}