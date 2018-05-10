<?php
/**
 * Created by PhpStorm.
 * User: poweruser
 * Date: 5/03/2018
 * Time: 15:55
 */

class Model {
    public static function RenderFormElementText($label, $id, $name, $value = "", $placeholder=""){
        $returndata= '<div class="form-group">
                        <label>'.$label.'</label>
                        <input required type="text" class="form-check-input col-md-12" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'" value="'.$value.'">
                      </div>
                    ';
        return $returndata;
    }

    public static function RenderFormElementRichText($label, $id, $name, $value = "", $placeholder=""){
        $returndata= '<div class="form-group type-richText">
                        <label>'.$label.'</label>
                        <textarea required class="form-check-input col-md-12" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'">'.$value.'</textarea>
                      </div>
                    ';
        return $returndata;
    }

    public static function RenderFormElementNumber($label, $id, $name, $value = ""){
        $returndata= '<div class="form-group type-number">
                        <label>'.$label.'</label>
                        <input required type="number" class="form-check-input" id="'.$id.'" name="'.$name.'" value="'.$value.'">
                      </div>
                    ';
        return $returndata;
    }

    public static function RenderFormElementCheckbox($label, $id, $name, $value = "",$checked=""){
        $returndata= '<div class="form-group type-number">
                        <label>'.$label.'</label>
                        <input type="checkbox" class="form-check-input" id="'.$id.'" name="'.$name.'" value="'.$value.'"';
        if($checked == 1){
            $returndata = $returndata.' checked';
        }
        $returndata = $returndata.'>
                      </div>
                    ';
        return $returndata;
    }

    public static function RenderFormElementSelect($label,$id,$name,$values,$selected=""){
        $returndata = '<div class="form-group">
                        <label">'.$label.'</label>
                            <select required class="form-control" id="'.$id.'" name="'.$name.'">';
        foreach ($values as $value){
            $returndata = $returndata.'<option value="'.$value[0].'"';
            if ($value[0]==$selected){
                $returndata = $returndata.' selected';
            }
            $returndata = $returndata.'>'.$value[1].'</option>';
        }
        $returndata = $returndata.'</select>
                        </div>
                        ';
        return $returndata;
    }

    public static function RenderFormElementMultiSelect($label,$id,$name,$values,$required = 1,$databasetabelname,$Columnnamewithvalues,$selected=null){
        if (is_null($selected) OR $selected == "empty"){
            $selected = array('empty');
        }
        $returndata = '<div class="form-group">
                        <label">'.$label.'</label>
                            <select ';
        if($required == 1){
            $returndata .= 'required';
        }
        $returndata .=' multiple class="form-control" id="'.$id.'" name="'.$name.'[]">';
        foreach ($values as $value){
            $returndata = $returndata.'<option value="'.$value[0].'"';
           if (in_array($value[0],$selected)){
                $returndata = $returndata.' selected';
            }
            $returndata = $returndata.'>'.$value[1].'</option>';
        }
        $returndata = $returndata.'</select>
                        </div>
                        ';
        return $returndata;
    }
}