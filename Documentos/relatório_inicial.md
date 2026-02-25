## 📋 1. Identificação
- Universidade: Universidade Europeia  
- Faculdade: IADE  
- Elementos do grupo: Rodrigo Canto, Rodrigo Daibert, Marco Fonseca e Daniel Paulo
- Nome do projeto: VITRA – Vigilância Inteligente do Território e Riscos Ambientais
- Repositório GitHub: https://github.com/rodrigocanto05/VITRA
  
---

## 👥 2. Distribuição das principais tarefas

| **Tarefas Principais** | **Rodrigo Canto**| **Rodrigo Daibert** | **Marco Fonseca** | **Daniel Paulo** | **Total** |
|----------------------|-------------------|----------------------|-------------------|------------------|-----------|
| **1. Relatorio(Proposta inicial)** | 25% | 25% | 25% | 25% | **100%** |

---

## 💡 3. Proposta inicial


O presente projeto visa o desenvolvimento de um sistema web inteligente capaz de monitorizar, em tempo real, dados recolhidos por sensores instalados em zonas críticas. O objetivo é detetar situações de risco e emitir alertas automáticos às autoridades, contribuindo para a prevenção e mitigação de cheias, incêndios florestais e níveis anormais de radiação.

O sistema baseia-se na recolha contínua de dados ambientais (nível de água, CO₂, temperatura, radiação, entre outros), que são enviados para um servidor central onde são analisados através de regras e algoritmos definidos. Sempre que são ultrapassados determinados limites ou identificadas variações anormais, é criado automaticamente um incidente e enviado um alerta com o respetivo nível de severidade.

No caso das cheias, será analisado não apenas o valor absoluto do nível da água, mas também a sua taxa de subida. Para os incêndios, a deteção resultará da combinação de vários fatores (CO₂, temperatura e vento), incluindo uma estimativa simplificada do tempo de propagação. Na monitorização de radiação, serão gerados alertas sempre que os valores excedam níveis considerados seguros.

A plataforma incluirá um painel com mapa interativo, visualização do estado dos sensores, histórico de leituras e gestão de alertas. A arquitetura do sistema será composta por sensores, servidor de processamento, base de dados e interface web.

Este projeto pretende demonstrar como a integração de sensores, algoritmos e estruturas de dados pode apoiar a tomada de decisão e melhorar a resposta a situações de risco ambiental.

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

## Sistema Web de Monitorização e Alerta de Riscos Ambientais

O presente plano de trabalho organiza o desenvolvimento do sistema ao longo de 13 semanas, permitindo uma evolução estruturada desde a análise inicial até à implementação final, testes e apresentação. A divisão por fases garante controlo de progresso, qualidade técnica e cumprimento de prazos.

---

## Semana 1 – Enquadramento e Definição do Projeto

* Definição clara do problema e objetivos
* Identificação dos tipos de risco a monitorizar (cheias, incêndios e radiação)
* Pesquisa sobre sistemas semelhantes
* Definição dos requisitos funcionais e não funcionais
* Planeamento inicial das tarefas

**Resultado:** Documento de requisitos aprovado.

---

## Semana 2 – Arquitetura do Sistema

* Definição da arquitetura geral (sensores → servidor → base de dados → interface)
* Escolha das tecnologias (frontend, backend, base de dados)
* Definição do modelo de comunicação com sensores (ex.: HTTP ou MQTT)
* Desenho do diagrama da arquitetura

**Resultado:** Estrutura técnica definida.

---

## Semana 3 – Modelação da Base de Dados

* Identificação das entidades principais:

  * Sensores
  * Leituras
  * Incidentes
  * Alertas
  * Utilizadores
* Criação do modelo relacional
* Implementação inicial da base de dados

**Resultado:** Base de dados estruturada e funcional.

---

## Semana 4 – Estrutura Inicial do Backend

* Criação do servidor
* Implementação dos primeiros endpoints da API
* Ligação à base de dados
* Testes iniciais de comunicação

**Resultado:** Backend operacional.

---

## Semana 5 – Receção e Processamento de Dados

* Desenvolvimento da funcionalidade de receção de leituras
* Validação de dados recebidos
* Implementação de regras de deteção de risco
* Criação automática de incidentes

**Resultado:** Sistema capaz de detetar eventos críticos.

---

## Semana 6 – Sistema de Alertas

* Implementação de envio de alertas (email ou simulação)
* Classificação de severidade (verde, amarelo, laranja, vermelho)
* Sistema de controlo para evitar alertas repetidos
* Histórico de notificações

**Resultado:** Sistema de alertas funcional.

---

## Semana 7 – Desenvolvimento do Frontend (Base)

