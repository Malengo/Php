<?php
function SeculoAno($ano){
    //variável para pegar a quantidade de numeros
    $x=strlen($ano);

    //variavel inicializada com -2 o valor de x pq o século vai sempre o valor de início de um ano 
    $z=$x-2;
    
    //condição para que sempre seja seculo 1
    if($z<=0){
    echo "Século 1";
    
    //condição para pegar a ultimo numero do ano 
    }else if(substr($ano,-1,1)==0)
    
    //se for 0 ele imprime o resultado passando as posicoes do ano que determina o seculo
	echo "Século ".substr($ano,0,$z);
	
	else
	//se não for igual a zero a ultima posição do ano essa função determina o seculo somando mais 1
	echo "Século ".substr($ano,0,$z) + 1;
}
?>
