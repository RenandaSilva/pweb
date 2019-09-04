<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as Tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $arrayCategorias [] = "Placas de Vídeo";
        $arrayCategorias [] = "Smartphones";
        $arrayCategorias [] = "Periféricos";
        $arrayCategorias [] = "Computadores";
        $arrayCategorias [] = "Monitores";

        foreach ($arrayCategorias as $cat) {
            $categoria = new App\Categoria();
            $categoria->nomcat = $cat;
            $categoria->save();
        }
        
        $arrayProduto [1] = "Cadeira Gamer Husky Snow";      
        $arrayProduto [1] = "Console Sony PlayStation 4 1TB";       
        $arrayProduto [1] = "Headset Gamer HyperX CloudX";       
        $arrayProduto [1] = "iPhone XS Cinza Espacial, 64GB";      
        $arrayProduto [1] = "Smartphone Samsung Galaxy S10+";
        
        $arrayProduto [2] = "Cadeira Gamer Husky Snow Black HSN-BK";
        $arrayProduto [2] = "O pacote PlayStation Hits oferece jogos incríveis ";
        $arrayProduto [2] = "O HyperX CloudX Stinger Core é o headset perfeito";
        $arrayProduto [2] = "O Apple iPhone XS é um dos smartphones iOS mais avançados e completos";
        $arrayProduto [2] = "O Samsung Galaxy S10 Plus é um smartphone Android ";
        
        $arrayProduto [3] = 411.65;
        $arrayProduto [3] = 2.089;
        $arrayProduto [3] = 179.90;
        $arrayProduto [3] = 4.309;
        $arrayProduto [3] = 3.869;  
        
        $arrayProduto [4] = 1;
        $arrayProduto [4] = 1;
        $arrayProduto [4] = 1;
        $arrayProduto [4] = 1;
        $arrayProduto [4] = 1;
        
        
        
        foreach ($arrayProduto as $prod) {
            $produto = new App\Produto();
            $produto->nompro = $prod[1];
            $produto->despro = $prod[2];
            $produto->vlrpro = $prod[3];
            $produto->codcat = $prod[4];
            $produto->save();
        }
    }

}
