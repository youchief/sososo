<div id="header" class="container hidden-phone">
        <?php echo $this->Html->image('header.png', array('url'=>'/')) ?>
        <div class="menu text-right">
                <?php echo $this->Html->link('Trend book', 'http://sososomagazine.tumblr.com', array('target' => '_blank')); ?>
                <?php echo $this->Html->link('Issues', '/issues'); ?>
                <?php echo $this->Html->link('Events', '/events'); ?>
                <?php echo $this->Html->link('Resellers', '/resellers'); ?>
                <?php echo $this->Html->link('About', '/about'); ?>
                <?php echo $this->Html->link('Contact', '/contacts'); ?>
        </div>
</div>


<div class="navbar hidden-desktop hidden-tablet">
        <div class="navbar-inner">
                <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">SOSOSO magazine</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->
                        <div class="nav-collapse collapse">
                                <ul class="nav">
                                        <li><?php echo $this->Html->link('Trend book', array('controller' => 'tumblr', 'action' => 'index')); ?></li>
                                        <li><?php echo $this->Html->link('Issues', '/issues'); ?></li>
                                        <li><?php echo $this->Html->link('Events', '/events'); ?></li>
                                        <li><?php echo $this->Html->link('Resellers', '/resellers'); ?></li>
                                        <li><?php echo $this->Html->link('About', '/about'); ?></li>
                                        <li><?php echo $this->Html->link('Contact', '/contacts'); ?></li>
                                </ul>
                                <!-- .nav, .navbar-search, .navbar-form, etc -->
                        </div>

                </div>
        </div>
</div>