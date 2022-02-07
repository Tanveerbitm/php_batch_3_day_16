<?php


namespace App\classes;


class Pattern
{
    private $patternLen;
    private $result;

    public function __construct($post=null)
    {
        $this->patternLen = (int)$post;
    }
    public function getPattern(){
        for($i=1;$i<=$this->patternLen;$i++){
            for($j=1;$j<=(2* $this->patternLen)-1; $j++){
                if(($j >= $this->patternLen - ($i-1)) && ($j <= $this->patternLen + ($i-1))){
                    $this->result.= '*';
                }else{
                    $this->result.= '&nbsp;&nbsp;';
                }
            }
            $this->result.= '<br>';
        }
        for($i=$this->patternLen-1;$i>=1;$i--){
            for($j=1;$j<=(2* $this->patternLen)-1; $j++){
                if(($j >= $this->patternLen - ($i-1)) && ($j <= $this->patternLen + ($i-1))){
                    $this->result.= '*';
                }else{
                    $this->result.= '&nbsp;&nbsp;';
                }

            }
            $this->result.= '<br>';
        }

        return $this->result;
    }

}
