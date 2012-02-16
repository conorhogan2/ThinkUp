<?php /* Smarty version 2.6.26, created on 2012-02-16 15:51:52
         compiled from dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'dashboard.tpl', 15, false),array('modifier', 'get_plugin_path', 'dashboard.tpl', 48, false),array('modifier', 'capitalize', 'dashboard.tpl', 52, false),array('modifier', 'relative_datetime', 'dashboard.tpl', 54, false),array('modifier', 'count', 'dashboard.tpl', 64, false),array('modifier', 'array_reverse', 'dashboard.tpl', 111, false),array('modifier', 'replace', 'dashboard.tpl', 111, false),array('modifier', 'strip_tags', 'dashboard.tpl', 111, false),array('modifier', 'truncate', 'dashboard.tpl', 111, false),array('modifier', 'date_format', 'dashboard.tpl', 111, false),array('modifier', 'number_format', 'dashboard.tpl', 147, false),array('modifier', 'round', 'dashboard.tpl', 221, false),array('modifier', 'array_sum', 'dashboard.tpl', 235, false),array('modifier', 'ucwords', 'dashboard.tpl', 252, false),array('function', 'math', 'dashboard.tpl', 235, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_statusbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24">
  <div class="clearfix">

    <!-- begin left nav -->
    <div class="grid_4 alpha omega">
        <?php if ($this->_tpl_vars['instance']): ?>
      <div id="nav">
        <ul id="top-level-sidenav">
        <?php endif; ?>
        <?php if ($this->_tpl_vars['instance']): ?>
              <li<?php if ($_GET['v'] == ''): ?> class="selected"<?php endif; ?>>
                <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
">Dashboard</a>
              </li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['sidebar_menu']): ?>
          <?php $_from = $this->_tpl_vars['sidebar_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['smenuloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['smenuloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['smkey'] => $this->_tpl_vars['sidebar_menu_item']):
        $this->_foreach['smenuloop']['iteration']++;
?>
          <?php if (! $this->_tpl_vars['sidebar_menu_item']->parent): ?>
                <li<?php if ($_GET['v'] == $this->_tpl_vars['smkey'] || $this->_tpl_vars['parent'] == $this->_tpl_vars['smkey']): ?> class="selected"<?php endif; ?>>
                                <?php if ($this->_tpl_vars['parent'] == $this->_tpl_vars['smkey']): ?><?php $this->assign('parent_name', $this->_tpl_vars['sidebar_menu_item']->name); ?><?php endif; ?>
                <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?v=<?php echo $this->_tpl_vars['smkey']; ?>
&u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['sidebar_menu_item']->name; ?>
</a></li>
             <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

        <?php endif; ?>
        <?php if ($this->_tpl_vars['instance']): ?>
        </ul>
      </div>
        <?php endif; ?>
    </div>

    <div class="thinkup-canvas round-all grid_20 alpha omega prepend_20 append_20" style="min-height:340px">
      <div class="prefix_1 suffix_1">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['instance']): ?>
          <!--begin public user dashboard-->
          <?php if ($this->_tpl_vars['user_details']): ?>
            <div class="grid_18 alpha omega">
              <div class="clearfix alert stats round-all" id="">
                <div class="grid_2 alpha">
                  <div class="avatar-container">
                    <img src="<?php echo $this->_tpl_vars['user_details']->avatar; ?>
" class="avatar2"/>
                    <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/<?php echo ((is_array($_tmp=$this->_tpl_vars['user_details']->network)) ? $this->_run_mod_handler('get_plugin_path', true, $_tmp) : smarty_modifier_get_plugin_path($_tmp)); ?>
/assets/img/favicon.png" class="service-icon2"/>
                  </div>
                </div>
                <div class="grid_15 omega">
                  <span class="tweet"><?php echo $this->_tpl_vars['user_details']->username; ?>
 <span style="color:#ccc"><?php echo ((is_array($_tmp=$this->_tpl_vars['user_details']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</span></span><br />
                  <div class="small">
                    <?php if ($this->_tpl_vars['instance']->crawler_last_run == 'realtime'): ?><span style="color:green;">&#9679;</span> Updated in realtime<?php else: ?>Updated <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->crawler_last_run)) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
 ago<?php endif; ?><?php if (! $this->_tpl_vars['instance']->is_active): ?> (paused)<?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if ($this->_tpl_vars['data_template']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['data_template'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php else: ?> <!-- else if $data_template -->
            <?php if (count($this->_tpl_vars['hot_posts']) > 3): ?>
        <div class="section">
              <h2>Hot Posts</h2>
                <?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                    <?php if (($this->_foreach['foo']['iteration']-1) < 3): ?>
                        <?php if ($this->_tpl_vars['instance']->network == 'twitter'): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php else: ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'show_favorites_instead_of_retweets' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
        </div>
            <?php else: ?>
              <?php if ($this->_tpl_vars['recent_posts']): ?>
        <div class="section">
              <h2>Recent posts</h2>
              <div class="article">
                <?php $_from = $this->_tpl_vars['recent_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                    <?php if (($this->_foreach['foo']['iteration']-1) < 3): ?>
                        <?php if ($this->_tpl_vars['instance']->network == 'twitter'): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php else: ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'show_favorites_instead_of_retweets' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
              </div>
        </div>
              <?php else: ?>
        <div class="alert helpful">
                 No posts to display. <?php if ($this->_tpl_vars['logged_in_user']): ?>Update your data and try again.<?php endif; ?>
        </div>
              <?php endif; ?>
            <?php endif; ?>

            <?php if (count($this->_tpl_vars['hot_posts']) > 3): ?>
        <div class="section">
                <h2>Recent Activity</h2>
                <div class="clearfix article">
                    <?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?>
                        <?php $this->assign('ra_count', ($this->_tpl_vars['post']->favlike_count_cache+$this->_tpl_vars['post']->reply_count_cache+$this->_tpl_vars['post']->all_retweets)); ?>
                        <?php if ($this->_tpl_vars['ra_max'] < $this->_tpl_vars['ra_count']): ?>
                            <?php $this->assign('ra_max', $this->_tpl_vars['ra_count']); ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if ($this->_tpl_vars['instance']->network != 'twitter'): ?>
                        <img width="680" height="280" src="http://chart.googleapis.com/chart?chxs=0,,11&chxt=y&chxl=0:|<?php $_from = array_reverse($this->_tpl_vars['hot_posts']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['post']->post_text): ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->post_text)) ? $this->_run_mod_handler('replace', true, $_tmp, '|', '') : smarty_modifier_replace($_tmp, '|', '')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
<?php elseif ($this->_tpl_vars['post']->link->title): ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->link->title)) ? $this->_run_mod_handler('replace', true, $_tmp, '|', '') : smarty_modifier_replace($_tmp, '|', '')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
<?php elseif ($this->_tpl_vars['post']->link->url): ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->link->url)) ? $this->_run_mod_handler('replace', true, $_tmp, '|', '') : smarty_modifier_replace($_tmp, '|', '')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['post']->pub_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e") : smarty_modifier_date_format($_tmp, "%b %e")); ?>
<?php endif; ?>|<?php endforeach; endif; unset($_from); ?>&chd=t:<?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['post']->favlike_count_cache > 0): ?><?php echo $this->_tpl_vars['post']->favlike_count_cache; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>|<?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['post']->reply_count_cache > 0): ?><?php echo $this->_tpl_vars['post']->reply_count_cache; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chds=0,<?php echo $this->_tpl_vars['ra_max']+5; ?>
&chbh=a&chco=3E5D9A,3C8ECC&&chdl=<?php if ($this->_tpl_vars['instance']->network == 'google+'): ?>%2B1's<?php else: ?>Likes<?php endif; ?>|Replies&chs=700x280&cht=bhs&chm=N*s*,666666,-1,-1,11,,e:2:0">
                    <?php else: ?>
                        <img width="680" height="280" src="http://chart.googleapis.com/chart?chxs=0,,11&chxt=y&chxl=0:|<?php $_from = array_reverse($this->_tpl_vars['hot_posts']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->post_text)) ? $this->_run_mod_handler('replace', true, $_tmp, '|', '') : smarty_modifier_replace($_tmp, '|', '')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 50) : smarty_modifier_truncate($_tmp, 50)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
|<?php endforeach; endif; unset($_from); ?>&chd=t:<?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['post']->all_retweets > 0): ?><?php echo $this->_tpl_vars['post']->all_retweets; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>|<?php $_from = $this->_tpl_vars['hot_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post_id'] => $this->_tpl_vars['post']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['post']->reply_count_cache > 0): ?><?php echo $this->_tpl_vars['post']->reply_count_cache; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chds=0,<?php echo $this->_tpl_vars['ra_max']+5; ?>
&chbh=a&chco=3E5D9A,3C8ECC&chdl=Retweets|Replies&chs=700x280&cht=bhs&chm=N*s*,666666,-1,-1,11,,e:2:0">
                    <?php endif; ?>
                </div>
        </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['most_replied_to_1wk']): ?>
              <div class="section">
                <h2>This Week's Most <?php if ($this->_tpl_vars['instance']->network == 'google+'): ?>Discussed<?php else: ?>Replied-To<?php endif; ?> Posts</h2>
                <?php $_from = $this->_tpl_vars['most_replied_to_1wk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                    <?php if ($this->_tpl_vars['instance']->network == 'twitter'): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'headings' => 'NONE','show_favorites_instead_of_retweets' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
              </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['most_faved_1wk']): ?>
              <div class="section">
                <h2>This Week's Most <?php if ($this->_tpl_vars['instance']->network == 'google+'): ?>+1'ed<?php else: ?>Liked<?php endif; ?> Posts</h2>
                <?php $_from = $this->_tpl_vars['most_faved_1wk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'headings' => 'NONE','show_favorites_instead_of_retweets' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endforeach; endif; unset($_from); ?>
              </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['follower_count_history_by_day']['history'] && $this->_tpl_vars['follower_count_history_by_week']['history']): ?>
              
                <div class="section" style="float : left; clear : none; width : 345px;">
                  <h2>
                    <?php if ($this->_tpl_vars['instance']->network == 'twitter'): ?>Followers <?php elseif ($this->_tpl_vars['instance']->network == 'facebook page'): ?>Fans <?php elseif ($this->_tpl_vars['instance']->network == 'facebook'): ?>Friends <?php endif; ?>By Day
                    <?php if ($this->_tpl_vars['follower_count_history_by_day']['trend']): ?>
                        (<?php if ($this->_tpl_vars['follower_count_history_by_day']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_day']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/day)
                    <?php endif; ?>
                  </h2>
                  <?php if (! $this->_tpl_vars['follower_count_history_by_day']['history'] || count($this->_tpl_vars['follower_count_history_by_day']['history']) < 2): ?>
                    <div class="alert helpful">Not enough data to display chart</div>
                  <?php else: ?>
                      <div class="article">
                    <img width="320" height="200" src="http://chart.apis.google.com/chart?chs=320x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=7DD3F0&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['follower_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_day']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['follower_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_day']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,666666,0,-1,10,,e::5" />
                    </div>
                    <div class="view-all">
                    <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?v=<?php if ($this->_tpl_vars['instance']->network != 'twitter'): ?>friends<?php else: ?>followers<?php endif; ?>&u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
">More...</a>
                  </div>
                    
                  <?php endif; ?>
                </div>
                <div class="section" style="float : left; clear : none;margin-left : 16px; width : 345px;">
                  <h2>
                    <?php if ($this->_tpl_vars['instance']->network == 'twitter'): ?>Followers <?php elseif ($this->_tpl_vars['instance']->network == 'facebook page'): ?>Fans <?php elseif ($this->_tpl_vars['instance']->network == 'facebook'): ?>Friends <?php endif; ?> By Week
                    <?php if ($this->_tpl_vars['follower_count_history_by_week']['trend'] != 0): ?>
                        (<?php if ($this->_tpl_vars['follower_count_history_by_week']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_week']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/week)
                    <?php endif; ?>
                  </h2>
                  <?php if (! $this->_tpl_vars['follower_count_history_by_week']['history'] || count($this->_tpl_vars['follower_count_history_by_week']['history']) < 2): ?>
                      <div class="alert helpful">Not enough data to display chart</div>
                  <?php else: ?>
                    <div class="article">
                        <img width="320" height="200" src="http://chart.apis.google.com/chart?chs=320x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=7DD3F0&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['follower_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_week']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['follower_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_week']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,666666,0,-1,10,,e::5" />
                    </div>
                    <?php if ($this->_tpl_vars['follower_count_history_by_week']['milestone'] && $this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take'] > 0): ?>
                    <div class="stream-pagination"><small style="color:gray">
                        <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take']; ?>
 week<?php if ($this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_week']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 followers</span> at this rate.
                    </small></div>
                    <?php endif; ?>
                  <div class="view-all">
                    <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?v=<?php if ($this->_tpl_vars['instance']->network != 'twitter'): ?>friends<?php else: ?>followers<?php endif; ?>&u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
">More...</a>
                  </div>
                  <?php endif; ?>

                
                </div>

            <?php endif; ?>


            <?php if ($this->_tpl_vars['least_likely_followers']): ?>
              <div class="clearfix section">
                <h2>This Week's Most Discerning Followers</h2>
                <div class="clearfix article" style="padding-top : 0px;">
                <?php $_from = $this->_tpl_vars['least_likely_followers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['u']):
        $this->_foreach['foo']['iteration']++;
?>
                  <div class="avatar-container" style="float:left;margin:7px;">
                    <a href="https://twitter.com/intent/user?user_id=<?php echo $this->_tpl_vars['u']['user_id']; ?>
" title="<?php echo $this->_tpl_vars['u']['user_name']; ?>
 has <?php echo ((is_array($_tmp=$this->_tpl_vars['u']['follower_count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 followers and <?php echo ((is_array($_tmp=$this->_tpl_vars['u']['friend_count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 friends"><img src="<?php echo $this->_tpl_vars['u']['avatar']; ?>
" class="avatar2"/><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/<?php echo $this->_tpl_vars['u']['network']; ?>
/assets/img/favicon.png" class="service-icon2"/></a>
                  </div>
                <?php endforeach; endif; unset($_from); ?>
                <br /><br /><br />    
                </div>
                <div class="clearfix view-all">
                    <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?v=followers-leastlikely&u=<?php echo $this->_tpl_vars['instance']->network_username; ?>
&n=<?php echo $this->_tpl_vars['instance']->network; ?>
">More..</a>
                </div>
                </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['most_retweeted_1wk']): ?>
              <div class="clearfix section">
                <h2>This Week's Most <?php if ($this->_tpl_vars['instance']->network == 'google+'): ?>Reshared<?php else: ?>Retweeted<?php endif; ?></h2>
                <?php $_from = $this->_tpl_vars['most_retweeted_1wk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.counts_no_author.tpl", 'smarty_include_vars' => array('post' => $this->_tpl_vars['t'],'show_favorites_instead_of_retweets' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endforeach; endif; unset($_from); ?>
              </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['instance']->network == 'twitter' && count($this->_tpl_vars['recent_posts']) > 0): ?>
              <div class="section" style="float : left; clear : none; width : 314px;">
                  <div class="alpha">
                      <h2>Post Types</span></h2>
                      <div class="small prepend article">
                          <img width="250" height="175" src="http://chart.apis.google.com/chart?chxt=x,y&cht=bhg&chd=t:<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->percentage_replies)) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
,<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->percentage_links)) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
&&chco=7CC0D7&chls=2.0&chs=250x175&chxl=0:|20%|60%|100%|1:|Broadcaster|Conversationalist&chxp=0,20,60,100&chbh=50" />
                       </div>
                       <div class="stream-pagination"><small style="color:#666;padding:5px;">
                       <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->percentage_replies)) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
% posts are replies<br>
                          <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->percentage_links)) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
% posts contain links
                          </small>
                       </div>
                </div>
            </div>
                
            <div class="section" style="float : left; clear : none;margin-left : 10px; width : 380px;">
                   <div class="omega">
                        <h2>Client Usage <span class="detail">(all posts)</span></h2>
                        <div class="article">
                        <img width="350" height="200" src="http://chart.apis.google.com/chart?cht=p&chd=t:<?php $_from = $this->_tpl_vars['all_time_clients_usage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['num_posts']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['num_posts'] > 0): ?><?php echo smarty_function_math(array('equation' => "round(x/y*100,2)",'x' => $this->_tpl_vars['num_posts'],'y' => array_sum($this->_tpl_vars['all_time_clients_usage'])), $this);?>
<?php else: ?>0<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chs=350x200&chl=<?php $_from = $this->_tpl_vars['all_time_clients_usage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['num_posts']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['name']; ?>
+(<?php echo $this->_tpl_vars['num_posts']; ?>
)<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chco=7CC0D7,D5F0FC">
                        </div>
                        <div class="stream-pagination">
                        <small style="color:#666;padding:5px;">Recently posting about <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->posts_per_day)) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
 times a day<?php if ($this->_tpl_vars['latest_clients_usage']): ?>, mostly using <?php $_from = $this->_tpl_vars['latest_clients_usage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['num_posts']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['name']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?> and <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php endif; ?></small>
                        </div>
                   </div>
              </div>

            <?php endif; ?>
          <?php endif; ?> <!-- end if $data_template -->
        <?php endif; ?>

        <?php if (! $this->_tpl_vars['instance']): ?>
          <div style="width:60%;text-align:center;">
          <?php if ($this->_tpl_vars['add_user_buttons']): ?>
          <br ><br>
            <?php $_from = $this->_tpl_vars['add_user_buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['smenuloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['smenuloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['smkey'] => $this->_tpl_vars['button']):
        $this->_foreach['smenuloop']['iteration']++;
?>
                <div style="float:right;padding:5px;"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/?p=<?php echo $this->_tpl_vars['button']; ?>
" class="linkbutton emphasized">Add a <?php if ($this->_tpl_vars['button'] == 'googleplus'): ?>Google+<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['button'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
<?php endif; ?> Account &rarr;</a></div>
                <div style="clear:both;">&nbsp;</div>
             <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['logged_in_user']): ?>
          <div style="float:right;padding:5px;"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/" class="linkbutton emphasized">Adjust Your Settings</a></div>
          <?php else: ?>
          <div style="float:right;padding:5px;"><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php" class="linkbutton emphasized">Log In</a></div>
          <?php endif; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /.prefix_1 -->
    </div> <!-- /.thinkup-canvas -->

  </div> <!-- /.clearfix -->
</div> <!-- /.container_24 -->

<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/js/linkify.js"></script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>