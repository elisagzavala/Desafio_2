<?php
class Utils 
{
    public static function fetch_model( $model_name ){
        return (new $model_name)->paginate();
    }
}
