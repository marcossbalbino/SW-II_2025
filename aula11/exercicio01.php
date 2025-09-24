
<?php
class Produto {
   
    private $nome;
    private $preco;
    private $quantidade;

   
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    
    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    
    public function adicionarEstoque($qtd) {
        $this->quantidade += $qtd;
    }

   
    public function removerEstoque($qtd) {
        $this->quantidade -= $qtd;
    }

    public function mostrarDetalhes() {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$" . number_format($this->preco, 2) . "\n";
        echo "Quantidade em estoque: " . $this->quantidade . "\n";
    }
}


$produto = new Produto("Celular", 2150.00, 10);
$produto->adicionarEstoque(5);
$produto->removerEstoque(6);
$produto->mostrarDetalhes();
?>
