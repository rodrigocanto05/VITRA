## 📋 1. Identificação
- Universidade: Universidade Europeia  
- Faculdade: IADE  
- Elementos do grupo: Rodrigo Canto, Rodrigo Daibert, Marco Fonseca e Daniel Paulo
- Nome do projeto: NextBid
- Repositório GitHub: https://github.com/rodrigocanto05/VITRA
  
---

## 👥 2. Distribuição das principais tarefas

| **Tarefas Principais** | **Rodrigo Canto**| **Rodrigo Daibert** | **Marco Fonseca** | **Daniel Paulo** | **Total** |
|----------------------|-------------------|----------------------|-------------------|------------------|-----------|
| **1. Relatorio(Proposta inicial)** | 25% | 25% | 25% | 25% | **100%** |

---

## 💡 3. Proposta inicial

O presente projeto consiste no desenvolvimento de uma plataforma web de leilões online a nível nacional, permitindo a utilizadores comprar, vender e licitar produtos de forma simples e segura. O sistema terá como objetivo criar uma experiência dinâmica, interativa e competitiva, combinando funcionalidades tradicionais de leilão com elementos de gamificação.
A plataforma permitirá que cada produto colocado em leilão tenha localização associada, sendo visualizado num mapa interativo, facilitando a identificação geográfica do item e promovendo transparência nas transações.
Além do sistema de licitação em tempo real, o site incluirá funcionalidades interativas, como uma roleta digital onde os utilizadores poderão girar para ganhar prémios (ex.: descontos, créditos para licitações, benefícios temporários). Será também desenvolvido um segundo jogo (a definir), com o objetivo de aumentar o envolvimento dos utilizadores e incentivar a utilização frequente da plataforma.
O sistema incluirá gestão de utilizadores, controlo de leilões ativos, histórico de licitações, notificações automáticas e mecanismos de segurança. A arquitetura será composta por base de dados para armazenamento de utilizadores e produtos, servidor backend para gestão das regras do leilão e interface web para interação com o utilizador.
Este projeto combina algoritmos de licitação, estruturas de dados para gestão dinâmica de ofertas e técnicas de programação orientada a objetos, aplicando conceitos da unidade curricular num contexto prático e comercial.

---

## 🎯 4. Objetivos

- Criar uma plataforma de leilões inovadora que permita comprar e vender produtos de forma dinâmica e interativa.
- Permitir que qualquer produto possa ser leiloado e que o maior lance seja o vencedor.
- Implementar desempate por sorteio (moeda ao ar) em caso de empate nos lances.
- Introduzir uma roleta diária com prémios de baixo valor ou pequenas chances de ganhar, incentivando visitas frequentes.
- Desenvolver uma mecânica de “caça ao tesouro” onde produtos são colocados aleatoriamente no mapa e o primeiro a chegar fisicamente recebe o produto.
- Integrar geolocalização para definir a localização dos produtos e facilitar a entrega pelos vendedores.
- Garantir que os produtos possam ser entregues presencialmente ou enviados com segurança ao comprador.
- Oferecer uma experiência de utilizador envolvente, interativa e segura, promovendo competição e engajamento contínuo.

---

## 📅 5. Plano de Trabalhos

## Leilão
O presente plano de trabalho organiza o desenvolvimento do sistema ao longo de 13 semanas, permitindo uma evolução estruturada desde a análise inicial até à implementação final, testes e apresentação. A divisão por fases garante controlo de progresso, qualidade técnica e cumprimento de prazos.

---

Semana 1 – Definição do Projeto
Definição do conceito final da plataforma
Identificação das funcionalidades principais (leilões, mapa, roleta, jogo extra)
Definição do público-alvo
Distribuição inicial de tarefas pelo grupo
Objetivo: Ter o projeto totalmente definido antes de começar a desenvolver.

---

Semana 2 – Análise Técnica e Modelação
Escolha das tecnologias (linguagem, base de dados, framework)
Desenho da arquitetura do sistema
Criação do diagrama de classes (UML)
Definição das regras do sistema de leilão
Objetivo: Estrutura técnica bem definida.

---

Semana 3 – Modelação da Base de Dados
Criação das tabelas:
Utilizadores
Produtos
Leilões
Licitações
Prémios
Definição de chaves primárias e relações
Testes iniciais de inserção de dados
Objetivo: Base de dados funcional.

---

Semana 4 – Sistema de Utilizadores
Implementação de registo
Implementação de login
Sistema de autenticação
Criação de perfis de utilizador
Objetivo: Utilizadores conseguem criar conta e aceder à plataforma.

---

