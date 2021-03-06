<?php
global $routers;
$routers = array();

$routers['/perfil/minha-conta'] = '/perfil/minha_conta';
$routers['/perfil/minha-conta/'] = '/perfil/minha_conta/';

// Sobre
$routers['/sobre/atos-normativos'] = '/sobre/atos_normativos';
$routers['/sobre/atos-normativos/'] = '/sobre/atos_normativos/';

// Serviços Externos
// -- Operações
$routers['/servicos-externos/operacoes'] = '/servicosExternos/operacoes';
$routers['/servicos-externos/operacoes/'] = '/servicosExternos/operacoes/';
// -- Atendimento de Ocorrências
$routers['/servicos-externos/atendimento-de-ocorrencias'] = '/servicosExternos/atendimento_de_ocorrencias';
$routers['/servicos-externos/atendimento-de-ocorrencias/'] = '/servicosExternos/atendimento_de_ocorrencias/';
// -- Conquistas
$routers['/servicos-externos/conquistas'] = '/servicosExternos/conquistas';
$routers['/servicos-externos/conquistas/'] = '/servicosExternos/conquistas/';

// Departamentos
// -- Educação e Civismo
$routers['/departamentos/educacao-e-civismo'] = '/unidades/instrucao';
$routers['/departamentos/educacao-e-civismo/'] = '/departamentos/educacao_e_civismo/';
// -- Logística e RH
$routers['/departamentos/logistica-e-rh'] = '/departamentos/logistica_e_rh';
$routers['/departamentos/logistica-e-rh/'] = '/departamentos/logistica_e_rh/';

$routers['/justificativa-de-ausencia'] = '/perfil/justificativa_de_ausencia';
$routers['/justificativa-de-ausencia/'] = '/perfil/justificativa_de_ausencia/';

$routers['/ouvidoria'] = '/home/ouvidoria';
$routers['/ouvidoria/'] = '/home/ouvidoria/';


// Apostilas
// -- Treinamento Estagiários
$routers['/apostilas/treinamento-de-estagiarios'] = '/apostilas/treinamento_de_estagiarios';
$routers['/apostilas/treinamento-de-estagiarios/'] = '/apostilas/treinamento_de_estagiarios/';
// -- Treinamento Agentes
$routers['/apostilas/treinamento-de-agentes'] = '/apostilas/treinamento_de_agentes';
$routers['/apostilas/treinamento-de-agentes/'] = '/apostilas/treinamento_de_agentes/';
// -- Treinamento Agentes Especiais
$routers['/apostilas/treinamento-de-agentes-especiais'] = '/apostilas/treinamento_de_agentes_especiais';
$routers['/apostilas/treinamento-de-agentes-especiais/'] = '/apostilas/treinamento_de_agentes_especiais/';
// -- Treinamento Agentes Seniores
$routers['/apostilas/treinamento-de-agentes-seniores'] = '/apostilas/treinamento_de_agentes_seniores';
$routers['/apostilas/treinamento-de-agentes-seniores/'] = '/apostilas/treinamento_de_agentes_seniores/';
// -- Como ser promovido?
$routers['/apostilas/como-ser-promovido'] = '/apostilas/como_ser_promovido';
$routers['/apostilas/como-ser-promovido/'] = '/apostilas/como_ser_promovido/';
// -- Como ser promovido?
$routers['/apostilas/como-ser-um-bom-funcionario'] = '/apostilas/como_ser_um_bom_funcionario';
$routers['/apostilas/como-ser-um-bom-funcionario/'] = '/apostilas/como_ser_um_bom_funcionario/';
// -- Pele e Cabelo
$routers['/apostilas/pele-e-cabelo'] = '/apostilas/pele_e_cabelo';
$routers['/apostilas/pele-e-cabelo/'] = '/apostilas/pele_e_cabelo/';
// -- Áreas da Sede
$routers['/apostilas/areas-da-sede'] = '/apostilas/areas_da_sede';
$routers['/apostilas/areas-da-sede/'] = '/apostilas/areas_da_sede/';
// -- Habbo Etiqueta
$routers['/apostilas/hb-etiqueta'] = '/apostilas/hb_etiqueta';
$routers['/apostilas/hb-etiqueta/'] = '/apostilas/hb_etiqueta/';
// -- Requisitos da Sede
$routers['/apostilas/requisitos-da-sede'] = '/apostilas/requisitos_da_sede';
$routers['/apostilas/requisitos-da-sede/'] = '/apostilas/requisitos_da_sede/';
// -- Combate de fraudes ideologicas
$routers['/apostilas/combate-de-fraudes-ideologicas'] = '/apostilas/combate_de_fraudes_ideologicas';
$routers['/apostilas/combate-de-fraudes-ideologicas/'] = '/apostilas/combate_de_fraudes_ideologicas/';
// -- Instruções Ética e Conduta
$routers['/apostilas/instrucoes-etica-conduta'] = '/apostilas/instrucoes_etica_conduta';
$routers['/apostilas/instrucoes-etica-conduta/'] = '/apostilas/instrucoes_etica_conduta/';

