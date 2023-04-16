<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-md-3">
	<form method="post" action="" class="panel-body">
		<div class="input-group">
			<div class="form-control-wrapper">
				<input type="text" name="s" class="form-control floating-label" placeholder="搜索" size="32" />
			</div>
			<span class="input-group-btn">
		    	<button class="btn btn-primary btn-fab btn-raised mdi-action-search" value="" id="search-btn" type="submit"></button>
			</span>
		</div>
	</form>

	<div class="panel panel-info">
		<a class="panel-heading" onclick="$('.about_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">Me</h3>
	    </a>

		<div class="about_box">
			<aside class="amadeus_about" style="display: block;">
				<div class="photo-background" style="background:url(<?php $this->options->themeUrl('')?>img/kinkoi-hamana.gif) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
					
					<a href="https://xiatg.me/about.html" title="关于我">
						<img src="<?php $this->options->themeUrl('')?>img/autumn.png" alt="关于我">
						<p>夏同光</p>
					</a>

					<p>不日远游。</p>
					
				</div>
			</aside>
		</div>  
    </div>

	<div class="panel panel-info">
	    <a class="panel-heading" onclick="$('.recent_posts_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">Articles</h3>
	    </a>
	    <div class="recent_posts_box">
	       <?php $this->widget('Widget_Contents_Post_Recent')
	        ->parse('<a href="{permalink}" class="item">{title}</a>'); ?>
	    </div>
	</div>

	<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
	<div class="panel panel-info">
	    <a class="panel-heading" onclick="$('.comments_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">Comments</h3>
	    </a>
	    <div class="comments_box">
			<?php while($comments->next()): ?>
			    <a href="<?php $comments->permalink(); ?>" class="item"><?php $comments->author(false); ?>: <?php $comments->excerpt(30, '...'); ?></a>
			<?php endwhile; ?>
	    </div>
	</div>

	<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=5')->to($tags); ?>
	<div class="panel panel-info">
	    <a class="panel-heading" onclick="$('.tags_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">Tags</h3>
	    </a>
		<div class="tags_box">
			<?php if($tags->have()): ?>
				<?php while ($tags->next()): ?>
				    <a href="<?php $tags->permalink(); ?>" rel="tag" class="item size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?><span class="badge pull-right"> <?php $tags->count(); ?></span></a>
				<?php endwhile; ?>
			<?php else: ?>
				<a class="item"><?php _e('没有任何标签'); ?></a>
			<?php endif; ?>
		</div>
	</div>

	<div class="panel panel-info">
	    <a class="panel-heading" onclick="$('.article_cate_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">Archive</h3>
	    </a>
	    <div class="article_cate_box">
	       <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
	        ->parse('<a href="{permalink}" class="item">{date}</a>'); ?>
	    </div>
	</div>

	<div class="panel panel-info">
		<a class="panel-heading" onclick="$('.friend_link').slideToggle()" href="javascript:;">
			<h3 class="panel-title">友链</h3>
		</a>
		<div class="friend_link">
			<p target="_blank" class="item"> <a href="http://www.lisuju.com/" >Li Suju</a> ~ 2021.10.31 </p>
		</div>
	</div>
 
	<div class="panel panel-info">
	    <a class="panel-heading" onclick="$('.other_box').slideToggle()" href="javascript:;">
	        <h3 class="panel-title">RSS</h3>
	    </a>
	    <div class="other_box">
	       <a href="<?php $this->options->feedUrl(); ?>" class="item"><?php _e('文章 RSS'); ?></a>
	       <a href="<?php $this->options->commentsFeedUrl(); ?>" class="item"><?php _e('评论 RSS'); ?></a>
	    </div>
	</div>

	<div class="panel panel-info">
		<a class="panel-heading" onclick="$('.globe_box').slideToggle()" href="javascript:;">
			<h3 class="panel-title">Visitor Footprint</h3>
		</a>
		<div class="globe_box">
			<script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=59kxxhtno0g&amp;m=7&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=0" async="async"></script>
		</div>
	</div>

</div>
