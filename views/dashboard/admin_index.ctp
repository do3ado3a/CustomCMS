
 <h2>Dashboard</h2>
    
      <span class="welcome">
        Welcome Back, <?php echo $html->user('name'); ?>.
      </span>
      
      <div class="average">
        <div class="inner-average">
         <span class="title">Comments Per Week</span>
         <span class="count"><?php echo $html->averagePerWeek($commentTotalCount, $commentStartDate); ?></span>	
         <?php echo $html->upOrDown($html->averagePerWeek($commentTotalCount, $commentStartDate), $commentWeekCount); ?>
         <span class="all"><?php echo $html->link('view all', array('controller' => 'comments', 'action' => 'index')) ?></span>
         <span class="name">Comments</span>
        </div>
      </div>	
      
      <div class="average">
        <div class="inner-average">
         <span class="title">Subscribers Per Week</span>
         <span class="count"><?php echo $html->averagePerWeek($subscriberTotalCount, $subscriberStartDate); ?></span>	
           <?php echo $html->upOrDown($html->averagePerWeek($subscriberTotalCount, $subscriberStartDate), $subscriberWeekCount); ?>
         <span class="all"><?php echo $html->link('view all', array('controller' => 'users', 'action' => 'index')) ?></span>
          <span class="name">Subscribers</span>
        </div>
      </div>	
      
      <div class="average">
        <div class="inner-average">
         <span class="title">Blog Posts Per Week</span>
         <span class="count"><?php echo $html->averagePerWeek($postTotalCount, $postStartDate); ?></span>	
         <?php echo $html->upOrDown($html->averagePerWeek($postTotalCount, $postStartDate), $postWeekCount); ?>
         <span class="all"><?php echo $html->link('view all', array('controller' => 'posts', 'action' => 'index')) ?></span>
         <span class="name">Posts</span>
        </div>
      </div>	
      
      <div class="clear-floats"></div>
      
      
      <h2>Activity</h2>
      
<?php foreach ($posts as $post): ?>
  <?php $post[$post['Post']['type']] = $post['Post']; ?>
  <?php echo $this->element('admin/' . strtolower($post['Post']['type']), array('post' => $post)); ?>
<?php endforeach ?>