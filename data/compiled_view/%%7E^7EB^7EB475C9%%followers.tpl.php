<?php /* Smarty version 2.6.26, created on 2012-02-16 17:13:17
         compiled from /Applications/MAMP/htdocs/thinkup/plugins/twitter/view/followers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/Applications/MAMP/htdocs/thinkup/plugins/twitter/view/followers.tpl', 1, false),array('modifier', 'number_format', '/Applications/MAMP/htdocs/thinkup/plugins/twitter/view/followers.tpl', 7, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/thinkup/plugins/twitter/view/followers.tpl', 54, false),)), $this); ?>
<?php if (count($this->_tpl_vars['leastlikelythisweek']) > 1): ?>
<div class="section">
    <h2>This Week's Most Discerning Followers</h2>
    <div class="article" style="padding-left : 0px; padding-top : 0px;">
    <?php $_from = $this->_tpl_vars['leastlikelythisweek']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['u']):
        $this->_foreach['foo']['iteration']++;
?>
      <div class="avatar-container" style="float:left;margin:7px;">
        <a href="https://twitter.com/intent/user?user_id=<?php echo $this->_tpl_vars['u']['user_id']; ?>
"  title="<?php echo $this->_tpl_vars['u']['user_name']; ?>
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
    <div class="view-all"><a href="?v=followers-leastlikely&u=<?php echo $this->_tpl_vars['instance']->network_username; ?>
&n=twitter">More...</a></div>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['leastlikely']) > 1): ?>
<div class="section">
    <h2>All-Time Most Discerning Followers</h2>
    <div class="article" style="padding-left : 0px; padding-top : 0px;">
    <?php $_from = $this->_tpl_vars['leastlikely']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['u']):
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
    <div class="view-all"><a href="?v=followers-leastlikely&u=<?php echo $this->_tpl_vars['instance']->network_username; ?>
&n=twitter">More...</a></div>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['popular']) > 1): ?>
<div class="section">
    <h2>Most Popular Followers</h2>
    <div class="article" style="padding-left : 0px; padding-top : 0px;">
    <?php $_from = $this->_tpl_vars['popular']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['u']):
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
<div class="view-all"><a href="?v=followers-mostfollowed&u=<?php echo $this->_tpl_vars['instance']->network_username; ?>
&n=twitter">More...</a></div>
</div>
<?php endif; ?>


<div class="section">
    <h2>Follower Count By Day <?php if ($this->_tpl_vars['follower_count_history_by_day']['trend']): ?>(<?php if ($this->_tpl_vars['follower_count_history_by_day']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_day']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/day)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['follower_count_history_by_day']['history'] || count($this->_tpl_vars['follower_count_history_by_day']['history']) < 2): ?>
    <div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">
    
    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['follower_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_day']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['follower_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_day']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />
    </div>
    <?php if ($this->_tpl_vars['follower_count_history_by_day']['milestone'] && $this->_tpl_vars['follower_count_history_by_day']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination"><small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['follower_count_history_by_day']['milestone']['will_take']; ?>
 day<?php if ($this->_tpl_vars['follower_count_history_by_day']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_day']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 followers</span> at this rate.</small>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>

<div class="section">
    <h2>Follower Count By Week <?php if ($this->_tpl_vars['follower_count_history_by_week']['trend'] != 0): ?>(<?php if ($this->_tpl_vars['follower_count_history_by_week']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_week']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/week)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['follower_count_history_by_week']['history'] || count($this->_tpl_vars['follower_count_history_by_week']['history']) < 2): ?><div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">
    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['follower_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_week']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['follower_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_week']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />
    </div>
    <?php if ($this->_tpl_vars['follower_count_history_by_week']['milestone'] && $this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination">
    <small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take']; ?>
 week<?php if ($this->_tpl_vars['follower_count_history_by_week']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_week']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 followers</span> at this rate.</small> 
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>

<div class="section">
    <h2>Follower Count By Month <?php if ($this->_tpl_vars['follower_count_history_by_month']['trend'] != 0): ?>(<?php if ($this->_tpl_vars['follower_count_history_by_month']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_month']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/month)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['follower_count_history_by_month']['history'] || count($this->_tpl_vars['follower_count_history_by_month']['history']) < 2): ?><div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">
    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_month']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b '%y") : smarty_modifier_date_format($_tmp, "%b '%y")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_month']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_month']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['follower_count_history_by_month']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_month']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['follower_count_history_by_month']['min_count']; ?>
,<?php echo $this->_tpl_vars['follower_count_history_by_month']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />
    </div>

    <?php if ($this->_tpl_vars['follower_count_history_by_month']['milestone'] && $this->_tpl_vars['follower_count_history_by_month']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination">
    <small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['follower_count_history_by_month']['milestone']['will_take']; ?>
 month<?php if ($this->_tpl_vars['follower_count_history_by_month']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['follower_count_history_by_month']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 followers</span> at this rate.</small>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>

<div class="section">
    <h2>List Membership Count By Day <?php if ($this->_tpl_vars['list_membership_count_history_by_day']['trend']): ?>(<?php if ($this->_tpl_vars['list_membership_count_history_by_day']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_day']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/day)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['list_membership_count_history_by_day']['history'] || count($this->_tpl_vars['list_membership_count_history_by_day']['history']) < 2): ?>
    <div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">

    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_day']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['list_membership_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['list_membership_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_day']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['list_membership_count_history_by_day']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_day']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />

    <?php if ($this->_tpl_vars['list_membership_count_history_by_day']['milestone'] && $this->_tpl_vars['list_membership_count_history_by_day']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination"><small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['list_membership_count_history_by_day']['milestone']['will_take']; ?>
 day<?php if ($this->_tpl_vars['list_membership_count_history_by_day']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_day']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 groups</span> at this rate.</small></div>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<div class="section">
    <h2>List Membership Count By Week <?php if ($this->_tpl_vars['list_membership_count_history_by_week']['trend'] != 0): ?>(<?php if ($this->_tpl_vars['list_membership_count_history_by_week']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_week']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/week)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['list_membership_count_history_by_week']['history'] || count($this->_tpl_vars['list_membership_count_history_by_week']['history']) < 2): ?><div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">
    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d") : smarty_modifier_date_format($_tmp, "%b %d")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_week']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['list_membership_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['list_membership_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_week']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['list_membership_count_history_by_week']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_week']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />
    <?php if ($this->_tpl_vars['list_membership_count_history_by_week']['milestone'] && $this->_tpl_vars['list_membership_count_history_by_week']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination"><small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['list_membership_count_history_by_week']['milestone']['will_take']; ?>
 week<?php if ($this->_tpl_vars['list_membership_count_history_by_week']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_week']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 groups</span> at this rate.</small></div>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<div class="section">
    <h2>List Membership Count By Month <?php if ($this->_tpl_vars['list_membership_count_history_by_month']['trend'] != 0): ?>(<?php if ($this->_tpl_vars['list_membership_count_history_by_month']['trend'] > 0): ?><span style="color:green">+<?php else: ?><span style="color:red"><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_month']['trend'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>/month)<?php endif; ?></h2>
    <?php if (! $this->_tpl_vars['list_membership_count_history_by_month']['history'] || count($this->_tpl_vars['list_membership_count_history_by_month']['history']) < 2): ?><div class="alert urgent">Not enough data to display chart</div>
    <?php else: ?>
    <div class="article">

    <img src="http://chart.apis.google.com/chart?chs=680x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_month']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['tid'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b '%y") : smarty_modifier_date_format($_tmp, "%b '%y")); ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['list_membership_count_history_by_month']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=bvs&chco=3E5D9A&chd=t:<?php $_from = $this->_tpl_vars['list_membership_count_history_by_month']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php if ($this->_tpl_vars['t'] > 0): ?><?php echo $this->_tpl_vars['t']; ?>
<?php else: ?>_<?php endif; ?><?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chbh=a&chds=<?php echo $this->_tpl_vars['list_membership_count_history_by_month']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_month']['max_count']; ?>
&chxr=<?php echo $this->_tpl_vars['list_membership_count_history_by_month']['min_count']; ?>
,<?php echo $this->_tpl_vars['list_membership_count_history_by_month']['max_count']; ?>
&chxs=1N*s*&chm=N*s*,3C8ECC,0,-1,10,,e::5" />
    
    <?php if ($this->_tpl_vars['list_membership_count_history_by_month']['milestone'] && $this->_tpl_vars['list_membership_count_history_by_month']['milestone']['will_take'] > 0): ?>
    <div class="stream-pagination"><small style="color:gray">NEXT MILESTONE: <span style="background-color:#FFFF80;color:black"><?php echo $this->_tpl_vars['list_membership_count_history_by_month']['milestone']['will_take']; ?>
 month<?php if ($this->_tpl_vars['list_membership_count_history_by_month']['milestone']['will_take'] > 1): ?>s<?php endif; ?></span> till you reach <span style="background-color:#FFFF80;color:black"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_membership_count_history_by_month']['milestone']['next_milestone'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 groups</span> at this rate.</small></div>
    <?php endif; ?>
    </div>
    <?php endif; ?>
</div>