Semana 5 – Criação e Gestão de Leilões
Implementação da criação de leilões
Definição de preço base
Definição de tempo de duração
Associação de localização ao produto
Objetivo: Sistema básico de leilões funcional.


---

Semana 6 – Algoritmo de Licitação
Implementação do algoritmo que:
Valida novas licitações
Atualiza o maior lance
Guarda histórico de lances
Garantir que o novo lance é superior ao anterior
Objetivo: Leilões funcionam corretamente em tempo real.

---

Semana 7 – Temporizador e Fecho Automático
Implementação da contagem decrescente
Encerramento automático do leilão
Definição automática do vencedor
Notificação ao vencedor
Objetivo: Sistema completo de finalização automática.

---

Semana 8 – Integração do Mapa
Integração de mapa interativo
Visualização da localização do produto
Filtro de leilões por localização
Objetivo: Sistema geográfico funcional.

---

Semana 9 – Desenvolvimento da Roleta
Criação da roleta digital
Algoritmo de geração aleatória
Definição de probabilidades
Integração de prémios (créditos, descontos, etc.)
Objetivo: Sistema de gamificação ativo.

---

Semana 10 – Desenvolvimento do Segundo Jogo
(Sugestão: Quiz rápido ou jogo de memória)
Definição das regras
Implementação da lógica do jogo
Sistema de pontos ou recompensas
Integração com conta do utilizador
Objetivo: Aumentar interação e retenção de utilizadores.

---

Semana 11 – Interface e Experiência do Utilizador
Melhorias visuais
Dashboard do utilizador
Histórico de licitações
Página de prémios e ganhos
Objetivo: Plataforma visualmente organizada e intuitiva.

---

Semana 12 – Testes e Otimização
Testes com múltiplos utilizadores
Correção de erros
Testes de segurança básicos
Otimização do desempenho
Objetivo: Sistema estável e funcional.

---

Semana 13 – Documentação e Apresentação
Redação do relatório final
Inserção de diagramas (UML e arquitetura)
Preparação da demonstração prática
Ensaios da apresentação
Objetivo: Projeto pronto para avaliação.

---

Este plano de 13 semanas permite um desenvolvimento progressivo e estruturado do sistema, começando pela definição conceptual, passando pela implementação técnica e culminando na validação e apresentação final. A divisão equilibrada das fases garante tempo suficiente para desenvolvimento, testes e documentação, aumentando a qualidade e robustez do projeto.

---

## 👥 6. Público-alvo

- Jovens
- Adultos
- Jogadores / fãs de gamificação
- Vendedores casuais / pequenos comerciantes

---

## 🔍 7. Pesquisa de mercado

### eBay
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Plataforma de leilões online | Não possui roleta diária ou caça ao tesouro |
| Permite vender qualquer produto | Não utiliza geolocalização para entrega presencial |
| Sistema de lances competitivos | Não resolve empates por sorteio |

---

### Mercado Livre
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Venda de produtos variados | Não possui mecânicas de gamificação como roleta ou caça ao tesouro |
| Permite contacto entre comprador e vendedor | Entrega tradicional, sem geolocalização para jogos interativos |
| Plataforma popular na América Latina | Não tem desempate por sorteio em lances empatados |

---

### DealDash
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Sistema de leilões por lances | Não integra caça ao tesouro ou geolocalização |
| Produtos variados | Não oferece roleta diária ou prémios surpresa |
| Incentiva participação frequente | Empates não resolvidos por sorteio, lances continuam até final definido |

---

### ShopGun / Local Auctions
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Combina compras online com elementos locais | Menor variedade de produtos leiloados |
| Alguns usam geolocalização para entregas | Não possui caça ao tesouro ou roleta diária |
| Interação entre vendedor e comprador | Não tem desempates decididos por sorteio |
---

## 🧪 8. Guiões de teste
| ID | Cenário | Procedimento | Resultado Esperado |
|---|---|---|---|
| 01 | Criar Leilão | Criar produto com preço base 5€ | Produto aparece na lista de leilões ativos | 
| 02 | Licitação válida | Utilizador licita 16€ quando valor atual do produto é 15€ | Lance aceite e atualizado para todos os restantes participantes |
| 03 | Licitação inválida | Utilizador tenta licitar 14€ quando atual é 15€ | Sistema rejeita lance |
| 04 | Fim automático | Aguardar tempo terminar | Sistema fecha leilão e define vencedor com a ultima licitação mais elevada |
| 05 | Empate | Dois utilizadores licitam o mesmo valor final depois do Tempo do leilão acabar | Sistema executa sorteio **(moeda ao ar)** |
| 06 | Geolocalização do produto leiloado | Ao ganhar o utilizador vencedor tem direito a observar o estado do seu produto em tempo real atravez de um sensor de localização | Sistema mostra o estado da encomenda so seu produto leiloado | 

