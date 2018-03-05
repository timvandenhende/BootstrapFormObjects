<?php

namespace Plugin\OLODplan;

class Event
{
    public static function ipBeforeController()
    {
        ipAddCss('assets/bootstrap.css');
        ipAddCss('assets/bootstrap-multiselect.js');
        ipAddJs('assets/bootstrap-multiselect.css');
    }

    public static function OLODplan_endload(){
        echo '<script type="text/javascript">
                $(document).ready(function() {
                    $(\'#Leeractiviteitid\').multiselect();
                });
            </script>';
    }
}