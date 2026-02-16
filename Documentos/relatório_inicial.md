## 1. Identificação
- Universidade: Universidade Europeia  
- Faculdade: IADE  
- Elementos do grupo: Rodrigo Canto, Rodrigo Daibert, Marco Fonseca e Daniel Paulo
- Nome do projeto: VITRA – Vigilância Inteligente do Território e Riscos Ambientais
- Repositório GitHub: https://github.com/rodrigocanto05/VITRA
  
---

# 2. Distribuição das principais tarefas

| **Tarefas Principais** | **Rodrigo Canto**| **Rodrigo Daibert** | **Marco Fonseca** | **Daniel Paulo** | **Total** |
|----------------------|-------------------|----------------------|-------------------|------------------|-----------|
| **1. Relatorio(Proposta inicial)** | 25% | 25% | 25% | 25% | **100%** |

---

## 3. Proposta inicial


O presente projeto visa o desenvolvimento de um sistema web inteligente capaz de monitorizar, em tempo real, dados recolhidos por sensores instalados em zonas críticas. O objetivo é detetar situações de risco e emitir alertas automáticos às autoridades, contribuindo para a prevenção e mitigação de cheias, incêndios florestais e níveis anormais de radiação.

O sistema baseia-se na recolha contínua de dados ambientais (nível de água, CO₂, temperatura, radiação, entre outros), que são enviados para um servidor central onde são analisados através de regras e algoritmos definidos. Sempre que são ultrapassados determinados limites ou identificadas variações anormais, é criado automaticamente um incidente e enviado um alerta com o respetivo nível de severidade.

No caso das cheias, será analisado não apenas o valor absoluto do nível da água, mas também a sua taxa de subida. Para os incêndios, a deteção resultará da combinação de vários fatores (CO₂, temperatura e vento), incluindo uma estimativa simplificada do tempo de propagação. Na monitorização de radiação, serão gerados alertas sempre que os valores excedam níveis considerados seguros.

A plataforma incluirá um painel com mapa interativo, visualização do estado dos sensores, histórico de leituras e gestão de alertas. A arquitetura do sistema será composta por sensores, servidor de processamento, base de dados e interface web.

Este projeto pretende demonstrar como a integração de sensores, algoritmos e estruturas de dados pode apoiar a tomada de decisão e melhorar a resposta a situações de risco ambiental.

---

## 4. Objetivos e probelmas a resolver

### 4.1. Objetivos

- Desenvolver um sistema web inteligente de monitorização ambiental.
- Recolher dados em tempo real através de sensores distribuídos geograficamente.
- Detetar situações de risco relacionadas com cheias, incêndios e radiação.
- Analisar tendências e taxas de variação para antecipar eventos críticos.
- Emitir alertas automáticos às entidades competentes.
- Disponibilizar um painel de controlo com mapa interativo e histórico de dados.
- Apoiar a tomada de decisão com base em dados atualizados e previsões simplificadas.
- Garantir escalabilidade para integração futura de novos sensores e funcionalidades.

---

### 4.2. Problemas a Resolver

- Ausência de monitorização contínua em zonas críticas.
- Demora na deteção e comunicação de situações de risco.
- Dependência de sistemas isolados e não integrados.
- Falta de análise preditiva baseada em tendência e evolução do risco.
- Elevado número de falsos positivos em sistemas simples de alerta.
- Dificuldade de acesso centralizado a dados históricos e em tempo real.
- Tempo de resposta reduzido das autoridades devido à falta de informação estruturada.

---

## 5. Plano de Trabalhos

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

## 5. Público-alvo

- Autoridades municipais e câmaras municipais.
- Serviços municipais de proteção civil.
- Bombeiros e forças de segurança.
- Entidades responsáveis pela gestão de barragens e recursos hídricos.
- Instituições governamentais ligadas ao ambiente e segurança.
- Empresas industriais localizadas em zonas de risco.
- Organizações de gestão florestal.
- Técnicos e decisores na área da gestão de emergências.

---

## 6. Pesquisa de mercado

### IPMA
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Monitorização meteorológica nacional | Não utiliza rede comunitária de sensores |
| Sistema de alertas por cores | Interface pouco interativa |
| Dados em tempo real | Não apresenta previsão baseada em taxa de variação |

---

### USGS
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Monitorização de níveis de água | Interface técnica e pouco intuitiva |
| Histórico de leituras | Não integra incêndios e radiação num único sistema |
| Mapa interativo com sensores | Não possui sistema de previsão simplificada |

---

### NASA FIRMS
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Deteção de incêndios em tempo real | Baseado maioritariamente em satélite |
| Visualização geográfica | Não utiliza sensores terrestres locais |
| Monitorização contínua | Não integra sistema de alertas municipais personalizados |

---

### EURDEP
| 🟢 Semelhanças | 🔴 Diferenças |
|---|---|
| Monitorização de níveis de radiação | Interface pouco moderna |
| Dados distribuídos geograficamente | Não integra múltiplas ameaças ambientais |
| Sistema europeu de partilha de dados | Não apresenta previsão de evolução do risco |

---

## 7. Guiões de teste

---

## 8. Project Charter
Project Charter: VITRA
Vigilância Inteligente do Território e Riscos Ambientais

**Enquadramento das Unidades Curriculares**:

**Programação Web**: Esta UC é o motor técnico do EcoMonitor PT. Permite implementar funcionalidades dinâmicas (JS) e a lógica de servidor (PHP) necessária para processar as leituras dos sensores em tempo real e gerir a base de dados MySQL.

**Estatística**: Crucial para o rigor dos alertas. Através desta UC, o sistema analisa séries temporais de dados, identifica outliers (leituras falsas dos sensores) e calcula médias de poluição ou precipitação para gerar previsões de risco fiáveis

**Sistema de Informações Geograficos**: Utiliza dados georreferenciados provenientes de sensores distribuídos no território e por recorrer a mapas interativos para visualização e análise espacial. A plataforma aplica conceitos de georreferenciação, análise espacial e monitorização territorial em tempo real, apoiando a tomada de decisão com base em informação geográfica.

**Projeto de Desenvolvimento Web**: É nesta cadeira que vamos desenvolver o projeto, iremos ter acompanhamento da professora e as apresentações.

**Algoritmo e Estrutura de dados**: O nosso projeto enquadra-se na cadeira de Algoritmos e Estruturas de Dados porque aplica a organização e estruturação de dados provenientes de sensores, utilizando algoritmos para processar informação e gerar alertas. Além disso, recorre a estruturas de dados e ao paradigma de programação orientada a objetos, conforme abordado nos conteúdos da unidade curricular.


---

## 9 WBS (Work Breakdown Structure)
1. Início: Project Charter e Definição de Requisitos - Documento de Especificação
2. Arquitetura: Modelo da BD MySQL e Estrutura de Pastas - Esquema ER da Base de Dados
3. Backend (PHP): Conexão DB e Script simulador de sensores - API de Dados (JSON)
4. Frontend: Layout HTML/CSS e Mapa de Portugal (SVG/JS) - Interface Dashboard
5. Integração: Consumo de dados via Fetch e Lógica de Alertas - Sistema Dinâmico
6. Testes. Testes de stress e alidação estatística - Relatório de Testes

---

## 10. Conclusão

---

## 11. Bibliografia