* Estrutura da interface web
* Implementação de autenticação simples
* Criação do painel principal (dashboard)
* Ligação frontend–backend

**Resultado:** Interface básica funcional.

---

## Semana 8 – Mapa Interativo e Visualização

* Integração de mapa interativo
* Visualização de sensores por estado
* Representação gráfica de incidentes ativos
* Implementação de filtros por tipo de risco

**Resultado:** Visualização geográfica do sistema.

---

## Semana 9 – Monitorização de Cheias e Radiação (Melhorias)

* Ajuste de regras específicas para cheias
* Implementação de análise de tendência (taxa de subida)
* Ajuste de níveis de alerta para radiação
* Testes com cenários simulados

**Resultado:** Monitorização mais precisa e realista.

---

## Semana 10 – Módulo de Previsão de Incêndios

* Implementação do cálculo simplificado de propagação
* Integração de dados de vento (simulados)
* Cálculo de tempo estimado até pontos críticos
* Representação visual da área afetada

**Resultado:** Sistema com previsão básica de propagação.

---

## Semana 11 – Testes e Otimização

* Testes de carga com múltiplos sensores simulados
* Correção de erros
* Otimização de desempenho
* Validação da estabilidade do sistema

**Resultado:** Sistema estável e otimizado.

---

## Semana 12 – Documentação Técnica

* Redação do relatório técnico
* Inclusão de diagramas (arquitetura, base de dados, fluxo do sistema)
* Explicação do modelo de previsão
* Organização das evidências de testes

**Resultado:** Relatório quase finalizado.

---

## Semana 13 – Preparação da Apresentação Final

* Criação da apresentação (slides)
* Preparação de demonstração prática
* Simulação de cenário real (ex.: incêndio ou cheia)
* Ensaios da apresentação

**Resultado:** Projeto pronto para entrega e apresentação.

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
| ID | Cenário de Teste |Procedimento de Execução | Resultado Esperado |
|---|---|---|---|
| 01 | Deteção de Cheia 🌊 | Inserir via base de dados uma subida de nível de água de 15cm em menos de 5 minutos | "O sistema deve calcular a taxa de variação, gerar um incidente de ""Risco Elevado"" e mudar a cor do sensor no mapa para vermelho." | 
| 02 | Alerta de Incêndio 🔥 | Simular leitura combinada de Temperatura > 45°C e CO2 > 800ppm num sensor florestal | Cruzamento de dados bem-sucedido com a criação automática de um alerta e notificação visual no dashboard |
| 03 | Segurança de Radiação ☢️ | Introduzir valor de radiação acima do limite de segurança definido (ex: > 0.5 µSv/h) | Disparo imediato de alerta crítico e registo do evento no histórico de incidentes para auditoria das autoridades |
| 04 | Persistência de Dados | Simular queda de ligação do sensor e verificar o reenvio da leitura após restabelecimento | Garantir que não existem lacunas no gráfico de leituras históricas (timestamp correto) |

---

## 📜 9. Project Charter
Project Charter: VITRA
Vigilância Inteligente do Território e Riscos Ambientais

**Enquadramento das Unidades Curriculares**:

**Programação Web**: EO PHP será o responsável por implementar as fórmulas matemáticas e garantir que os dados geográficos (Coordenadas x,y) sejam processados e entregues ao Front-end em formato JSON para o Leaflet.

**Estatística**: Análise de Tendências: Usarás estatística descritiva para mostrar ao utilizador o "Preço Médio" de produtos similares ou a "Procura" (número de licitações por hora).

Análise de Outliers: Identificar licitações fraudulentas (bots) através de desvios padrão no tempo de resposta das licitações.

**Sistema de Informação Geográfica**: No contexto do site de leilões, utiliza dados georreferenciados para localizar produtos e utilizadores, permitindo funcionalidades como a caça ao tesouro e entregas presenciais. Recorre a mapas interativos para visualização e análise espacial, aplicando conceitos de georreferenciação e monitorização em tempo real. Apoia a experiência do utilizador e a tomada de decisão baseada em localização geográfica.

**Projeto de Desenvolvimento Web**: É nesta cadeira que vamos desenvolver o projeto, iremos ter acompanhamento da professora e as apresentações.

**Algoritmo e Estrutura de dados**: O nosso projeto enquadra-se na cadeira de Algoritmos e Estruturas de Dados porque aplica a organização e estruturação de dados provenientes de sensores, utilizando algoritmos para processar informação e gerar alertas. Além disso, recorre a estruturas de dados e ao paradigma de programação orientada a objetos, conforme abordado nos conteúdos da unidade curricular.

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