// Armas
// -- Artilharia
$routers['/armas/artilharia'] = '/financeiro/artilharia';
$routers['/armas/artilharia/'] = '/financeiro/artilharia/';
// -- Cavalaria
$routers['/armas/cavalaria'] = '/financeiro/cavalaria';
$routers['/armas/cavalaria/'] = '/financeiro/cavalaria/';
// -- Salários
$routers['/armas/infantaria'] = '/financeiro/infantaria';
$routers['/armas/infantaria/'] = '/financeiro/infantaria/';
// -- Melhores da Semana
$routers['/melhores-da-semana'] = '/home/melhores_da_semana';
$routers['/melhores-da-semana/'] = '/home/melhores_da_semana/';


// Perfil
// -- Perfil
$routers['/profile/{nickname}'] = '/perfil/ver/:nickname';
$routers['/profile/{nickname}/'] = '/perfil/ver/:nickname/';
// -- Configurações do Fórum
$routers['/perfil/configuracoes-forum'] = '/perfil/configuracoes_forum';
$routers['/perfil/configuracoes-forum/'] = '/perfil/configuracoes_forum/';
// -- Configurações do Perfil
$routers['/perfil/configuracoes-perfil'] = '/perfil/configuracoes_perfil';
$routers['/perfil/configuracoes-perfil/'] = '/perfil/configuracoes_perfil/';
// -- Confirmar Conta
$routers['/perfil/confirmar-conta'] = '/perfil/confirmar_conta';
$routers['/perfil/confirmar-conta/'] = '/perfil/confirmar_conta/';
// -- Alterar Nome
$routers['/perfil/alterar-nome'] = '/perfil/alterar_nome';
$routers['/perfil/alterar-nome/'] = '/perfil/alterar_nome/';
// -- Alterar E-mail
$routers['/perfil/alterar-email'] = '/perfil/alterar_email';
$routers['/perfil/alterar-email/'] = '/perfil/alterar_email/';
// -- Alterar Senha
$routers['/perfil/alterar-senha'] = '/perfil/alterar_senha';
$routers['/perfil/alterar-senha/'] = '/perfil/alterar_senha/';
// -- Alterar Avatar
$routers['/perfil/alterar-avatar'] = '/perfil/alterar_avatar';
$routers['/perfil/alterar-avatar/'] = '/perfil/alterar_avatar/';
// -- Meus Tópicos
$routers['/perfil/meus-topicos'] = '/perfil/meus_topicos';
$routers['/perfil/meus-topicos/'] = '/perfil/meus_topicos/';
// -- Editar Descrição
$routers['/perfil/editar-descricao'] = '/perfil/editar_descricao';
$routers['/perfil/editar-descricao/'] = '/perfil/editar_descricao/';
// -- Gerar Moedas
$routers['/perfil/gerar-moedas'] = '/perfil/gerar_moedas';
$routers['/perfil/gerar-moedas/'] = '/perfil/gerar_moedas/';
// -- Alterar foto
$routers['/perfil/alterar-foto'] = '/perfil/alterar_foto';
$routers['/perfil/alterar-foto/'] = '/perfil/alterar_foto/';
// -- Alterar amigos
$routers['/perfil/alterar-amigos'] = '/perfil/alterar_amigos';
$routers['/perfil/alterar-amigos/'] = '/perfil/alterar_amigos/';
// -- Remover mensagens
$routers['/perfil/remover-mensagens'] = '/perfil/remover_mensagens';
$routers['/perfil/remover-mensagens/'] = '/perfil/remover_mensagens/';
// -- Alterar nascimento
$routers['/perfil/alterar-nascimento'] = '/perfil/alterar_nascimento';
$routers['/perfil/alterar-nascimento/'] = '/perfil/alterar_nascimento/';

// Fórum
// -- Criar Tópico
$routers['/forum/criar-topico'] = '/forum/criar_topico';
$routers['/forum/criar-topico/'] = '/forum/criar_topico/';

// Notícias
// -- Faça parte
$routers['/noticias/faca-parte'] = '/noticias/faca_parte';
$routers['/noticias/faca-parte/'] = '/noticias/faca_parte/';

$routers['/justificativa-de-ausencia'] = '/perfil/justificativa_de_ausencia';
$routers['/justificativa-de-ausencia/'] = '/perfil/justificativa_de_ausencia/';
