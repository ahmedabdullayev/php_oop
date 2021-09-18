<?php
//https://forums.phpfreaks.com/topic/310705-best-way-to-load-controller-mvc/
const DIR = __DIR__;
const DS = DIRECTORY_SEPARATOR;
const CLASSES = DIR . DS . 'classes';
const CONTROLLERS = DIR . DS . 'controllers';
const MODELS = DIR . DS . 'models';
const VIEWS = DIR . DS . 'views';

const AUTOLOAD_CLASSES = array(CLASSES, CONTROLLERS, MODELS, VIEWS);
