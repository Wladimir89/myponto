<?php
/**
 * Classe per�odo
 * respons�vel por {...}
 * @author 80058442553
 */
final class Periodo 
{
    private $data;

    function  __construct($pData) {
        $this->data = $pData;
    }
    
    public function getData() {
        return $this->data;
    }

   /**
     * M�todo getIn�cio
     * retorna o per�odo inicial de uma data
     * @param String $pData uma data no formato dd/mm/yyyy
     * @return String d-m-Y
     */
    public function getInicial()
    {
        $varTmp = new DateTime($this->getData());
        list($dia, $mes, $ano) = explode('/', $varTmp->format("d/m/Y"));
        if($dia < 25)
        {
            $mes = $mes - 1;
            if($mes == 0)
            {
                $mes = 12;
                $ano--;
            }
        }
        //$ret = new DateTime("25-$mes-$ano");
        return "25-$mes-$ano";
    }

    /**
     * M�todo getAnterior
     * retorna o per�odo anterior de uma data
     * @param String $pData = uma data no formato dd/mm/yyyy
     * @return DateTime
     */
    public function getAnterior()
    {
        $varTmp = new DateTime($this->getData());
        list($dia, $mes, $ano) = explode('/', $varTmp->format("d/m/Y"));
        $mes = $mes - 1;
        if($mes == 0){
            $mes = 12;
            $ano--;
        }
        // $ret = new DateTime("25-$mes-$ano");
        return "25-$mes-$ano";
    }

    /**
     * M�todo getFinal
     * retorna o per�odo final de uma data
     * @param String $pData = uma data no formato dd/mm/yyyy
     * @return DateTime
     */
    public function getFinal()
    {
        $varTmp = new DateTime($this->getData());
        list($dia, $mes, $ano) = explode('/', $varTmp->format("d/m/Y"));
        if($dia >= 25){
            $mes++;
            if($mes == 13){
                $mes = 1;
                $ano++;
            }
        }
        $ret = new DateTime("24-$mes-$ano");
        return "24-$mes-$ano";
    }

}
?>
