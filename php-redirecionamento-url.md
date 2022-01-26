# Redirecionando o visitante para outra página

## Alguma vez você já deve ter visitado um site que mudou de endereço e que exibe uma mensagem do tipo:

## Você será redirecionado para um novo site em 5 segundos. Se não quiser aguardar, clique aqui.
## Esse redirecionamento pode ser feito com meta tag, por meio de uma única linha:

               <meta http-equiv="refresh" content=" 5 ;url=http://www.novosite.com/">

## Ou seja, depois de 5 segundos, o navegador será redirecionado para o endereço www.novosite.com.

## Essa mesma tag é utilizada para atualizar automaticamente uma página dinâmica, como a home page de um portal ou a sessão de notícias de um site, por exemplo. Neste caso, o intervalo de tempo em segundos deve ser bem maior e a URL deve ser o endereço do próprio site a ser atualizado.

                <meta http-equiv="refresh" content="120;url=http://www.seusite.com/">

## Lembre-se apenas de utilizar esse recurso com cautela, pois uma página que é atualizada automaticamente pode interromper a atividade do usuário, deixando-o irritado.

# Redirecionamento com PHP e código 301

## Apesar de as instruções do tópico acima funcionarem, especialistas em Search Engine Optimization (SEO) e o próprio Google recomendam que, toda vez que você tiver que mover uma página permanentemente, o faça utilizando o código 301. Esse procedimento oferece maiores garantias de que o buscador entenderá que se trata de um redirecionamento, diminuindo as chances de problemas na indexação do site.

## Em cada linguagem há maneiras de se fazer isso. Usaremos PHP como exemplo. Na página que tiver que ser redirecionada, basta inserir as seguintes instruções:

	   <?
	   Header( “HTTP/1.1 301 Moved Permanently” );
	   Header( “Location: http://www.novoendereco.com.br/” );
	   ?>
    
## Assim, toda vez que o usuário acessar o endereço antigo, será automaticamente redirecionado para o link informado em Location.
