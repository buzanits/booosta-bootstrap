<?php
namespace booosta\bootstrap;

\booosta\Framework::add_module_trait('webapp', 'bootstrap\webapp');

trait webapp
{
  protected function preparse_bootstrap()
  {
    if($this->config('bootstrap_loaded')) return;  // if bootstrap is already statically loaded in the template do not include it here

    if($this->moduleinfo['bootstrap']['use'] === true || $this->config('always_load_bootstrap') === true):
      $this->add_includes("<script src='{$this->base_dir}vendor/twbs/bootstrap/dist/js/bootstrap.min.js'></script>\n");
      $this->add_includes("<link href='{$this->base_dir}vendor/twbs/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>\n");
    elseif($this->moduleinfo['bootstrap']['use'] != ''):
      $this->add_includes("<script type='text/javascript' src='{$this->base_dir}vendor/twbs/bootstrap/dist/js/bootstrap-{$this->moduleinfo['bootstrap']['use']}.min.js'></script>\n");
      $this->add_includes("<link href='{$this->base_dir}vendor/twbs/bootstrap/dist/css/bootstrap-{$this->moduleinfo['bootstrap']['use']}.min.css' rel='stylesheet'>\n");
    elseif(($bootstrap = $this->config('always_load_bootstrap')) != ''):
      $this->add_includes("<script type='text/javascript' src='{$this->base_dir}vendor/twbs/bootstrap/dist/js/bootstrap-$bootstrap.min.js'></script>\n");
      $this->add_includes("<link href='{$this->base_dir}vendor/twbs/bootstrap/dist/css/bootstrap-$bootstrap.min.css' rel='stylesheet'>\n");
    endif;
  }
}