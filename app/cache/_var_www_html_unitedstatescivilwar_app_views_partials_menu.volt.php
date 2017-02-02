<nav class="navbar navbar-fixed-top navbar-light bg-faded nav-top-menu" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#forum-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo $this->tag->linkTo(array('', $config->site->name, 'class' => 'navbar-brand', 'title' => 'Go to main page')); ?>
        </div>

        <div class="collapse navbar-collapse" id="forum-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><?php echo $this->tag->linkTo(array('discussions', '<span class="octicon octicon-comment-discussion"></span>', 'title' => 'Discussions')); ?></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownSearch" role="button" aria-haspopup="true" aria-expanded="false" title="Search">
                        <span class="octicon octicon-search"></span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownSearch">
                        <li>
                            <div style=""><?php echo $this->tag->form(array('search', 'method' => 'get', 'autocomplete' => 'off')); ?><div class="input-group search-group">
                                    <label class="sr-only" for="forum-search-input"></label>
                                    <input type="text" class="form-control input-sm" name="q" id="forum-search-input">
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Search">
                                    </span>
                                </div><?php echo $this->tag->endForm(); ?><!--<gcse:searchbox-only></gcse:searchbox-only>-->
                            </div>
                        </li>
                    </ul>
                </li>
                <li><?php echo $this->tag->linkTo(array('activity', '<span class="octicon octicon-eye"></span>', 'title' => 'Activity')); ?></li><?php if ($this->session->get('identity')) { ?><li class="notification-container"><?php echo $this->tag->linkTo(array('notifications', '<span class="octicon octicon-globe"></span>', 'title' => 'Notifications')); ?><?php if ($notifications->has()) { ?><span class="notification-counter"><?php echo $notifications->getNumber(); ?></span><?php } ?></li><?php } ?><li class="dropdown">
                    <a href="#" class="dropdown-toggle categories-link" data-toggle="dropdown" id="dropdownCategories" role="button" aria-haspopup="true" aria-expanded="false" title="Categories">
                        <span class="octicon octicon-list-unordered"></span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu categories-dropdown" aria-labelledby="dropdownCategories"><?php $_cache['sidebar'] = $this->di->get('viewCache'); $_cacheKey['sidebar'] = $_cache['sidebar']->start('sidebar'); if ($_cacheKey['sidebar'] === null) { ?><?php if (isset($categories)) { ?><?php foreach ($categories as $category) { ?><li><?php echo $this->tag->linkTo(array('category/' . $category->id . '/' . $category->slug, '<span class="label label-default pull-right">' . $category->number_posts . '</span>' . $category->name)); ?></li><?php } ?><?php } ?><?php $_cache['sidebar']->save('sidebar'); } else { echo $_cacheKey['sidebar']; } ?></ul>
                </li>
                <li><?php echo $this->tag->linkTo(array('help', '<span class="octicon octicon-info"></span>', 'title' => 'Help')); ?></li><?php if ($this->session->get('identity')) { ?><li><?php echo $this->tag->linkTo(array('settings', '<span class="octicon octicon-tools"></span>', 'title' => 'Settings')); ?></li>
                    <li><?php echo $this->tag->linkTo(array('logout', '<span class="octicon octicon-sign-out"></span>', 'title' => 'Logout')); ?></li><?php } ?></ul><?php if ($this->session->get('identity')) { ?><?php echo $this->tag->linkTo(array('post/discussion', '<span class="octicon octicon-megaphone"></span> Start a Discussion', 'class' => 'btn btn-sm btn-default navbar-btn navbar-right', 'rel' => 'nofollow')); ?><?php } else { ?><?php echo $this->tag->linkTo(array('login/oauth/authorize', '<span class="octicon octicon-octoface"></span> Log In with Github', 'class' => 'btn btn-sm btn-default navbar-btn navbar-right', 'rel' => 'nofollow')); ?><?php } ?></div>
    </div>
</nav>
