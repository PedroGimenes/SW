
<?php
class Produto {
   
    private $nome;
    private $quantidade;
    private $preco;
   
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
        echo "Produto: " . $this->nome;
        <br>
        echo "Preço: R$" . number_format($this->preco, 2);
        <br>
        echo "Quantidade em estoque: " . $this->quantidade ;
        <br>
    }
}


$produto = new Produto("Camisa", 200, 50);
$produto->adicionarEstoque(20);
$produto->removerEstoque(10);
$produto->mostrarDetalhes();
?>
