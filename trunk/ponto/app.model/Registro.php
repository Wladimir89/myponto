<?php
/**
 * Description of Frequencia
 *
 * @author ivan
 * @property data 
 */
class Registro {
    private $data;
    private $diaDaSemana;
    private $entradaManha;
    private $saidaManha;
    private $entradaTarde;
    private $saidaTarde;
    private $entradaNoite;
    private $saidaNoite;
    private $total;
    private $extra50;
    private $extra100;
    private $ocorrencias;
    /**
        flag
        entrada manhã = 2
        saída manhã = 4
        entrada tarde = 8
        saida tarde = 16
        6	= entrada manhã + saída manhã
        24	= entrada tarde + saída tarde
        30	= tudo
        18	= entrada manhã + saída tarde
    **/
    private $flag;
    public function getData (){
        //return $this->data->format('d/m/Y');
        return $this->data;
    }
    public function setData ($pData){        
        $this->data = new DateTime($pData);
    }
    public function getDiaDaSemana (){
        return $this->diaDaSemana;
    }
    public function setDiaDaSemana ($pDiaDaSemana){
        $this->diaDaSemana = $pDiaDaSemana;
    }
    public function getEntradaManha (){
        return $this->entradaManha;
    }
    public function setEntradaManha ($pEntradaManha){
        if(strtotime($pEntradaManha))
        {
            $this->flag = $this->flag + 2;
        }
        $this->entradaManha = $pEntradaManha;

    }
    public function getSaidaManha (){
        return $this->saidaManha;
    }
    public function setSaidaManha ($pSaidaManha){
        if(strtotime($pSaidaManha))
        {
            $this->flag = $this->flag + 4;
        }
        $this->saidaManha = $pSaidaManha;
    }
    public function getEntradaTarde (){
        return $this->entradaTarde;
    }
    public function setEntradaTarde ($pEntradaTarde){
        if(strtotime($pEntradaTarde))
        {
            $this->flag = $this->flag + 8;
        }
        $this->entradaTarde = $pEntradaTarde;
    }
    public function getSaidaTarde (){
        return $this->saidaTarde;
    }
    public function setSaidaTarde ($pSaidaTarde){
        if(strtotime($pSaidaTarde))
        {
            $this->flag = $this->flag + 16;
        }
        $this->saidaTarde = $pSaidaTarde;
    }
    public function getEntradaNoite (){
        return $this->entradaNoite;
    }
    public function setEntradaNoite ($pEntradaNoite){
        if(strtotime($pEntradaNoite))
        {
            $this->flag = $this->flag + 32;
        }
        $this->entradaNoite = $pEntradaNoite;
    }
    public function getSaidaNoite (){
        return $this->saidaNoite;
    }
    public function setSaidaNoite ($pSaidaNoite){
        if(strtotime($pSaidaNoite))
        {
            $this->flag = $this->flag + 64;
        }
        $this->saidaNoite = $pSaidaNoite;
    }
    public function getTotal (){
        return $this->total;
    }
    public function setTotal ($pTotal){
        $this->total = number_format($pTotal,2,',','.');
    }
    public function getExtra50 (){
        return $this->extra50;
    }
    public function setExtra50 ($pExtra50){
        $this->extra50 = number_format($pExtra50,2,',','.');
    }
    public function getExtra100 (){
        return $this->extra100;
    }
    public function setExtra100 ($pExtra100){
        $this->extra100 = number_format($pExtra100,2,',','.');
    }
    public function addOcorrencia(Ocorrencia $pOcorrencia)
    {
        $this->ocorrencias[] = $pOcorrencia;
    }
    public function getOcorrencia()
    {
        return $this->ocorrencias;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function __construct()
    {
        $this->flag = 0;
    }
}
?>
