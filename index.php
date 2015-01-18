<?php include 'header.php'; ?>
	<!--==============================content================================-->
		<section id="content">
			<div class="main">
				<div class="slider-wrapper">
					<div class="slider">
						<ul class="items">
							<li>
								<img src="images/slider-login.jpg" alt="" />
								<strong class="banner">
									<a class="close" href="#">x</a>
									<strong>Released</strong>
									<span>Chitwanix OS 1.5</span>
									<b class="margin-bot">Chitwanix OS 1.5 "Khukuri" has been released officially and globally. You can download the iso from our </a href="http://downloads.chitwanix.com">Download Center</a> downloads.chitwanix.com</b>
									<a class="button2" href="#">Read More</a>
								</strong>
							</li>
							<li>
								<img src="images/slider-menu.jpg" alt="" />
								<strong class="banner">
									<a class="close" href="#">x</a>
									<strong>Ease of Use</strong>
									<span></span>
									<b class="margin-bot">Chitwanix OS 1.5 has preinstalled Desktop Environment called Sagarmatha having a traditional design and clean User Interface with tons of updated software packages necessary for daily computing habit of Nepali Users.</b>
									<a class="button2" href="#">Read More</a>
								</strong>
							</li>
							<li>
								<img src="images/slider-de.jpg" alt="" />
								<strong class="banner">
									<a class="close" href="#">x</a>
									<strong>Khukuri</strong>
									<span>What is Khukuri?</span>
									<b class="margin-bot">Chitwanix OS Version 1.5 with codename ‘Khukuri (Gurkha Blade)’ is an Operating System developed using Linux Kernel. The code naming convention of this OS is based on Nepal Recognizing Names with the sequence of Nepali Letters क(Ka), ख(Kha), ग(Ga) … with changing versions.</b>
									<a class="button2" href="#">Read More</a>
								</strong>
							</li>
							<li>
								<img src="images/slider-fest.jpg" alt="" />
								<strong class="banner">
									<a class="close" href="#">x</a>
									<strong>Install Fest</strong>
									<span>What is Chitwanix Install Fest?</span>
									<b class="margin-bot">Chitwanix Team is willing to organize one day Chitwanix Install Fest where People and student will be engaged themself to have taste of Chitwanix from very nearer. </b>
									<a class="button2" href="#">Read More</a>
								</strong>
							</li>
						</ul>
					</div>
					<ul class="pagination">
						<li><a class="item-1" href=""><strong>01</strong></a></li>
						<li><a class="item-2" href=""><strong>02</strong></a></li>
						<li><a class="item-3" href=""><strong>03</strong></a></li>
						<li><a class="item-4" href=""><strong>04</strong></a></li>
					</ul>
				</div>
				
				<div class="border-bot1 img-indent-bot">
					<h2>Chitwanix OS, a Linux Based Operating System Software<strong>For The Best Taste of Nepali<strong></h2>
				
						</div>
						<div id="right_sidebar">
						<script type="text/javascript"  style="margin-top:20px;margin-left:58%;">
google_ad_client = "ca-pub-0016961825077185";
/* Chitwanix-rightsidebar */
google_ad_slot = "7335081704";
google_ad_width = 300;
google_ad_height = 600;
style="margin-top:20px;margin-left:58%;"
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js" style="margin-top:20px; margin-left:58%;">
</script>
			</div>
					<div id="rss_content">
					<h4>
					
					    <?php
    $rss = new DOMDocument();
    $rss->load('http://blog.chitwanix.com/?feed=rss2');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
       'author' => $node->getElementsByTagName('author')->item(0)->nodeValue, );
    array_push($feed, $item);
    }
    $limit = 5;
    for($x=0;$x<$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
        $author = $feed[$x]['author'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
    echo '<small><em>Posted on '.$author.' '.$date.'</em></small></p>';
    echo '<p>'.$description.'</p>';
    }
    ?><strong>To read more goto <a href="http://blogs.chitwanix.com/">Chitwanix Blogs</strong></a></h4>
</div>		
		</div>
			</div>
		</section>
	<?php include 'footer.php'; ?>