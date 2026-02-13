## 1. Identificação
- Universidade: Universidade Europeia  
- Faculdade: IADE  
- Elementos do grupo: Rodrigo Canto, Rodrigo Daibert, Marco Fonseca e Daniel Paulo
- Nome do projeto: VITRA – Vigilância Inteligente do Território e Riscos Ambientais
- Repositório GitHub:
  
---

# 2. Distribuição das principais tarefas

| **Tarefas Principais** | **Rodrigo Canto**| **Rodrigo Daibert** | **Marco Fonseca** | **Dinael Paulo** | **Total** |
|----------------------|-------------------|----------------------|-------------------|------------------|-----------|
| **1. Relatorio** | 25% | 25% | 25% | 25% | **100%** |

## 3. Proposta inicial

O presente projeto tem como objetivo o desenvolvimento de um sistema web inteligente de monitorização ambiental, capaz de recolher dados em tempo real através de sensores instalados em zonas críticas e emitir alertas automáticos às autoridades competentes sempre que forem detetadas situações de risco. A plataforma pretende atuar principalmente na prevenção e suavização de três tipos de ameaças ambientais: cheias e inundações, incêndios florestais e níveis anormais de radiação.
Atualmente, fenómenos naturais extremos e incidentes ambientais representam riscos significativos para populações, infraestruturas, ecossistemas e atividades económicas. Muitas vezes, a resposta das autoridades é condicionada pela ausência de sistemas de monitorização contínua, pela demora na comunicação de alertas ou pela falta de ferramentas de previsão da evolução do risco. Assim, torna-se essencial desenvolver uma solução integrada que permita não apenas detetar situações perigosas, mas também antecipar a sua progressão e apoiar a tomada de decisão.

O sistema proposto baseia-se na utilização de sensores distribuídos geograficamente, instalados em pontos estratégicos como barragens, rios, serras, áreas florestais e zonas consideradas críticas. Estes sensores enviarão dados em tempo real para um servidor central, onde serão analisados através de um conjunto de regras previamente definidas. Sempre que determinados limites forem ultrapassados, ou quando forem detetadas variações anormais nos valores medidos, será automaticamente criado um incidente e emitido um alerta às entidades responsáveis.

No que diz respeito à monitorização de cheias, serão utilizados sensores de nível de água e, opcionalmente, sensores de caudal e precipitação. O sistema não se limitará a verificar se um determinado valor ultrapassa um limite fixo, mas analisará também a taxa de subida do nível da água. Um aumento rápido num curto espaço de tempo poderá indicar um risco iminente, mesmo antes de ser atingido o nível máximo de segurança. Desta forma, os alertas poderão ser classificados por níveis de severidade (por exemplo: verde, amarelo, laranja e vermelho), permitindo uma resposta proporcional à gravidade da situação.

Relativamente à deteção de incêndios florestais, o sistema recorrerá a sensores de CO₂, sensores de fumo e sensores de temperatura, podendo também integrar dados meteorológicos como velocidade e direção do vento. A deteção será baseada na combinação de múltiplos parâmetros, reduzindo assim a probabilidade de falsos positivos. Por exemplo, um aumento de temperatura isolado poderá não ser suficiente para gerar um alerta, mas a combinação de temperatura elevada, aumento de CO₂ e presença de vento forte poderá indicar um risco real de ignição ou propagação.
Além da deteção, o sistema incluirá um módulo simples de previsão da propagação do incêndio. Essa previsão terá como base fatores como a velocidade e direção do vento, a inclinação do terreno e a distância até pontos críticos previamente definidos (por exemplo, aldeias ou infraestruturas sensíveis). Através de um cálculo simplificado da velocidade estimada de propagação, será possível determinar o tempo aproximado que o incêndio poderá demorar a atingir determinadas áreas, fornecendo assim uma ferramenta adicional de apoio à decisão.

No que se refere à monitorização de radiação, serão utilizados sensores capazes de medir a dose de radiação ambiente. O sistema gerará alertas sempre que os valores ultrapassarem níveis considerados seguros ou quando for detetado um aumento súbito anormal. Tal funcionalidade poderá ser particularmente relevante em zonas industriais, próximas de instalações específicas ou em situações de emergência ambiental.

A plataforma web disponibilizará um painel de controlo com mapa interativo, onde todos os sensores serão representados visualmente, com indicação do seu estado atual através de um sistema de cores. Os utilizadores autorizados poderão consultar incidentes ativos, visualizar o histórico de leituras, analisar gráficos de evolução e acompanhar em tempo real a progressão de cada evento. O sistema incluirá ainda um módulo de gestão de alertas, permitindo configurar destinatários e meios de comunicação, como email, SMS ou integração com sistemas municipais.
Em termos de arquitetura, o sistema será composto por quatro componentes principais: os sensores instalados em campo, o servidor backend responsável por receber e processar os dados, a base de dados para armazenamento histórico e a interface web para visualização e gestão. O fluxo de funcionamento será estruturado da seguinte forma: o sensor envia a leitura, o servidor valida e analisa os dados, aplica as regras de decisão, cria um incidente caso necessário e envia automaticamente os alertas definidos.

Entre os principais benefícios do projeto destacam-se a redução do tempo de resposta a emergências, o apoio à tomada de decisão por parte das autoridades, a prevenção de danos materiais e humanos e a possibilidade de monitorização contínua, 24 horas por dia. Além disso, o sistema será concebido de forma modular e escalável, permitindo no futuro a integração de novos tipos de sensores ou funcionalidades adicionais.

---

## 4. Objetivos e probelmas a resolver


---

## 5. Público-alvo


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
Project Charter: EcoMonitor PT
Sistema de Monitorização Ambiental e Alerta Precoce

Enquadramento das Unidades Curriculares:
Programação Web: Esta UC é o motor técnico do EcoMonitor PT. Permite implementar funcionalidades dinâmicas (JS) e a lógica de servidor (PHP) necessária para processar as leituras dos sensores em tempo real e gerir a base de dados MySQL.

Estatística: Crucial para o rigor dos alertas. Através desta UC, o sistema analisa séries temporais de dados, identifica outliers (leituras falsas dos sensores) e calcula médias de poluição ou precipitação para gerar previsões de risco fiáveis

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

