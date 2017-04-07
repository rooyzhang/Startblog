<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span><?php echo $this->lang->line('blog_aboutme'); ?></span></h2>
            <img src="<?php echo base_url('/static/img/favicon.png')?>" alt="about me" class="blog-entry-img" >
            <p>StartBlog</p>
            <p><?php echo $this->lang->line('blog_header'); ?></p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span><?php echo $this->lang->line('blog_contact'); ?></span></h2>
            <p>
                <a href="tencent://message/?uin=416049355"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href="https://github.com/Cryin/"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href="http://weibo.com/justear"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                <a href="<?php echo base_url('/feed')?>"><span class="am-icon-rss am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span><?php echo $this->lang->line('blog_tag'); ?></span></h2>
            <div class="am-u-sm-12 blog-clear-padding">

            <?php foreach ($all_tag as $key => $value): ?>
            <?php echo anchor("/Tag/show/{$value['id']}","{$value['tag_name']}",array('class' => 'blog-tag'));?>
            <?php endforeach ;?>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span><?php echo $this->lang->line('blog_friendly'); ?></span></h2>
            <ul class="am-list">
              <?php foreach ($friendship as $key => $value): ?>
                <li><a href="<?php echo $value['link']?>" target="_blank"><?php echo $value['link_name']?></a></li>
                <?php endforeach ;?>
            </ul>
        </div>
    </div>