---

## 📜 9. Project Charter
Project Charter: NextBid


**Enquadramento das Unidades Curriculares**:

**Programação Web**: É o PHP que será o responsável por implementar as fórmulas matemáticas e garantir que os dados geográficos (Coordenadas x,y) sejam processados e entregues ao Front-end em formato JSON para o Leaflet.

**Estatística**: Análise de Tendências: A utilização da estatística descritiva para mostrar ao utilizador o "Preço Médio" de produtos similares ou a "Procura" (número de licitações por hora).

Análise de Outliers: Identificar licitações fraudulentas (bots) através de desvios padrão no tempo de resposta das licitações.

**Sistema de Informação Geográfica**: No contexto do site de leilões, utiliza dados georreferenciados para localizar produtos e utilizadores, permitindo funcionalidades como a caça ao tesouro e entregas presenciais. Recorre a mapas interativos para visualização e análise espacial, aplicando conceitos de georreferenciação e monitorização em tempo real. Apoia a experiência do utilizador e a tomada de decisão baseada em localização geográfica.

**Projeto de Desenvolvimento Web**: É nesta cadeira que vamos desenvolver o projeto, iremos ter acompanhamento da professora e as apresentações.

**Algoritmo e Estrutura de dados**: O projeto da plataforma de leilões online enquadra-se diretamente na unidade curricular de Algoritmos e Estruturas de Dados, uma vez que envolve a organização, armazenamento e processamento eficiente de informação dinâmica.

**Interfaces e Usabilidades**: O projeto vai ser influênciado gráficamente pela cadeira de interfaces e usabilidades, representado todo o frontend, e organizando as usabilidades e a estética da interface de utilizadores, para que a mesma seja mais eficiente, e de fácil utilização, desenvolvendo temas sobre as diferentes usabilidades.


---

## 🏗️ 10. WBS (Work Breakdown Structure)
1) Gestão do Projeto
   1.1 - Documentação técnica e Project Charter.
   1.2 - Planeamento de Sprint e prazos.
2) Desenvolvimento Core
   2.1 - Configuração do ambiente e Router em PHP.
   2.2 - Motor de Autenticação (Sessions & Password Hashing).
3) Módulo de Leilões
   3.1 - CRUD de Produtos.
   3.2 - Lógica de Licitação e Cronómetros (AJAX).
4) Backend (PHP)
   4.1 - Conexão DB e Script simulador de sensores - API de Dados (JSON)
5) Frontend:
   5.1 - Layout HTML/CSS 
6) Módulo Casino:
   6.1 - Algoritmos de Slots e Roleta.
   6.2 - Flip Coin e outros possiveis métodos
7) Integração
   7.1 - Consumo de dados via Fetch e Lógica 
8) Módulo SIG (Geosocial)
   8.1 - Integração com Leaflet.js.
   8.2 - Geocodificação de endereços de vendedores.
9) Segurança e Testes
    9.1 - Sanitização de inputs e prevenção de XSS/SQLi.
    9.2 - Testes unitários de lógica de saldo.

---

## 🏁 11. Conclusão
**O projeto VITRA** –> Vigilância Inteligente do Território e Riscos Ambientais valida a eficácia da integração entre sensores IoT e algoritmos inteligentes na mitigação de catástrofes naturais. Através da monitorização contínua e do processamento de dados em tempo real, o sistema converte métricas brutas em conhecimento estratégico para a Proteção Civil e autoridades locais.

**Impacto Principal:** A plataforma elimina a fragmentação de sistemas ao unificar a gestão de riscos distintos — cheias, incêndios e radiação — num interface único, permitindo uma resposta operacional significativamente mais rápida e coordenada.

**Em suma:** O VITRA afirma-se como uma ferramenta essencial para a resiliência do território. O sucesso deste protótipo prova que a antecipação baseada em dados não é apenas uma vantagem tecnológica, mas a estratégia fundamental para garantir a segurança pública no futuro.

---

## 📚 12. Bibliografia

eBay. (n.d.). *eBay: Buy & Sell Electronics, Cars, Fashion, Collectibles & More*. https://www.ebay.com

Mercado Livre. (n.d.). *Mercado Livre: Compra y Venta de Productos Online*. https://www.mercadolibre.com

DealDash. (n.d.). *DealDash: The Online Auction Site with the Lowest Prices*. https://www.dealdash.com

ShopGun. (n.d.). *ShopGun: Local Shopping and Auctions*. https://www.shopgun.com

