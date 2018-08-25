<?php
namespace xreload;
class  Datas
{
    public static function get()
    {

        //$datas[] = new Animal("Dog", "black", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $datas[] = new Animal("Cat", "blue", "with a tail");
        $datas[] = new Animal("Bird", "yellow", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $datas[] = new Animal("Koala", "silver", "with a long tail");
        //$datas[] = new Animal("Monkey", "silver", "with a really long tail");
        $datas[] = new Animal("Bear", "silver", "with a  long tail");

        return $datas;
    }
}
