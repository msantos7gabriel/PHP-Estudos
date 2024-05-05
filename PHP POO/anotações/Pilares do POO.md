# Pilares do POO

## EHP

### Encapsulamento

- Abstração pode ser um pilar em diferentes bibliografias
  ou considerado dentro de encapsulamento

- a capsula tanto é usada para proteção dos competentes tanto para criação de padrões

- encapsular:

  - ocultar partes independentes da implementação, permitindo construir partes invisíveis ao mundo exterior
  - mandar mensagem para a capsula.
  - um objeto encapsulado possuí uma boa interface bem definida
  - Vantagens:
    1. Tornar mudanças invisíveis
    1. Facilitar a reutilização de código
    1. Reduzir efeitos colaterais

- interface:

  - lista de serviços fornecidos por um componente. É o contato com o mundo exterior, que define o que pode ser feito com um objeto dessa classe.

- Como encapsular:

  - Disponibilizar apenas a interface
  - definir uma interface com métodos abstrato (previsto não mas implementado) geralmente <br>todos os métodos gerados são públicos
  - colocar todos os atributos da classe privados

### Herança

- Permite basear uma nova classe na definição de yna outra classe previamente existente.
- A herança será aplicada tanto para a as características quanto para os comportamentos.
  - extends Nome_da_classe (comando)
- Arvore hierárquica
  - Raiz (A classe do topo)
  - Folhas (Classes sem filhas)
  - Ancestral (Netos para baixo) e descendente
  - Especialização
    - percorrer a arvore de cima para baixo
  - Generalização
    - Percorre a arvore de baixo para cima
- Tipos de herança

  1. Herança de implementação (Pobre ou simples)

     - A classe filha é idêntica a classe mãe não possuindo características próprias

  1. Herança para diferença (Complexa)
     - A classe filha herda tudo da classe mae porém possui suas próprias características

- Abstrato e final
  - Classe abstrata não pode ter instanciada ( não pode gerar objetos ). Só pode servir como progenitora.
  - Método Abstrato é declarado mas não implementado na classe mae.
  - Classe Final não pode ter filhos.<br> não pode ser herdada por outra classe. Obrigatoriamente folha.
  - Método Final Não pode ser sobrescrito pelas duas Sub-classes. Obrigatoriamente herdado. (não pode gerar uma especialização desse método)

### Polimorfismo

- Poli = Muitas / Morfo = Formas
- Permite que um mesmo nome represente vários comportamentos diferentes
- Assinatura do Método
  - Quantidade e os tipos dos parâmetros
- Tipos de Polimorfismo (Possuem 4)

  1. Sobreposição

     - Acontece quando substituímos um método de uma superclasse na sua subclasse, usando a mesma assinatura.

  1. Sobrecarga
