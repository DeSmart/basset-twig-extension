<?php namespace DeSmart\BassetTwigExtension;

use TwigBridge\Extension as BaseExtension;
use Illuminate\Foundation\Application;
use Twig_Environment;

class Extension extends BaseExtension {

  /**
   * Returns the name of the extension.
   *
   * @return string Extension name.
   */
  public function getName() {
    return 'BassetExtension';
  }

  /**
   * Create a new extension instance. Registers Twig undefined function callback.
   *
   * @param Illuminate\Foundation\Application $app
   * @param Twig_Environment                  $twig
   */
  public function __construct(Application $app, Twig_Environment $twig) {
    parent::__construct($app, $twig);
    $this->registerTwigFunctions();
  }

  private function registerTwigFunctions() {
    $this->twig->addFunction('basset_stylesheets', new \Twig_Function_Function('basset_stylesheets'));
    $this->twig->addFunction('basset_javascripts', new \Twig_Function_Function('basset_javascripts'));
  }
}
