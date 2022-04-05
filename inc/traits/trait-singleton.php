<?php

namespace AQUILA_THEME\Inc\Traits;

trait Singleton
{
    public function __construct()
    {

    }

    public function __clone()
    {

    }

    final public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {
            $instance[$called_class] = new $called_class();

            do_action(sprintf('aquila_theme_singleton_init%s', $called_class));
        }
        return $instance[$called_class];
    }
}
/*
Static Keyword:
    The static keyword is used to declare properties and
    methods of a class as static
    Static properties can be accessed without creating
    an instance/object

Final Keyword:
    When a method is declared as final then overriding
    on that method can not be performed.
    Methods are declared as final due to some design reasons

get_called_class():
    The get_called_class() function is an inbuilt function in PHP which is used to get the class name where the static method is called. Parameters: This method does not accept any parameter. Return Value: This function returns the class name on success and returns False if it is called from outside a class.
 */
