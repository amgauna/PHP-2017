# Redirecionamento com PHP e código 301

## Apesar de as instruções do tópico acima funcionarem, especialistas em Search Engine Optimization (SEO) e o próprio Google recomendam que, toda vez que você tiver que mover uma página permanentemente, o faça utilizando o código 301. Esse procedimento oferece maiores garantias de que o buscador entenderá que se trata de um redirecionamento, diminuindo as chances de problemas na indexação do site.

## Em cada linguagem há maneiras de se fazer isso. Usaremos PHP como exemplo. Na página que tiver que ser redirecionada, basta inserir as seguintes instruções:

	   <?
	   Header( “HTTP/1.1 301 Moved Permanently” );
	   Header( “Location: http://www.novoendereco.com.br/” );
	   ?>
    
## Assim, toda vez que o usuário acessar o endereço antigo, será automaticamente redirecionado para o link informado em Location.
