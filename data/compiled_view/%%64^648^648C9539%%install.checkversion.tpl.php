<?php /* Smarty version 2.6.26, created on 2012-02-16 15:51:52
         compiled from install.checkversion.tpl */ ?>
<?php echo 'ThinkUpAppVersion = new function()  {
  var CONTENT_URL = \'http://thinkupapp.com/version.php?v='; ?>
<?php echo $this->_tpl_vars['thinkup_version']; ?>
<?php if ($this->_tpl_vars['is_opted_out_usage_stats']): ?>&usage=n<?php endif; ?><?php echo '\';
  var ROOT = \'thinkup_version\';

  function requestContent( local ) {
    var script = document.createElement(\'script\');
    // How you\'d pass the current URL into the request
    // script.src = CONTENT_URL + \'&url=\' + escape(local || location.href);
    script.src = CONTENT_URL;
    // IE7 doesn\'t like this: document.body.appendChild(script);
    // Instead use:
    document.getElementsByTagName(\'head\')[0].appendChild(script);
  }

  this.serverResponse = function( data ) {
    if (!data[0].version) return;
    var div = document.getElementById(ROOT);
    var txt = \'\';
//    console.debug(data);
//    console.debug(\'version \' + data[0].version);
    txt += \' | <a href="http://thinkupapp.com/docs/install/upgrade.html">\'+data[0].version+\'</a>\';
    div.innerHTML =  txt;  // assign new HTML into #ROOT
    div.style.display = \'inline\'; // make element visible
  }

  document.write("<span id=\'" + ROOT + "\' style=\'display: none\'></span>");
  requestContent();
}'; ?>