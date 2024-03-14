<?php
   //identificar a linguagem php//
   $conexao=mysqli_connect('localhost','root','','3ppp');
   //criar a variável php $conexao para guardar o resultado da conexão com o servidor(localhost), usuário e senha (root) e banco de dados//
   if (isset($_POST['consultar'])) {    // verifica a ação de'finida no formulário de acordo com o botão submit//

   $dtval=($_POST["dtval"]);  
   // cria a variável php para guardar o conteúdo da variável html//
    $sql=" SELECT * FROM produto WHERE dtval < '$dtval'";
   // criar a variável php para guardar a setença query que seleciona a tabela produto e verifica se o código digitado é igual a algum na tabela//
     
    $result=mysqli_query($conexao,$sql);
    // cria uma variável php para guardar o resultado da execução da query//
     if ($result){
          // teste o resultado da execução da query
         // caso afirmativo cria um loop para criar o array $linha onde guarda os valores encontrado//
     
     While( $linha=mysqli_fetch_array($result)){
      echo'codigo:'. $linha['codigo'].'<br>' ;
      echo 'descrição:' .$linha['descricao'].'<br>' ;
         //mostra o conteúdo da variável e pular uma linha//
      echo 'valor:'. $linha['valor'] .'<br> <hr>';
         //idem ao anterior e traça uma linha (hr) //
      }

    } else {echo "não tem produto vencido";}
}
?>
