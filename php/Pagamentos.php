<?php

class Pagamentos {
    
    private $pagamentos;
    private $cliente;
    private $comerciante;
    private $produto;
    private $qtd;
    private $preco;
    private $email;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function getQtd() {
        return $this->qtd;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function setQtd($qtd) {
        $this->qtd = $qtd;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPagamentos() {
        return $this->pagamentos;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getComerciante() {
        return $this->comerciante;
    }

    public function setPagamentos($pagamentos) {
        $this->pagamentos = $pagamentos;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setComerciante($comerciante) {
        $this->comerciante = $comerciante;
    }

    public function transacaoCompra(){
        
        $Curl_Session = curl_init('https://www.kwanzaonline.co.ao/controller/controllerTransaccoes.php');
        curl_setopt ($Curl_Session, CURLOPT_POST, 1);
        curl_setopt ($Curl_Session, CURLOPT_POSTFIELDS, "produto={$this->getProduto()}&qtd={$this->getQtd()}&preco={$this->getPreco()}&comerciante={$this->getComerciante()}&pagamento={$this->getPagamentos()}&email={$this->getEmail()}&cliente={$this->getCliente()}&opcao=1");
        curl_setopt ($Curl_Session, CURLOPT_FOLLOWLOCATION, 1);
        
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, true);
        $x = curl_exec   ($Curl_Session);
        curl_close  ($Curl_Session);
        
        return $x;
    }
}
