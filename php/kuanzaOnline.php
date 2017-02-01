<?php

class kuanzaOnline {
    
    private $IDComerciante;
    private $secretKey;
    private $paginaRetorno;
            
    function __construct($IDComerciante, $secretKey, $paginaRetorno) {
        $this->IDComerciante = $IDComerciante;
        $this->secretKey = md5($secretKey);
        $this->paginaRetorno = $paginaRetorno;
        $this->autorizacao($this->IDComerciante, $this->secretKey, $this->paginaRetorno);
    }
    
    public function autorizacao($id, $sk, $retorno){
        
        $Curl_Session = curl_init('https://pagamento.kwanzaonline.co.ao/api-sdk/pagamentos/controllerAutorizar.php');
        
        // Turn on SSL certificate verfication
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, TRUE);
        
        curl_setopt ($Curl_Session, CURLOPT_POST, 1);
        curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, "id={$id}&sk={$sk}");
        curl_setopt ($Curl_Session, CURLOPT_FOLLOWLOCATION, 1);
        
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, true);
        $resultado = curl_exec ($Curl_Session);
        curl_close ($Curl_Session);
        
        if ($resultado){
            //$resultado = md5($resultado);
            header("Location: https://pagamento.kwanzaonline.co.ao/api-sdk/pagamentos/geradoToken.php?id={$resultado}&pagina={$retorno}");
        }else{
            echo "Autorização negada!";
        }
    }
}